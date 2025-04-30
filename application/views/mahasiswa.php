<section class="content-header mb-4">
    <h1>Student Data</h1>
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

<section class="content">
    <?php echo $this->session->flashdata('message'); ?>
    <div class="d-flex flex-wrap justify-content-between align-items-center mb-3 gap-2">
        <div class="d-flex flex-wrap gap-2 align-items-center">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="bi bi-plus-circle"></i> Add
            </button>
            <button class="btn btn-danger" onclick="window.location.href='<?php echo base_url('mahasiswa/print') ?>'">
                <i class="bi bi-print"></i> Print
            </button>
            <div class="dropdown">
                <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenu1" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-download"></i> Export
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a class="dropdown-item" href="<?php echo base_url('mahasiswa/pdf') ?>">PDF</a></li>
                    <li><a class="dropdown-item" href="<?php echo base_url('mahasiswa/excel') ?>">Excel</a></li>
                </ul>
            </div>
        </div>
        <div class="ms-auto">
            <?php echo form_open('mahasiswa/search', ['class' => 'd-flex align-items-center']) ?>
                <input type="text" name="keyword" class="form-control form-control-sm me-2" placeholder="Search" style="width: 180px;">
                <button class="btn btn-success btn-sm">Search</button>
            <?php echo form_close() ?>
        </div>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Student ID (NIM)</th>
                <th>Date of Birth</th>
                <th>Major</th>
                <th colspan="3">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; foreach ($mahasiswa as $mhs): ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $mhs->nama ?></td>
                <td><?= $mhs->nim ?></td>
                <td><?= $mhs->tgl_lahir ?></td>
                <td><?= $mhs->jurusan ?></td>
                <td>
                    <a href="<?= base_url('mahasiswa/detail/'.$mhs->id) ?>" class="btn btn-success btn-sm" title="Detail">
                        <i class="bi bi-info-circle"></i>
                    </a>
                </td>
                <td>
                    <a href="<?= base_url('mahasiswa/edit/'.$mhs->id) ?>" class="btn btn-primary btn-sm" title="Edit">
                        <i class="bi bi-pencil-square"></i>
                    </a>
                </td>
                <td>
                    <a href="<?= base_url('mahasiswa/hapus/'.$mhs->id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this data?')" title="Delete">
                        <i class="bi bi-trash"></i>
                    </a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</section>

<!-- Modal Add -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <?php echo form_open_multipart('mahasiswa/tambah_aksi'); ?>
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Student Data Input Form</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="nama" class="form-label">Student Name</label>
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Enter full name" required>
                    </div>

                    <div class="mb-3">
                        <label for="nim" class="form-label">Student ID (NIM)</label>
                        <input type="text" name="nim" id="nim" class="form-control" placeholder="Example: 1234567890" required>
                    </div>

                    <div class="mb-3">
                        <label for="tgl_lahir" class="form-label">Date of Birth</label>
                        <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="jurusan" class="form-label">Major</label>
                        <select name="jurusan" id="jurusan" class="form-control" required>
                            <option value="" disabled selected>Select Major</option>
                            <option value="Sistem Informasi">Information Systems</option>
                            <option value="Teknik Informatika">Informatics Engineering</option>
                            <option value="Teknik Komputer">Computer Engineering</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="alamat" class="form-label">Address</label>
                        <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Example: Jl. Merdeka No. 10" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="email@example.com" required>
                    </div>

                    <div class="mb-3">
                        <label for="no_telp" class="form-label">Phone Number</label>
                        <input type="text" name="no_telp" id="no_telp" class="form-control" placeholder="08xxxxxxxxxx" required>
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Upload Image</label>
                        <input type="file" name="image" id="image" class="form-control">
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
