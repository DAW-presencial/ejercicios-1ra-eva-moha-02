<?php
// show error reporting
error_reporting(E_ALL);
// start php session
session_start();
// set your default time-zone
date_default_timezone_set('Europe/Madrid');
// home page url
global $home_url;
$home_url = "http://msalhibiade_login_system.randion.es/";
// page given in URL parameter, default page is one
$page = isset($_GET['page']) ? $_GET['page'] : 1;
// set number of records per page
$records_per_page = 5;
// calculate for the query LIMIT clause
$from_record_num = ($records_per_page * $page) - $records_per_page;
?>