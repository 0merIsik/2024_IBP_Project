<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Videos extends CI_Controller {

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
        $videos = $this->default_model->get_all("videos", array(), "Rank ASC");
        $viewData->videos = $videos;
        $viewData->url = "videos";
        $viewData->title = $settings->Title;
        $this->load->view('videos', $viewData);
    }

	public function insert()
	{

		$Title = $this->input->post("Title");
        $Link = $this->input->post("Link");

		if (!$Title || !$Link)
		{

			$alert = array(
				'title' => "Dikkat Et!",
				'subtitle' => "Lütfen boş alan bırakmayınız!",
				'type' => "warning"
			);

			$this->session->set_flashdata("alert", $alert);
			redirect(base_url("videos"));

		}
		else 
		{
			$insert = $this->default_model->insert("videos",
				array(
					"Title" => $Title,
					"Link" => $Link,
					"Status" => 1,
                    "Rank" => 0,
					"Create_Date" => date("Y-m-d H:i:s")
				));

			if ($insert) {
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
			redirect(base_url("videos"));

		}

	}

	public function update($ID)
	{

		$Title = $this->input->post("Title");
		$Link = $this->input->post("Link");

		if (!$Title || !$Link)
		{

			$alert = array(
				'title' => "Dikkat Et!",
				'subtitle' => "Lütfen boş alan bırakmayınız!",
				'type' => "warning"
			);

			$this->session->set_flashdata("alert", $alert);
			redirect(base_url("videos"));

		}
		else 
		{
			$update = $this->default_model->update("videos",
				array(
					"ID" => $ID
				),
				array(
					"Title" => $Title,
					"Link" => $Link
				));

			if ($update) {
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
			redirect(base_url("videos"));

		}

	}

	public function delete($ID)
	{

		$delete = $this->default_model->delete("videos",
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
		redirect(base_url("videos"));

	}

	public function isactivesetter($ID) 
	{
		if($ID)
		{
			$isActive = ($this->input->post("data") === "true") ? 1 : 0;
			$this->default_model->update("videos",
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
			$this->default_model->update("videos",
			array(
				"ID" =>$ID
			),
			array(
				"Rank" => $rank
			));
		}
	}

}
