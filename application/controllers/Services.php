<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Services extends CI_Controller
{

    // Aşağıda ne kadar method olursa olsun buranın içinde olanları onların içine de yükle.
    public function __construct()
    {

        parent::__construct();
        $this->load->model("default_model");

    }

    public function index()
    {
        $viewData = new stdClass();

        $settings = $this->default_model->get("settings", array("ID" => 1));
        $viewData->settings = $settings;

        $socialmedia = $this->default_model->get_all("socialmedia", array("Status" => 1), "Rank ASC");
        $viewData->socialmedia = $socialmedia;

        $services = $this->default_model->get_all("services", array("Status" => 1), "Rank ASC");
        $viewData->services = $services;

        $projects = $this->default_model->get_all("projects", array("Status" => 1), "Rank ASC");
        $viewData->projects = $projects;

        $pages = $this->default_model->get_all("pages", array("Status" => 1), "Rank ASC");
        $viewData->pages = $pages;

        $counter = $this->default_model->get_all("counter", array("Status" => 1), "Rank ASC");
        $viewData->counter = $counter;

        $brands = $this->default_model->get_all("brands", array("Status" => 1), "Rank ASC");
        $viewData->brands = $brands;

        $viewData->url = "services";
        $viewData->title = $settings->Title;
        $this->load->view('services', $viewData);
    }

}
