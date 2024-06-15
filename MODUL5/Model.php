<?php
require 'Koneksi.php';

function insertMember($nama_member, $nomor_member, $alamat, $tgl_mendaftar, $tgl_terakhir_bayar) {
    $conn = openConnection();
    $sql = "INSERT INTO member (nama_member, nomor_member, alamat, tgl_mendaftar, tgl_terakhir_bayar)
            VALUES ('$nama_member', '$nomor_member', '$alamat', '$tgl_mendaftar', '$tgl_terakhir_bayar')";
    if ($conn->query($sql) === TRUE) {
        $result = "New record created successfully";
    } else {
        $result = "Error: " . $sql . "<br>" . $conn->error;
    }
    closeConnection($conn);
    return $result;
}

function getAllMembers() {
    $conn = openConnection();
    $sql = "SELECT * FROM member";
    $result = $conn->query($sql);
    closeConnection($conn);
    return $result;
}

function getMemberById($id_member) {
    $conn = openConnection();
    $sql = "SELECT * FROM member WHERE id_member=$id_member";
    $result = $conn->query($sql);
    closeConnection($conn);
    return $result->fetch_assoc();
}

function updateMember($id_member, $nama_member, $nomor_member, $alamat, $tgl_terakhir_bayar) {
    $conn = openConnection();
    $sql = "UPDATE member SET nama_member='$nama_member', nomor_member='$nomor_member', alamat='$alamat', tgl_terakhir_bayar='$tgl_terakhir_bayar'
            WHERE id_member=$id_member";
    if ($conn->query($sql) === TRUE) {
        $result = "Record updated successfully";
    } else {
        $result = "Error: " . $sql . "<br>" . $conn->error;
    }
    closeConnection($conn);
    return $result;
}

function deleteMember($id_member) {
    $conn = openConnection();
    $sql = "DELETE FROM member WHERE id_member=$id_member";
    if ($conn->query($sql) === TRUE) {
        $result = "Record deleted successfully";
    } else {
        $result = "Error: " . $sql . "<br>" . $conn->error;
    }
    closeConnection($conn);
    return $result;
}
function insertBuku($judul_buku, $penulis, $penerbit, $tahun_terbit) {
    $conn = openConnection();
    $sql = "INSERT INTO buku (judul_buku, penulis, penerbit, tahun_terbit)
            VALUES ('$judul_buku', '$penulis', '$penerbit', '$tahun_terbit')";
    if ($conn->query($sql) === TRUE) {
        $result = "New record created successfully";
    } else {
        $result = "Error: " . $sql . "<br>" . $conn->error;
    }
    closeConnection($conn);
    return $result;
}

function getAllBuku() {
    $conn = openConnection();
    $sql = "SELECT * FROM buku";
    $result = $conn->query($sql);
    closeConnection($conn);
    return $result;
}

function getBukuById($id_buku) {
    $conn = openConnection();
    $sql = "SELECT * FROM buku WHERE id_buku=$id_buku";
    $result = $conn->query($sql);
    closeConnection($conn);
    return $result->fetch_assoc();
}

function updateBuku($id_buku, $judul_buku, $penulis, $penerbit, $tahun_terbit) {
    $conn = openConnection();
    $sql = "UPDATE buku SET judul_buku='$judul_buku', penulis='$penulis', penerbit='$penerbit', tahun_terbit='$tahun_terbit'
            WHERE id_buku=$id_buku";
    if ($conn->query($sql) === TRUE) {
        $result = "Record updated successfully";
    } else {
        $result = "Error: " . $sql . "<br>" . $conn->error;
    }
    closeConnection($conn);
    return $result;
}

function deleteBuku($id_buku) {
    $conn = openConnection();
    $sql = "DELETE FROM buku WHERE id_buku=$id_buku";
    if ($conn->query($sql) === TRUE) {
        $result = "Record deleted successfully";
    } else {
        $result = "Error: " . $sql . "<br>" . $conn->error;
    }
    closeConnection($conn);
    return $result;
}

function insertPeminjaman($id_member, $id_buku, $tgl_pinjam, $tgl_kembali) {
    $conn = openConnection();
    $sql = "INSERT INTO peminjaman (id_member, id_buku, tgl_pinjam, tgl_kembali)
            VALUES ('$id_member', '$id_buku', '$tgl_pinjam', '$tgl_kembali')";
    if ($conn->query($sql) === TRUE) {
        $result = "New record created successfully";
    } else {
        $result = "Error: " . $sql . "<br>" . $conn->error;
    }
    closeConnection($conn);
    return $result;
}

function getAllPeminjaman() {
    $conn = openConnection();
    $sql = "SELECT * FROM peminjaman";
    $result = $conn->query($sql);
    closeConnection($conn);
    return $result;
}

function getPeminjamanById($id_peminjam) {
    $conn = openConnection();
    $sql = "SELECT * FROM peminjaman WHERE id_peminjam=$id_peminjam";
    $result = $conn->query($sql);
    closeConnection($conn);
    return $result->fetch_assoc();
}

function updatePeminjaman($id_peminjam, $id_member, $id_buku, $tgl_pinjam, $tgl_kembali) {
    $conn = openConnection();
    $sql = "UPDATE peminjaman SET id_member='$id_member', id_buku='$id_buku', tgl_pinjam='$tgl_pinjam', tgl_kembali='$tgl_kembali'
            WHERE id_peminjam=$id_peminjam";
    if ($conn->query($sql) === TRUE) {
        $result = "Record updated successfully";
    } else {
        $result = "Error: " . $sql . "<br>" . $conn->error;
    }
    closeConnection($conn);
    return $result;
}

function deletePeminjaman($id_peminjam) {
    $conn = openConnection();
    $sql = "DELETE FROM peminjaman WHERE id_peminjam=$id_peminjam";
    if ($conn->query($sql) === TRUE) {
        $result = "Record deleted successfully";
    } else {
        $result = "Error: " . $sql . "<br>" . $conn->error;
    }
    closeConnection($conn);
    return $result;
}
?>