<html>

    <head>
            <title>Foto Menu</title>
            <link rel="stylesheet" type="text/css" href="style.css">
            
    </head>
    <body>
       
        
       <div class="header">
        
        <table width="100%">
            <tr>
                <td><div class="judul"><h1>Geprek Bensu</h1></div></td>

                <td><div class="Link">
                <h2><a href="home.html">Home</a>
                <a href="transaksi.html">Transaksi</a>
                <a href=tambahfoto.html>Tambah Foto</a></h2>
                </div></td>
            </tr>
            </table>
             </div>
            <div class="middle">
                <h2>Menambahkan Foto Menu</h2><br>
                <form enctype="multipart/form-data" action="fileUpload.php" method="POST">
                    <p>Foto Menu :</p>
                    <input class ="file"name="uploadedfile" type="file"><br>
                    <br><br>
                    <input type="submit" value="Upload Foto">
                </form>
            </div>
    <?php
    $target_path ="Uploadfile/";

    $target_path =$target_path . basename(
    $_FILES['uploadedfile']['name']);

    if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'],$target_path)){
        echo "The file " . basename($_FILES['uploadedfile']['name'])." has been uploaded";
        }else{
        echo "There was an error uploading the file, please try again!";
    }
?>

                <div class="footer">
                <p href="copyright @ belajar CSS">Geprek Bensu</p>
            </div>
        </body>
</html>