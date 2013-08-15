<!DOCTYPE HTML>

<html lang="de">
<head>
<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<![endif]-->
<meta charset="utf-8">
<title>Bootstrap Image Gallery</title>
<meta name="description" content="Bootstrap Image Gallery is an extension to the Modal dialog of Twitter's Bootstrap toolkit, to ease navigation between a set of gallery images. It features mouse and keyboard navigation, transition effects, fullscreen mode and slideshow functionality.">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/style.css">
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="css/bootstrap-responsive.css">
<!--[if lt IE 7]><link rel="stylesheet" href="css/bootstrap-ie6.css"><![endif]-->
<link rel="stylesheet" href="css/bootstrap-image-gallery.css">
</head>
<body>
<div class="navbar navbar-fixed-top navbar-inverse">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="#">Eine Bildergalerie mit Bootstrap</a>
            <div class="nav-collapse">
                <ul class="nav">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Bildergalerie</a></li>
                    <li><a href="#">Über uns</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <header>
        <h1>Scenery Bildergalerie</h1>
        <blockquote>
            <p>Warum andere Galerien benutzen, wenn man die Scenery-Bildergalerie benutzen kann??? Außerdem sind hier die Bilder besser und wir haben Schokokekse!</p>
        </blockquote>
        <p>
            <button id="start-slideshow" class="btn btn-large btn-success" data-slideshow="5000" data-target="#modal-gallery" data-selector="#gallery [data-gallery=gallery]">Starte eine Diashow</button>
            <button id="toggle-fullscreen" class="btn btn-large btn-primary" data-toggle="button">Vollbildmodus</button>
        </p>
    </header>
		
    <div id="gallery" data-toggle="modal-gallery" data-target="#modal-gallery">
		<!--
		<?php
			$bilder = scandir('images'); //Den Ordner "images" auslesen
			
			foreach ($bilder as $datei)
			{
				echo "<a href=\"images/".$datei."\" data-gallery=\"gallery\">".$datei."</a>";
				echo "<br>";
			}
		?>
		-->
	
	<?php
			$bilder = scandir('images'); //Den Ordner "images" auslesen
			echo "<div class=\"row\">";
			foreach ($bilder as $datei)
			{
				if (!is_dir('images/'.$datei) && $datei != "." && $datei != ".."  && $datei != "_notes" && pathinfo($datei)['basename'] != "Thumbs.db" &&  (pathinfo($datei)['extension'] == 'jpg' || pathinfo($datei)['extension'] == 'JPG' ))
				{
					echo "	<div class=\"span2\">";
					echo "		<a href=\"images/".$datei."\" class=\"thumbnail\" data-gallery=\"gallery\"><img src=\"images/".$datei."\" width=\"200\" height=\"200\"></a>";
					echo "	</div>";
				}
				
				
			}
			echo "</div>";
	?>
	</div>
	
	<fieldset>
		<legend>Ein Bild hochladen</legend>
		<div class="form-group">
		  <label for="exampleInputFile">Bilder-Upload</label>
		  <input type="file" id="exampleInputFile" name="datei">
		  <p class="help-block">Lade hier einfach dein Bild hoch.</p>	
			<br>
		</div>
		<button type="submit" class="btn btn-default">Los geht's</button>
	</fieldset>

	<?php
		move_uploaded_file($_FILES['datei']['tmp_name'], "images");
	?> 
	
<!-- modal-gallery is the modal dialog used for the image gallery -->
<div id="modal-gallery" class="modal modal-gallery hide fade" tabindex="-1">
    <div class="modal-header">
        <a class="close" data-dismiss="modal">&times;</a>
        <h3 class="modal-title"></h3>
    </div>
    <div class="modal-body"><div class="modal-image"></div></div>
    <div class="modal-footer">
		<a class="btn btn-warning" id="btn_leer" data-fehler="Dieser Button ist zurzeit nicht belegt! #Hashtag">
			<span>Vollbild</span>
		</a>
        <a class="btn modal-download" target="_blank">
            <i class="icon-download"></i>
            <span>Download</span>
        </a>
        <a class="btn btn-success modal-play modal-slideshow" data-slideshow="5000">
            <i class="icon-play icon-white"></i>
            <span>Diashow</span>
        </a>
        <a class="btn btn-info modal-prev">
            <i class="icon-arrow-left icon-white"></i>
            <span>Vorheriges</span>
        </a>
        <a class="btn btn-primary modal-next">
            <span>Nägschdes</span>
            <i class="icon-arrow-right icon-white"></i>
        </a>
    </div>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/load-image.js"></script>
<script src="js/bootstrap-image-gallery.js"></script><!---->
<script src="js/main.js"></script>
</body> 
</html>
