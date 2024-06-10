<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
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

        $admin = $this->default_model->get("admin", array(
            "ID" => 1
        ));

        $viewData->admin = $admin;
        $viewData->url = "";
        $viewData->title = $settings->Title;
        $this->load->view('profil', $viewData);
    }

    public function updateprofilimage($ID)
    {

        if (!empty($_FILES["Image"]["name"])) {

            $image_data = $this->default_model->get("admin",
                array(
                    "ID" => $ID
                ));
            unlink("uploads/admin/" . $image_data->Image);

            // Dosyanın yüklenecek olan yolunu belirttik
            $config["upload_path"] = "uploads/admin/";

            // Yüklenmesine izin verdiğimiz uzantılar
            $config["allowed_types"] = "gif|jpg|png|jpeg|svg";

            // Dosyanın ismini değiştirme
            $config["file_name"] = uniqid();

            // Upload kütüphanesi yükledik
            $this->load->library("upload", $config);

            // Resim yükleme işlemini burada gerçekleştirdik
            $upload = $this->upload->do_upload("Image");

            if ($upload) {

                // Dosyanın sadece uzantısını almak için kullanılır.
                //$uploaded_filename = $this->upload->data("file_type");

                // Yüklediğimiz dosyanın ismini ve uzantısını alıyoruz. (Image Manipulation Class)
                $uploaded_filename = $this->upload->data("file_name");

                // Yeni kütüphanenin ayarlarını yapıyoruz.
                $config["image_library"] = "gd2";

                // Ayarları ile oynayacağı fotoğrafın yolunu gösterdik.
                $config["source_image"] = "uploads/admin/" . $uploaded_filename;

                // Thumbnail oluştursun mu
                $config["create_thumb"] = FALSE;

                // Oranları korusun mu
                $config["maintain_ratio"] = TRUE;

                // Resmin kalitesi
                $config["quality"] = "100%";

                $config["width"] = 500;
                $config["height"] = 500;

                $this->load->library("image_lib", $config);

                $this->image_lib->resize();

                $update = $this->default_model->update("admin",
                    array(
                        "ID" => $ID
                    ),
                    array(
                        "Image" => $uploaded_filename
                    ));

                if ($update) {
                    $alert = array(
                        'title' => "Tebrikler!",
                        'subtitle' => "Güncelleme işlemi başarıyla gerçekleşti!",
                        'type' => "success"
                    );
                } else {
                    $alert = array(
                        'title' => "Hata!",
                        'subtitle' => "Güncelleme işlemi başarısız oldu!",
                        'type' => "error"
                    );
                }

                $this->session->set_flashdata("alert", $alert);
                redirect(base_url("profil"));

            } else {
                $alert = array(
                    'title' => "Hata!",
                    'subtitle' => "Fotoğraf yüklenirken bir hata oluştu!",
                    'type' => "error"
                );

                $this->session->set_flashdata("alert", $alert);
                redirect(base_url("profil"));
            }


        } else {
            $alert = array(
                'title' => "Dikkat!",
                'subtitle' => "Lütfen fotoğraf yükleme alanı boş bırakılamaz!",
                'type' => "warning"
            );

            $this->session->set_flashdata("alert", $alert);
            redirect(base_url("profil"));

        }

    }

    public function updateprofilinfo($ID)
    {
        $Name = $this->input->post("Name");
        $Email = $this->input->post("Email");

        if (!$Name || !$Email) {
            $alert = array(
                'title' => "Dikkat Et!",
                'subtitle' => "Lütfen boş alan bırakmayınız!",
                'type' => "warning"
            );

            $this->session->set_flashdata("alert", $alert);
            redirect(base_url("profil"));
        } else {
            $update = $this->default_model->update("admin",
                array(
                    "ID" => $ID
                ),
                array(
                    "Name" => $Name,
                    "Email" => $Email
                ));

            if ($update) {
                $alert = array(
                    'title' => "Tebrikler!",
                    'subtitle' => "Güncelleme işlemi başarıyla gerçekleşti!",
                    'type' => "success"
                );
            } else {
                $alert = array(
                    'title' => "Hata!",
                    'subtitle' => "Güncelleme işlemi başarısız oldu!",
                    'type' => "error"
                );
            }

            $this->session->set_flashdata("alert", $alert);
            redirect(base_url("profil"));
        }
    }

    public function updateprofilpassword($ID)
    {
        $yenisifre1 = $this->input->post("yenisifre1");
        $yenisifre2 = $this->input->post("yenisifre2");

        // Form validation kütüphanesini yükledik
        $this->load->library("form_validation");

        // Gelen namelerimize kurallar belirliyoruz.
        //$this->form_validation->set_rules("name", "label ismi", "trim|required|min_length[5]|max_length[12]");
        $this->form_validation->set_rules("yenisifre1", "Yeni Şifre", "trim|required|matches[yenisifre2]|min_length[5]|max_length[12]");
        $this->form_validation->set_rules("yenisifre2", "Yeni Şifre (Tekrar)", "trim|required|matches[yenisifre1]|min_length[5]|max_length[12]");

        // Yukarıda belirlediğimiz namelerde hata çıktığında ne mesaj gösterilsin.
        $this->form_validation->set_message(
            array(
                "required" => "<b>{field}</b> alanı doldurulmalıdır.",
                "matches" => "Şifreler birbirleriyle uyuşmuyor!",
                "min_length" => "<b>{field}</b> <b>{param}</b> karakterden küçük olamaz!",
                "max_length" => "<b>{field}</b> <b>{param}</b> karakterden büyük olamaz!",
            ));

        $validate = $this->form_validation->run();

        if ($validate) {
            $update = $this->default_model->update("admin",
                array("ID" => $ID),
                array(
                    "Password" => md5($yenisifre1),
                ));

            if ($update) {
                $alert = array(
                    'title' => "Tebrikler!",
                    'subtitle' => "Güncelleme işlemi başarıyla gerçekleşti!",
                    'type' => "success"
                );
            } else {
                $alert = array(
                    'title' => "Hata!",
                    'subtitle' => "Güncelleme işlemi başarısız oldu!",
                    'type' => "error"
                );
            }

            $this->session->set_flashdata("alert", $alert);
            redirect(base_url("profil"));

        } else {
            $viewData = new stdClass();

            $admin = $this->default_model->get("admin",
                array(
                    "ID" => 1,
                ));

            $viewData->admin = $admin;
            $viewData->url = "";
            $viewData->form_error = true;
            $this->load->view('profil', $viewData);

        }
    }

}
