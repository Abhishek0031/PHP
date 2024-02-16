$(document).ready(function(){
    $('#goBack').click(function(){
        $('#chooseType').show(300);
        $('#criteria-addons').hide(300,'swing');
        $('#showFooter').hide(300,'swing');
        $('#criteria-domains').hide(300,'swing');
        $('#step1').addClass('active-step');
        $('#step2').removeClass('active-step');
    })
    $('#Continue').click(function(){
        serializedData = $("#frmUpdate").serialize()
var dataArray = decodeURIComponent(serializedData).split('&').map(function(item) {
    return item.split('=');
});

var serializedObject = {};
$.each(dataArray, function(index, item) {
    var key = decodeURIComponent(item[0]);
    var value = decodeURIComponent(item[1]);
    if (serializedObject[key]) {
        if (Array.isArray(serializedObject[key])) {
            serializedObject[key].push(value);
        } else {
            serializedObject[key] = [serializedObject[key], value];
        }
    } else {
        serializedObject[key] = value;
    }
});


//start from their on continue btn 
checkTableName = $('#Continue').attr('tableName');
$.extend(serializedObject, { "tablename" : checkTableName });

    console.log(serializedObject);
    $('#step-3').show();

if(checkTableName == 'tblproducts'){
    // console.log('p');
    var step3Html;

    for (var key in serializedObject) {
        if (serializedObject.hasOwnProperty(key)) {
            if(serializedObject['addonids[]'] == undefined){
                serializedObject['addonids[]']='none';
            }
            step3Html = `<h2>Criteria</h2>
            <p>Product Names<br>
                <strong>` + serializedObject['addonids[]'] +`<br>
                    Statuses: <strong>` +serializedObject['addonstatus[]'] +`</strong><br></p>
                    <p>Currency: <strong>` + serializedObject['addoncurrid'] +`</strong></p>`;
            // console.log(key + ": " + serializedObject[key]);
        }
        $('#bulkpricingupdater-review').html(step3Html);
    }
} else if(checkTableName == 'tbladdons'){
    var step3Html;
    for (var key in serializedObject) {
    console.log(serializedObject['addonids[]']);

        if (serializedObject.hasOwnProperty(key)) {
            if(serializedObject['addonids[]'] == undefined){
                serializedObject['addonids[]']='none';
            }
            step3Html = `<h2>Criteria</h2>
            <p>Addon Names<br>
                <strong>` + serializedObject['addonids[]'] +`<br>
                    Statuses: <strong>` +serializedObject['addonstatus[]'] +`</strong><br></p>
                    <p>Currency: <strong>` + serializedObject['addoncurrid'] +`</strong></p>`;
            console.log(key + ": " + serializedObject[key]);
        }
        $('#bulkpricingupdater-review').html(step3Html);
    }
} else if(checkTableName == 'tbldomainpricing'){

    var step3Html;
    for (var key in serializedObject) {
    console.log(serializedObject['addonids[]']);

        if (serializedObject.hasOwnProperty(key)) {
            if(serializedObject['addonids[]'] == undefined){
                serializedObject['addonids[]']='none';
            }
            step3Html = `<h2>Criteria</h2>
            <p>Domain TLDs<br><strong>`
            + serializedObject['domaintlds[]'] +
                `</strong><strong>Addons: ` + serializedObject['domainaddons[]'] +`<br>
                    Statuses: <strong>` +serializedObject['domainstatus[]'] +`</strong><br></p>
                    <strong>Registration Period: ` +serializedObject['regperiod'] +`</strong><br/>
                    Currency: <strong>` + serializedObject['domaincurrid'] +`</strong>`;
            console.log(key + ": " + serializedObject[key]);
        }
        $('#bulkpricingupdater-review').html(step3Html);
    }
    console.log('d');
    
}
console.log(checkTableName);
console.log(serializedObject);
    })
    $.ajax({
        url: '../modules/addons/exchange_currency/lib/ajaxFunction.php',
        method: 'POST',
        data: {
            ajaxMethdos: 'GetCurrency' 
        },
        dataType: 'json',
        success: function(response) {
            // console.log(response[0]['code']);
            var bodyHtml = '';

            for (x in response){
                bodyHtml = bodyHtml + '<option value='+ response[x]["id"] + ">" + response[x]['code'] + "</option>";
            }
            $('#addoncurrid').append(bodyHtml);
            $('#domaincurrid').append(bodyHtml);

        }
    });
});