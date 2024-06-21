<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Data Pesanan</title>
    <style>
        /* CSS untuk gaya cetak */
        @media print {
            /* Sembunyikan elemen yang tidak perlu dicetak */
            body * {
                visibility: hidden;
            }
            .print-container, .print-container * {
                visibility: visible;
            }
            /* Atur margin agar sesuai dengan kertas cetak */
            .print-container {
                position: absolute;
                left: 0;
                top: 0;
                padding: 20px;
                width: 100%;
            }
            table {
                width: 100%;
                border-collapse: collapse;
            }
            th, td {
                border: 1px solid #ddd;
                padding: 8px;
                text-align: left;
            }
            th {
                background-color: #f2f2f2;
            }
        }
    </style>
</head>
<body>
<?php 
// Include file koneksi.php
include('koneksi.php');
// Memulai session
session_start();
// Mengecek apakah user sudah login
if(!isset($_SESSION['login_user'])) {
    header("location: login.php");
    exit;
}
?>

<!-- Konten yang akan dicetak -->
<div class="print-container">
    <h3>Data Pesanan Pelanggan</h3>
    <hr>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>ID Pemesanan</th>
                <th>Tanggal Pesan</th>
                <th>Total Bayar</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $nomor = 1;
        // Query untuk mengambil data pesanan
        $query = "SELECT * FROM pemesanan";
        $result = mysqli_query($koneksi, $query);
        if (!$result || mysqli_num_rows($result) == 0) {
            echo "<tr><td colspan='4'>Tidak ada data pesanan.</td></tr>";
        } else {
            while ($data_pesanan = mysqli_fetch_assoc($result)) :
        ?>
            <tr>
                <td><?php echo $nomor; ?></td>
                <td><?php echo $data_pesanan['id_pemesanan']; ?></td>
                <td><?php echo $data_pesanan['tanggal_pemesanan']; ?></td>
                <td>Rp. <?php echo number_format($data_pesanan['total_belanja']); ?></td>
            </tr>
        <?php 
            $nomor++;
            endwhile;
        }
        ?>
        </tbody>
    </table>
</div>

<!-- Tautan untuk mencetak -->
<button onclick="window.print()">Cetak</button>

</body>
</html>
