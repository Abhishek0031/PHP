<?php
session_start();

echo $_SESSION["name"];
echo "&nbsp";
echo $_SESSION["cst"];
echo "&nbsp";
echo $_SESSION["cst2"];
session_destroy();