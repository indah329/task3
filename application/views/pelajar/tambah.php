<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                form ubah Data pelajar
         </div>      
         <div class="card-body">
             <form action="" method="post">
                 
        <div class="form-group">
    <label for="nama">nama</label>
    <input type="text"name="nama" class="form-control" id="nama"> 
    <small class="form-text text-danger"><?= form_error('nama'); ?></small>
  </div>
        <div class="form-group">
    <label for="nrp">NRP</label>
    <input type="text"name="nrp" class="form-control" id="nrp"> 
    <small class="form-text text-danger"><?= form_error('nrp'); ?></small>
  </div>
        <div class="form-group">
    <label for="email">Email</label>
    <input type="text"name="email" class="form-control" id="email"> 
    <small class="form-text text-danger"><?= form_error('email'); ?></small>
  </div>
  <div class="form-group">
    <label for="jurusan">Jurusan</label>
    <select class="form-control" id="jurusan" name="jurusan">
      <option value="multimedia">multimedia</option>
      <option value="rekayasa perangkat lunak">rekayasa perangkat lunak</option>
      <option value="teknik komputer dan jaringan">teknik komputer dan jaringan</option>
      <option value="tata busana">tata busana</option>
      <option value="otomotif">otomotif</option>
      <option value="kayu">kayu</option>
    </select>
  </div>
  <button type="submit" name="ubah" class="btn btn-primary float-right">ubah Data</button>
             </form>
        </div>
       </div>



        </div>
    </div>
</div>