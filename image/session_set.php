<?php
// session_set_cookie_params(120, '/', '.example.com', true, true);
// ini_set('session.save_path', '/custom/session/directory');
session_name('MySession');
session_start();
$_SESSION["name"]="abhishek";


?>