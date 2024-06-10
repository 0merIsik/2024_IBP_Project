<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Counter extends CI_Controller {

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
        $counter = $this->default_model->get_all("counter", array(), "Rank ASC");
        $viewData->counter = $counter;
        $viewData->url = "counter";
        $viewData->title = $settings->Title;
        $this->load->view('counter', $viewData);
    }

	public function insert()
	{

		$Title = $this->input->post("Title");
		$Icon = $this->input->post("Icon");
        $Count = $this->input->post("Count");

		if (!$Title || !$Icon || !$Count)
		{

			$alert = array(
				'title' => "Dikkat Et!",
				'subtitle' => "Lütfen boş alan bırakmayınız!",
				'type' => "warning"
			);

			$this->session->set_flashdata("alert", $alert);
			redirect(base_url("counter"));

		}
		else 
		{
			$insert = $this->default_model->insert("counter",
				array(
					"Title" => $Title,
					"Icon" => $Icon,
					"Count" => $Count,
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
			redirect(base_url("counter"));

		}

	}

	public function update($ID)
	{

		$Title = $this->input->post("Title");
		$Icon = $this->input->post("Icon");
		$Count = $this->input->post("Count");

		if (!$Title || !$Icon || !$Count)
		{

			$alert = array(
				'title' => "Dikkat Et!",
				'subtitle' => "Lütfen boş alan bırakmayınız!",
				'type' => "warning"
			);

			$this->session->set_flashdata("alert", $alert);
			redirect(base_url("counter"));

		}
		else 
		{
			$update = $this->default_model->update("counter",
				array(
					"ID" => $ID
				),
				array(
					"Title" => $Title,
					"Icon" => $Icon,
					"Count" => $Count
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
			redirect(base_url("counter"));

		}

	}

	public function delete($ID)
	{

		$delete = $this->default_model->delete("counter",
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
		redirect(base_url("counter"));

	}

	public function isactivesetter($ID) 
	{
		if($ID)
		{
			$isActive = ($this->input->post("data") === "true") ? 1 : 0;
			$this->default_model->update("counter",
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
			$this->default_model->update("counter",
			array(
				"ID" =>$ID
			),
			array(
				"Rank" => $rank
			));
		}
	}

}
