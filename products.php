<?php
// Array data barang
$barang = array(
    array(
        "kode" => "B001",
        "nama" => "Laptop Asus",
        "harga" => 9000000,
        "jumlah" => 3,
    ),
    array(
        "kode" => "B002",
        "nama" => "Keyboard Logitech",
        "harga" => 850000,
        "jumlah" => 4,
    ),
    array(
        "kode" => "B003",
        "nama" => "Speaker",
        "harga" => 500000,
        "jumlah" => 6,
    ),
    array(
        "kode" => "B004",
        "nama" => "Printer Epson",
        "harga" => 3000000,
        "jumlah" => 7,
    ),
);

// Fungsi untuk menghitung sub total
function hitungSubtotal($harga, $jumlah)
{
    return $harga * $jumlah;
}

// Menghitung total
$total = 0;
foreach ($barang as $item) {
    $subtotal = hitungSubtotal($item["harga"], $item["jumlah"]);
    $total += $subtotal;
}
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
    <h1>Data Barang</h1>
    <table>
        <tr><b>
                <th align="center">No</th>
                <th align="center">Kode</th>
                <th align="left">Nama Barang</th>
                <th align="center">Harga</th>
                <th align="center">Jumlah</th>
                <th align="center">Sub Total</th>
            </b></tr>
        <?php
        $no = 1;
        foreach ($barang as $item) {
            $subtotal = hitungSubtotal($item["harga"], $item["jumlah"]);
            ?>
            <tr>
                <td align="left">
                    <?php echo $no++; ?>
                </td>
                <td>
                    <?php echo $item["kode"]; ?>
                </td>
                <td>
                    <?php echo $item["nama"]; ?>
                </td>
                <td align="right">Rp
                    <?php echo number_format($item["harga"], 0, ",", "."); ?>
                </td>
                <td align="center">
                    <?php echo $item["jumlah"]; ?>
                </td>
                <td align="right">Rp
                    <?php echo number_format($subtotal, 0, ",", "."); ?>
                </td>
            </tr>
        <?php } ?>
        <tr align="right">
            <th colspan="5">TOTAL</th>
            <th>Rp
                <?php echo number_format($total, 0, ",", "."); ?>
            </th>
        </tr>
    </table>
    <?php
    include("footer.php");
    ?>

</body>

</html>