<section class="content-header mb-4">
    <h1>Edit Student Data</h1>
    <small>Control Panel</small>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#"><i class="bi bi-speedometer2"></i> Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Student Data</li>
        </ol>
    </nav>
</section>

<div class="content-wrapper">
    <section class="content">
        <?php foreach ($mahasiswa as $mhs) { ?>
            <form action="<?= base_url('mahasiswa/update'); ?>" method="post">
                <div class="form-group">
                    <label for="nama">Student Name</label>
                    <input type="hidden" name="id" class="form-control" value="<?= $mhs->id ?>">
                    <input type="text" name="nama" class="form-control" value="<?= $mhs->nama ?>">
                </div>

                <div class="form-group">
                    <label for="nim">Student ID (NIM)</label>
                    <input type="text" name="nim" class="form-control" value="<?= $mhs->nim ?>">
                </div>

                <div class="form-group">
                    <label for="tgl_lahir">Date of Birth</label>
                    <input type="date" name="tgl_lahir" class="form-control" value="<?= $mhs->tgl_lahir ?>">
                </div>

                <div class="form-group">
                    <label for="jurusan">Major</label>
                    <select name="jurusan" class="form-control">
                        <option value="Sistem Informasi" <?= $mhs->jurusan == 'Sistem Informasi' ? 'selected' : '' ?>>Information Systems</option>
                        <option value="Teknik Informatika" <?= $mhs->jurusan == 'Teknik Informatika' ? 'selected' : '' ?>>Informatics Engineering</option>
                        <option value="Teknik Komputer" <?= $mhs->jurusan == 'Teknik Komputer' ? 'selected' : '' ?>>Computer Engineering</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="alamat">Address</label>
                    <input type="text" name="alamat" class="form-control" value="<?= $mhs->alamat ?>">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control" value="<?= $mhs->email ?>">
                </div>

                <div class="form-group">
                    <label for="no_telp">Phone Number</label>
                    <input type="text" name="no_telp" class="form-control" value="<?= $mhs->no_telp ?>">
                </div>

                <button type="reset" class="btn btn-danger">Reset</button>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        <?php } ?>
    </section>
</div>
