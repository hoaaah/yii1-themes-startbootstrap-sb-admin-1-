<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo Yii::app()->theme->baseUrl;?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo Yii::app()->theme->baseUrl;?>/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo Yii::app()->theme->baseUrl;?>/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo Yii::app()->theme->baseUrl;?>/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

	<!-- Require the header -->
	<?php require_once('tpl_header.php')?>
	
	<!-- Include content pages -->
	<?php echo $content; ?>	

    </div>
    <!-- /#wrapper -->
<?php

// setup versions
$bootstrapVersion = "3.0.0";
$fontAwesomeVersion = "3.2.1";
$jqueryVersion = "2.0.3";
$queryUiVersion = "1.10.3";

// setup scriptmap for jquery and jquery-ui cdn
$cs = Yii::app()->clientScript;
$cs->scriptMap["jquery.js"] = Yii::app()->theme->baseUrl."/js/jquery.js";

//boostrap core javascript
//$cs->scriptMap["bootstrap.min.js"] = Yii::app()->theme->baseUrl."/js/bootstrap.min.js";
$cs->registerScriptFile("//netdna.bootstrapcdn.com/bootstrap/$bootstrapVersion/js/bootstrap.min.js", CClientScript::POS_END);

//Morris Charts JS
$cs->scriptMap["raphael.min.js"] = Yii::app()->theme->baseUrl."/js/plugins/morris/raphael.min.js";
$cs->scriptMap["morris.min.js"] = Yii::app()->theme->baseUrl."/js/plugins/morris/morris.min.js";
$cs->scriptMap["morris-data.js"] = Yii::app()->theme->baseUrl."/js/plugins/morris/morris-data.js";


// register js files
$cs->registerCoreScript('jquery');
?>
 
</body>

</html>
