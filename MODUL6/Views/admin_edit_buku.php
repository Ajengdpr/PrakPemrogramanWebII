<?= $this->extend('layout/admin/admin_layout') ?>

<?= $this->section('content') ?>

<form action="<?= base_url('admin/buku/' . $buku['id'] . '/edit') ?>" method="post" id="text-editor">
    <input type="hidden" name="id" value="<?= $buku['id'] ?>" />
    <div class="form-group">
        <label for="judul">Judul</label>
        <input type="text" name="judul" class="form-control" placeholder="Judul Buku" value="<?= old('judul', $buku['judul']) ?>" required>
        <?php if(isset($validation) && $validation->hasError('judul')): ?>
            <div class="text-danger"><?= $validation->getError('judul') ?></div>
        <?php endif; ?>
    </div>
    <div class="form-group">
        <label for="penulis">Penulis</label>
        <input type="text" name="penulis" class="form-control" placeholder="Penulis Buku" value="<?= old('penulis', $buku['penulis']) ?>" required>
        <?php if(isset($validation) && $validation->hasError('penulis')): ?>
            <div class="text-danger"><?= $validation->getError('penulis') ?></div>
        <?php endif; ?>
    </div>
    <div class="form-group">
        <label for="penerbit">Penerbit</label>
        <input type="text" name="penerbit" class="form-control" placeholder="Penerbit Buku" value="<?= old('penerbit', $buku['penerbit']) ?>" required>
        <?php if(isset($validation) && $validation->hasError('penerbit')): ?>
            <div class="text-danger"><?= $validation->getError('penerbit') ?></div>
        <?php endif; ?>
    </div>
    <div class="form-group">
        <label for="tahun_terbit">Tahun Terbit</label>
        <input type="number" name="tahun_terbit" class="form-control" placeholder="Tahun Terbit" value="<?= old('tahun_terbit', $buku['tahun_terbit']) ?>" required>
        <?php if(isset($validation) && $validation->hasError('tahun_terbit')): ?>
            <div class="text-danger"><?= $validation->getError('tahun_terbit') ?></div>
        <?php endif; ?>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Update Buku</button>
    </div>
</form>

<?= $this->endSection() ?>