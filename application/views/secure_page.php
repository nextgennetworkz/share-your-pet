<?php
/**
 * Created by IntelliJ IDEA.
 * User: Nishen Peiris
 * Date: 11/20/18
 * Time: 21:25
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/share-your-pet/application/libraries/vendor/autoload.php';

use PHPAuth\Auth as PHPAuth;
use PHPAuth\Config as PHPAuthConfig;

$dbh = new PDO("mysql:host=localhost;dbname=share_your_pet", "root", "root");

$config = new PHPAuthConfig($dbh);
$auth = new PHPAuth($dbh, $config);

if (!$auth->isLogged()) {
    header('HTTP/1.0 403 Forbidden');
    echo "Forbidden";

    exit();
} else {
    echo "You're logged in.";
}
