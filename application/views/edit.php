<div class="content-wrapper">
    <section class="content">
        <?php foreach ($mahasiswa as $mhs) { ?>
            <form action="<?php echo base_url() . 'mahasiswa/update'; ?>" method="post">
                <div class="form-group">
                    <label>Nama Mahasiswa</label>
                    <input type="hidden" name="id" class="form-control" value="<?php echo $mhs->id ?>">
                    <input type="text" name="nama" class="form-control" value="<?php echo $mhs->nama ?>">
                </div>
                <div class="form-group">
                    <label>NIM</label>
                    <input type="text" name="nim" class="form-control" value="<?php echo $mhs->nim ?>">
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="text" name="tgl_lahir" class="form-control" value="<?php echo $mhs->tgl_lahir ?>">
                </div>
                <div class="form-group">
                    <label>Jurusan</label>
                    <select type="text" name="jurusan" value="<?php echo $mhs->jurusan ?>" class="form-control">
                        <option value=""></option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Teknik Komputer">Teknik Komputer</option>
                        <option value="Teknik Komputer">Teknik Ngewe</option>
                        <option value="Teknik Komputer">Teknik Kodok Kodok Memek</option>
                    </select>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" name="alamat" class="form-control" value="<?php echo $mhs->alamat ?>">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control" value="<?php echo $mhs->email ?>">
                    </div>
                    <div class="form-group">
                        <label>No. Telepon</label>
                        <input type="text" name="no_telp" class="form-control" value="<?php echo $mhs->no_telp ?>">
                    </div>
                </div>
                <button type="reset" class="btn btn-danger">Reset</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        <?php } ?>
    </section>
</div>