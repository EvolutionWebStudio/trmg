	<meta charset="utf-8"/>
	
	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	

	<?php if ($this->metaTitle ==""){ ?>
		<meta name="title" content="Hotel Termag Jahorina"/>
	<?php }
	else
	{ if($this->naslovStranice == 'Vijesti') { ?>
        <meta name="title" content="<?php echo $this->metaTitle; ?> "/>
    <?php } else { ?>
		<meta name="title" content="<?php echo $this->metaTitle; ?> -  Hotel Termag Jahorina | Jahorina Hoteli | Jahorina Smjestaj | Jahorina Apartmani"/>
	<?php }} ?>
	
	<?php if ($this->metaDescription ==""){ ?>
		<meta name="description" content="Najatraktivniji hotel na Jahorini. Provedite nezaboravan odmor u hotelu Termag na Jahorini. Autentičan i 
    	moderan ambijent, ljubazno osoblje, vrhunska kuhinja i mnogobrojne ponude koje će Vam pružiti odmor kakav zaslužujete."/>
    <?php }
	else
	{ ?>
		<meta name="description" content="<?php echo $this->metaDescription; ?>"/>
	<?php } ?>
	
	<?php if ($this->metaKeywords ==""){ ?>
    	<meta name="keywords" content="hotel jahorina, jahorina, hotel na jahorini, termag hotel jahorina, hotel, jahorina smestaj, smjestaj na jahorini,
    	spa jahorina, hotels in bosnia, hotels on jahorina, jahorina hotels, koliba, hotel termag, hotel termag jahorina, termag jahorina, jahorina hoteli
    	smjestaj na jahorini, smestaj na jahorini, vikend na jahorini, jahorina ski, jahorina vikend" />
	<?php }
	else
	{ ?>
    	<meta name="keywords" content="<?php echo $this->metaKeywords; ?>"/>
	<?php } ?>
	
	<meta name="google-site-verification" content="ICE1UWpd94_17phdCqCUTBSADcXVxEoba0u_vV2p0SY" />
	
	<meta name="author" content="Matrix Computers"/>
	<meta name="Copyright" content="Hotel Termag 2011. All Rights Reserved."/>
    
    