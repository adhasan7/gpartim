<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Model_driver extends CI_Model
{

    public function __construct(Type $var = null)
    {
        $this->table = 'rb_konsumen';
    }
    public function login()
    {
    }
    public function find_data($table, $reference_field, $field)
    {
        $this->db->from($table);
        $this->db->where($reference_field, $field);
        return $this->db->get();
    }
    public function store_data_driver($object)
    {
        $this->db->insert($this->table, $object);
    }
    public function update_token_driver($token, $id_driver)
    {
        $this->db->where('id_konsumen', $id_driver);
        $this->db->update($this->table, ['jwt_token' => $token]);
    }
    function get_all_driver()
    {
        $this->db->where('driver', 1);
        $this->db->get('Table', limit, offset);
    }
}
                        
/* End of file ModelDriver.php */
