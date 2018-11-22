<?php
/**
 * Created by IntelliJ IDEA.
 * User: Nishen Peiris
 * Date: 11/15/18
 * Time: 9:46 PM
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/share-your-pet/application/libraries/vendor/autoload.php';

use PHPAuth\Auth as PHPAuth;
use PHPAuth\Config as PHPAuthConfig;

class User_Model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    /**
     * Register user
     *
     * @param $first_name
     * @param $last_name
     * @param $email
     * @param $password
     * @param $repeat_password
     * @param $biography
     */
    public function register($first_name, $last_name, $email, $password, $repeat_password, $biography)
    {
        log_message('info', '[User_Model] Entered register(); ' . $first_name . ', ' . $last_name . ', ' . $email . ', ' . $password . ', ' . $repeat_password . ', ' . $biography);

        $params = array("firstName" => $first_name, "lastName" => $last_name, "biography" => $biography);

        $dbh = new PDO("mysql:host=localhost;dbname=share_your_pet", "root", "root");
        $config = new PHPAuthConfig($dbh);
        $auth = new PHPAuth($dbh, $config);
        $result = $auth->register($email, $password, $repeat_password, $params, null, true);

        log_message('info', '[User_Model] Exited register(); ' . print_r($result));
    }

    public function update($data, $old_roll_no)
    {

    }

    /**
     * Activate account
     *
     * @param $activation_token
     */
    public function activate($activation_token)
    {
        log_message('info', '[User_Model] Entered activate(); ' . $activation_token);

        $dbh = new PDO("mysql:host=localhost;dbname=share_your_pet", "root", "root");
        $config = new PHPAuthConfig($dbh);
        $auth = new PHPAuth($dbh, $config);
        $result = $auth->activate($activation_token);

        log_message('info', '[User_Model] Exited activate(); ' . print_r($result));
    }

    /**
     * Resend activation code
     *
     * @param $email
     */
    public function resendActivation($email)
    {
        log_message('info', '[User_Model] Entered resendActivation(); ' . $email);

        $dbh = new PDO("mysql:host=localhost;dbname=share_your_pet", "root", "root");
        $config = new PHPAuthConfig($dbh);
        $auth = new PHPAuth($dbh, $config);
        $result = $auth->resendActivation($email, true);

        log_message('info', '[User_Model] Exited resendActivation(); ' . print_r($result));
    }

    /**
     * Login user
     *
     * @param $email
     * @param $password
     * @param $remember_me
     */
    public function login($email, $password, $remember_me)
    {
        log_message('info', '[User_Model] Entered login(); ' . $email . ', ' . $password . ', ' . $remember_me);

        $dbh = new PDO("mysql:host=localhost;dbname=share_your_pet", "root", "root");
        $config = new PHPAuthConfig($dbh);
        $auth = new PHPAuth($dbh, $config);
        $result = $auth->login($email, $password, $remember_me, null);

        log_message('info', '[User_Model] Exited login(); ' . print_r($result));
    }

    /**
     * Logout user
     */
    public function logout()
    {
        log_message('info', '[User_Model] Entered logout()');

        $dbh = new PDO("mysql:host=localhost;dbname=share_your_pet", "root", "root");
        $config = new PHPAuthConfig($dbh);
        $auth = new PHPAuth($dbh, $config);
        $result = $auth->logout($auth->getCurrentSessionHash());

        log_message('info', '[User_Model] Exited logout(); ' . print_r($result));
    }

    /**
     * Send password reset link
     *
     * @param $email
     */
    public function requestReset($email)
    {
        log_message('info', '[User_Model] Entered requestReset(); ' . $email);

        $dbh = new PDO("mysql:host=localhost;dbname=share_your_pet", "root", "root");
        $config = new PHPAuthConfig($dbh);
        $auth = new PHPAuth($dbh, $config);
        $result = $auth->requestReset($email, true);

        log_message('info', '[User_Model] Exited requestPasswordReset(); ' . print_r($result));
    }

    /**
     * Reset password
     *
     * @param $key
     * @param $password
     * @param $repeat_password
     */
    public function resetPass($key, $password, $repeat_password)
    {
        log_message('info', '[User_Model] Entered resetPass(); ' . $key . ', ' . $password . ', ' . $repeat_password);

        $dbh = new PDO("mysql:host=localhost;dbname=share_your_pet", "root", "root");
        $config = new PHPAuthConfig($dbh);
        $auth = new PHPAuth($dbh, $config);
        $result = $auth->resetPass($key, $password, $repeat_password, null);

        log_message('info', '[User_Model] Exited resetPass(); ' . print_r($result));
    }
}