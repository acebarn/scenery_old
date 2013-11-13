<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//DE" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="de" />
<!-- 	naechste Zeile ist Wichtig fuer die Responsive-Grid-Galliery -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- blueprint CSS framework -->	
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-theme.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-theme.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/navbar.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/flow_galery_style.css" />
	<!-- 	für die Gallerie  -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/blueimp-gallery.min.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>



	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "https://connect.facebook.net/de_DE/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<?php 
//Hier die Java-Skripte registrieren
$baseUrl = Yii::app()->request->baseUrl;  //Root-Pfad in Variable speichern
$cs = Yii::app()->getClientScript();   //Das Client-Skript anfordern
$cs->registerCoreScript('jquery');
$cs->registerScriptFile($baseUrl.'/js/bootstrap.js');
$cs->registerScriptFile($baseUrl.'/js/bootstrap.min.js');
// für die gallerie
$cs->registerScriptFile($baseUrl.'/js/blueimp-gallery.min.js');

?>


<div class="container" id="page">

<!--  	<div id="header">  -->
<!--		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div> -->
<!-- 	</div> -->

<!-- 	<div id="mainmenu"> -->

	<div class="navbar navbar-fixed-top navbar-inverse" >
	    <div class="navbar-inner">
	        <div class="container">
	            <a class="navbar-brand" href="<?php echo Yii::app()->homeUrl; ?>"><?php echo Yii::app()->name; ?></a>
	            <div class="navbar-collapse">	     
					<?php $this->widget('zii.widgets.CMenu',array(
						'items'=>array(
							array('label'=>'Galerie', 'url'=>array('/gallery/index')),
							array('label'=>'Über Uns', 'url'=>array('/site/page', 'view'=>'about')),
							array('label'=>'Kontakt', 'url'=>array('/site/contact')),
							array('label'=>'Bilder Upload', 'url'=>array('/site/upload'), 'visible'=>!Yii::app()->user->isGuest),
							array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
							array('label'=>'Benutzerverwaltung', 'url'=>array('/user/'), 'visible'=>!Yii::app()->user->isGuest),
							array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
							
			),
						
					)); ?>
				</div>
	        </div>
	    </div>
	</div>	
	<br>
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
			<div class="fb-like-box" data-href="https://www.facebook.com/SceneryLikeAPicture" data-width="300" data-height="100" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
	
	<br>
		Copyright &copy; <?php echo date('Y'); ?> by scenery.<br/>
		All Rights Reserved.<br/>
	</div><!-- footer -->


</div><!-- page -->
</body>
</html>
