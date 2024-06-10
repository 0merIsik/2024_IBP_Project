<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
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

        $albums = $this->default_model->get_all("albums", array("Status" => 1), "Rank ASC");
        $viewData->albums = $albums;

        $socialmedia = $this->default_model->get_all("socialmedia", array("Status" => 1), "Rank ASC");
        $viewData->socialmedia = $socialmedia;

        $about_us = $this->default_model->get("about_us", array("ID" => 1));
        $viewData->about_us = $about_us;

        $intro = $this->default_model->get("intro", array("ID" => 1));
        $viewData->intro = $intro;

        $banner = $this->default_model->get("banner", array("ID" => 1));
        $viewData->banner = $banner;

        $projects = $this->default_model->get_all("projects", array("Status" => 1), "Rank ASC");
        $viewData->projects = $projects;

        $pages = $this->default_model->get_all("pages", array("Status" => 1), "Rank ASC");
        $viewData->pages = $pages;

        $viewData->url = "contact";
        $viewData->title = $settings->Title;
        $this->load->view('contact', $viewData);
    }

    public function insert()
    {
        $Name = $this->input->post("Name", true);
        $Email = $this->input->post("Email", true);
        $Subject = $this->input->post("Subject", true);
        $Phone = $this->input->post("Phone", true);
        $Content = $this->input->post("Content", true);
        if (!$Name || !$Email || !$Subject || !$Phone || !$Content) {
            $alert = array(
                'title' => "Dikkat Et!",
                'subtitle' => "Lütfen boş alan bırakmayınız!",
                'type' => "warning"
            );

            $this->session->set_flashdata("alert", $alert);
            redirect(base_url("contact"));
        } else {
            $insert = $this->default_model->insert("messages", array(
                "Name" => $Name,
                "Email" => $Email,
                "Subject" => $Subject,
                "Phone" => $Phone,
                "Content" => $Content,
                "Reply_Status" => 0,
                "Rank" => 0,
                "Create_Date" => date("Y-m-d H:i:s")
            ));

            if ($insert) {

                $smtp_data = $this->default_model->get("settings", array("ID" => 1));

                $config = array(
                    "protocol" => "smtp",
                    "smtp_host" => "$smtp_data->Host",
                    "smtp_port" => $smtp_data->Port,
                    "smtp_user" => "$smtp_data->User_Mail",
                    "smtp_pass" => "$smtp_data->User_Password",
                    "mailtype" => "html",
                    "charset" => "utf-8",
                    "wordwrap" => true,
                    "newline" => "\r\n"
                );

                $this->load->library('email', $config);
                $this->email->initialize($config);
                $this->email->from($smtp_data->User_Mail, "Bir kişi size mesaj gönderdi...");
                $this->email->to($smtp_data->Notification_Mail);
                $this->email->subject("Yeni bir mesajın var.");
                $this->email->message("Size yeni bir mesaj geldi. Merak ediyor musunuz!");
                $this->email->send();

                $alert = array(
                    'title' => "Tebrikler!",
                    'subtitle' => "Mesaj gönderme işlemi başarıyla gerçekleşti!",
                    'type' => "success"
                );
            } else {
                $alert = array(
                    'title' => "Hata!",
                    'subtitle' => "Mesaj gönderme işlemi başarısız oldu!",
                    'type' => "error"
                );
            }

            $this->session->set_flashdata("alert", $alert);
            redirect(base_url("contact"));

        }
    }

}
