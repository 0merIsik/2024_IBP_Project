<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Messages extends CI_Controller
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
        $admin = $this->default_model->get("admin", array("ID" => 1));
        $viewData->admin = $admin;
        $settings = $this->default_model->get("settings", array("ID" => 1));
        $viewData->settings = $settings;
        $messages = $this->default_model->get_all("messages", array(), "Rank ASC");
        $viewData->messages = $messages;
        $viewData->url = "messages";
        $viewData->title = $settings->Title;
        $this->load->view('messages', $viewData);
    }

    public function reply($ID)
    {

        $Reply = $this->input->post("Reply");
        $Email = $this->input->post("Email");
        $Subject = $this->input->post("Subject");

        if (!$Reply) {

            $alert = array(
                'title' => "Dikkat Et!",
                'subtitle' => "Lütfen boş alan bırakmayınız!",
                'type' => "warning"
            );

            $this->session->set_flashdata("alert", $alert);
            redirect(base_url("messages"));

        } else {

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
            $this->email->from($smtp_data->User_Mail, "Osman Hesap Gönderdi...");
            $this->email->to($Email);
            $this->email->subject($Subject);
            $this->email->message($Reply);
            $send = $this->email->send();

            if ($send) {
                $alert = array(
                    'title' => "Tebrikler!",
                    'subtitle' => "Cevabınız başarıyla gönderildi!",
                    'type' => "success"
                );

                $this->default_model->update("messages",
                    array(
                        "ID" => $ID
                    ),
                    array(
                        "Reply_Status" => 1
                    ));

            } else {
                $alert = array(
                    'title' => "Hata!",
                    'subtitle' => "Cevabınız gönderilirken bir hata oluştu!",
                    'type' => "error"
                );
            }

            $this->session->set_flashdata("alert", $alert);
            redirect(base_url("messages"));

        }

    }

    public function delete($ID)
    {

        $delete = $this->default_model->delete("messages",
            array(
                "ID" => $ID
            ));

        if ($delete) {
            $alert = array(
                'title' => "Tebrikler!",
                'subtitle' => "Silme işlemi başarıyla gerçekleşti!",
                'type' => "success"
            );
        } else {
            $alert = array(
                'title' => "Hata!",
                'subtitle' => "Silme işlemi başarısız oldu!",
                'type' => "error"
            );
        }

        $this->session->set_flashdata("alert", $alert);
        redirect(base_url("messages"));

    }

    public function ranksetter()
    {
        $data = $this->input->post("data");
        parse_str($data, $rank);
        $value = $rank["rank"];
        foreach ($value as $rank => $ID) {
            $this->default_model->update("messages",
                array(
                    "ID" => $ID
                ),
                array(
                    "Rank" => $rank
                ));
        }
    }

}
