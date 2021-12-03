<div class="card mt-2">
    <div class="card-header bg-dark">
        <h4 class="text-white">Manage Pengumuman</h4>
        <button data-toggle="modal" data-target="#modal-pengumuman" onclick="Add()"
        class="btn btn-success btn-sm mx-2">
            Tambah Data
        </button>
    </div>

    <div class="card-body">
        <ul class="list-group">
            <?php
            foreach ($pengumuman->result() as $key => $value) {
                ?>
                <li class="list-group-item mb-2">
                    <h4><?=$value->judul?></h4>
                    <small class="text-info">
                        <strong>
                            <i>Posted at <?=$value->tgl?></i>    
                        </strong>
                    </small> <br>
                    
                    <p><?=$value->teks?></p>
                    <hr>
                    <button class="btn btn-sm btn-primary m-1 col-2" data-toggle="modal"
                            data-target="#modal-pengumuman" 
                            onclick='Edit(<?php echo json_encode($value);?>)'>
                                Edit
                            </button>

                            <a href="<?php echo (site_url("pengumuman/delete/$value->id"));?>"
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

<div class="modal" id="modal-pengumuman">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h4 class="text-white">Form Berita</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url("pengumuman/save");?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" id="id">

                    Judul Pengumuman
                    <input type="text" name="judul" id="judul" class="form-control mb-2" required />

                    Teks Pengumuman
                    <textarea name="teks" id="teks" rows="10" class="form-control" required>

                    </textarea>

                    Tanggal
                    <input type="date" name="tgl" id="tgl" class="form-control" required />

                    <button type="submit" class="btn btn-success btn-block mb-2">
                        Simpan
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function Edit(pengumuman) {
        
        document.getElementById("id").value = pengumuman.id;
        document.getElementById("judul").value = pengumuman.judul;
        document.getElementById("teks").value = pengumuman.teks;
        document.getElementById("tgl").value = pengumuman.tgl;
        
    }

    function Add() {
        document.getElementById("id").value = "";
        document.getElementById("judul").value = "";
        document.getElementById("teks").value = "";
        document.getElementById("tgl").value = "";
        
    }
</script>