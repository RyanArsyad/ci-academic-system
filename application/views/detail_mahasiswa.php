<section class="content-header mb-4">
    <h1>Detailed Student Data</h1>
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
        <table class="table">
            <tr>
                <th>Full Name</th>
                <td><?= $detail->nama ?></td>
            </tr>
            <tr>
                <th>Student ID (NIM)</th>
                <td><?= $detail->nim ?></td>
            </tr>
            <tr>
                <th>Date of Birth</th>
                <td><?= $detail->tgl_lahir ?></td>
            </tr>
            <tr>
                <th>Major</th>
                <td><?= $detail->jurusan ?></td>
            </tr>
            <tr>
                <th>Address</th>
                <td><?= $detail->alamat ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?= $detail->email ?></td>
            </tr>
            <tr>
                <th>Phone Number</th>
                <td><?= $detail->no_telp ?></td>
            </tr>
            <tr>
                <th>Photo</th>
                <td>
                    <img src="<?= base_url('assets/images/' . $detail->image); ?>" alt="Student Photo" width="90" height="110">
                </td>
            </tr>
        </table>
        
        <a href="<?= base_url('mahasiswa/index'); ?>" class="btn btn-primary">Back</a>
    </section>
</div>
