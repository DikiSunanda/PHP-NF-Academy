<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


<div class="container">
    <div class="row">
        <div class="col">
            <div class="judul mt-4 col-9">
                <figure class="text-center">
                    <blockquote class="blockquote">
                        <p>Toko Elektronik</p>
                    </blockquote>
                    <figcaption class="blockquote-footer">
                        Form pembelian barang<cite title="Source Title">&nbsp;Toko Elektronik</cite>
                    </figcaption>
                </figure>
            </div>
            <form action="tugas2.php" method="POST">
                <div class="form-group row col-12">
                    <label for="nama" class="col-4 col-form-label">Nama</label>
                    <div class="col-6">
                        <input id="nama" name="nama" placeholder="Masukan Nama Anda" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row col-12">
                    <label for="produkPilihan" class="col-4 col-form-label ">Pilihan Produk</label>
                    <div class="col-6">
                        <select id="produkPilihan" name="produkPilihan" class="custom-select">
                            <option value="">===== Pilih Produk =====</option>
                            <option value="AC">AC</option>
                            <option value="TV">TV</option>
                            <option value="Kulkas">Kulkas</option>
                            <option value="Laptop">Laptop</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row col-12">
                    <label for="JmlBeli" class="col-4 col-form-label">Jumlah Produk</label>
                    <div class="col-6">
                        <input id="jmlBeli" name="jmlBeli" placeholder="Masukan Jumlah Produk" type="number"
                            class="form-control min=0 max=5"><br>
                        <label for="" class="text-danger"><i>* Maksimal Pembelian 5 Pcs Setiap Barang</i></label>
                    </div>
                </div>
                <div class="form-group row col-8">
                    <div class="offset-6 col-8">
                        <button name="proses" type="submit" class="btn btn-primary">Beli</button>
                        <button name="unproses" type="reset" class="btn btn-danger">Batal</button>
                    </div>
                </div>
            </form>

        </div>
        <div class="col">
            <table class="table table-success offset-3 col-8 mt-4">
                <tr class="table-primary">
                    <th colspan="2" class="text-center">Data Harga Barang</th>
                </tr>
                <tr>
                    <td>AC</td>
                    <td>Rp. 1.200.000</td>
                </tr>
                <tr>
                    <td>TV</td>
                    <td>Rp. 3.000.000</td>
                </tr>
                <tr>
                    <td>Kulkas</td>
                    <td>Rp. 5.200.000</td>
                </tr>
                <tr>
                    <td>Laptop</td>
                    <td>Rp. 6.800.000</td>
            </table>
        </div>
    </div>








    <?php

    $namaPelanggan = $_POST['nama'];
    $produkPilihan = $_POST['produkPilihan'];
    $proses = $_POST['proses'];
    //IF Produk Pilihan
    if ($produkPilihan == 'AC')
        $hargaSatuan = 1200000;
    else if ($produkPilihan == 'Kulkas')
        $hargaSatuan = 5200000;
    else if ($produkPilihan == 'TV')
        $hargaSatuan = 3000000;
    else if ($produkPilihan == 'Laptop')
        $hargaSatuan = 6800000;
    else
        $hargaSatuan;


    //Switch Case Jumlah Beli
    $jmlBeli = $_POST['jmlBeli'];
    switch ($jmlBeli) {
        case 1:
            $totalBelanja = $hargaSatuan * 1;
            break;
        case 2:
            $totalBelanja = $hargaSatuan * 2;
            break;
        case 3:
            $totalBelanja = $hargaSatuan * 3;
            break;
        case 4:
            $totalBelanja = $hargaSatuan * 4;
            break;
        case 5:
            $totalBelanja = $hargaSatuan * 5;
            break;
        case $jmlBeli > 5:
            $pesanBelanja = "<script>alert('Anda melebihi maksimal pembelian !');</script>";
            break;
    }



    //Diskon & PPN
    $diskon = $totalBelanja * 0.2;
    $ppn = ($totalBelanja - $diskon) * 0.1;

    //hargaBersih
    $hargaBersih = ($totalBelanja - $diskon) + $ppn;


    if (isset($proses)) {
        ?>


        <table class="table table-success col-8 mt-4 offset-2">
            <tr class="table-primary">
                <th colspan="2" class="text-center">Data Pembelian</th>
            </tr>
            <tr>
                <td>Nama Pelanggan</td>
                <td>
                    <?php echo $_POST['nama']; ?>
                </td>
            </tr>
            <tr>
                <td>Produk Pilihan</td>
                <td>
                    <?php echo $_POST['produkPilihan']; ?>
                </td>
            </tr>
            <tr>
                <td>Jumlah Beli</td>
                <td>
                    <?php echo $_POST['jmlBeli']; ?> Pcs
                </td>
            </tr>
            <tr>
                <td>Harga Satuan</td>
                <td>
                    Rp.
                    <?= number_format($hargaSatuan, 0, ',', '.'); ?>
                </td>
            </tr>
            <tr>
                <td>Total Belanja</td>
                <td>
                    Rp.
                    <?= number_format($totalBelanja, 0, ',', '.'); ?>
                </td>
            </tr>
            <tr>
                <td>Potongan Diskon <b>20%</b></td>
                <td>
                    Rp.
                    <?= number_format($diskon, 0, ',', '.'); ?>
                </td>
            </tr>
            <tr>
                <td>PPN</td>
                <td>
                    Rp.
                    <?= number_format($ppn, 0, ',', '.'); ?>
                </td>
            </tr>
            <tr class="table-primary">
                <td>Total Bayar <b>(Harga Bersih)</b></td>
                <td>
                    Rp.
                    <?= number_format($hargaBersih, 0, ',', '.'); ?>
                </td>
            </tr>
        </table>

        <?php
        echo $pesanBelanja;
    } ?>