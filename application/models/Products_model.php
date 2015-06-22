<?php

/**
 * Created by PhpStorm.
 * User: rvest
 * Date: 6/21/2015
 * Time: 8:15 PM
 */
class Products_model extends CI_Model
{

    function __construct()
    {
        $this->load->database();
    }

    function get_products($name) {
       if(!empty($name)) {
           $this->db->like("name", $name);
       }
        $query = $this->db->get("products");
        return $query->result_array();
    }
}