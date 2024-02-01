<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Model_konsumen extends CI_Model
{
    public function get_konsumen_data()
    {
        $this->db->from('rb_konsumen')->where(['status_driver' => null])->order_by('id_konsumen', 'desc');
        return $this->db->get()->result_array();
    }
}
                        
/* End of file Model_konsumen.php */
