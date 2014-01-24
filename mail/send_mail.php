
<?php
require('../protected/config/main.php');
require_once('ae_mail.php');
require_once('cox_mail.php');

switch($_POST['ime_forme'])
{
//POKLON VAUCER
	case 'poklon_vaucer':
	
        
		if ($_SERVER['REQUEST_METHOD'] == 'POST'
		and isset($_POST['ime_i_prezime_pos']) && isset($_POST['adresa_pos']) &&
		isset($_POST['ime_i_prezime_prim']) && isset($_POST['adresa_prim']))
		{
			$from = $_POST['email_pos'];
			// nice RFC 2822 From field
		
            
            //niz podataka
            
            $podatci = array('ime_i_prezime_pos' => $_POST['ime_i_prezime_pos'],
                            'kompanija_pos'=> $_POST['kompanija_pos'],
                            'adresa_pos' => $_POST['adresa_pos'],
                            'grad_pos' => $_POST['grad_pos'],
                            'drzava_pos' => $_POST['drzava_pos'],
                            'postanski_broj_pos' => $_POST['postanski_broj_pos'],
                            'telefon_pos' => $_POST['telefon_pos'],
                            'email_pos' => $_POST['email_pos'],
                            'ime_i_prezime_prim' => $_POST['ime_i_prezime_prim'],
                            'kompanija_prim' => $_POST['kompanija_prim'],
                            'adresa_prim' => $_POST['adresa_prim'],
                            'grad_prim' => $_POST['grad_prim'],
                            'drzava_prim' => $_POST['drzava_prim'],
                            'postanski_broj_prim' => $_POST['postanski_broj_prim'],
                            'iznos' => $_POST['iznos'],
                            'opcije_dostave' => $_POST['opcije_dostave']);
            
            
         $body="<html>
            <body>
            <table width=\"500\" border=1 cellpadding=0 cellspacing=0>
            <tr >
                <td width=\"50%\"><b>Ime i Prezime Posiljaoca<b><td>
                <td width=\"50%\">".$podatci['ime_i_prezime_pos']."</td>
            </tr>
            <tr >
                <td width=\"50%\"><b>Kompanija Posiljaoca<b><td>
                <td width=\"50%\">".$podatci['kompanija_pos']."</td>
            </tr>
            <tr >
                <td width=\"50%\"><b>Adresa Posiljaoca<b><td>
                <td width=\"50%\">".$podatci['adresa_pos']."</td>
            </tr>
            <tr >
                <td width=\"50%\"><b>Grad Posiljaoca<b><td>
                <td width=\"50%\">".$podatci['grad_pos']."</td>
            </tr>
            <tr >
                <td width=\"50%\"><b>Drzava Posiljaoca<b><td>
                <td width=\"50%\">".$podatci['drzava_pos']."</td>
            </tr>
            <tr >
                <td width=\"50%\"><b>Postanski Broj Posiljaoca<b><td>
                <td width=\"50%\">".$podatci['postanski_broj_pos']."</td>
            </tr>
            <tr >
                <td width=\"50%\"><b>Telefon Posiljaoca<b><td>
                <td width=\"50%\">".$podatci['telefon_pos']."</td>
            </tr>
            <tr >
                <td width=\"50%\"><b>Email Posiljaoca<b><td>
                <td width=\"50%\">".$podatci['email_pos']."</td>
            </tr>
            <tr >
                <td width=\"50%\"><b>Ime i Prezime Primaoca<b><td>
                <td width=\"50%\">".$podatci['ime_i_prezime_prim']."</td>
            </tr>
            <tr >
                <td width=\"50%\"><b>Kompanija Primaoca<b><td>
                <td width=\"50%\">".$podatci['kompanija_prim']."</td>
            </tr>
            <tr >
                <td width=\"50%\"><b>Adresa Primaoca<b><td>
                <td width=\"50%\">".$podatci['adresa_prim']."</td>
            </tr>
            <tr >
                <td width=\"50%\"><b>Grad Primaoca<b><td>
                <td width=\"50%\">".$podatci['grad_prim']."</td>
            </tr>
            <tr >
                <td width=\"50%\"><b>Drzava Primaoca<b><td>
                <td width=\"50%\">".$podatci['drzava_prim']."</td>
            </tr>
            <tr >
                <td width=\"50%\"><b>Postanski Broj Primaoca<b><td>
                <td width=\"50%\">".$podatci['postanski_broj_prim']."</td>
            </tr>
            <tr >
                <td width=\"50%\"><b>Iznos<b><td>
                <td width=\"50%\">".$podatci['iznos']."</td>
            </tr>
            <tr >
                <td width=\"50%\"><b>Opcije Dostave<b><td>
                <td width=\"50%\">".$podatci['opcije_dostave']."</td>
            </tr>
            </table>
            </body>
            </html>";
            
            //poziv funkcije za slanje maila
            
            if (cox_mail('Poklon Vaucer',$body, $from)) 
            {
			echo  "<center><h1>Poruka je uspješno poslata!</h1></center>
			<script type=\"text/javascript\">
var google_conversion_id = 1008416135;
var google_conversion_language = \"en\";
var google_conversion_format = \"3\";
var google_conversion_color = \"ffffff\";
var google_conversion_label = \"aTC1CNHcjQMQh-vs4AM\";
var google_conversion_value = 10;


</script>
<script type=\"text/javascript\" src=\"http://www.googleadservices.com/pagead/conversion.js\">
</script>
<noscript>
<div style=\"display:inline;\">
<img height=\"1\" width=\"1\" style=\"border-style:none;\" alt=\"\" src=\"http://www.googleadservices.com/pagead/conversion/1008416135/?value=10&amp;label=aTC1CNHcjQMQh-vs4AM&amp;guid=ON&amp;script=0\"/>


</div>
</noscript>
            <script type=\"text/javascript\">function delayer()
             {window.location = \"http://www.termaghotel.com\";}setTimeout('delayer()',2000); </script>";
            }
    }
		break;
        
//KONTAKT
	case 'kontakt':

        if ($_SERVER['REQUEST_METHOD'] == 'POST'
		and isset($_POST['ime_i_prezime']) && isset($_POST['email']) &&
		isset($_POST['poruka']))
		{
			$from = $_POST['email'];
            
            //niz podataka
            $podatci = array('telefon' => $_POST['telefon'],
                            'ime_i_prezime' => $_POST['ime_i_prezime'],
                            'poruka' => $_POST['poruka']);
            
            
			$body="<html>
            <body>
            <table width=\"500\" border=1 cellpadding=0 cellspacing=0>
            <tr >
                <td width=\"50%\"><b>Ime i prezime<b><td>
                <td width=\"50%\">".$podatci['ime_i_prezime']."</td>
            </tr>
            <tr >
                <td ><b>Telefon<b><td>
                <td >".$podatci['telefon']."</td>
            </tr>
            <tr >
                <td ><b>Poruka<b><td>
                <td >".$podatci['poruka']."<td> 
            </tr>
            </table>
            </body>
            </html>";
            
            //poziv funkcije za slanje maila
            
            if (cox_mail('Kontakt sa sajta',$body, $from)) 
            {
			echo  "<center><h1>Poruka je uspješno poslata!</h1></center>
			<script type=\"text/javascript\">
var google_conversion_id = 1008416135;
var google_conversion_language = \"en\";
var google_conversion_format = \"3\";
var google_conversion_color = \"ffffff\";
var google_conversion_label = \"aTC1CNHcjQMQh-vs4AM\";
var google_conversion_value = 10;


</script>
<script type=\"text/javascript\" src=\"http://www.googleadservices.com/pagead/conversion.js\">
</script>
<noscript>
<div style=\"display:inline;\">
<img height=\"1\" width=\"1\" style=\"border-style:none;\" alt=\"\" src=\"http://www.googleadservices.com/pagead/conversion/1008416135/?value=10&amp;label=aTC1CNHcjQMQh-vs4AM&amp;guid=ON&amp;script=0\"/>


</div>
</noscript>
            <script type=\"text/javascript\">function delayer()
             {window.location = \"http://www.termaghotel.com\";}setTimeout('delayer()',2000); </script>";
            }
         }   
		break;
        
        
        
        
//MAILING LISTA
    case 'mailing_lista':

        if ($_SERVER['REQUEST_METHOD'] == 'POST'
		and isset($_POST['ime_i_prezime']) && isset($_POST['email']))
		{
			$from = $_POST['email'];
            
            //niz podataka
            $podatci = array('email' => $_POST['email']);
            
            
            $body="<html>
            <body>
            <table width=\"500\" border=1 cellpadding=0 cellspacing=0>
            <tr >
                <td width=\"50%\"><b>Email<b><td>
                <td width=\"50%\">".$podatci['email']."</td>
            </tr>
            </table>
            </body>
            </html>";
            
            //poziv funkcije za slanje maila
            
            if (cox_mail('Prijava na mailing listu',$body, $from)) 
            {
			echo  "<center><h1>Poruka je uspješno poslata!</h1></center>
			<script type=\"text/javascript\">
var google_conversion_id = 1008416135;
var google_conversion_language = \"en\";
var google_conversion_format = \"3\";
var google_conversion_color = \"ffffff\";
var google_conversion_label = \"aTC1CNHcjQMQh-vs4AM\";
var google_conversion_value = 10;


</script>
<script type=\"text/javascript\" src=\"http://www.googleadservices.com/pagead/conversion.js\">
</script>
<noscript>
<div style=\"display:inline;\">
<img height=\"1\" width=\"1\" style=\"border-style:none;\" alt=\"\" src=\"http://www.googleadservices.com/pagead/conversion/1008416135/?value=10&amp;label=aTC1CNHcjQMQh-vs4AM&amp;guid=ON&amp;script=0\"/>


</div>
</noscript>
            <script type=\"text/javascript\">function delayer()
             {window.location = \"http://www.termaghotel.com\";}setTimeout('delayer()',2000); </script>";
            }
        }
		break;
        
//BUSINESS REZERVACIJA
	case 'business_rezervacija':
		if ($_SERVER['REQUEST_METHOD'] == 'POST'
		&& isset($_POST['ime']) && isset($_POST['prezime']) && isset($_POST['adresa']) &&
		isset($_POST['telefon']) && isset($_POST['email']))
		{
			$from = $_POST['email'];
			// nice RFC 2822 From field
		
            
            //niz podataka
            
            $podatci = array('ime' => $_POST['ime'],
            				'prezime' => $_POST['prezime'],
                            'kompanija'=> $_POST['kompanija'],
                            'adresa' => $_POST['adresa'],
                            'adresa2' => $_POST['adresa2'],
                            'grad' => $_POST['grad'],
                            'drzava' => $_POST['drzava'],
                            'postanski_broj' => $_POST['postanski_broj'],
                            'telefon' => $_POST['telefon'],
                            'email' => $_POST['email'],
                            'nacin_kontakta' => $_POST['nacin_kontakta'],
                            'dolazak' => $_POST['dolazak'],
                            'odlazak' => $_POST['odlazak'],
                            'alternativni_dolazak' => $_POST['alternativni_dolazak'],
                            'alternativni_odlazak' => $_POST['alternativni_odlazak'],
                            'ime_grupe' => $_POST['ime_grupe'],
                            'broj_ucesnika' => $_POST['broj_ucesnika'],
                            'dodatni_zahtjevi' => $_POST['dodatni_zahtjevi']);
            
            
            $body="<html>
            <body>
            <table width=\"500\" border=1 cellpadding=0 cellspacing=0>
            <tr >
                <td width=\"50%\"><b>Ime i Prezime<b><td>
                <td width=\"50%\">".$podatci['ime']." ".$podatci['prezime']."</td>
            </tr>
            <tr >
                <td width=\"50%\"><b>Kompanija<b><td>
                <td width=\"50%\">".$podatci['kompanija']."</td>
            </tr>
            <tr >
                <td width=\"50%\"><b>Adresa<b><td>
                <td width=\"50%\">".$podatci['adresa']."</td>
            </tr>
            <tr >
                <td width=\"50%\"><b>Adresa 2<b><td>
                <td width=\"50%\">".$podatci['adresa2']."</td>
            </tr>
            <tr >
                <td width=\"50%\"><b>Grad<b><td>
                <td width=\"50%\">".$podatci['grad']."</td>
            </tr>
            <tr >
                <td width=\"50%\"><b>Drzava<b><td>
                <td width=\"50%\">".$podatci['drzava']."</td>
            </tr>
            <tr >
                <td width=\"50%\"><b>Postanski Broj<b><td>
                <td width=\"50%\">".$podatci['postanski_broj']."</td>
            </tr>
            <tr >
                <td width=\"50%\"><b>Telefon<b><td>
                <td width=\"50%\">".$podatci['telefon']."</td>
            </tr>
            <tr >
                <td width=\"50%\"><b>Email<b><td>
                <td width=\"50%\">".$podatci['email']."</td>
            </tr>
            <tr >
                <td width=\"50%\"><b>Nacin Kontakta<b><td>
                <td width=\"50%\">".$podatci['nacin_kontakta']."</td>
            </tr>
            <tr >
                <td width=\"50%\"><b>Dolazak<b><td>
                <td width=\"50%\">".$podatci['dolazak']."</td>
            </tr>
            <tr >
                <td width=\"50%\"><b>Odlazak<b><td>
                <td width=\"50%\">".$podatci['odlazak']."</td>
            </tr>
            <tr >
                <td width=\"50%\"><b>Alternativni Dolazak<b><td>
                <td width=\"50%\">".$podatci['alternativni_dolazak']."</td>
            </tr>
            <tr >
                <td width=\"50%\"><b>Alternativni Odlazak<b><td>
                <td width=\"50%\">".$podatci['alternativni_odlazak']."</td>
            </tr>
            <tr >
                <td width=\"50%\"><b>Ime Grupe<b><td>
                <td width=\"50%\">".$podatci['ime_grupe']."</td>
            </tr>
            <tr >
                <td width=\"50%\"><b>Broj Ucesnika<b><td>
                <td width=\"50%\">".$podatci['broj_ucesnika']."</td>
            </tr>
            <tr >
                <td width=\"50%\"><b>Dodatni Zahtjevi<b><td>
                <td width=\"50%\">".$podatci['dodatni_zahtjevi']."</td>
            </tr>
            </table>
            </body>
            </html>";
            
            //poziv funkcije za slanje maila
            
            if (cox_mail('Business Rezervacija',$body, $from)) 
            {
			echo "<center><h1>Poruka je uspješno poslata!</h1></center>
			<script type=\"text/javascript\">
				var google_conversion_id = 1008416135;
				var google_conversion_language = \"en\";
				var google_conversion_format = \"3\";
				var google_conversion_color = \"ffffff\";
				var google_conversion_label = \"aTC1CNHcjQMQh-vs4AM\";
				var google_conversion_value = 10;
				</script>
				
				<script type=\"text/javascript\" src=\"http://www.googleadservices.com/pagead/conversion.js\"></script>
				
				<noscript>
					<div style=\"display:inline;\">
					<img height=\"1\" width=\"1\" style=\"border-style:none;\" alt=\"\" src=\"http://www.googleadservices.com/pagead/conversion/1008416135/?value=10&amp;label=aTC1CNHcjQMQh-vs4AM&amp;guid=ON&amp;script=0\"/>
					</div>
				</noscript>
				
            	<script type=\"text/javascript\">function delayer(){window.location = \"http://www.termaghotel.com\";}setTimeout('delayer()',2000); </script>";
            }
			else
				{
					echo "mail nije poslat";
				}
        }
		break;
        


}

?>