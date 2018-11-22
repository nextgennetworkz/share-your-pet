<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require '/var/www/html/share-your-pet/application/libraries/vendor/autoload.php';

class Welcome extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *        http://example.com/index.php/welcome
     *    - or -
     *        http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $this->load->library('alert');

        log_message('error', 'Some variable did not contain a value.');

        $this->alert->set('alert-danger', 'Orang asing dilarang masuk!');

//        $params = array("firstName" => "Nishen", "lastName" => "Peiris", "biography" => "I'm a software engineer.");
//        $dbh = new PDO("mysql:host=localhost;dbname=share_your_pet", "root", "gvt123");
//
//        $config = new PHPAuthConfig($dbh);
//        $auth = new PHPAuth($dbh, $config);
//
//        $result = $auth->register("nishenkpeiris@gmail.com", "25d55ad283aa400af464c76d713c07ad", "25d55ad283aa400af464c76d713c07ad", $params, null, true);
//
//        print_r($result);
    }
}
