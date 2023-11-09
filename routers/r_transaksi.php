
<?php
include_once "../controllers/c_transaksi.php";
$transaksi = new c_transaksi();

if ($_GET["aksi"] == "tambah") {
    $id = $_POST["id"];
    $nama_pelanggan = $_POST["nama_pelanggan"];
    $jumlah_baju = $_POST["jumlah_baju"];
    $harga_baju = $_POST["harga_baju"];

    $transaksi->insert($id, $nama_pelanggan, $jumlah_baju, $harga_baju);

    if ($transaksi) {
        echo "<script> alert('Data berhasil di tambahkan!');
        document.location.href = '../views/v_transaksi.php';
        </script>";
    }
} elseif ($_GET["aksi"] == "edit") {
    $id = $_POST["id"];
    $nama_pelanggan = $_POST["nama_pelanggan"];
    $jumlah_baju = $_POST["jumlah_baju"];
    $harga_baju = $_POST["harga_baju"];
   
    $transaksi->update($id, $nama_pelanggan, $jumlah_baju, $harga_baju);

    if ($transaksi) {
        echo "<script> alert('Data berhasil di ubah');
        document.location.href = '../views/v_transaksi.php';
        </script>";
    }
} elseif ($_GET["aksi"] == "delete") {
    $id = $_GET["id"];
    $transaksi->delete($id);
}
