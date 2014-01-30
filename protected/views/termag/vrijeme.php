<?php
        include_once('protected/config/osnovna_podesavanja.php'); 
        $this->layout='main'; 
        include('api/dom/simple_html_dom.php');
        $html = file_get_html('http://jahorina.ca/php/wetter/vrijeme.htm');
?>
<div class="cjenovnik_wrapper">


<?php
        echo $this->langArray['trenutno_vrijeme']; 
        $html= preg_replace("/[\xAF-\xB0]/", '&deg', $html);
        echo $html;
?>
</div>