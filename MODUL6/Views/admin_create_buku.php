<?= $this->extend('layout/admin/admin_layout') ?>

<?= $this->section('content') ?>

<form action="<?= base_url('admin/buku/new') ?>" method="post" id="text-editor">
    <div class="form-group">
        <label for="judul">Judul</label>
        <input type="text" name="judul" class="form-control" placeholder="Judul Buku" required>
    </div>
    <div class="form-group">
        <label for="penulis">Penulis</label>
        <input type="text" name="penulis" class="form-control" placeholder="Penulis Buku" required>
    </div>
    <div class="form-group">
        <label for="penerbit">Penerbit</label>
        <input type="text" name="penerbit" class="form-control" placeholder="Penerbit Buku" required>
    </div>
    <div class="form-group">
        <label for="tahun_terbit">Tahun Terbit</label>
        <input type="number" name="tahun_terbit" class="form-control" placeholder="Tahun Terbit" required>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Tambah Buku</button>
    </div>
</form>

<?= $this->endSection() ?>