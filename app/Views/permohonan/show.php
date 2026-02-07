<?= $this->include('layout/header'); ?>

<?php if (!$permohonan): ?>
    <div class="alert alert-warning">Permohonan tidak ditemukan.</div>
<?php else: ?>
    <div class="card shadow-sm">
        <div class="card-body">
            <h1 class="h4">Detail Permohonan #<?= esc($permohonan['id']); ?></h1>
            <p class="text-muted">Status: <strong><?= esc(ucfirst($permohonan['status'])); ?></strong></p>

            <div class="row">
                <div class="col-md-6">
                    <h2 class="h6">Data Siswa</h2>
                    <ul class="list-unstyled">
                        <li><strong>Nama:</strong> <?= esc($permohonan['nama_lengkap']); ?></li>
                        <li><strong>NISN:</strong> <?= esc($permohonan['nisn']); ?></li>
                        <li><strong>Kelas:</strong> <?= esc($permohonan['kelas']); ?></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h2 class="h6">Perubahan Diminta</h2>
                    <ul class="list-unstyled">
                        <li><strong>Nama Lengkap:</strong> <?= esc($perubahan['nama_lengkap'] ?? '-'); ?></li>
                        <li><strong>Tanggal Lahir:</strong> <?= esc($perubahan['tanggal_lahir'] ?? '-'); ?></li>
                        <li><strong>Alamat:</strong> <?= esc($perubahan['alamat'] ?? '-'); ?></li>
                        <li><strong>Kelas:</strong> <?= esc($perubahan['kelas'] ?? '-'); ?></li>
                    </ul>
                </div>
            </div>

            <div class="mt-3">
                <h2 class="h6">Alasan Permohonan</h2>
                <p><?= esc($permohonan['alasan']); ?></p>
            </div>

            <a class="btn btn-outline-primary" href="/permohonan">Kembali</a>
        </div>
    </div>
<?php endif; ?>

<?= $this->include('layout/footer'); ?>
