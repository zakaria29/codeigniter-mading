<div class="card mt-2">
    <div class="card-header bg-dark">
        <h4 class="text-white">Artikel SMK Telkom Malang <br>
        <a href="<?php echo (site_url("artikel/crud"));?>" class="text-right">
                                <button class="btn btn-sm btn-outline-warning m-1">
                                    Manage Artikel
                                </button>
                            </a>

        </h4>
        
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
                </li>
                                
                <?php
            }
            ?>
        </ul>
    </div>
</div>
