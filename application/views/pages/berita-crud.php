<div class="card mt-2">
    <div class="card-header bg-dark">
        <h4 class="text-white">Manage Berita</h4>
        <button data-toggle="modal" data-target="#modal-berita" onclick="Add()"
        class="btn btn-success btn-sm mx-2">
            Tambah Data
        </button>
    </div>

    <div class="card-body">
        <ul class="list-group">
            <?php
            foreach ($berita->result() as $key => $value) {
                ?>
                <li class="list-group-item mb-2">
                    <h4><?=$value->judul?></h4>
                    <small class="text-info"><i>Updated at <?=$value->tgl?></i></small> <br>
                    <img class="img mx-auto text-center" src="<?=(base_url()."../berita/".$value->image)?>" alt="Foto"
                    width="100%">
                    <p><?=$value->teks?></p>
                    <hr>
                    <button class="btn btn-sm btn-primary m-1 col-2" data-toggle="modal"
                            data-target="#modal-berita" 
                            onclick='Edit(<?php echo json_encode($value);?>)'>
                                Edit
                            </button>

                            <a href="<?php echo (site_url("berita/delete/$value->id"));?>"
                            onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                <button class="btn btn-sm btn-danger m-1 col-2">
                                    Hapus
                                </button>
                            </a>
                </li>
                                
                <?php
            }
            ?>
        </ul>
    </div>
</div>

<div class="modal" id="modal-berita">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h4 class="text-white">Form Berita</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url("berita/save");?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" id="id">

                    Judul Berita
                    <input type="text" name="judul" id="judul" class="form-control mb-2" required />

                    Teks Berita
                    <textarea name="teks" id="teks" rows="10" class="form-control" required>

                    </textarea>

                    Foto
                    <input type="file" name="image" id="image" class="form-control" />

                    <button type="submit" class="btn btn-success btn-block mb-2">
                        Simpan
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function Edit(berita) {
        
        document.getElementById("id").value = berita.id;
        document.getElementById("judul").value = berita.judul;
        document.getElementById("teks").value = berita.teks;
        document.getElementById("image").value = "";
        
    }

    function Add() {
        document.getElementById("id").value = "";
        document.getElementById("judul").value = "";
        document.getElementById("teks").value = "";
        document.getElementById("image").value = "";
        
    }
</script>