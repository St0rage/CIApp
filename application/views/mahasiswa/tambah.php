<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">


        <div class="card">
            <div class="card-header">
                Form Tambah Data Mahasiswa
            </div>
            <div class="card-body">

            <form action="" method="post">

                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control" id="nama">
                    <small class="form-text text-danger"><?= form_error('nama') ?></small>
                </div>
                <div class="mb-3">
                    <label for="nim" class="form-label">NIM</label>
                    <input type="text" name="nim" class="form-control" id="nim">
                    <small class="form-text text-danger"><?= form_error('nim') ?></small>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" name="email" class="form-control" id="email">
                    <small class="form-text text-danger"><?= form_error('email') ?></small>
                </div>
                <div class="mb-3">
                    <label for="jurusan" class="form-label">Jurusan</label>
                    <select class="form-select" aria-label="Default select example" id="jurusan" name="jurusan">
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Manajemen Informatika">Manajemen Informatika</option>
                    </select>
                </div>
                <button type="submit" name="tambah" class="btn btn-primary">Tambah Data</button>
                

            </form>

            </div>
        </div>

            

        </div>
    </div>

</div>