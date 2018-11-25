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
        $this->db->select('*');
        $this->db->from('pet');
        $query = $this->db->get();
        $data['records'] = $query->result();
    }

    /**
     * Get list of ages
     */
    public function getAgeList()
    {

    }

    /**
     * get list of sex
     */
    public function getSexList()
    {

    }

    /**
     * Get list of sizes
     */
    public function getSizeList()
    {

    }
}