d<?php
$a1 = ['kode' => '1111', 'buah' => 'apel', 'harga' => 20000, 'jumlah' => 4];
$a2 = ['kode' => '2222', 'buah' => 'pisang', 'harga' => 25000, 'jumlah' => 5];
$a3 = ['kode' => '3333', 'buah' => 'jambu', 'harga' => 30000, 'jumlah' => 6];
$a4 = ['kode' => '4444', 'buah' => 'mangga', 'harga' => 35000, 'jumlah' => 7];
$a5 = ['kode' => '5555', 'buah' => 'durian', 'harga' => 40000, 'jumlah' => 8];

$ar_buah = [$a1, $a2, $a3, $a4, $a5];

//Deklarasi nama nama judul pada tabel header menggunakan looping array
$ar_judul = ['No.', 'Kode', 'Buah', 'Harga', 'Jumlah Beli', 'Harga Kotor', 'Diskon', 'Harga Bayar'];

//Fungsi agregat di array 
$jumlahHarga = array_column($ar_buah, 'harga');
$hargaTotal = array_sum($jumlahHarga);
$hargaTertinggi = max($jumlahHarga);
$hargaTerendah = min($jumlahHarga);
$jumlahTransaksi = count($ar_buah);
$hargaRata2 = $hargaTotal / $jumlahTransaksi;


$keterangan = [
    'Harga Total' => $hargaTotal,
    'Harga Tertinggi' => $hargaTertinggi,
    'Harga Terendah' => $hargaTerendah,
    'Jumlah Buah' => $jumlahTransaksi,
    'Rata - Rata Harga' => $hargaRata2
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Daftar Buah - Buahan</title>
</head>

<body>
    <h3>
        <center>Daftar Buah - Buahan</center>
    </h3>
    <table border="1" cellspacing="2" cellpadding="15" width="100%">
        <thead>
            <tr>
                <?php
                foreach ($ar_judul as $judul) { ?>
                    <th>
                        <?= $judul ?>
                    </th>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($ar_buah as $buah) {

                //Bruto = Harga buah * Jumlah
                $bruto = $buah['harga'] * $buah['jumlah'];

                //Diskon = Jika buah (Durian) dengan jumlah beli >= 5 Dapat diskon 20% selain itu 10%
                $diskon = ($buah['buah'] == 'durian' && $buah['jumlah'] >= 5) ? 0.2 : 0.1;
                $hargaDiskon = $diskon * $bruto;
                $hargaBayar = $bruto - $hargaDiskon;
                ?>
                <tr>
                    <td>
                        <?= $no++ ?>
                    </td>
                    <td>
                        <?= $buah['kode'] ?>
                    </td>
                    <td>
                        <?= $buah['buah'] ?>
                    </td>
                    <td>
                        <?= $buah['harga'] ?>
                    </td>
                    <td>
                        <?= $buah['jumlah'] ?>
                    </td>
                    <td>
                        <?= $bruto ?>
                    </td>
                    <td>
                        <?= $hargaDiskon ?>
                    </td>
                    <td>
                        <?= $hargaBayar ?>
                    </td>
                </tr>
                <?php
            }
            ?>
        </tbody>
        <tfoot>
            <?php
            foreach ($keterangan as $ket => $hasil) {
                ?>
                <tr>
                    <th colspan="3">
                        <?= $ket ?>
                    </th>
                    <th colspan="5">
                        <?= $hasil ?>
                    </th>
                </tr>

                <?php
            }
            ?>
        </tfoot>
    </table>
</body>

</html>