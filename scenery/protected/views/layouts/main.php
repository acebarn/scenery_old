<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//DE" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="de" />
<!-- 	naechste Zeile ist Wichtig fuer die Responsive-Grid-Galliery -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-image-gallery.css" />
<!-- 	wichtig fuer die Responsive-Grid-Gallery -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-responsive.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/flow_galery_style.css" />
	

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<?php 
//Hier die Java-Skripte registrieren
$baseUrl = Yii::app()->request->baseUrl;  //Root-Pfad in Variable speichern
$cs = Yii::app()->getClientScript();   //Das Client-Skript anfordern
$cs->registerCoreScript('jquery');
$cs->registerScriptFile($baseUrl.'/js/bootstrap.js');
$cs->registerScriptFile($baseUrl.'/js/load-image.js');
$cs->registerScriptFile($baseUrl.'/js/bootstrap-image-gallery.js');
$cs->registerScriptFile($baseUrl.'/js/main.js');
?>


<div class="container" id="page">

<!--  	<div id="header">  -->
<!--		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div> -->
<!-- 	</div> -->

<!-- 	<div id="mainmenu"> -->
	<div class="navbar navbar-fixed-top navbar-inverse" >
	    <div class="navbar-inner">
	        <div class="container-fluid">
	            <a class="brand" href="<?php echo Yii::app()->homeUrl; ?>"><?php echo Yii::app()->name; ?></a>
	            <div class="nav-collapse">
					<?php $this->widget('zii.widgets.CMenu',array(
						'items'=>array(
							array('label'=>'Galerie', 'url'=>array('/gallery/index')),
							array('label'=>'Über Uns', 'url'=>array('/site/page', 'view'=>'about')),
							array('label'=>'Kontakt', 'url'=>array('/site/contact')),
							array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
							array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
						),
						'htmlOptions'=>array('class'=>'nav'),
					)); ?>
				</div>
	        </div>
	    </div>
	</div>
<!-- 	</div> -->
	
	<!-- mainmenu 
	
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
	            
	-->
	
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by scenery.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
