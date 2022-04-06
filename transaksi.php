<!DOCTYPE html>
<html>
<head>
            <title>Geprek Bensu</title>
            <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
       
    </div>
    <div class="header">
        
        <table width="100%">
            <tr>
                <td><div class="judul"><h1>Geprek Bensu</h1></div></td>

                <td><div class="Link">
                <h2><a href=home.html>Home</a>
                <a href=transaksi.html>Transaksi</a>
                <a href=tambahfoto.php>Tambah Foto</a></h2>
                </div></td>
            </tr>
            </table>
             </div>

        <h3>Hitung Transaksi</h3>
    
        
        <?php
    $nama = $_POST['nama'];
    $status = $_POST['status'];
    $menu = $_POST['menu'];
    $jumlah = $_POST['jumlah'];
    
    if($status == "Member"){
        if($menu == "Paket 1"){
            $harga = 20000;
            if($jumlah == 1){
                $total = $harga * $jumlah;
                $diskon = ($harga * 0.05)*$jumlah;
                $bayar = $total - $diskon;
            }else if($jumlah == 2 || $jumlah == 3){
                $total = $harga * $jumlah;
                $diskon = ($harga * 0.07)*$jumlah;
                $bayar = $total - $diskon;
            }else if($jumlah > 3){
                $total = $harga * $jumlah;
                $diskon = ($harga * 0.10)*$jumlah;
                $bayar = $total - $diskon;
            }
      
        }
        }else if($menu == "Paket 2"){
            $harga = 30000;
            if($jumlah == 1){
                $total = $harga * $jumlah;
                $diskon = ($harga * 0.05)*$jumlah;
                $bayar = $total - $diskon;
            }else if($jumlah == 2 || $jumlah == 3){
                $total = $harga * $jumlah;
                $diskon = ($harga * 0.07)*$jumlah;
                $bayar = $total - $diskon;
            }else if($jumlah > 3){
                $total = $harga * $jumlah;
                $diskon = ($harga * 0.10)*$jumlah;
                $bayar = $total - $diskon;
            }
        }else if($menu == "Paket 3"){
            $harga = 50000;
            if($jumlah == 1){
                $total = $harga * $jumlah;
                $diskon = ($harga * 0.05)*$jumlah;
                $bayar = $total - $diskon;
            }else if($jumlah == 2 || $jumlah == 3){
                $total = $harga * $jumlah;
                $diskon = ($harga * 0.07)*$jumlah;
                $bayar = $total - $diskon;
            }else if($jumlah > 3){
                $total = $harga * $jumlah;
                $diskon = ($harga * 0.10)*$jumlah;
                $bayar = $total - $diskon;
            }
        }
    else if($status == "Non-Member"){
        if($menu == "Paket 1"){
            $harga = 20000;
            if($jumlah >=1 && $jumlah <=5){
                $total = $harga * $jumlah;
                $diskon = 0;
                $bayar = $total - $diskon;
            }else if($jumlah >=6 || $jumlah <=10){
                $total = $harga * $jumlah;
                $diskon = $total * 0.05;
                $bayar = $total - $diskon;
            }else if($jumlah > 10){
                $total = $harga * $jumlah;
                $diskon = $total * 0.07;
                $bayar = $total - $diskon;
            }
        }else if($menu == "Paket 2"){
            $harga = 30000;
            if($jumlah >=1 && $jumlah <=5){
                $total = $harga * $jumlah;
                $diskon = 0;
                $bayar = $total - $diskon;
            }else if($jumlah >=6 || $jumlah <=10){
                $total = $harga * $jumlah;
                $diskon = $total * 0.05;
                $bayar = $total - $diskon;
            }else if($jumlah > 10){
                $total = $harga * $jumlah;
                $diskon = $total * 0.07;
                $bayar = $total - $diskon;
            }
        }else if($menu == "Paket 3"){
            $harga = 50000;
            if($jumlah >=1 && $jumlah <=5){
                $total = $harga * $jumlah;
                $diskon = 0;
                $bayar = $total - $diskon;
            }else if($jumlah >=6 || $jumlah <=10){
                $total = $harga * $jumlah;
                $diskon = $total * 0.05;
                $bayar = $total - $diskon;
            }else if($jumlah > 10){
                $total = $harga * $jumlah;
                $diskon = $total * 0.07;
                $bayar = $total - $diskon;
            }
        }
    }
?>
    <div class="Output">
        <h2> Total Transaksi</h2>
        <br><br>
        <table>
            <tr>
                <td>Nama Pembeli </td>
                <td>: <?php echo $nama ?></td>
            </tr>
            <tr>
                <td>Status Pembeli </td>
                <td>: <?php echo $status ?></td>
            </tr>
            <tr>
                <td>Total Harga </td>
                <td>: <?php echo $total ?></td>
            </tr>
            <tr>
                <td>Total Diskon </td>
                <td>: <?php echo $diskon ?></td>
            </tr>
            </table>
            <br><br>
            <h2 style=" color : red;"> Total yang harus dibayarkan : <?php echo $bayar?> 
            <div class="footer">
            <p href="copyright @ belajar CSS">Geprek Bensu</p>
        </div>
        </body>
        </html>