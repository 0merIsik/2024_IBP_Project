<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Subscribers extends CI_Controller
{

    // Aşağıda ne kadar method olursa olsun buranın içinde olanları onların içine de yükle.
    public function __construct()
    {

        parent::__construct();
        $this->load->model("default_model");

    }

    public function insert()
    {
        $Email = $this->input->post("Email", true);
        if (!$Email) {
            $alert = array(
                'title' => "Dikkat Et!",
                'subtitle' => "Lütfen boş alan bırakmayınız!",
                'type' => "warning"
            );

            $this->session->set_flashdata("alert", $alert);
            redirect(base_url("home"));
        } else {
            $insert = $this->default_model->insert("subscribers", array(
                "Icon" => "fa fa-user",
                "Email" => $Email,
                "Status" => 1,
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
                $this->email->from($smtp_data->User_Mail, "Yeni bir kişi abone oldu...");
                $this->email->to($smtp_data->Notification_Mail);
                $this->email->subject("Yeni bir abone kazandın.");
                $this->email->message("Sitenize yeni bir kişi abone oldu. Tebrikler!");
                $this->email->send();

                $alert = array(
                    'title' => "Tebrikler!",
                    'subtitle' => "Ekleme işlemi başarıyla gerçekleşti!",
                    'type' => "success"
                );
            } else {
                $alert = array(
                    'title' => "Hata!",
                    'subtitle' => "Ekleme işlemi başarısız oldu!",
                    'type' => "error"
                );
            }

            $this->session->set_flashdata("alert", $alert);
            redirect(base_url("home"));

        }
    }

}
