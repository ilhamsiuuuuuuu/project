
<?php
include_once "../controllers/c_pelanggan.php";
$pelanggan = new c_pelanggan();

if ($_GET["aksi"] == "tambah") {
    $id = $_POST["id"];
    $jumlah_pelanggan = $_POST["jumlah_pelanggan"];
    $jumlah_barang = $_POST["jumlah_barang"];
    $pemasukan = $_POST["pemasukan"];
    $pengeluaran = $_POST["pengeluaran"];

    $pelanggan->insert($id, $jumlah_pelanggan, $jumlah_barang, $pemasukan, $pengeluaran);

    if ($pelanggan) {
        echo "<script> alert('Data berhasil di tambahkan!');
        document.location.href = '../views/v_pelanggan.php';
        </script>";
    }
} elseif ($_GET["aksi"] == "edit") {
    $id = $_POST["id"];
    $jumlah_pelanggan = $_POST["jumlah_pelanggan"];
    $jumlah_barang = $_POST["jumlah_barang"];
    $pemasukan = $_POST["pemasukan"];
    $pengeluaran = $_POST["pengeluaran"];
   
    $pelanggan->update($id, $jumlah_pelanggan, $jumlah_barang, $pemasukan, $pengeluaran);

    if ($pelanggan) {
        echo "<script> alert('Data berhasil di ubah');
        document.location.href = '../views/v_pelanggan.php';
        </script>";
    }
} elseif ($_GET["aksi"] == "delete") {
    $id = $_GET["id"];
    $pelanggan->delete($id);
}
