<?= $this->include('layout/header'); ?>

<div class="d-flex justify-content-between align-items-center mb-3">
    <h1 class="h3">Daftar Permohonan Perubahan</h1>
    <a class="btn btn-primary" href="/permohonan/baru">+ Permohonan Baru</a>
</div>

<div class="card shadow-sm">
    <div class="card-body">
        <table class="table table-hover align-middle">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Siswa</th>
                    <th>Alasan</th>
                    <th>Status</th>
                    <th>Dibuat</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($permohonan)): ?>
                    <tr>
                        <td colspan="6" class="text-center text-muted">Belum ada permohonan.</td>
                    </tr>
                <?php else: ?>
                    <?php foreach ($permohonan as $item): ?>
                        <tr>
                            <td><?= esc($item['id']); ?></td>
                            <td><?= esc($item['nama_lengkap']); ?></td>
                            <td><?= esc($item['alasan']); ?></td>
                            <td>
                                <span class="badge bg-<?= $item['status'] === 'menunggu' ? 'warning' : 'success'; ?>">
                                    <?= esc(ucfirst($item['status'])); ?>
                                </span>
                            </td>
                            <td><?= esc($item['created_at']); ?></td>
                            <td>
                                <a class="btn btn-sm btn-outline-primary" href="/permohonan/<?= esc($item['id']); ?>">Detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->include('layout/footer'); ?>
