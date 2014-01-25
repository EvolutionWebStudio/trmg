<script type="text/javascript">
	var currentImage;
    var currentIndex = -1;
    var interval;
    var div1;
    var divGlobal;
    function showImage(index, div){
    	divGlobal = div;
        if(index < $(div).length){
        	var indexImage = $(div)[index]
            if(currentImage){   
            	if(currentImage != indexImage ){
                    $(currentImage).css('z-index',2);
                    clearTimeout(myTimer);
                    $(currentImage).fadeOut(500, function() {
					    myTimer = setTimeout("showNext(divGlobal)", 7000);
					    $(this).css({'display':'none','z-index':1})
					});
                }
            }
            $(indexImage).css({'display':'block', 'opacity':1});
            currentImage = indexImage;
            currentIndex = index;
            
        }
    }
    
    function showNext(div){
    	divGlobal = div;
        var len = $(div).length;
        var next = currentIndex < (len-1) ? currentIndex + 1 : 0;
        showImage(next, div);
    }
    
    var myTimer;
    
    //---------------------------------------
    
    var currentImageKoliba;
    var currentIndexKoliba = -1;
    var intervalKoliba;
    var div1Koliba;
    var divGlobalKoliba;
    function showImageKoliba(index, div){
    	divGlobalKoliba = div;
        if(index < $(div).length){
        	var indexImageKoliba = $(div)[index]
            if(currentImageKoliba){   
            	if(currentImageKoliba != indexImageKoliba ){
                    $(currentImageKoliba).css('z-index',2);
                    clearTimeout(myTimerKoliba);
                    $(currentImageKoliba).fadeOut(500, function() {
					    myTimerKoliba = setTimeout("showNextKoliba(divGlobalKoliba)", 7000);
					    $(this).css({'display':'none','z-index':1})
					});
                }
            }
            $(indexImageKoliba).css({'display':'block', 'opacity':1});
            currentImageKoliba = indexImageKoliba;
            currentIndexKoliba = index;
            
        }
    }
    
    function showNextKoliba(div){
    	divGlobalKoliba = div;
        var len = $(div).length;
        var next = currentIndexKoliba < (len-1) ? currentIndexKoliba + 1 : 0;
        showImageKoliba(next, div);
    }
    
    var myTimerKoliba;
    
    //------
    
    $(window).load(function() {
    	div1 = '#bigPic > div';
    	div2 = '#koliba_slider > a > div';
        $('#loader').css({'display':'none', 'opacity':1});
	    myTimer = setTimeout("showNext(div1)", 3000);
		showNext(div1); //loads first image
	    myTimerKoliba = setTimeout("showNextKoliba(div2)", 3000);
		showNextKoliba(div2); //loads first image
        
	});

	</script>	
