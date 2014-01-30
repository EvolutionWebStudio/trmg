<?php include_once('protected/config/osnovna_podesavanja.php'); ?>

<!DOCTYPE html>

<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="sr"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="sr"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="sr"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="sr"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="sr"><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. -->

<head id="www-hoteltermag-com" data-template-set="html5">

	<title>Uredjivanje Vijesti</title>
	
	<?php podesavanja::inc('_meta.php'); ?>

	<link rel="shortcut icon" href="/favicon.png"/>

	<link rel="stylesheet" href="/css/vijesti_admin.css"/>
	<link rel="stylesheet"  href="/css/slider.css"/>
	<link rel="stylesheet"  href="/css/ui-lightness/jquery-ui-1.8.16.custom.css"  />
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js"></script>
	<script type="text/javascript" src="/js/jquery-ui-1.8.16.custom.min.js"></script>
	<script type="text/javascript" src="/js/jquery.ui.datepicker-sr-SR.js"></script>
	
	<script src="/js/modernizr-1.7.min.js"></script>
    
    <script src="/js/tiny_mce/tiny_mce.js"></script>
    <script type="text/javascript">
	tinyMCE.init({
		// General options
		mode : "specific_textareas",
		editor_selector : "mceEditor",
		theme : "advanced",
		plugins : "jbimages,autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave",
		language : "en",
 
		// Theme options
		theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
		theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft,|,jbimages",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,
 
		// This is required for the image paths to display properly
		relative_urls : false,
 
		// Style formats (OPTIONAL)
		style_formats : [
			{title : 'Bold text', inline : 'b'},
			{title : 'Red text', inline : 'span', styles : {color : '#ff0000'}},
			{title : 'Red header', block : 'h1', styles : {color : '#ff0000'}},
			{title : 'Example 1', inline : 'span', classes : 'example1'},
			{title : 'Example 2', inline : 'span', classes : 'example2'},
			{title : 'Table styles'},
			{title : 'Table row 1', selector : 'tr', classes : 'tablerow1'}
		]
	});
	</script>
	
</head>

<body>

    <div class="wrapper">
        <div class="bg_wrapper">
	       <div class="kadar">
	
		       <header>
		       						
					<nav class="clearfix">
						<ul class="navigacija navigacija-lijevo clearfix">
							
							<li>
								<?php echo CHtml::link('Sve Vijesti',array('vijestiadmin/index')); ?></li>
							</li>
							
							<li>
								<?php echo CHtml::link('Nova Vijest',array('vijestiadmin/create')); ?></li>
							</li>
							
							<li>
								<?php echo CHtml::link('Izmjeni Vijesti',array('vijestiadmin/admin')); ?></li>
							</li>
							
							<li>
								<?php echo CHtml::link('Logout',array('termag/logout')); ?></li>
							</li>
													
						</ul>  <!-- kraj prvi nivo navigacije -->
					</nav>
				
				</header> <!-- kraj header -->
	
	           <div class="sadrzaj clearfix">
	               <?php echo $content; ?>
	           </div> <!-- kraj sadrzaj -->

            </div> <!-- kraj kadar -->
        </div> <!-- kraj bg_wrapper -->	
	
        <footer>
			
			<p class="info">Hotel Termag Jahorina, Poljice bb, Bosna i Hercegovina | Telefoni: +387 57 270 422, +387 57 272 100; Faks: +387 57 270 423, +387 57 272 072</p>
		
		</footer> <!-- kraj footer -->
	
    </div> <!-- kraj wrapper -->

</body>
</html>