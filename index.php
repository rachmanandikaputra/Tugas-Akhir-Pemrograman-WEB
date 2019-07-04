<html>
<head>
<title>TUGAS PROYEK</title> 
<link href="css.css" type="text/css" rel="stylesheet"> <!-- memanggil css -->
<script type="text/javascript" src="google.js"></script> <!-- memanggil JS google -->
</head>
<body>
<div class="wrap">
    <div class="header"> <!-- bagian header -->
            <h1>TUGAS AKHIR PEMROGRAMAN WEB</h1> <!-- isi headernya -->
            <li id="hasil"><script type="text/javascript" src="tanggal.js"></script></li> <!-- untuk memanggil file JS tanggal -->
    </div>
        <div class="menu"> <!-- bagian menu -->
            <ul>
                <li><a href="index.php?page=beranda">Beranda</a></li> <!-- jika pilih beranda muncul beranda -->
                <li><a href="index.php?page=data">Data Diri</a></li> <!-- jika pilih data diri muncul data diri -->
                <li><a href="index.php?page=form">Pengisian</a></li> <!-- jika pilih pengisian muncul pengisian -->
                <li><form name="google" style="size: 10"> google : 
                    <input type="text" name="key" size="10">
                    <input type="submit" name="submit" value="google" onclick="cari()">
                    </form></li> <!-- menuju ke pencarian google -->
            </ul>
    </div>
    <div class="main"> <!-- bagian menampilkan file-file lain -->
        <div class="content"> <!-- isi dari file-file main -->
            <?php
            if(isset($_GET['page'])){ //menangkap page
            $page = $_GET['page']; //menyimpan page ke varabel page

            switch($page){ //jika pilih page 

            case 'beranda' : //jika masuk page beranda akan masuk ke beranda.html
            include 'beranda.html';
            break;

            case 'data' : //jika masuk page data akan masuk ke data.html
            include 'data.html';
            break;

            case 'form' : //jika masuk page form akan masuk ke form.php
            include 'form.php';
            break;
            default;
        }

        }
            ?>
        </div>
  
    </div>
  
    <div class="footer"> <!-- untuk bagian footer -->
        <center><p>UAD</p></center> <!-- isi footer -->
    </div>
  
</div>
</body>
</html>