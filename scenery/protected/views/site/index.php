<?php
/* @var $this SiteController */
$this->pageTitle = Yii::app ()->name;

?>

<div class="container">
	<header>
		<h1>Scenery - Like A Picture</h1>
		<p>
			Herzlich wilkommen bei Scenery!
			<br> 
			<br>
			<br>
			Die Plattform mit den wohl besten Bildern der Welt ! 
			<br>
			<br>
			<br>
			<h2> Top-Hits: </h2>
		</p>

		
	
		
	</header>
	<div data-toggle="modal-gallery"
		data-target="#modal-gallery">
		<div class="row" id="gallery">
		<div class="co-md-12">

<?php
$bilder = scandir ( 'images' ); // Den Ordner "images" auslesen

foreach ( $bilder as $datei ) {
	if (!is_dir('images/'.$datei) && $datei != "." && $datei != ".."  && $datei != "_notes" && pathinfo($datei)['basename'] != "Thumbs.db" &&  (pathinfo($datei)['extension'] == 'jpg' || pathinfo($datei)['extension'] == 'JPG' ))
	{
		echo "	<span class=\"block\" >";
		echo "		<a href=\"images/" . $datei . "\" class=\"thumbnail\" data-gallery=\"gallery\"><img src=\"images/" . $datei . "\"  width=\"200\" height=\"200\"></a>";
		echo "	</span>";
	}
}

?>
	<p>
			<button id="start-slideshow" class="btn btn-large btn-success"
				data-slideshow="5000" data-target="#modal-gallery"
				data-selector="#gallery [data-gallery=gallery]">Starte eine Diashow</button>
			<button id="toggle-fullscreen" class="btn btn-large btn-primary"
				data-toggle="button">Vollbildmodus</button>
		</p>


	</div>
	</div>
		<!-- modal-gallery is the modal dialog used for the image gallery -->
		<div id="modal-gallery" class="modal modal-gallery hide fade"
			tabindex="-1">
			<div class="modal-header">
				<a class="close" data-dismiss="modal">&times;</a>
				<h3 class="modal-title"></h3>
			</div>
			<div class="modal-body">
				<div class="modal-image"></div>
			</div>
			<div class="modal-footer">
				<a class="btn btn-warning" id="btn_leer"
					data-fehler="Dieser Button ist zurzeit nicht belegt! #Hashtag"> <span>Vollbild</span>
				</a> <a class="btn modal-download" target="_blank"> <i
					class="icon-download"></i> <span>Bild Herunterladen</span>
				</a> <a class="btn btn-success modal-play modal-slideshow"
					data-slideshow="5000"> <i class="icon-play icon-white"></i> <span>Diashow</span>
				</a> <a class="btn btn-info modal-prev"> <i
					class="icon-arrow-left icon-white"></i> <span>Vorheriges</span>
				</a> <a class="btn btn-primary modal-next"> <span>Nächstes</span> <i
					class="icon-arrow-right icon-white"></i>
				</a>
			</div>
		</div>