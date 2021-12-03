<?php
class Artikel extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model("ArtikelModel", "artikel");
    }

    public function index()
    {
        $data = [
            "page" => "pages/artikel.php",
            "artikel" => $this->artikel->getAll()
        ];
        $this->load->view("template", $data);
    }

    public function crud()
    {
        $data = [
            "page" => "pages/artikel-crud.php",
            "artikel" => $this->artikel->getAll()
        ];
        $this->load->view("template", $data);
    }

    public function save()
    {
        if (empty($this->input->post("id"))) {
            $config['upload_path']          = './artikel/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config["file_name"] = time();
            

            $this->load->library('upload', $config);

            if ($this->upload->do_upload("image")) {
                $filename = $this->upload->data("file_name");
                $data = [
                    "id" => $this->input->post("id"),
                    "judul" => $this->input->post("judul"),
                    "teks" => $this->input->post("teks"),
                    "tgl" => date("Y-m-d"),
                    "image" => $filename,
                ];
                $this->artikel->insert($data);    
            }
            else{
                echo $this->upload->display_errors();
            }
            
        } else {
            $data = [
                "judul" => $this->input->post("judul"),
                "teks" => $this->input->post("teks"),
                "tgl" => date("Y-m-d"),
            ];
            $id = $this->input->post("id");
            
            if (empty($_FILES["image"]["name"])) {
                $this->artikel->update($data, $id);
            } else {
                $current = $this->artikel->getOne($id);
                $oldFile = $current->image;
                $path = FCPATH."/artikel/".$oldFile;
                echo $path;
                if (file_exists($path)) {
                    @unlink($path);
                }

                $config['upload_path']          = './artikel/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config["file_name"] = time();
                

                $this->load->library('upload', $config);
                if ($this->upload->do_upload("image")) {
                    $filename = $this->upload->data("file_name");
                    $data["image"] = $filename;
                    $this->artikel->update($data, $id);
                } else {
                    echo $this->upload->display_errors();
                }
                
            }            
        }
        redirect(site_url("artikel/crud"));
    }

    public function delete($id)
    {
        $current = $this->artikel->getOne($id);
        $oldFile = $current->image;
        $path = FCPATH."/artikel/".$oldFile;
        if (file_exists($path)) {
            @unlink($path);
        }
        $this->artikel->delete($id);
        redirect(site_url("artikel/crud"));
    }
}

?>