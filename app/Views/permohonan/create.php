<?= $this->include('layout/header'); ?>

<div class="row">
    <div class="col-lg-8">
        <div class="card shadow-sm">
            <div class="card-body">
                <h1 class="h4 mb-3">Form Permohonan Perubahan Data</h1>
                <form method="post" action="/permohonan">
                    <?= csrf_field(); ?>

                    <div class="mb-3">
                        <label class="form-label">Pilih Siswa</label>
                        <select class="form-select" name="student_id" required>
                            <option value="">-- Pilih --</option>
                            <?php foreach ($students as $student): ?>
                                <option value="<?= esc($student['id']); ?>">
                                    <?= esc($student['nama_lengkap']); ?> (<?= esc($student['nisn']); ?>)
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Nama Lengkap Baru</label>
                            <input type="text" class="form-control" name="nama_lengkap_baru" placeholder="Nama lengkap baru">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Kelas Baru</label>
                            <input type="text" class="form-control" name="kelas_baru" placeholder="Contoh: XI IPA 2">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Tanggal Lahir Baru</label>
                            <input type="date" class="form-control" name="tanggal_lahir_baru">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Alamat Baru</label>
                            <input type="text" class="form-control" name="alamat_baru" placeholder="Alamat baru">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Alasan Permohonan</label>
                        <textarea class="form-control" name="alasan" rows="3" required></textarea>
                    </div>

                    <button class="btn btn-primary" type="submit">Kirim Permohonan</button>
                    <a class="btn btn-outline-secondary" href="/permohonan">Batal</a>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->include('layout/footer'); ?>
