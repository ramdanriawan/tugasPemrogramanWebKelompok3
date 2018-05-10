<div id="featured-posts">
    <?php $bola = $this->db->where("category", "bola")->get("beritaindonesia")->row(); ?>
    <div class="featured-post featured-post-1 fea-1">
        <div class="featured-post-inner" style="background-image:url('<?php echo $bola->gambar ?>');">
            <div class="featured-cover">
                <a href="<?php echo $bola->link ?>">
                    <span><?php echo $bola->judul ?></span>
                </a>
            </div>
            <div class="featured-title">
                <span class="tie-date">
                    <i class="fa fa-clock-o"></i><?php echo $bola->tgl ?></span>
                <h2>
                    <a href="<?php echo $bola->link ?>" target="_blank"><?php echo $bola->judul ?></a>
                </h2>
                <h3><?php echo $bola->description ?></h3>
            </div>
        </div>
    </div>

    <?php $lifestyle = $this->db->where("category", "Lifestyle")->get("beritaindonesia")->row(); ?>

    <div class="featured-post featured-post-2 fea-2">
        <div class="featured-post-inner" style="background-image:url('<?php echo $lifestyle->gambar ?>');">
            <div class="featured-cover">
                <a href="<?php echo $lifestyle->link ?>">
                    <span><?php echo $lifestyle->judul ?>!</span>
                </a>
            </div>
            <div class="featured-title">
                <span class="tie-date">
                    <i class="fa fa-clock-o"></i><?php echo $lifestyle->tgl ?></span>
                <h2>
                    <a href="<?php echo $lifestyle->link ?>"><?php echo $lifestyle->judul ?></a>
                </h2>
                <h3><?php echo $lifestyle->description ?></h3>
            </div>
        </div>
    </div>

    <?php $tekno = $this->db->where("category", "Tekno")->get("beritaindonesia")->row(); ?>

    <div class="featured-post featured-post-3 fea-3">
        <div class="featured-post-inner" style="background-image:url('<?php echo $tekno->gambar ?>');">
            <div class="featured-cover">
                <a href="<?php echo $tekno->link ?>">
                    <span><?php echo $tekno->judul ?></span>
                </a>
            </div>
            <div class="featured-title">
                <span class="tie-date">
                    <i class="fa fa-clock-o"></i><?php echo $tekno->tgl ?></span>
                <h2>
                    <a href="<?php echo $tekno->link ?>"><?php echo $tekno->judul ?></a>
                </h2>
                <h3><?php echo $tekno->description ?></h3>
            </div>
        </div>
    </div>

    <?php $otomotif = $this->db->where("category", "Otomotif")->get("beritaindonesia")->row(); ?>

    <div class="featured-post featured-post-4 fea-4">
        <div class="featured-post-inner" style="background-image:url('<?php echo  $otomotif->gambar ?>');">
            <div class="featured-cover">
                <a href="<?php echo $otomotif->link ?>">
                    <span><?php echo $otomotif->judul ?></span>
                </a>
            </div>
            <div class="featured-title">
                <span class="tie-date">
                    <i class="fa fa-clock-o"></i><?php echo $otomotif->tgl ?></span>
                <h2>
                    <a href="<?php echo $otomotif->judul ?>"><?php echo $otomotif->judul; ?></a>
                </h2>
                <h3><?php echo $otomotif->judul ?></h3>
            </div>
        </div>
    </div>

    <?php $bisnis = $this->db->where("category", "Bisnis")->get("beritaindonesia")->row(); ?>

    <div class="featured-post featured-post-5 fea-5">
        <div class="featured-post-inner" style="background-image:url('<?php echo $bisnis->gambar ?>');">
            <div class="featured-cover">
                <a href="<?php echo $bisnis->link ?>">
                    <span><?php echo $bisnis->judul ?></span>
                </a>
            </div>
            <div class="featured-title">
                <span class="tie-date">
                    <i class="fa fa-clock-o"></i><?php echo $bisnis->tgl ?></span>
                <h2>
                    <a href="<?php echo $bisnis->link ?>"><?php echo $bisnis->judul; ?></a>
                </h2>
                <h3>
                    <?php echo $bisnis->description ?></h3>
            </div>
        </div>
    </div>

    <?php $dunia = $this->db->where("category", "Dunia")->get("beritaindonesia")->row(); ?>
    <div class="featured-post featured-post-1 fea-6">
        <div class="featured-post-inner" style="background-image:url('<?php echo $dunia->gambar ?>');">
            <div class="featured-cover">
                <a href="<?php echo $dunia->link ?>">
                    <span><?php echo $dunia->judul; ?></span>
                </a>
            </div>
            <div class="featured-title">
                <span class="tie-date">
                    <i class="fa fa-clock-o"></i><?php echo $dunia->tgl ?></span>
                <h2>
                    <a href="<?php echo $dunia->link ?>"><?php echo $dunia->judul ?></a>
                </h2>
                <h3><?php echo $dunia->description ?>;</h3>
            </div>
        </div>
    </div>

    <?php $hiburan = $this->db->where("category", "Hiburan")->get("beritaindonesia")->row(); ?>

    <div class="featured-post featured-post-2 fea-7">
        <div class="featured-post-inner" style="background-image:url('<?php echo $hiburan->gambar ?>');">
            <div class="featured-cover">
                <a href="<?php echo $hiburan->link ?>">
                    <span><?php echo $hiburan->judul; ?></span>
                </a>
            </div>
            <div class="featured-title">
                <span class="tie-date">
                    <i class="fa fa-clock-o"></i><?php echo $hiburan->tgl ?></span>
                <h2>
                    <a href="<?php echo $hiburan->link ?>"><?php echo $hiburan->judul ?></a>
                </h2>
                <h3><?php $hiburan->description ?></h3>
            </div>
        </div>
    </div>

    <?php $properti = $this->db->where("category", "Properti")->get("beritaindonesia")->row(); ?>

    <div class="featured-post featured-post-3 fea-8">
        <div class="featured-post-inner" style="background-image:url('<?php echo $properti->gambar ?>');">
            <div class="featured-cover">
                <a href="<?php echo $properti->link ?>">
                    <span><?php echo $properti->judul ?></span>
                </a>
            </div>
            <div class="featured-title">
                <span class="tie-date">
                    <i class="fa fa-clock-o"></i><?php echo $properti->tgl ?></span>
                <h2>
                    <a href="<?php echo $properti->link ?>"><?php echo $properti->judul ?></a>
                </h2>
                <h3><?php echo $properti->description ?></h3>
            </div>
        </div>
    </div>

    <?php $politik = $this->db->where("category", "Politik")->get("beritaindonesia")->row(); ?>

    <div class="featured-post featured-post-4 fea-9">
        <div class="featured-post-inner" style="background-image:url('<?php echo $politik->gambar ?>');">
            <div class="featured-cover">
                <a href="<?php echo $politik->link ?>">
                    <span><?php echo $politik->judul ?></span>
                </a>
            </div>
            <div class="featured-title">
                <span class="tie-date">
                    <i class="fa fa-clock-o"></i><?php echo $politik->tgl ?></span>
                <h2>
                    <a href="<?php echo $politik->link ?>"><?php echo $politik->judul ?></a>
                </h2>
                <h3><?php echo $politik->description ?></h3>
            </div>
        </div>
    </div>

    <?php $ekonomi = $this->db->where("category", "Ekonomi")->get("beritaindonesia")->row(); ?>

    <div class="featured-post featured-post-5 fea-10">
        <div class="featured-post-inner" style="background-image:url('<?php echo $ekonomi->gambar ?>');">
            <div class="featured-cover">
                <a href="<?php echo $ekonomi->link ?>">
                    <span><?php echo $ekonomi->judul ?></span>
                </a>
            </div>
            <div class="featured-title">
                <span class="tie-date">
                    <i class="fa fa-clock-o"></i><?php echo $ekonomi->tgl ?></span>
                <h2>
                    <a href="<?php echo $ekonomi->link ?>"><?php echo $ekonomi->judul ?></a>
                </h2>
                <h3><?php echo $ekonomi->description ?></h3>
            </div>
        </div>
    </div>
</div>
