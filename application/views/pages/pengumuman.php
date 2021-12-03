<div class="card mt-2">
    <div class="card-header bg-dark">
        <h4 class="text-white">Pengumuman SMK Telkom Malang <br>
        <a href="<?php echo (site_url("pengumuman/crud"));?>" class="text-right">
                                <button class="btn btn-sm btn-outline-warning m-1">
                                    Manage Pengumuman
                                </button>
                            </a>
        </h4>
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
                    
                </li>
                                
                <?php
            }
            ?>
        </ul>
    </div>
</div>