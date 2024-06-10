<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Albums extends CI_Controller
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

        $projects = $this->default_model->get_all("projects", array("Status" => 1), "Rank ASC");
        $viewData->projects = $projects;

        $pages = $this->default_model->get_all("pages", array("Status" => 1), "Rank ASC");
        $viewData->pages = $pages;

        $albums = $this->default_model->get_all("albums", array("Status" => 1), "Rank ASC");
        $viewData->albums = $albums;

        $viewData->url = "albums";
        $viewData->title = $settings->Title;
        $this->load->view('albums', $viewData);
    }

    public function detail($ID)
    {
        $viewData = new stdClass();

        $settings = $this->default_model->get("settings", array("ID" => 1));
        $viewData->settings = $settings;

        $socialmedia = $this->default_model->get_all("socialmedia", array("Status" => 1), "Rank ASC");
        $viewData->socialmedia = $socialmedia;

        $projects = $this->default_model->get_all("projects", array("Status" => 1), "Rank ASC");
        $viewData->projects = $projects;

        $pages = $this->default_model->get_all("pages", array("Status" => 1), "Rank ASC");
        $viewData->pages = $pages;

        $album = $this->default_model->get("albums", array("Status" => 1, "ID" => $ID));
        $viewData->album = $album;

        $album_images = $this->default_model->get_all("album_images", array("Status" => 1, "album_ID" => $ID), "Rank ASC");
        $viewData->album_images = $album_images;

        $viewData->url = "album-detail";
        $viewData->title = $settings->Title;
        $this->load->view('album-detail', $viewData);
    }

}
