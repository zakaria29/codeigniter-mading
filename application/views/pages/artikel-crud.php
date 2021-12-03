<div class="card mt-2">
    <div class="card-header bg-dark">
        <h4 class="text-white">Manage Artikel</h4>
        <button data-toggle="modal" data-target="#modal-artikel" onclick="Add()"
        class="btn btn-success btn-sm mx-2">
            Tambah Data
        </button>
    </div>

    <div class="card-body">
        <ul class="list-group">
            <?php
            foreach ($artikel->result() as $key => $value) {
                ?>
                <li class="list-group-item mb-2">
                    <h4><?=$value->judul?></h4>
                    <small class="text-info"><i>Updated at <?=$value->tgl?></i></small> <br>
                    <img class="img mx-auto text-center" src="<?=(base_url()."../artikel/".$value->image)?>" alt="Foto"
                    width="100%">
                    <p><?=$value->teks?></p>
                    <hr>
                    <button class="btn btn-sm btn-primary m-1 col-2" data-toggle="modal"
                            data-target="#modal-artikel" 
                            onclick='Edit(<?php echo json_encode($value);?>)'>
                                Edit
                            </button>

                            <a href="<?php echo (site_url("artikel/delete/$value->id"));?>"
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

<div class="modal" id="modal-artikel">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h4 class="text-white">Form Artikel</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url("artikel/save");?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" id="id">

                    Judul Artikel
                    <input type="text" name="judul" id="judul" class="form-control mb-2" required />

                    Teks Artikel
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
    function Edit(artikel) {
        
        document.getElementById("id").value = artikel.id;
        document.getElementById("judul").value = artikel.judul;
        document.getElementById("teks").value = artikel.teks;
        document.getElementById("image").value = "";
        
    }

    function Add() {
        document.getElementById("id").value = "";
        document.getElementById("judul").value = "";
        document.getElementById("teks").value = "";
        document.getElementById("image").value = "";
        
    }
</script>