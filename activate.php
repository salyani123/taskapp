<?php
require_once 'Globals/userdb.php';

if (isset($_GET['code'], $_GET['name'], $_GET['email'])) {
    $code = $_GET['code'];
    $name = $_GET['name'];
    $email = $_GET['email'];
    $ObjUserDB = new userdb();
    $ObjUserDB->activateUser($conf, $name, $email, $code);
    echo "Account activated successfully.";
} else {
    echo "Invalid activation code.";
}