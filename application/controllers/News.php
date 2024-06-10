<?php
defined('BASEPATH') or exit('No direct script access allowed');

class News extends CI_Controller
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

        $news = $this->default_model->get_all("news", array("Status" => 1), "Rank ASC");
        $viewData->news = $news;

        $viewData->url = "news";
        $viewData->title = $settings->Title;
        $this->load->view('news', $viewData);
    }

    public function detail($ID)
    {
        $viewData = new stdClass();

        $news_limit = $this->default_model->limit("news", 3, array("Status" => 1), "ID DESC");
        $viewData->news_limit = $news_limit;

        $about_us = $this->default_model->get("about_us", array("ID" => 1));
        $viewData->about_us = $about_us;

        $banner = $this->default_model->get("banner", array("ID" => 1));
        $viewData->banner = $banner;

        $intro = $this->default_model->get("intro", array("ID" => 1));
        $viewData->intro = $intro;

        $albums = $this->default_model->get_all("albums", array("Status" => 1), "Rank ASC");
        $viewData->albums = $albums;

        $settings = $this->default_model->get("settings", array("ID" => 1));
        $viewData->settings = $settings;

        $socialmedia = $this->default_model->get_all("socialmedia", array("Status" => 1), "Rank ASC");
        $viewData->socialmedia = $socialmedia;

        $projects = $this->default_model->get_all("projects", array("Status" => 1), "Rank ASC");
        $viewData->projects = $projects;

        $pages = $this->default_model->get_all("pages", array("Status" => 1), "Rank ASC");
        $viewData->pages = $pages;

        $news = $this->default_model->get("news", array("Status" => 1, "ID" => $ID));
        $viewData->news = $news;

        $neews = $this->default_model->get_all("news", array("Status" => 1), "Rank ASC");
        $viewData->neews = $neews;

        $viewData->url = "news-detail";
        $viewData->title = $settings->Title;
        $this->load->view('news-detail', $viewData);
    }

}
