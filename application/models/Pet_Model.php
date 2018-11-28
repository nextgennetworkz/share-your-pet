<?php
/**
 * Created by PhpStorm.
 * User: Nishen Peiris
 * Date: 11/25/18
 * Time: 10:42
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/share-your-pet/application/libraries/vendor/autoload.php';

class Pet_Model extends CI_Model
{
    /**
     * Get all pets
     */
    public function getAll()
    {
        log_message('info', '[Pet_Model] Entered getAll()');

        $this->db->select('id, name, display_name');
        $this->db->from('pet');
        $query = $this->db->get();
        $pets = $query->result();

        log_message('info', '[Pet_Model] Exited getAll(); ' . print_r($pets));
        return $pets;
    }

    /**
     * Get list of ages
     */
    public function getAges()
    {
        log_message('info', '[Pet_Model] Entered getAges()');

        $this->db->select('id, age');
        $this->db->from('pet_age');
        $query = $this->db->get();
        $ages = $query->result();

        log_message('info', '[Pet_Model] Exited getAges(); ' . print_r($ages));
        return $ages;
    }

    /**
     * get list of sexes
     */
    public function getSexes()
    {
        log_message('info', '[Pet_Model] Entered getSexes()');

        $this->db->select('id, sex');
        $this->db->from('pet_sex');
        $query = $this->db->get();
        $sexes = $query->result();

        log_message('info', '[Pet_Model] Exited getSexes(); ' . print_r($sexes));
        return $sexes;
    }

    /**
     * Get list of sizes
     */
    public function getSizes()
    {
        log_message('info', '[Pet_Model] Entered getSizes()');

        $this->db->select('id, size');
        $this->db->from('pet_size');
        $query = $this->db->get();
        $sizes = $query->result();

        log_message('info', '[Pet_Model] Exited getSizes(); ' . print_r($sizes));
        return $sizes;
    }
}