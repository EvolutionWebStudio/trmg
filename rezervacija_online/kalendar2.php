<?php
$monthNames = Array("Januar", "Februar", "Mart", "April", "Maj", "Jun", "Jul", 
"Avgust", "Septembar", "Oktobar", "Novembar", "Decembar");
?>

<?php
if (!isset($_REQUEST["month"])) $_REQUEST["month"] = date("n");
if (!isset($_REQUEST["year"])) $_REQUEST["year"] = date("Y");
?>

<?php
$cMonth = $_REQUEST["month"];
$cYear = $_REQUEST["year"];

$prev_year = $cYear;
$next_year = $cYear;
$prev_month = $cMonth-1;
$next_month = $cMonth+1;

if ($prev_month == 0 ) {
	$prev_month = 12;
	$prev_year = $cYear - 1;
}
if ($next_month == 13 ) {
	$next_month = 1;
	$next_year = $cYear + 1;
}
?>

<table width="100%">
    <tr>
        <td>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td  width="50%" align="left">&nbsp;&nbsp;<a href="<?php echo "index.php?r=termag/rezervacija" . "&month=". $prev_month . "&year=" . $prev_year; ?>" style="color:#FFFFFF">Previous</a></td>
                    <td  width="50%" align="right"><a href="<?php echo "index.php?r=termag/rezervacija" . "&month=". $next_month . "&year=" . $next_year; ?>" style="color:#FFFFFF">Next</a>&nbsp;&nbsp;</td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td align="center">
            <table border="0" cellpadding="2" cellspacing="2">
                <tr align="center">
                    <td colspan="7" ><strong><?php echo $monthNames[$cMonth-1].' '.$cYear; ?></strong></td>
                </tr>
                <tr>
                    
                    <td align="center" width="40"><strong>Pon</strong></td>
                    <td align="center" width="40"><strong>Uto</strong></td>
                    <td align="center" width="40"><strong>Sre</strong></td>
                    <td align="center" width="40"><strong>Cet</strong></td>
                    <td align="center" width="40"><strong>Pet</strong></td>
                    <td align="center" width="40"><strong>Sub</strong></td>
                    <td align="center" width="40" ><strong>Ned</strong></td>
                </tr> 
                
<?php 
$timestamp = mktime(0,0,0,$cMonth,1,$cYear);
$maxday = date("t",$timestamp);
$thismonth = getdate($timestamp);
$startday = $thismonth['wday']+6;
for ($i=0; $i<($maxday+$startday); $i++) {
	if(($i % 7) == 0 ) echo "<tr>\n";
	if($i < $startday) echo "<td></td>\n";
	else echo "<td align='center' valign='middle' height='20px'>". ($i - $startday + 1) . "</td>\n";
	if(($i % 7) == 6 ) echo "</tr>\n";
}
?>

            </table>
        </td>
    </tr>
</table> 