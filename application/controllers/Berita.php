<?php
class Berita extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model("BeritaModel", "berita");
    }

    public function index()
    {
        $data = [
            "page" => "pages/berita.php",
            "berita" => $this->berita->getAll()
        ];
        $this->load->view("template", $data);
    }

    public function crud()
    {
        $data = [
            "page" => "pages/berita-crud.php",
            "berita" => $this->berita->getAll()
        ];
        $this->load->view("template", $data);
    }

    public function save()
    {
        if (empty($this->input->post("id"))) {
            $config['upload_path']          = './berita/';
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
                $this->berita->insert($data);    
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
                $this->berita->update($data, $id);
            } else {
                $current = $this->berita->getOne($id);
                $oldFile = $current->image;
                $path = FCPATH."/berita/".$oldFile;
                echo $path;
                if (file_exists($path)) {
                    @unlink($path);
                }

                $config['upload_path']          = './berita/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config["file_name"] = time();
                

                $this->load->library('upload', $config);
                if ($this->upload->do_upload("image")) {
                    $filename = $this->upload->data("file_name");
                    $data["image"] = $filename;
                    $this->berita->update($data, $id);
                } else {
                    echo $this->upload->display_errors();
                }
                
            }            
        }
        redirect(site_url("berita/crud"));
    }

    public function delete($id)
    {
        $current = $this->berita->getOne($id);
        $oldFile = $current->image;
        $path = FCPATH."/berita/".$oldFile;
        if (file_exists($path)) {
            @unlink($path);
        }
        $this->berita->delete($id);
        redirect(site_url("berita/crud"));
    }
}

?>