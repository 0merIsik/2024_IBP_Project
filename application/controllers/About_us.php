<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About_us extends CI_Controller
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

        $about_us = $this->default_model->get("about_us", array("ID" => 1));
        $viewData->about_us = $about_us;

        $banner = $this->default_model->get("banner", array("ID" => 1));
        $viewData->banner = $banner;

        $intro = $this->default_model->get("intro", array("ID" => 1));
        $viewData->intro = $intro;

        $albums = $this->default_model->get_all("albums", array("Status" => 1), "Rank ASC");
        $viewData->albums = $albums;

        $projects = $this->default_model->get_all("projects", array("Status" => 1), "Rank ASC");
        $viewData->projects = $projects;

        $counter = $this->default_model->get_all("counter", array("Status" => 1), "Rank ASC");
        $viewData->counter = $counter;

        $client_comments = $this->default_model->get_all("client_comments", array("Status" => 1), "Rank ASC");
        $viewData->client_comments = $client_comments;

        $pages = $this->default_model->get_all("pages", array("Status" => 1), "Rank ASC");
        $viewData->pages = $pages;

        $viewData->url = "about_us";
        $viewData->title = $settings->Title;
        $this->load->view('about_us', $viewData);
    }

}
