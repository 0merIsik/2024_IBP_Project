<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teams extends CI_Controller {

	// Aşağıda ne kadar method olursa olsun buranın içinde olanları onların içine de yükle.
	public function __construct()
	{

		parent::__construct();
		$this->load->model("default_model");

	}

    public function index()
	{
		$viewData = new stdClass();
        $admin = $this->default_model->get("admin", array("ID" => 1));
        $viewData->admin = $admin;
        $settings = $this->default_model->get("settings", array("ID" => 1));
        $viewData->settings = $settings;
        $teams = $this->default_model->get_all("teams", array(), "Rank ASC");
        $viewData->teams = $teams;
		$viewData->url = "teams";
        $viewData->title = $settings->Title;
		$this->load->view('teams', $viewData);
	}

	public function insert()
	{

        $Name = $this->input->post("Name");
        $Degree = $this->input->post("Degree");

        if(!$Name || !$Degree)
        {
            $alert = array(
				'title' => "Dikkat Et!",
				'subtitle' => "Lütfen boş alan bırakmayınız!",
				'type' => "warning"
			);

			$this->session->set_flashdata("alert", $alert);
			redirect(base_url("teams"));
        }
        else 
        {

        if (!empty($_FILES["Image"]["name"])) 
		{

			// Dosyanın yüklenecek olan yolunu belirttik 
			$config["upload_path"] = "uploads/teams/";  

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
				$config["source_image"] = "uploads/teams/".$uploaded_filename;

				// Thumbnail oluştursun mu
				$config["create_thumb"] = FALSE;

				// Oranları korusun mu
				$config["maintain_ratio"] = TRUE;

				// Resmin kalitesi
				$config["quality"] = "100%";

				$config["width"] = 360;
				$config["height"] = 360;

				$this->load->library("image_lib", $config);

				$this->image_lib->resize();

				$insert = $this->default_model->insert("teams",
					array(
						"Name" => $Name,
                        "Degree" => $Degree,
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
				redirect(base_url("teams"));

			}
			else
			{
				$alert = array(
					'title' => "Hata!",
					'subtitle' => "Fotoğraf yüklenirken bir hata oluştu!",
					'type' => "error"
				);

				$this->session->set_flashdata("alert", $alert);
				redirect(base_url("teams"));
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
			redirect(base_url("teams"));
		}
    }

	}

	public function update($ID)
	{

        $Name = $this->input->post("Name");
        $Degree = $this->input->post("Degree");

        if(!$Name || !$Degree)
        {
            $alert = array(
				'title' => "Dikkat Et!",
				'subtitle' => "Lütfen boş alan bırakmayınız!",
				'type' => "warning"
			);

			$this->session->set_flashdata("alert", $alert);
			redirect(base_url("teams"));
        }
        else 
        {

        if (!empty($_FILES["Image"]["name"])) 
		{

            $image_data = $this->default_model->get("teams", 
            array(
                "ID" => $ID
            ));
            unlink("uploads/teams/".$image_data->Image);

			// Dosyanın yüklenecek olan yolunu belirttik 
			$config["upload_path"] = "uploads/teams/";  

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
				$config["source_image"] = "uploads/teams/".$uploaded_filename;

				// Thumbnail oluştursun mu
				$config["create_thumb"] = FALSE;

				// Oranları korusun mu
				$config["maintain_ratio"] = TRUE;

				// Resmin kalitesi
				$config["quality"] = "100%";

				$config["width"] = 360;
				$config["height"] = 360;

				$this->load->library("image_lib", $config);

				$this->image_lib->resize();

				$update = $this->default_model->update("teams",
                    array(
                        "ID" => $ID
                    ),
					array(
						"Name" => $Name,
                        "Degree" => $Degree,
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
				redirect(base_url("teams"));

			}
			else
			{
				$alert = array(
					'title' => "Hata!",
					'subtitle' => "Fotoğraf yüklenirken bir hata oluştu!",
					'type' => "error"
				);

				$this->session->set_flashdata("alert", $alert);
				redirect(base_url("teams"));
			}
			
			
		}
		else
		{
			// Fotoğraf güncellenmezse
            $update = $this->default_model->update("teams",
                    array(
                        "ID" => $ID
                    ),
					array(
						"Name" => $Name,
                        "Degree" => $Degree
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
				redirect(base_url("teams"));

		}
    }

	}

	public function delete($ID)
	{

		$image_data = $this->default_model->get("teams", 
            array(
                "ID" => $ID
            ));
        unlink("uploads/teams/".$image_data->Image);

		$delete = $this->default_model->delete("teams",
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
		redirect(base_url("teams"));

	}

	public function isactivesetter($ID) 
	{
		if($ID)
		{
			$isActive = ($this->input->post("data") === "true") ? 1 : 0;
			$this->default_model->update("teams", 
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
			$this->default_model->update("teams",
			array(
				"ID" =>$ID
			),
			array(
				"Rank" => $rank
			));
		}
	}

}