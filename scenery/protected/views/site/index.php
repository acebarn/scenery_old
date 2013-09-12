<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;

//  $baseUrl = Yii::app()->baseUrl;
//  $cs = Yii::app()->getClientScript();
//  $cs->registerCssFile($baseUrl.'/css/bootstrap.css');
//  $cs->registerCssFile($baseUrl.'/css/bootstrap-image-gallery.css');
//  $cs->registerCssFile($baseUrl.'/css/bootstrap.min.css');

// $cs->registerScriptFile($baseUrl.'/js/bootstrap.js');
// $cs->registerScriptFile($baseUrl.'/js/load-image.js');
// $cs->registerScriptFile($baseUrl.'/js/bootstrap-image-gallery.js');
// $cs->registerScriptFile($baseUrl.'/js/main.js');
// $cs->registerScriptFile('//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js');

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
	
	
	
	
	
	
	
	
<script type="text/javascript">
	function Fensterweite () {
	  if (window.innerWidth) {
		return window.innerWidth;
	  } else if (document.body && document.body.offsetWidth) {
		return document.body.offsetWidth;
	  } else {
		return 0;
	  }
	}


	function neuAufbau () {
	  if (Weite != Fensterweite()){


		location.href="index.php?zellennummer="+Zellennummer; 


		//location.href = location.href;


		}
	}

	/* Überwachung von Netscape initialisieren */
	if (!window.Weite && window.innerWidth) {
	  window.onresize = neuAufbau;
	  Weite = Fensterweite();
	   Zellennummer = 2;
		if(Weite < 1000){
			Zellennummer = 1
		}
		else
			{
			Zellennummer = 2;
		//	alert("Hallo");
		}

	}
</script>

<body>
<script type="text/javascript">
	/* Überwachung von Internet Explorer initialisieren */
	if (!window.Weite && document.body && document.body.offsetWidth) {


	 window.onresize = neuAufbau;
	  Weite = Fensterweite();
	   Zellennummer = 2;
		if(Weite > 1000){
			Zellennummer = 1
		}
		else 
			{
			Zellennummer = 2;
			//alert("Hallo");
		}	 

	}
</script>
<div id="Beispiel" style="position:absolute; top:100px; left:100px; border:solid 1px #000000;">
Text
</div>
<script type="text/javascript">
	document.write("Weite: " + Weite);
	

</script>
<?php
	//variable holen
	if(isset($_GET['zellennummer'])) {
 
			$zellennummer = $_GET['zellennummer'];
			echo "Zellennumer".$zellennummer;
			$bilder = scandir('images'); //Den Ordner "images" auslesen
			echo "<div class=\"row\">";
			foreach ($bilder as $datei)
			{
				if (!is_dir('images/'.$datei) && $datei != "." && $datei != ".."  && $datei != "_notes" && pathinfo($datei)['basename'] != "Thumbs.db" &&  (pathinfo($datei)['extension'] == 'jpg' || pathinfo($datei)['extension'] == 'JPG' ))
				{
					echo "	<div class=\"span".$zellennummer."\">";
					echo "		<a href=\"images/".$datei."\" class=\"thumbnail\" data-gallery=\"gallery\"><img src=\"images/".$datei."\" width=\"200\" height=\"200\"></a>";
					echo "	</div>";
				}
			}
			echo "</div>";
	}else{
	//falls keine zellennummer gesetzt ist
		echo "<SCRIPT LANGUAGE= \"javascript\">";
		echo "Weite = Fensterweite();
	   Zellennummer = 2;
		if(Weite > 1000){
			Zellennummer = 1
		}
		else 
			{
			Zellennummer = 2;
		
		}";	 
		
		echo "location.href=\"index.php?zellennummer=\"+Zellennummer; ;";
		echo "</SCRIPT>n";
		 echo "keine zeilennummer gesetzt-- -reload";
	}
	
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

