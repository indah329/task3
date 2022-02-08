<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                form ubah Data pelajar
         </div>      
         <div class="card-body">
             <form action="" method="post">
               <input type="hidden" name="id" value="<?= $pelajar['id']; ?>">  
        <div class="form-group">
    <label for="nama">nama</label>
    <input type="text"name="nama" class="form-control" id="nama" value="<?= $pelajar['nama']; ?>">
    <small class="form-text text-danger"><?= form_error('nama'); ?></small>
  </div>
        <div class="form-group">
    <label for="nrp">NRP</label>
    <input type="text"name="nrp" class="form-control" id="nrp" value="<?= $pelajar['nrp']; ?>"> > 
    <small class="form-text text-danger"><?= form_error('nrp'); ?></small>
  </div>
        <div class="form-group">
    <label for="email">Email</label>
    <input type="text"name="email" class="form-control" id="email" value="<?= $pelajar['email']; ?>"> >
    <small class="form-text text-danger"><?= form_error('email'); ?></small>
  </div>
  <div class="form-group">
    <label for="jurusan">Jurusan</label>
    <select class="form-control" id="jurusan" name="jurusan">
      <?php foreach($jurusan as $j ) : ?>
        <?php if(  $j == $pelajar['jurusan'] ) : ?>
      <option value="<?= $j; ?>" selected><?= $j; ?></option>  
      <?php else : ?>
        <option value="<?= $j; ?>"><?= $j; ?></option>  
        <?php endif; ?>
      <?php endforeach; ?>  
    </select>
  </div>
  <button type="submit" name="ubah" class="btn btn-primary float-right">ubah Data</button>
             </form>
        </div>
       </div>



        </div>
    </div>
</div>