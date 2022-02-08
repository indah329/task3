<div class="container">
    <?php if ($this->session->flashdata('flash')); ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Pelajar <strong>berhasil guacamole!</strong><?= $this->session->flashdata('flash'); ?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="row mt-3">
                <div class="col-md-6">
                    <a href="<?= base_url(); ?>pelajar/tambah" class="btn btn-primary">Tambah Data Pelajar</a>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-6">
                    <form action="" method="post">
                        <div class"input-group mb-3">
                            <input type"text" class"form-control" placeholder="cari data Pelajar.." name= "keyword">
                            <div class="input-group-append">
                            <button class="btn btn-primary" type="submit" >Cari</button>
                        </div>
                        </div>
                </form>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-6">
                <h3>Daftar Pelajar</h3>
                <?php if( empty($Pelajar) ) : ?>
                    <div class="alert alert"-danger" role="alert">X
                    data Pelajar tidak ditemukan.
                  </div>
                    <?php endif; ?>
                <ul class="list-group">
                    <?php foreach ($Pelajar as $plj) : ?>
                        <li class="list-group-item">
                            <?= $plj['nama'] ?>
                            <a href="<?= base_url(); ?>pelajar/hapus/<?= $plj['id']; ?>" class="badge badge-danger float-right" onclick="return confirm('yakin');">hapus</a>
                            <a href="<?= base_url(); ?>pelajar/ubah/<?= $plj['id']; ?>" class="badge badge-primary float-right">ubah</a>
                            <a href="<?= base_url(); ?>pelajar/detail/<?= $plj['id']; ?>" class="badge badge-primary float-right">detail</a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>


    </div>