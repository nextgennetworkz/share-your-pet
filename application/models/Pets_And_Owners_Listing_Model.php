<?php
/**
 * Created by PhpStorm.
 * User: Nishen Peiris
 * Date: 11/25/18
 * Time: 12:23
 */

class Pets_And_Owners_Listing_Model extends CI_Model
{
    /**
     * Add a listing
     *
     * @param $user
     * @param $pet_id
     * @param $pet_name
     * @param $description
     * @param $location
     * @param $reason
     * @param $sex_id
     * @param $size_id
     * @param $age_id
     * @param $contact
     */
    public function add($user, $pet_id, $pet_name, $description, $location, $reason, $sex_id, $size_id, $age_id, $contact)
    {
        $data = array(
            'user_id' => $user,
            'pet_id' => $pet_id,
            'pet_name' => $pet_name,
            'description' => $description,
            'location' => $location,
            'reason' => $reason,
            'sex_id' => $sex_id,
            'size_id' => $size_id,
            'age_id' => $age_id,
            'contact' => $contact
        );

        $this->db->insert('pets_and_owners_listing', $data);
    }

    /**
     * Edit a given listing
     */
    public function edit()
    {

    }
}