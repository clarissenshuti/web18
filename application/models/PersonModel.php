<?php
/**
 * Created by PhpStorm.
 * User: Clarisse
 * Date: 12-Mar-18
 * Time: 3:58 PM
 */
class PersonModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function insert($data)
    {
        if ($this->db->insert("persons", $data)) {
            return true;
        }
    }

    public function delete($PersonID)
    {
        if ($this->db->delete("persons", "PersonID = " . $PersonID)) {
            return true;
        }
    }

    public function update($data, $old_PersonID)
    {
        $this->db->set($data);
        $this->db->where("PersonID", $old_PersonID);
        $this->db->update("persons", $data);
    }
}