<?php
include_once "c_koneksi.php";
class c_pelanggan
{
    public function insert($id, $jumlah_pelanggan, $jumlah_barang, $pemasukan, $pengeluaran)
    {
        $conn = new c_koneksi();
        $query = "INSERT INTO pelanggan VALUES ('$id', '$jumlah_pelanggan', '$jumlah_barang', '$pemasukan' ,'$pengeluaran')";
        $data = mysqli_query($conn->conn(), $query);
    }

    public function read()
    {
        $conn = new c_koneksi();
        // perintah mengambil semua data dari pelanggan dan mengurutkan sesuai data terbaru diatas
        $query = "SELECT * FROM pelanggan ORDER BY id DESC";
        $data = mysqli_query($conn->conn(), $query);

        // mengubah query data menjadi objek
        while ($row = mysqli_fetch_object($data)) {
            // array kosong untuk menampung data objek
            $rows[] = $row;
        }

        // mengembalikan nilai
        if(!empty($rows)) {
            return $rows;
        }
       
    }

    public function edit($id)
    {
        $conn = new c_koneksi();

        // perintah mengambil data dari pelanggan berdasarkan id
        $query = "SELECT * FROM pelanggan WHERE id = $id";
        $data = mysqli_query($conn->conn(), $query);
        while ($row = mysqli_fetch_object($data)) {
            $rows[] = $row;
        }
        return $rows;
    }

    public function update($id, $jumlah_pelanggan, $jumlah_barang, $pemasukan, $pengeluaran)
    {
        $conn = new c_koneksi();
        // perintah untuk update data dari pelanggan
        $query = "UPDATE pelanggan SET jumlah_pelanggan='$jumlah_pelanggan', $jumlah_barang='$jumlah_barang', pemasukan='$pemasukan' , pengeluaran='$pengeluaran' WHERE id = $id";
        $data = mysqli_query($conn->conn(), $query);
    }

    public function delete($id)
    {
        $conn = new c_koneksi();

        // perintah untuk menghapus data dari pelanggan berdasarkan id
        $query = "DELETE FROM pelanggan WHERE id = $id";
        $data = mysqli_query($conn->conn(), $query);

        header("Location: ../views/v_pelanggan.php");
    }
}
