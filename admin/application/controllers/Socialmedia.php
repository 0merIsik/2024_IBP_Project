<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Socialmedia extends CI_Controller {

	// Aşağıda ne kadar method olursa olsun buranın içinde olanları onların içine de yükle.
	public function __construct()
	{

		parent::__construct();
		$this->load->model("default_model");

	}

	public function account_insert()
	{

		$Title = $this->input->post("Title");
		$Icon = $this->input->post("Icon");
		$Link = $this->input->post("Link");

		if (!$Title || !$Icon || !$Link) 
		{

			$alert = array(
				'title' => "Dikkat Et!",
				'subtitle' => "Lütfen boş alan bırakmayınız!",
				'type' => "warning"
			);

			$this->session->set_flashdata("alert", $alert);
			redirect(base_url("settings"));

		}
		else 
		{
			$insert = $this->default_model->insert("socialmedia",
				array(
					"Title" => $Title,
					"Icon" => $Icon,
					"Link" => $Link,
					"Status" => 1,
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
			redirect(base_url("settings"));

		}

	}

	public function account_update($ID)
	{

		$Title = $this->input->post("Title");
		$Icon = $this->input->post("Icon");
		$Link = $this->input->post("Link");

		if (!$Title || !$Icon || !$Link) 
		{

			$alert = array(
				'title' => "Dikkat Et!",
				'subtitle' => "Lütfen boş alan bırakmayınız!",
				'type' => "warning"
			);

			$this->session->set_flashdata("alert", $alert);
			redirect(base_url("settings"));

		}
		else 
		{
			$update = $this->default_model->update("socialmedia",
				array(
					"ID" => $ID
				),
				array(
					"Title" => $Title,
					"Icon" => $Icon,
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
			redirect(base_url("settings"));

		}

	}

	public function account_delete($ID)
	{

		$delete = $this->default_model->delete("socialmedia",
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
		redirect(base_url("settings"));

	}

	public function isactivesetter($ID) 
	{
		if($ID)
		{
			$isActive = ($this->input->post("data") === "true") ? 1 : 0;
			$this->default_model->update("socialmedia", 
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
			$this->default_model->update("socialmedia",
			array(
				"ID" =>$ID
			),
			array(
				"Rank" => $rank
			));
		}
	}

}
