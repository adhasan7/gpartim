<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Map extends CI_Controller
{

    public function index()
    {
        $data = null;
        $this->load->view('map/index', $data, FALSE);
    }
    public function auto()
    {
        $data = null;
        $this->load->view('map/auto', $data, FALSE);
    }
    function multiple_map()
    {
        $data = null;
        $this->load->view('map/multiple', $data, FALSE);
    }
    function drag_map()
    {
        $data = null;
        $this->load->view('map/drag_map', $data, FALSE);
    }
    function distance()
    {
        $data = null;
        $this->load->view('map/distance', $data, FALSE);
    }
    function inactive()
    {
        $data = null;
        $this->load->view('map/inactive', $data, FALSE);
    }

    function get_addres()
    {
        $data = null;
        $this->load->view('map/get_addres', $data, FALSE);
    }
}
        
    /* End of file  Map.php */
