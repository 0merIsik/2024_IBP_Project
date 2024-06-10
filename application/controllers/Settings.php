<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Settings extends CI_Controller
{

    // Aşağıda ne kadar method olursa olsun buranın içinde olanları onların içine de yükle.
    public function __construct()
    {

        parent::__construct();
        $this->load->model("default_model");

    }

    public function index()
    {

        // Verileri object array();
        $viewData = new stdClass();

        $admin = $this->default_model->get("admin", array("ID" => 1));
        $viewData->admin = $admin;

        $settings = $this->default_model->get("settings", array("ID" => 1));

        $socialmedia = $this->default_model->get_all("socialmedia", array(), "Rank ASC");

        $viewData->settings = $settings;
        $viewData->socialmedia = $socialmedia;
        $viewData->url = "settings";
        $viewData->title = $settings->Title;
        $this->load->view('settings', $viewData);

    }

    public function update_site_ayarlari($ID)
    {

        $Title = $this->input->post("title", true);
        $Description = $this->input->post("description");
        $Keywords = $this->input->post("keywords");
        $Author = $this->input->post("author");
        $Footer = $this->input->post("footer");

        if (!$Title || !$Description || !$Keywords || !$Author || !$Footer) {

            $alert = array(
                'title' => "Dikkat Et!",
                'subtitle' => "Lütfen boş alan bırakmayınız!",
                'type' => "warning"
            );

            $this->session->set_flashdata("alert", $alert);
            // $_SESSION['alert'] = $alert;
            redirect(base_url("settings"));

        } else {
            $update = $this->default_model->update("settings",
                array(
                    "ID" => $ID
                ),
                array(
                    "title" => $Title,
                    "description" => $Description,
                    "keywords" => $Keywords,
                    "author" => $Author,
                    "footer" => $Footer
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
            redirect(base_url("settings"));

        }

    }

    public function update_iletisim_ayarlari($ID)
    {

        $Phone = $this->input->post("phone");
        $Mail = $this->input->post("mail");
        $Adress = $this->input->post("adress");
        $Map = $this->input->post("map");

        if (!$Phone || !$Mail || !$Adress || !$Map) {

            $alert = array(
                'title' => "Dikkat Et!",
                'subtitle' => "Lütfen boş alan bırakmayınız!",
                'type' => "warning"
            );

            $this->session->set_flashdata("alert", $alert);
            redirect(base_url("settings"));

        } else {
            $update = $this->default_model->update("settings",
                array(
                    "ID" => $ID
                ),
                array(
                    "phone" => $Phone,
                    "mail" => $Mail,
                    "adress" => $Adress,
                    "map" => $Map
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
            redirect(base_url("settings"));

        }

    }

    public function update_smtp_ayarlari($ID)
    {

        $Host = $this->input->post("host");
        $User_Mail = $this->input->post("user_mail");
        $User_Password = $this->input->post("user_password");
        $Port = $this->input->post("port");
        $Notification_Mail = $this->input->post("notification_mail");

        if (!$Host || !$User_Mail || !$User_Password || !$Port || !$Notification_Mail) {

            $alert = array(
                'title' => "Dikkat Et!",
                'subtitle' => "Lütfen boş alan bırakmayınız!",
                'type' => "warning"
            );

            $this->session->set_flashdata("alert", $alert);
            redirect(base_url("settings"));

        } else {
            $update = $this->default_model->update("settings",
                array(
                    "ID" => $ID
                ),
                array(
                    "host" => $Host,
                    "user_mail" => $User_Mail,
                    "user_password" => $User_Password,
                    "port" => $Port,
                    "notification_mail" => $Notification_Mail
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
            redirect(base_url("settings"));

        }

    }

    public function update_logo_ayarlari($ID)
    {

        if (!empty($_FILES["logo"]["name"])) {
            $logo_data = $this->default_model->get("settings",
                array(
                    "ID" => $ID
                ));
            unlink("uploads/logofavicon/" . $logo_data->Logo);
            // die(); => Bunun görevi exit komutu ile aynı

            // Dosyanın yüklenecek olan yolunu belirttik
            $config["upload_path"] = "uploads/logofavicon/";

            // Yüklenmesine izin verdiğimiz uzantılar
            $config["allowed_types"] = "gif|jpg|png|jpeg|svg";

            // Dosyanın ismini değiştirme
            $config["file_name"] = uniqid();

            // Upload kütüphanesi yükledik
            $this->load->library("upload", $config);

            // Resim yükleme işlemini burada gerçekleştirdik
            $upload = $this->upload->do_upload("logo");

            if ($upload) {

                // Dosyanın sadece uzantısını almak için kullanılır.
                //$uploaded_filename = $this->upload->data("file_type");

                // Yüklediğimiz dosyanın ismini ve uzantısını alıyoruz. (Image Manipulation Class)
                $uploaded_filename = $this->upload->data("file_name");

                // Yeni kütüphanenin ayarlarını yapıyoruz.
                $config["image_library"] = "gd2";

                // Ayarları ile oynayacağı fotoğrafın yolunu gösterdik.
                $config["source_image"] = "uploads/logofavicon/" . $uploaded_filename;

                // Thumbnail oluştursun mu
                $config["create_thumb"] = FALSE;

                // Oranları korusun mu
                $config["maintain_ratio"] = FALSE;

                // Resmin kalitesi
                $config["quality"] = "100%";

                $config["width"] = 200;
                $config["height"] = 40;

                $this->load->library("image_lib", $config);

                $this->image_lib->resize();

                $update = $this->default_model->update("settings",
                    array(
                        "ID" => $ID
                    ),
                    array(
                        "logo" => $uploaded_filename
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
                redirect(base_url("settings"));

            } else {
                $alert = array(
                    'title' => "Hata!",
                    'subtitle' => "Fotoğraf yüklenirken bir hata oluştu!",
                    'type' => "error"
                );

                $this->session->set_flashdata("alert", $alert);
                redirect(base_url("settings"));
            }


        } else {
            $alert = array(
                'title' => "Dikkat Et!",
                'subtitle' => "Logo alanı boş bırakılamaz!",
                'type' => "warning"
            );

            $this->session->set_flashdata("alert", $alert);
            redirect(base_url("settings"));
        }

    }

    public function update_favicon_ayarlari($ID)
    {

        if (!empty($_FILES["favicon"]["name"])) {
            $logo_data = $this->default_model->get("settings",
                array(
                    "ID" => $ID
                ));
            unlink("uploads/logofavicon/" . $logo_data->Favicon);
            // die(); => Bunun görevi exit komutu ile aynı

            // Dosyanın yüklenecek olan yolunu belirttik
            $config["upload_path"] = "uploads/logofavicon/";

            // Yüklenmesine izin verdiğimiz uzantılar
            $config["allowed_types"] = "gif|jpg|png|jpeg|svg";

            // Dosyanın ismini değiştirme
            $config["file_name"] = uniqid();

            // Upload kütüphanesi yükledik
            $this->load->library("upload", $config);

            // Resim yükleme işlemini burada gerçekleştirdik
            $upload = $this->upload->do_upload("favicon");

            if ($upload) {

                // Dosyanın sadece uzantısını almak için kullanılır.
                //$uploaded_filename = $this->upload->data("file_type");

                // Yüklediğimiz dosyanın ismini ve uzantısını alıyoruz. (Image Manipulation Class)
                $uploaded_filename = $this->upload->data("file_name");

                // Yeni kütüphanenin ayarlarını yapıyoruz.
                $config["image_library"] = "gd2";

                // Ayarları ile oynayacağı fotoğrafın yolunu gösterdik.
                $config["source_image"] = "uploads/logofavicon/" . $uploaded_filename;

                // Thumbnail oluştursun mu
                $config["create_thumb"] = FALSE;

                // Oranları korusun mu
                $config["maintain_ratio"] = FALSE;

                // Resmin kalitesi
                $config["quality"] = "100%";

                $config["width"] = 100;
                $config["height"] = 100;

                $this->load->library("image_lib", $config);

                $this->image_lib->resize();

                $update = $this->default_model->update("settings",
                    array(
                        "ID" => $ID
                    ),
                    array(
                        "favicon" => $uploaded_filename
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
                redirect(base_url("settings"));

            } else {
                $alert = array(
                    'title' => "Hata!",
                    'subtitle' => "Fotoğraf yüklenirken bir hata oluştu!",
                    'type' => "error"
                );

                $this->session->set_flashdata("alert", $alert);
                redirect(base_url("settings"));
            }


        } else {
            $alert = array(
                'title' => "Dikkat Et!",
                'subtitle' => "Icon alanı boş bırakılamaz!",
                'type' => "warning"
            );

            $this->session->set_flashdata("alert", $alert);
            redirect(base_url("settings"));
        }

    }

}