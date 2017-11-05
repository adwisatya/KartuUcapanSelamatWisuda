<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=100">
    <title>Selamat Wisuda</title>

    <!-- Bootstrap core CSS -->
    <link href="index_files/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="index_files/font-awesome.css" rel="stylesheet">
	
	<!-- Icon -->
    <!-- Custom styles for this template -->
    <link href="index_files/style.css" rel="stylesheet">
    <link href="index_files/style-responsive.css" rel="stylesheet">
    <link href="index_files/keyboard-dark.css" rel="stylesheet">
    <script src="index_files/jquery_002.js"></script>
    <script src="index_files/carousel.js"></script>
    <script src="index_files/bootstrap.js"></script>
    <script src="index_files/jquery-ui-1.js"></script>
    <script src="index_files/jquery_004.js"></script>
    <script src="index_files/jquery.js"></script>
    <script src="index_files/main.js"></script>
    <script src="index_files/bootbox.js"></script>
    <script type="text/javascript" src="index_files/jquery_003.js"></script>
</head>

<body>

<div>
    <div class="container">
        <div class="transbox">
            <div class="transbox-wrap">
                <?php
                    if(!isset($_POST['submit'])){
                ?>
                <form method="POST" action="">
                    <div class="form-group">
                        <label for="usr">Enter your code here:</label>
                        <input type="text" class="form-control" id="usr" name="code">
                    </div>
                        <div class="form-group">
                        <input type="submit" class="form-control" id="submit" value="Aku mau lihat!" name="submit">
                    </div>
                </form>
                <?php        
                    }else{
                        $kode = $_POST['code'];
                        $rawData = file_get_contents("http://canada.bangsatya.com:3000/ucapan?id=$kode");
                        $arrayOfData = json_decode($rawData);
                        echo "<p align=\"justify\">".$arrayOfData[0]->pesan."</p>";
                        foreach($arrayOfData[0]->gambar as $gambar){
                            //echo "<br/><img src=\"http://dari.aryyadwisatya.com/images/$gambar\">";
                            echo "<br><center><img class=\"img-responsive\" src=\"images/$kode-$gambar.jpg\"></center>";
                        }
                ?>
                <?php
                    }
                ?>
            </div>
        </div>
    </div>
</div>
</body></html>