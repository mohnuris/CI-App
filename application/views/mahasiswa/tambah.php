<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Tambah Data Mahasiswa
                </div>
                    <div class="card-body">
                    <!-- <?php if (validation_errors()) :?>
                             <div class="alert alert-danger" role="alert">
                                <?= validation_errors(); ?>
                            </div>
                        <?php endif;?>     -->
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" name= "nama" class="form-control" id="nama">
                                <small class="form-text text-danger"><?= form_error('nama');?></small>
                            </div>
                            <div class="form-group">
                                <label for="nim">NIM</label>
                                <input type="text" name="nim" class="form-control" id="nim">
                                <small class="form-text text-danger"><?= form_error('nim');?></small>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" name="email" class="form-control" id="email">
                                <small class="form-text text-danger"><?= form_error('email');?></small>
                            </div>
                            <div class="form-group">
                                <label for="jurusan">Jurusan</label>
                                <select class="form-control" id="jurusan" 
                                    name="jurusan">
                                        <option value="Teknik Infomatika">Teknik Infomatika</option>
                                        <option value="Teknik Informasi"> Teknik Informasi</option>
                                        <option value="Rekayasa Perangkat Lunak">Rekaya Peragkat Lunak</option>
                                        <option value="Teknik Elektro">Teknik Elektro</option>
                                    </select>
                            </div>
                            <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                        </form>
                    </div>
                </div>
        </div>
    </div>
   
</div>