<?php 

 $layout = $_GET['layout'];
 $width = $_GET['width'].'px';
 $height = $_GET['height'].'px';
 $heightl = $height - 40;
 $color = $_GET['color'];
 $no = mt_rand(1,5);
 $iframe="<iframe src=\"http://termaghotel.com/api/web_camera/index.php?layout=".$layout."&color=".$color."\""." width=$width height=$heightl scrolling=\"no\" frameborder=\"0\"></iframe>";
 
 ?>
 <div><?php switch($no)
                    {case 1: ?><p style="width:<?php echo$width;?>;margin:0;padding:0;">Za ekskluzivni odmor<a href="http://www.termaghotel.com"> Hotel Termag Jahorina</a>.</p><?php break;
                        case 2: ?><p style="width:<?php echo$width;?>;margin:0;padding:0;">Odmor na Jahorini<a href="http://www.termaghotel.com"> Hotel Termag</a></p><?php break;
                         case 3: ?><p style="width:<?php echo$width;?>;margin:0;padding:0;">Najekskluzivniji hotel na balkanu<a href="http://www.termaghotel.com"> Jahorina Hotel Termag</a> </p><?php break;
                         case 4: ?><p style="width:<?php echo$width;?>;margin:0;padding:0;">Pozdrav sa Jahorine<a href="http://www.termaghotel.com"> Jahorina Hotel Termag</a> </p><?php break;
                         case 5: ?><p style="width:<?php echo$width;?>;margin:0;padding:0;"><a href="http://www.termaghotel.com">Hotel Termag</a> Skijanje na Jahorini</a></p><?php break; } ?><?php echo $iframe; ?></div>