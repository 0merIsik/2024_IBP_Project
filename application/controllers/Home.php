<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
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

        //$sliderCount = $this->default_model->count("sliders");
        //$viewData->sliderCount = $sliderCount;

        $news_limit = $this->default_model->limit("news", 3, array("Status" => 1), "ID DESC");
        $viewData->news_limit = $news_limit;

        $settings = $this->default_model->get("settings", array("ID" => 1));
        $viewData->settings = $settings;

        $about_us = $this->default_model->get("about_us", array("ID" => 1));
        $viewData->about_us = $about_us;

        $intro = $this->default_model->get("intro", array("ID" => 1));
        $viewData->intro = $intro;

        $banner = $this->default_model->get("banner", array("ID" => 1));
        $viewData->banner = $banner;

        $albums = $this->default_model->get_all("albums", array("Status" => 1), "Rank ASC");
        $viewData->albums = $albums;

        $album_images = $this->default_model->get_all("album_images", array(), "ID DESC");
        $viewData->album_images = $album_images;

        $arrayAlbumImages = array();

        foreach ($album_images as $val) {
            if (!isset($arrayAlbumImages[$val->album_ID])) {
                $arrayAlbumImages[$val->album_ID] = array();
            }
            if (count($arrayAlbumImages[$val->album_ID]) < 3) {
                $arrayAlbumImages[$val->album_ID][] = $val;
            }
        }
        $viewData->yemekler = $arrayAlbumImages;

        $socialmedia = $this->default_model->get_all("socialmedia", array("Status" => 1), "Rank ASC");
        $viewData->socialmedia = $socialmedia;

        $sliders = $this->default_model->get_all("sliders", array("Status" => 1), "Rank ASC");
        $viewData->sliders = $sliders;

        $services = $this->default_model->get_all("services", array("Status" => 1), "Rank ASC");
        $viewData->services = $services;

        $teams = $this->default_model->get_all("teams", array("Status" => 1), "Rank ASC");
        $viewData->teams = $teams;

        $news = $this->default_model->get_all("news", array("Status" => 1), "Rank ASC");
        $viewData->news = $news;

        $client_comments = $this->default_model->get_all("client_comments", array("Status" => 1), "Rank ASC");
        $viewData->client_comments = $client_comments;

        $counter = $this->default_model->get_all("counter", array("Status" => 1), "Rank ASC");
        $viewData->counter = $counter;

        $projects = $this->default_model->get_all("projects", array("Status" => 1), "Rank ASC");
        $viewData->projects = $projects;

        $pages = $this->default_model->get_all("pages", array("Status" => 1), "Rank ASC");
        $viewData->pages = $pages;

        $viewData->url = "home";
        $viewData->title = $settings->Title;
        $this->load->view('home', $viewData);
    }

    public function page($ID)
    {
        $viewData = new stdClass();

        $settings = $this->default_model->get("settings", array("ID" => 1));
        $viewData->settings = $settings;

        $about_us = $this->default_model->get("about_us", array("ID" => 1));
        $viewData->about_us = $about_us;

        $banner = $this->default_model->get("banner", array("ID" => 1));
        $viewData->banner = $banner;

        $intro = $this->default_model->get("intro", array("ID" => 1));
        $viewData->intro = $intro;

        $albums = $this->default_model->get_all("albums", array("Status" => 1), "Rank ASC");
        $viewData->albums = $albums;

        $socialmedia = $this->default_model->get_all("socialmedia", array("Status" => 1), "Rank ASC");
        $viewData->socialmedia = $socialmedia;

        $projects = $this->default_model->get_all("projects", array("Status" => 1), "Rank ASC");
        $viewData->projects = $projects;

        $pages = $this->default_model->get_all("pages", array("Status" => 1), "Rank ASC");
        $viewData->pages = $pages;

        $page = $this->default_model->get("pages", array("Status" => 1, "ID" => $ID));
        $viewData->page = $page;

        $viewData->url = "page-detail";
        $viewData->title = $settings->Title;
        $this->load->view('page-detail', $viewData);
    }

}
