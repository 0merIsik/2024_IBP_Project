<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Vision extends CI_Controller
{

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

        $vision = $this->default_model->get("vision", array("ID" => 1));
        $viewData->vision = $vision;

        $projects = $this->default_model->get_all("projects", array("Status" => 1), "Rank ASC");
        $viewData->projects = $projects;

        $pages = $this->default_model->get_all("pages", array("Status" => 1), "Rank ASC");
        $viewData->pages = $pages;

        $viewData->url = "vision";
        $viewData->title = $settings->Title;
        $this->load->view('vision', $viewData);
    }

}
