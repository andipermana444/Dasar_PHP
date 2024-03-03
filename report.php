<?php
// Array data barang
$barang = array(
    array(
        "tanggal" => "01-03-2023",
        "kategori" => "pembayaran pesanan",
        "keterangan" => "-",
        "pemasukan" => 1000000,
        "pengeluaran" => 0,
    ),
    array(
        "tanggal" => "01-03-2023",
        "kategori" => "pembayaran pesanan",
        "keterangan" => "gaada",
        "pemasukan" => 0,
        "pengeluaran" => 100000,
    ),
    array(
        "tanggal" => "08-03-2023",
        "kategori" => "pembayaran pesanan",
        "keterangan" => "-",
        "pemasukan" => 200000,
        "pengeluaran" => 0,
    ),
    array(
        "tanggal" => "09-03-2023",
        "kategori" => "pembayaran pesanan",
        "keterangan" => "test pemasukan 090323",
        "pemasukan" => 89000,
        "pengeluaran" => 0,
    ),
    array(
        "tanggal" => "09-03-2023",
        "kategori" => "pembayaran pesanan",
        "keterangan" => "test pengeluaran 090323",
        "pemasukan" => 0,
        "pengeluaran" => 21000,
    ),
    array(
        "tanggal" => "16-03-2023",
        "kategori" => "pembayaran pesanan",
        "keterangan" => "lunas yak",
        "pemasukan" => 165000,
        "pengeluaran" => 0,
    ),
    array(
        "tanggal" => "16-03-2023",
        "kategori" => "pembayaran pesanan",
        "keterangan" => "lunas yak",
        "pemasukan" => 330000,
        "pengeluaran" => 0,
    ),
    array(
        "tanggal" => "15-03-2023",
        "kategori" => "pinjaman ulang",
        "keterangan" => "tes",
        "pemasukan" => 100000,
        "pengeluaran" => 0,
    ),
    array(
        "tanggal" => "16-02-2023",
        "kategori" => "belanja modal",
        "keterangan" => "tes card tahun",
        "pemasukan" => 100000,
        "pengeluaran" => 0,
    ),
    array(
        "tanggal" => "24-03-2023",
        "kategori" => "pembayaran pesanan",
        "keterangan" => "-",
        "pemasukan" => 24032023,
        "pengeluaran" => 0,
    ),

);

// Menghitung total pemasukan dan pengeluaran
$totalPemasukan = 0;
$totalPengeluaran = 0;
foreach ($barang as $item) {
    $totalPemasukan += $item["pemasukan"];
    $totalPengeluaran += $item["pengeluaran"];
}

// Menghitung saldo
$saldo = $totalPemasukan - $totalPengeluaran;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RadiShop</title>
    <style>
        * {
            font-family: Arial, Helvetica, sans-serif !important;

        }

        nav {
            background: black;
            margin-bottom: 15px;
            padding: 10px;
            padding-bottom: 28px;
            padding-left: 15px;
            font-size: larger;
        }

        nav a {
            padding: 5px;
            font-weight: bold;
            font-size: larger;
        }

        a {
            text-decoration: none;
            color: white;
        }

        table {
            border-collapse: collapse;
            width: 85%;
        }

        table,
        tr,
        th,
        td {
            border: 1px solid black;
        }

        footer {
            background: black;
            color: white;
            margin-bottom: 15px;
            padding: 10px;
            padding-bottom: 20px;
            padding-left: 15px;
            font-size: large;
            bottom: 0;
            width: 100%;
            position: absolute;
        }
    </style>

</head>

<body>


    <?php
    include("header.php");
    ?>
    <h1>Report</h1>
    <table>
        <tr>
            <th colspan="4"></th>
            <th colspan="2">JENIS</th>
        </tr>
        <tr>
            <th>NO</th>
            <th>TANGGAL</th>
            <th>KATEGORI</th>
            <th>KETERANGAN</th>
            <th>PEMASUKAN</th>
            <th>PENGELUARAN</th>
        </tr>
        <?php
        $no = 1;
        foreach ($barang as $item) {
            ?>
            <tr>
                <td align="center">
                    <?php echo $no++; ?>
                </td>
                <td align="center">
                    <?php echo $item["tanggal"]; ?>
                </td>
                <td>
                    <?php echo $item["kategori"]; ?>
                </td>
                <td>
                    <?php echo $item["keterangan"]; ?>
                </td>
                <td>Rp
                    <?php echo number_format($item["pemasukan"], 0, ",", "."); ?>
                </td>
                <td>Rp
                    <?php echo number_format($item["pengeluaran"], 0, ",", "."); ?>
                </td>
            </tr>
        <?php } ?>
        <tr>
            <th colspan="4" align="right">TOTAL</th>
            <th align="center" style="color: green;">Rp
                <?php echo number_format($totalPemasukan, 0, ",", "."); ?>,-
            </th>
            <th align="center" style="color: red;">Rp
                <?php echo number_format($totalPengeluaran, 0, ",", "."); ?>,-
            </th>
        </tr>
        <tr>
            <th colspan="4" align="right">SALDO</th>
            <th colspan="2" align="center" style="background-color: #4682B4; color:azure">Rp
                <?php echo number_format($saldo, 0, ",", "."); ?>,-
            </th>
        </tr>
    </table>
    <?php
    include("footer.php");
    ?>

</body>

</html>