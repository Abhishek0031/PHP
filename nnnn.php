<?php

use WHMCS\Database\Capsule;

if (!defined("WHMCS")) {
    die("This file cannot be accessed directly");
}

add_hook('AdminAreaFooterOutput', 1, function($vars) {
    try {
        global $whmcs;
        if ($vars['filename'] == "clientsnotes") {
            $results = Capsule::table('tbladmins')
                ->select('id', 'firstname', 'lastname','email')
                ->get();

            foreach ($results as $result) {
                $options .= '<option value="' . $result->id . '">' . $result->firstname . ' ' . $result->lastname . '</option>';
            }
            if(!empty($whmcs->get_req_var('note'))){
                $id = (int)$whmcs->get_req_var('select');
                AdminUserMessage();
                $mergeArray = [
                    'message' => $whmcs->get_req_var('note')
                ];
            $result = sendAdminMessage("Admin User Message", $mergeArray, "", 0, [$id]);
            if($result == '1')
            {
                logActivity('Email Send Successfully!');
            }
            print_r($result);
            exit();
            }
            $html = "
                <style>
                #dropdownBtn {
                    margin-bottom: 4px;
                }
                </style>
                <script src=\"
                    https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.all.min.js
                    \"></script>
                    <link href=\"
                    https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.min.css
                    \" rel=\"stylesheet\"> 
                <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                    <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                </button>
                            <h5 class=\"modal-title\" id=\"exampleModalLabel\">Assign Notes To Admin User</h5>
                            </div>
                            <div class=\"modal-body\">
                                <form action=\"\" method=\"post\" id=\"myForm\">
                                    <select class=\"form-control\" name=\"adminValue\" id=\"selectData\">
                                        " . $options . "
                                    </select> 
                                </div>
                                <div class=\"modal-footer btn btn-info\">
                                    <input type=\"submit\" id=\"adminSubmit\" name=\"Send\">
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <script type=\"text/javascript\">
                    $(document).ready(function(){
                        console.log('hhh');
                        var btn = '<button type=\"button\" class=\"btn btn-primary\" id=\"dropdownBtn\" data-toggle=\"modal\" data-target=\"#exampleModal\">Admin User</button>';
                        $(\".text-center\").prepend(btn);
                        $(\"#adminSubmit\").click(function(e){
                            e.preventDefault();
                            noteData = $(\"#note\").val();
                            selectData = $(\"#selectData\").val();
                            obj = {select:selectData,
                                   note:noteData,
                            }
                            $.ajax({
                                url: '',
                                type: \"POST\",
                                data: {
                                        \"select\": selectData, 
                                        \"note\":noteData,
                                      },
                                success: function(response) {
                                    if(response != '1'){
                                        Swal.fire({   
                                            icon: \"error\",   
                                            title: \"Oops...\",   
                                            text: \"Something went wrong!\",   
                                            footer: '<a href=\"#\">Why do I have this issue?</a>'});
                                    } else{
                                        Swal.fire({   
                                            title: \"Good job!\",   
                                            text: \"You clicked the button!\",   
                                            icon: \"success\"});
                                    }
                                }     
                              })
                        });
                    });
                </script>";

            return $html;
        }
    } catch (\Exception $e) {
        logActivity("Error Support Hook" . $e->getMessage());
    }
});

function AdminUserMessage()
    {
        try {
            if (!Capsule::table('tblemailtemplates')->where('type', 'admin')->where('name', 'Admin User Message')->count()) {
                Capsule::table('tblemailtemplates')->insert([
                    'type' => 'admin',
                    'name' => 'Admin User Message',
                    'subject' => 'Welcome Email',
                    'message' => '<p>Hi,</p><p>{$message}</p>',
                    'custom' => 1
                ]);
            }
        } catch (\Exception $e) {
            logActivity("Error Welcome Email" . $e->getMessage());
        }
    }   