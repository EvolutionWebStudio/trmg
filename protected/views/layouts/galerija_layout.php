<!DOCTYPE html>

<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="sr"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="sr"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="sr"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="sr"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="sr"><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. -->
<?php include_once('protected/config/osnovna_podesavanja.php'); ?>
<head id="www-hoteltermag-com" data-template-set="html5">

	<title><?php 
	if ($this->metaTitle == "")
	{
		if(isset($this->naslovStranice))
		{
			echo $this->naslovStranice." - "; 
		}
	}
	else 
	{
		echo $this->metaTitle." - ";
	}
	
	
	?>Hotel Termag Jahorina</title>
	<?php podesavanja::inc('_meta.php'); ?>
	



	<link rel="shortcut icon" href="/favicon.png"/>
	
	<link rel="stylesheet" href="/css/style.css"/>
	<link rel="stylesheet" href="/css/galerija.css"/>

	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script type="text/javascript" src="/js/jquery-min-1.6.2.js"></script>
	<script src="/js/modernizr-1.7.min.js"></script>
	

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-32622008-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

<body>
	
		<div class="newsletter-signup">
		
			<script language='javascript' src='http://echo7.bluehornet.com/phase2/bhecho_files/smartlists/check_entry.js'></script>
			<script language="javascript">
				<!--
					function check_cdfs(form) {
						return true;
					}
				-->
			</script>
			<script language='javascript' type='text/javascript'>
				<!--
    				function doSubmit() {
        				if (check_cdfs(document.survey)) {
							window.open('','signup','resizable=1,scrollbars=0,width=300,height=150');
            				return true;
        			}
        				else { 
        					return false; 
        				}
    				}
				-->
			</script>
			
			<div class="newsletter-button"><span>NEWSLETTER</span></div>
			
			<div class="newsletter-form">
				<form action="http://echo7.bluehornet.com/phase2/bullseye/contactupdate1.php3" method="post" name="bullseye" id="bullseye" onsubmit="return doSubmit();" target="signup">
		  			<p class="newsletter-opis">Hotel Termag šalje elektronske novine sa vijestima, događajima i specijalnim ponudama. Pošaljite nam svoj email ukoliko želite da primate informacije od nas.</p>	
		  			
		  			<input type='hidden' name="cid" value="8eaf404f263309cfc92ff5b241d73b71" />
		    				
		    		<label for="email">Email:</lebel>
					<input type="email" name="email" />
						
					<input type="submit" name="SubmitBullsEye" value="<?php echo $this -> langArray['submit_posalji']; ?>" />
					     
					<input type='hidden' name='message' value="Thank you.">
				</form>
			</div>
		</div>


<div class="wrapper">
<div class="bg_wrapper">
	<div class="kadar">
	
	<?php podesavanja::inc('_header.php'); ?>
	
	<div class="sadrzaj clearfix">
	


	<?php echo $content; ?>
	
	

		
	</div> <!-- kraj sadrzaj -->

</div> <!-- kraj kadar -->
</div> <!-- kraj bg_wrapper -->	
	
<?php podesavanja::inc('_footer.php'); ?>
	
</div> <!-- kraj wrapper -->

<?php //podesavanja::inc('_javascript.php'); ?>

<script type="text/javascript">
$(function(){
	var currentImage;
    var currentIndex = -1;
    var interval;
	var smijer;
	var sir = 200;
	//Get our elements for faster access and set overlay width
    var div = $('div.thumbs_wrapper'),
                 ul = $('ul#thumbs'),
                 // unordered list's left margin
                 ulPadding = 15;
	
	    //Get menu width
    var divWidth = div.width();

    //Remove scrollbars
    div.css({overflow: 'hidden'});

    //Find last image container
    var lastLi = ul.find('li:last-child');
				 
    function showImage(index){
        if(index < $('#bigPic img').length){
        	var indexImage = $('#bigPic img')[index]
            if(currentImage){   
            	if(currentImage != indexImage ){
                    $(currentImage).css('z-index',2);
                    clearTimeout(myTimer);
                    $(currentImage).fadeOut(250, function() {
					    /*myTimer = setTimeout("showNext()", 3000);*/
					    $(this).css({'display':'none','z-index':1})
					});
                }
            }
            $(indexImage).css({'display':'block', 'opacity':1});
            currentImage = indexImage;
            currentIndex = index;
            $('#thumbs li').removeClass('active');
            $($('#thumbs li')[index]).addClass('active');
        }
    }
    
    function showNext(){
        var len = $('#bigPic img').length;
        var next = currentIndex < (len-1) ? currentIndex + 1 : 0;
        showImage(next);
    }
	
	function showPrevious(){
        var len = $('#bigPic img').length;
        var next = currentIndex > (0) ? currentIndex - 1 : (len-1);
        showImage(next);
    }
	
	function scroll()
	{
		var ulWidth = lastLi[0].offsetLeft + lastLi.outerWidth() + ulPadding;
		var aktivniThumb = $('ul#thumbs li.active');
		var duzina = aktivniThumb.offset().left ;
		//div.scrollLeft(duzina);
		 var left = (duzina - div.offset().left) * (ulWidth-divWidth) / divWidth;
		div.scrollLeft(left);
	}
    
	



    //When user move mouse over menu
    div.mousemove(function(e){

      //As images are loaded ul width increases,
      //so we recalculate it each time
      var ulWidth = lastLi[0].offsetLeft + lastLi.outerWidth() + ulPadding;

      var left = (e.pageX - div.offset().left) * (ulWidth-divWidth) / divWidth;
      div.scrollLeft(left);
    });
	
	
    var myTimer;
    
    $(document).ready(function() {
		var sir = 200;
	    myTimer = setTimeout("showNext()", 3000);
		showNext(); //loads first image
        $('#thumbs li').bind('click',function(e){
        	var count = $(this).attr('rel');
        	showImage(parseInt(count)-1);
        });
		$(".nav_naprijed").click(function() {
			showNext();
			//scroll(); 
			
			});
		$(".nav_nazad").click(function() {
			showPrevious();
			//scroll(-1);
			});

	});
});
	//Thumbnailovi
	

</script>
<script src="/js/functions.js" type="text/javascript"></script>
</body>
</html>