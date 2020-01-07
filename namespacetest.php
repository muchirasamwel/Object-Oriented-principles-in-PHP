<?php
include('namespacedata.php');
//include ('new_namespace.php');

/*
 * Am declaring the namespaces that i need in my project
 */
use test\data;
use phones\ipPhone\ciscoPhone;

/*
 * You can see am able to reach out to clases defined in the namespace
 * and even call methods inside the classes.
 */
$phone=new data\phone("techno");
$phone->sayname();

$cisco1=new ciscoPhone("Cisco 411 ","127.0.23.23");

$cisco1->sayname();

$cisco1->test("198.23.45.56");