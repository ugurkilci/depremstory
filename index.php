<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Deprem Story</title>
    <meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1"/>
    <meta name="description" content="Twitter'da yavaşlama olduğu için insanların hızlıca yardımları Instagram storysi olarak paylaşabilecekleri araç."/>
    <link rel="canonical" href="_URL" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Deprem Story" />
    <meta property="og:description" content="Twitter'da yavaşlama olduğu için insanların hızlıca yardımları Instagram storysi olarak paylaşabilecekleri araç." />
    <meta property="og:url" content="_URL" />
    <meta property="og:site_name" content="Deprem Story" />
    <meta property="og:image" content="_Image" />
    <meta property="og:image:secure_url" content="_Image" />
    <meta property="og:image:width" content="1600" />
    <meta property="og:image:height" content="900" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:description" content="Twitter'da yavaşlama olduğu için insanların hızlıca yardımları Instagram storysi olarak paylaşabilecekleri araç." />
    <meta name="twitter:title" content="Deprem Story" />
    <meta name="twitter:site" content="@ugur2nd" />
    <meta name="twitter:image" content="_Image" />
    <meta name="twitter:creator" content="@ugur2nd" />
    <meta name="google-site-verification" content="_GoogleVerify" />
    <meta name="MobileOptimized" content="510">
    <meta name="HandheldFriendly" content="true"/> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/> 

    <link rel="stylesheet" href="/depot/css/all.css">
    <link rel="stylesheet" href="/depot/css/normalize.min.css">
    <link rel="stylesheet" href="/depot/css/bootstrap.min.css">
    <link rel="stylesheet" href="/depot/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="/depot/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/style.css?v=<?=time()?>">

    <link rel="shortcut icon" type="image/ico" href="img/ico.ico"/>
</head>
<body>
    
  <div class="container">
    <div class="row">
        <div class="col-lg-12">
            <a href="index.php"><h1>Deprem Story</h1></a>
            <p>Twitter'da yavaşlama olduğu için insanların hızlıca yardımları Instagram storysi olarak paylaşabilecekleri araç.</p>
            <a href="https://ugurkilci.com/projects/instagramstory/img.png?q=%22RT%20@diaryracon:%20%C4%B0smet%20karaokur%20bulvar%C4%B1%20hamidiye%20sitesi%20blok:1c/%20MARA%C5%9E%20SAATLERD%C4%B0R%20HABER%20ALINAMIYOR%20L%C3%9CTFEN%20YARDIM%20ED%C4%B0NDM%27den%20geldi.%20L%C3%BCtfen%20yayal%C4%B1m!#deprem%20#AC%C4%B0L%20#Enkaz%22" class="btn btn-secondary" target="_blank" rel="noopener noreferrer">Örnek Resim</a>
            <hr>

            <?php
            
                if($_POST) {
                    $message = htmlspecialchars( $_POST["message"] );
                    if(
                        empty($message)
                    ){
                        echo '<p class="alert alert-warning">Lütfen boş bırakmayınız!</p>';
                    }else{
                        echo '<center>
                        <a href="img.png?q='.$message.'" class="btn btn-dark w-100 mb-2" target="_blank" download>İndir</a>
                        <br>
                        <img src="img.png?q='.$message.'" style="width:50%;"></center>';
                    }
                }
            
            ?>
            <form action="" method="post">
                <strong>Mesaj:</strong>
                <textarea name="message" class="form-control"></textarea>
                <input type="submit" class="btn btn-danger" value="Storye dönüştür">
            </form>
        </div>
    </div>
  </div>

</body>
</html>