<!-- here comes the javascript -->

<!-- Grab Google CDN's jQuery. fall back to local if necessary -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
<script>window.jQuery || document.write("<script src='/js/jquery-1.5.1.min.js'>\x3C/script>")</script>

<!-- this is where we put our custom functions -->
<script src="/js/functions.js"/>

<!-- Asynchronous google analytics; this is the official snippet.
	 Replace UA-XXXXXX-XX with your site's ID and uncomment to enable.
	 
<script>

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-XXXXXX-XX']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
-->
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
	

