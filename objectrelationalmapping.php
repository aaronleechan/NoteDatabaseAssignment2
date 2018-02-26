<?php
/**
 * Created by PhpStorm.
 * User: aaron
 * Date: 2/25/18
 * Time: 3:12 AM
 */

// Log In Credentials for MySQL
require_once 'loginsql.php';

// Link with Database
$linkdb = mysqli_connect($hn,$un,$pw,$db);

