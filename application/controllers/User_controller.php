<?php
/**
 * Created by IntelliJ IDEA.
 * User: Nishen Peiris
 * Date: 11/15/18
 * Time: 9:20 PM
 */

class User_controller extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    /**
     * Load user registration form
     */
    function registerView()
    {
        $this->load->view('user/User_register');
    }

    /**
     * Load edit user form
     */
    function editView()
    {
        $this->load->view('user/User_edit');
    }

    /**
     * Load activate user form
     */
    function activateView()
    {
        $this->load->view('user/User_activate');
    }

    /**
     * Load resend activation code view
     */
    function resendActivationView()
    {
        $this->load->view('user/User_resend_activation');
    }

    /**
     * Load login user form
     */
    function loginView()
    {
        $this->load->view('user/User_login');
    }

    /**
     * Load request reset password link form
     */
    function requestResetView()
    {
        $this->load->view('user/User_request_reset');
    }

    /**
     * Load password reset form
     */
    function resetPassView()
    {
        $this->load->view('user/User_reset_pass');
    }

    /**
     * Register user
     */
    function register()
    {
        $this->load->model('User_Model');

        $first_name = $this->input->post('first_name');
        $last_name = $this->input->post('last_name');
        $email = $this->input->post('email');
        $encrypted_password = md5($this->input->post('password'));
        $encrypted_repeat_password = md5($this->input->post('repeat_password'));
        $biography = $this->input->post('biography');

        $this->User_Model->register($first_name, $last_name, $email, $encrypted_password, $encrypted_repeat_password, $biography);
    }

    /**
     * Edit user
     */
    function edit_user()
    {

    }

    /**
     * Activate user
     */
    function activate()
    {
        $this->load->model('User_Model');

        $activation_token = $this->input->post('activation_token');

        $this->User_Model->activate($activation_token);
    }

    /**
     * Resend activation code
     */
    function resendActivation()
    {
        $this->load->model('User_Model');

        $email = $this->input->post('email');

        $this->User_Model->resendActivation($email);
    }

    /**
     * Login user
     */
    function login()
    {
        $this->load->model('User_Model');

        $email = $this->input->post('email');
        $encrypted_password = password_hash($this->input->post('password'), PASSWORD_BCRYPT);
        $remember_me = $this->input->post('remember_me');

        $this->User_Model->login($email, $encrypted_password, $remember_me);
    }

    /**
     * Logout user
     */
    function logout()
    {
        $this->load->model('User_Model');

        $this->User_Model->logout();
    }

    /**
     * Send password reset link
     */
    function requestReset()
    {
        $this->load->model('User_Model');

        $email = $this->input->post('email');

        $this->User_Model->requestReset($email);
    }

    /**
     * Reset password
     */
    function resetPassword()
    {
        $this->load->model('User_Model');

        $email = $this->input->post('key');
        $encrypted_password = md5($this->input->post('password'));
        $encrypted_repeat_password = md5($this->input->post('repeat_password'));

        $this->User_Model->resetPass($email, $encrypted_password, $encrypted_repeat_password);
    }

    /**
     * Test login functionality
     */
    function secure_page_view()
    {
        $this->load->view('secure_page');
    }
}