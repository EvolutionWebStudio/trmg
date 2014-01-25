<?php 
  
   include('../../classes/CropImage.class.php');
   
  if(isset($_GET['color']))
    {$color = $_GET['color'];}
  else
    $color = '#ffffff';
  
  if(isset($_GET['layout']))
    $layout = $_GET['layout'];
  else
    $layout = "veritcal";
    
  
   
   //crop
   $image1 = new cropImage;
   if(file_exists("../../media/kamera/cam.jpg"))
   {
            $image1->setImage("../../media/kamera/cam.jpg");
           $image1->createImages();
            $image1->renderImage('../../media/camera/kamera-hotel-termag-jahorina.jpg','../../media/camera/kamera-hotel-termag-jahorina1.jpg'); 
  // xml
   /*
    $xml = new DOMDocument('1.0','utf-8');
     $xml->formatOutput = true;
     $xml->preserveWhiteSpace = false;
    $xml->load( 'text.xml' ); 
   
   $element = $xml->getElementsByTagName('user')->item(0);
    
    $bruser = $element->getElementsByTagName('bruser')->item(0);
    $brtext = $element->getElementsByTagName('brtext')->item(0);
    
    echo $bruser->nodeValue;
    $bruser->nodeValue = $bruser->nodeValue+1;
    $brtext->nodeValue = 8;
    
    $element->replaceChild($bruser, $bruser);
    $element->replaceChild($brtext, $brtext);
    
   $xml->save('text.xml');
*/
     
   
?>
<!DOCTYPE html>
<head>
            <meta charset="UTF-8">
         <link rel="stylesheet" href="/css/api.css"/>
</head>

<body  bgcolor= "#<?php echo $color; ?>" >
    <div class="web_camera_wrapper">
        <table>
            <tbody>
               
                <?php   
            
                if($layout=='horizontal')
                { ?>
                   <tr> 
                   <td><a href="http://termaghotel.com/termag/web_camera" title="Pogledajte skijanje na Jahorini uživo"><img src="http://termaghotel.com/media/kamera/cam.jpg" /></a></td>
                   </tr>
               <?php }
                elseif($layout=='vertical')
                { ?>
                    <tr>
                        <td><a href="http://termaghotel.com/termag/web_camera" title="Pogledajte skijanje na Jahorini uživo"><img src="http://termaghotel.com/media/camera/kamera-hotel-termag-jahorina.jpg" /></a></td>
                    </tr>
                    <tr>
                        <td><a href="http://termaghotel.com/termag/web_camera" title="Pogledajte skijanje na Jahorini uživo"><img src="http://termaghotel.com/media/camera/kamera-hotel-termag-jahorina1.jpg" /></a></td>
                    </tr>
               <?php }
                else
                {
                    echo 'Nepostojeci layout!!!';
                }
                ?>
          </tbody>
		</table>
	</div>
	
</div>
</body>

<?php  }
   else
   {
     echo "Kamera je trenutno nedostupna. Molimo vas navratite kasnije.";
   } ?>