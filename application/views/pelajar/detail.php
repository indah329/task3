<div class="container">
    <div class="row mt-3">
        <div class="col-md-6" >

         <div class="card">           
         <div class="card-header">
             Detail Data Pelajar 
         </div>
         <div class="card-body"> 
             <h5 class="card-title"><?= $pelajar['nama']; ?></h5>
             <h6 class="card-subtitle mb-2 text-muted"><?= $pelajar['email'];?></h6>
             <p class="card-text"><?= $pelajar['nrp']; ?></p>
             <p class="card-text"><?= $pelajar['jurusan']; ?></p>
             <a href="<?= base_url(); ?>pelajar" class="btn btn-primary">kembali</a> 
        </div>
    </div>

       </div>
   </div>
</div>