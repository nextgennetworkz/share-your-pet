<?php
/**
 * Created by IntelliJ IDEA.
 * User: Nishen Peiris
 * Date: 11/28/18
 * Time: 7:33 AM
 */

class Pets_and_owners_listing_controller extends CI_Controller
{
    /**
     * Load add listing view for 'Pets and Owners'
     */
    function addView()
    {
        $this->load->model('Pet_Model');

        // Get the list of pets
        $data['pets'] = $this->Pet_Model->getAll();

        // Get the list of pet sex
        $data['sexes'] = $this->Pet_Model->getSexes();

        // Get the list of pet sizes
        $data['sizes'] = $this->Pet_Model->getSizes();

        // Get the list of pet ages
        $data['ages'] = $this->Pet_Model->getAges();

        $this->load->view('listing/pets_and_owners/Listing_add', $data);
    }

    /**
     * Add listing
     */
    function add()
    {

    }
}