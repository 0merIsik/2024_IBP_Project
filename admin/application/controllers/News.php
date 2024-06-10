<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

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
        $news = $this->default_model->get_all("news", array(), "Rank ASC");
        $viewData->news = $news;
		$viewData->url = "news";
        $viewData->title = $settings->Title;
		$this->load->view('news', $viewData);
	}

	public function insert()
	{

        $Content = $this->input->post("Content");
        $Title = $this->input->post("Title");
        $Seo_Tags = $this->input->post("Seo_Tags");

        if(!$Content || !$Title || !$Seo_Tags)
        {
            $alert = array(
				'title' => "Dikkat Et!",
				'subtitle' => "Lütfen boş alan bırakmayınız!",
				'type' => "warning"
			);

			$this->session->set_flashdata("alert", $alert);
			redirect(base_url("news"));
        }
        else 
        {

        if (!empty($_FILES["Image"]["name"])) 
		{

			// Dosyanın yüklenecek olan yolunu belirttik 
			$config["upload_path"] = "uploads/news/";

			// Yüklenmesine izin verdiğimiz uzantılar
			$config["allowed_types"] = "gif|jpg|png|jpeg|svg";

			// Dosyanın ismini değiştirme
			$config["file_name"] = uniqid();

			// Upload kütüphanesi yükledik
			$this->load->library("upload", $config);

			// Resim yükleme işlemini burada gerçekleştirdik
			$upload = $this->upload->do_upload("Image");

			if ($upload) 
			{
				
				// Dosyanın sadece uzantısını almak için kullanılır.
				//$uploaded_filename = $this->upload->data("file_type");

				// Yüklediğimiz dosyanın ismini ve uzantısını alıyoruz. (Image Manipulation Class)
				$uploaded_filename = $this->upload->data("file_name");

				// Yeni kütüphanenin ayarlarını yapıyoruz.
				$config["image_library"] = "gd2";

				// Ayarları ile oynayacağı fotoğrafın yolunu gösterdik. 
				$config["source_image"] = "uploads/news/".$uploaded_filename;

				// Thumbnail oluştursun mu
				$config["create_thumb"] = FALSE;

				// Oranları korusun mu
				$config["maintain_ratio"] = FALSE;

				// Resmin kalitesi
				$config["quality"] = "100%";

				$config["width"] = 800;
				$config["height"] = 450;

				$this->load->library("image_lib", $config);

				$this->image_lib->resize();

				$insert = $this->default_model->insert("news",
					array(
						"Content" => $Content,
                        "Title" => $Title,
                        "Seo_Tags" => $Seo_Tags,
                        "Image" => $uploaded_filename,
                        "Status" => 1,
                        "Rank" => 0,
                        "Create_Date" => date("Y-m-d H:i:s")
					));

				if ($insert) 
				{
					$alert = array( 
						'title' => "Tebrikler!",
						'subtitle' => "Ekleme işlemi başarıyla gerçekleşti!",
						'type' => "success"
					);
				}
				else 
				{
					$alert = array(
						'title' => "Hata!",
						'subtitle' => "Ekleme işlemi başarısız oldu!",
						'type' => "error"
					);
				}

				$this->session->set_flashdata("alert", $alert);
				redirect(base_url("news"));

			}
			else
			{
				$alert = array(
					'title' => "Hata!",
					'subtitle' => "Fotoğraf yüklenirken bir hata oluştu!",
					'type' => "error"
				);

				$this->session->set_flashdata("alert", $alert);
				redirect(base_url("news"));
			}
			
			
		}
		else
		{
			$alert = array(
				'title' => "Dikkat Et!",
				'subtitle' => "Fotoğraf alanı boş bırakılamaz!",
				'type' => "warning"
			);

			$this->session->set_flashdata("alert", $alert);
			redirect(base_url("news"));
		}
    }

	}

	public function update($ID)
	{

        $Content = $this->input->post("Content");
        $Title = $this->input->post("Title");
        $Seo_Tags = $this->input->post("Seo_Tags");

        if(!$Content || !$Title || !$Seo_Tags)
        {
            $alert = array(
				'title' => "Dikkat Et!",
				'subtitle' => "Lütfen boş alan bırakmayınız!",
				'type' => "warning"
			);

			$this->session->set_flashdata("alert", $alert);
			redirect(base_url("news"));
        }
        else 
        {

        if (!empty($_FILES["Image"]["name"])) 
		{

            $image_data = $this->default_model->get("news",
            array(
                "ID" => $ID
            ));
            unlink("uploads/news/".$image_data->Image);

			// Dosyanın yüklenecek olan yolunu belirttik 
			$config["upload_path"] = "uploads/news/";

			// Yüklenmesine izin verdiğimiz uzantılar
			$config["allowed_types"] = "gif|jpg|png|jpeg|svg";

			// Dosyanın ismini değiştirme
			$config["file_name"] = uniqid();

			// Upload kütüphanesi yükledik
			$this->load->library("upload", $config);

			// Resim yükleme işlemini burada gerçekleştirdik
			$upload = $this->upload->do_upload("Image");

			if ($upload) 
			{
				
				// Dosyanın sadece uzantısını almak için kullanılır.
				//$uploaded_filename = $this->upload->data("file_type");

				// Yüklediğimiz dosyanın ismini ve uzantısını alıyoruz. (Image Manipulation Class)
				$uploaded_filename = $this->upload->data("file_name");

				// Yeni kütüphanenin ayarlarını yapıyoruz.
				$config["image_library"] = "gd2";

				// Ayarları ile oynayacağı fotoğrafın yolunu gösterdik. 
				$config["source_image"] = "uploads/news/".$uploaded_filename;

				// Thumbnail oluştursun mu
				$config["create_thumb"] = FALSE;

				// Oranları korusun mu
				$config["maintain_ratio"] = FALSE;

				// Resmin kalitesi
				$config["quality"] = "100%";

				$config["width"] = 800;
				$config["height"] = 450;

				$this->load->library("image_lib", $config);

				$this->image_lib->resize();

				$update = $this->default_model->update("news",
                    array(
                        "ID" => $ID
                    ),
					array(
						"Content" => $Content,
                        "Title" => $Title,
                        "Seo_Tags" => $Seo_Tags,
                        "Image" => $uploaded_filename
					));

				if ($update) 
				{
					$alert = array( 
						'title' => "Tebrikler!",
						'subtitle' => "Güncelleme işlemi başarıyla gerçekleşti!",
						'type' => "success"
					);
				}
				else 
				{
					$alert = array(
						'title' => "Hata!",
						'subtitle' => "Güncelleme işlemi başarısız oldu!",
						'type' => "error"
					);
				}

				$this->session->set_flashdata("alert", $alert);
				redirect(base_url("news"));

			}
			else
			{
				$alert = array(
					'title' => "Hata!",
					'subtitle' => "Fotoğraf yüklenirken bir hata oluştu!",
					'type' => "error"
				);

				$this->session->set_flashdata("alert", $alert);
				redirect(base_url("news"));
			}
			
			
		}
		else
		{
			// Fotoğraf güncellenmezse
            $update = $this->default_model->update("news",
                    array(
                        "ID" => $ID
                    ),
					array(
                        "Content" => $Content,
                        "Title" => $Title,
                        "Seo_Tags" => $Seo_Tags
					));

				if ($update) 
				{
					$alert = array( 
						'title' => "Tebrikler!",
						'subtitle' => "Güncelleme işlemi başarıyla gerçekleşti!",
						'type' => "success"
					);
				}
				else 
				{
					$alert = array(
						'title' => "Hata!",
						'subtitle' => "Güncelleme işlemi başarısız oldu!",
						'type' => "error"
					);
				}

				$this->session->set_flashdata("alert", $alert);
				redirect(base_url("news"));

		}
    }

	}

	public function delete($ID)
	{

		$image_data = $this->default_model->get("news",
            array(
                "ID" => $ID
            ));
        unlink("uploads/news/".$image_data->Image);

		$delete = $this->default_model->delete("news",
			array(
				"ID" => $ID
			));

		if ($delete) {
			$alert = array(
				'title' => "Tebrikler!",
				'subtitle' => "Silme işlemi başarıyla gerçekleşti!",
				'type' => "success"
			);
		}
		else 
		{
			$alert = array(
				'title' => "Hata!",
				'subtitle' => "Silme işlemi başarısız oldu!",
				'type' => "error"
			);
		}

		$this->session->set_flashdata("alert", $alert);
		redirect(base_url("news"));

	}

	public function isactivesetter($ID) 
	{
		if($ID)
		{
			$isActive = ($this->input->post("data") === "true") ? 1 : 0;
			$this->default_model->update("news",
			array(
				"ID" => $ID
			), 
			array(
				"Status" => $isActive
			));
		}
	}

    public function ranksetter()
    {
        $data = $this->input->post("data");
        parse_str($data,$rank);
        $value = $rank["rank"];
        foreach($value as $rank => $ID)
        {
            $this->default_model->update("news",
                array(
                    "ID" =>$ID
                ),
                array(
                    "Rank" => $rank
                ));
        }
    }

}