<?php
/* @var $this SiteController */
$this->pageTitle = Yii::app ()->name;

?>

<div class="container">
	<header>






		<h1 align=center>Scenery - Like A Picture</h1>
		<p align="center">Herzlich wilkommen bei der besten Bilderwebseite der
			Welt!</p>

		<p>
			<br> <br> <br> <br>
		
		
		<h2 >Top-Hits:</h2>
		</p>




	</header>

	<div class="row" id="gallery">
		<div class="co-md-12">

			<!-- 		für die gallery -->
			<div id="blueimp-gallery" class="blueimp-gallery">
				<div class="slides"></div>
				<h3 class="title"></h3>
				<a class="prev">‹</a> <a class="next">›</a> <a class="close">×</a> <a
					class="play-pause"></a>
				<ol class="indicator"></ol>
			</div>
		
		
		<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
    <div class="slides"></div>
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
</div>
		
		
		
<div id="links">
<?php
$bilder = scandir ( 'images' ); // Den Ordner "images" auslesen

foreach ( $bilder as $datei ) {
	if (!is_dir('images/'.$datei) && $datei != "." && $datei != ".."  && $datei != "_notes" && pathinfo($datei)['basename'] != "Thumbs.db" &&  (pathinfo($datei)['extension'] == 'jpg' || pathinfo($datei)['extension'] == 'JPG' )){
		echo "	<span class=\"block\" >";
	 
		echo "		<a href=\"images/" . $datei . "\" class=\"thumbnail\" data-gallery=\"gallery\"><img src=\"images/" . $datei . "\"  width=\"200\" height=\"200\" title=\"tololololo\"></a>";
		echo "	</span>";
	}
}

?>
	</div>
	</div>
<script>
document.getElementById('links').onclick = function (event) {
    event = event || window.event;
    var target = event.target || event.srcElement,
        link = target.src ? target.parentNode : target,
        options = {index: link, event: event},
        links = this.getElementsByTagName('a');
    blueimp.Gallery(links, options);
};
</script>
	</div>