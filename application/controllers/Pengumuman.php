<?php
class Pengumuman extends CI_Controller
{

    public function __construct() {
        parent::__construct();
        $this->load->model("PengumumanModel","pengumuman");
    }
    public function index()
    {
        $data = [
            "page" => "pages/pengumuman.php",
            "pengumuman" => $this->pengumuman->getAll()
        ];
        $this->load->view("template", $data);
    }

    public function crud()
    {
        $data = [
            "page" => "pages/pengumuman-crud.php",
            "pengumuman" => $this->pengumuman->getAll()
        ];
        $this->load->view("template", $data);
    }

    public function save()
    {
        if (empty($this->input->post("id"))) {
            $data = [
                "id" => $this->input->post("id"),
                "judul" => $this->input->post("judul"),
                "teks" => $this->input->post("teks"),
                "tgl" => $this->input->post("tgl"),
            ];
            $this->pengumuman->insert($data);
        } else {
            $data = [
                "judul" => $this->input->post("judul"),
                "teks" => $this->input->post("teks"),
                "tgl" => $this->input->post("tgl"),
            ];
            $id = $this->input->post("id");
            $this->pengumuman->update($data, $id);
        }
        redirect(site_url("pengumuman/crud"));
    }

    public function delete($id)
    {
        $this->pengumuman->delete($id);
        redirect(site_url("pengumuman/crud"));
    }
}

?>