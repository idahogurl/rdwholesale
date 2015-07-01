<?php
require APPPATH.'/libraries/REST_Controller.php';

/**
 * Created by PhpStorm.
 * User: rvest
 * Date: 6/21/2015
 * Time: 7:41 PM
 */
class Products extends REST_Controller
{
    /**
     * Products constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('products_model');
        $this->response->format = "json";
    }

    public function index_get() {

        $this->response($this->products_model->get_products($this->get("q")));

    }
}