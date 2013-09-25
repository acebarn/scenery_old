<?php
/* @var $this SiteController */
$this->pageTitle = Yii::app ()->name;

?>

<div class="container">
	<header>
	
			
			
	
		 
		 	
		 	<h1 align=center>Scenery - Like A Picture</h1>
		 	<p align="center">
				Herzlich wilkommen bei der besten Bilderwebseite der Welt! 
			</p>
			
		<p>
			<br> 
			<br>
			<br>
			<br>
			<h2 align=center> Top-Hits </h2>
		</p>

		
	
		
	</header>

		<div class="row" id="gallery" >
		<div class="co-md-12" >

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

	</div>
	
	</div>
		