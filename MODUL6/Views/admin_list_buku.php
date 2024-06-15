<?= $this->extend('layout/admin/admin_layout') ?>

<?= $this->section('content') ?>

<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($buku as $item): ?>
            <tr>
                <td><?= $item['id'] ?></td>
                <td><?= $item['judul'] ?></td>
                <td><?= $item['penulis'] ?></td>
                <td><?= $item['penerbit'] ?></td>
                <td><?= $item['tahun_terbit'] ?></td>
                <td>
                    <a href="<?= base_url('admin/buku/' . $item['id'] . '/edit') ?>" class="btn btn-sm btn-outline-secondary">Edit</a>
                    <a href="<?= base_url('admin/buku/' . $item['id'] . '/delete') ?>" onclick="return confirm('Are you sure you want to delete this item?')" class="btn btn-sm btn-outline-danger">Delete</a>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<?= $this->endSection() ?>