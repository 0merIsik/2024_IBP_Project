<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
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
        $viewData->url = "login";
        $viewData->title = $settings->Title;
        $this->load->view('login', $viewData);
    }

    public function loginControl()
    {
        $Email = $this->input->post("Email");
        $Password = $this->input->post("Password");

        if (!$Email || !$Password) {
            $alert = array(
                'title' => "Dikkat Et!",
                'subtitle' => "Lütfen boş alan bırakmayınız!",
                'type' => "warning"
            );

            $this->session->set_flashdata("alert", $alert);
            redirect(base_url("login"));
        } else {
            $admins = $this->default_model->get("admin",
                array(
                    "Email" => $Email,
                    "Password" => md5($Password),
                ));

            if ($admins) {
                // Başarılı ve session oluştur
                $alert = array(
                    'title' => "Tebrikler!",
                    'subtitle' => "<b>" . ucfirst($admins->Name) . "</b> Yönetim Paneline Hoşgeldiniz!",
                    'type' => "success"
                );

                $this->session->set_userdata("admins", $admins);
                $this->session->set_flashdata("alert", $alert);
                redirect(base_url("home"));
            } else {
                // Alert gönder
                $alert = array(
                    'title' => "Hata!",
                    'subtitle' => "Email veya şifrenizi yanlış girdiniz. Tekrar deneyiniz!",
                    'type' => "error"
                );

                $this->session->set_flashdata("alert", $alert);
                redirect(base_url("login"));
            }
        }
    }

    public function logout()
    {
        $admins = $this->session->userdata("admins");
        $this->session->unset_userdata($admins);
        redirect(base_url("login"));
    }

}
