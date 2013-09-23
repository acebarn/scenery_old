<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;

?>

<div class="container-fluid">


    <header>
        <h1>Scenery Bildergalerie</h1>
        <p>Herzlich wilkommen bei Scenery! <br> Wenn du glaubst, wir seien Image-Hoster, solltest du dich dringendst von dieser Seite entfernen, da wir bereits die Hunde auf dich losgelassen haben...<br>Falls du nur gute Fotografie bestaunen willst, bist du immernoch herzlich willkommen!</p>
        
       <blockquote>
            <p>Warum andere Galerien benutzen, wenn man die Scenery-Bildergalerie benutzen kann??? Außerdem sind hier die Bilder besser und wir haben Schokokekse!</p>
        </blockquote>
        <p>
            <button id="start-slideshow" class="btn btn-large btn-success" data-slideshow="5000" data-target="#modal-gallery" data-selector="#gallery [data-gallery=gallery]">Starte eine Diashow</button>
            <button id="toggle-fullscreen" class="btn btn-large btn-primary" data-toggle="button">Vollbildmodus</button>
        </p>
    </header>
		
   <div id="gallery" data-toggle="modal-gallery" data-target="#modal-gallery">

<?php
			$bilder = scandir('images'); //Den Ordner "images" auslesen
			echo "<div class=\"row\">";
			foreach ($bilder as $datei)
			{
				if (!is_dir('images/'.$datei) && $datei != "." && $datei != ".."  && $datei != "_notes" && pathinfo($datei)['basename'] != "Thumbs.db" &&  (pathinfo($datei)['extension'] == 'jpg' || pathinfo($datei)['extension'] == 'JPG' ))
				{
					echo "	<div class=\"span2\" name = \"elementGalerie\" >";
					echo "		<a href=\"images/".$datei."\" class=\"thumbnail\" data-gallery=\"gallery\"><img src=\"images/".$datei."\" name = \"pic\" width=\"200\" height=\"200\"></a>";
					echo "	</div>";
				}
			}
			echo "</div>";
	

	?>;
	
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

