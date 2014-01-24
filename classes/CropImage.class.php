<?php 

class cropImage{

    public $imgSrc;
    public $myImage;
    public $cropHeight;
    public $cropWidth;
    public $x;
    public $y;
    public $thumb;
    public $thumb1;  
    
    function setImage($image)
    {
        $this->imgSrc = $image; 
        
        //getting the image dimensions
         list($width, $height) = getimagesize($this->imgSrc); 
   
        if($width > $height) $biggestSide = $width; //find biggest length
             else $biggestSide = $height; 
                     
            //The crop size will be half that of the largest side 
           $cropPercent = .5; // This will zoom in to 50% zoom (crop)
           $this->cropWidth   = $biggestSide*$cropPercent; 
            $this->cropHeight  = $height; 
                     
                     
            
        
       $this->myImage = imagecreatefromjpeg($this->imgSrc) or die("Error: Cannot find image!");
    }
    
    function createImages()
    {
            $thumbSize = 920; // will create a 250 x 250 thumb
            $this->thumb = imagecreatetruecolor(920, 690); 
            $this->thumb1 =  imagecreatetruecolor(920, 690);
             imagecopyresampled($this->thumb, $this->myImage, 0, 0,0,0, 920, 690, $this->cropWidth, $this->cropHeight);
             imagecopyresampled($this->thumb1, $this->myImage, 0, 0,641,0, 920, 690, $this->cropWidth, $this->cropHeight);
    }
    
    function renderImage($destinacijaSlike1, $destinacijaSlike2)
    {
       //'../../media/camera/kamera-hotel-termag-jahorina.jpg'
       $slika1 = $destinacijaSlike1;
       $slika2 = $destinacijaSlike2;
      
    
       imagejpeg($this->thumb1,$slika1,60);
       imagejpeg($this->thumb,$slika2,60);
       imagedestroy($this->thumb); 
       imagedestroy($this->thumb1);
    }  


}


 ?>