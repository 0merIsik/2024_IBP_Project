<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    // Aşağıda ne kadar method olursa olsun buranın içinde olanları onların içine de yükle.
    public function __construct()
    {

        parent::__construct();
        $this->load->model("default_model");

        $admins = $this->session->userdata("admins");
        if (!$admins) {
            redirect(base_url("login"));
        }

    }

    public function index()
    {
        $viewData = new stdClass();

        //$sliderCount = $this->default_model->count("sliders");
        //$viewData->sliderCount = $sliderCount;

        $admin = $this->default_model->get("admin", array("ID" => $_SESSION['admins']->ID));
        $settings = $this->default_model->get("settings", array("ID" => 1));
        $viewData->admin = $admin;
        $viewData->settings = $settings;
        $viewData->url = "home";
        $viewData->title = $settings->Title;
        $this->load->view('home', $viewData);
    }
}
