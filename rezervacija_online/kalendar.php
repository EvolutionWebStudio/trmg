<?php 

    class cjenovnik
    {  
        public $m='';
        
        public function ispis($mjesec = 1)
        {
            $m=0;
            $date;
            if($mjesec == 1)
            {
                //This gets today's date
                $date =time () ;
                $this->broj=-1;  
                          
            }
            else if($mjesec < 1)
            {
                
                $date = time () - (30*24*60*60);
                $m++;
                echo $m;
                if($m>=1)  $date = $date - (30*24*60*60);  
            }
            else
            {
                $date = time () + (32*24*60*60);
            }

            //This puts the day, month, and year in seperate variables
            $day = date('d', $date) ;
            $month = date('m', $date) ;
            $year = date('Y', $date) ;
            
            $month--;
            
            $prosli_mjesec = date('m',$date-(30*24*60*60));
            $sledeci_mjesec = date('m',$date+(30*24*60*60));
            

            //Here we generate the first day of the month
            $first_day = mktime(0,0,0,$month, 1, $year) ;
            $first_day_prosli = mktime(0,0,0,$prosli_mjesec, 1, $year) ;
            $first_day_sledeci = mktime(0,0,0,$sledeci_mjesec, 1, $year) ;

            //This gets us the month name
            $title = date('F', $first_day) ; 
            $title_prosli = date('F', $first_day_prosli);
            $title_sledeci = date('F', $first_day_sledeci);
            
            //Mjeseci sa engleskog na srpski
            switch($title)
            {
                case 'January':
                    $title='Januar';
                    break;
                case 'February':
                    $title='Februar';
                    break;
                case 'March':
                    $title='Mart';
                    break;
                case 'April':
                    $title='April';
                    break;
                case 'May':
                    $title='Maj';
                    break;
                case 'June':
                    $title='Jun';
                    break;
                case 'July':
                    $title='Juli';
                    break;
                case 'August':
                    $title='Avgust';
                    break;
                case 'September':
                    $title='Septembar';
                    break;
                case 'October':
                    $title='Oktobar';
                    break;
                case 'November':
                    $title='Novembar';
                    break;
                case 'December':
                    $title='Decembar';
                    break;
                
            }
            switch($title_prosli)
            {
                case 'January':
                    $title_prosli='Januar';
                    break;
                case 'February':
                    $title_prosli='Februar';
                    break;
                case 'March':
                    $title_prosli='Mart';
                    break;
                case 'April':
                    $title_prosli='April';
                    break;
                case 'May':
                    $title_prosli='Maj';
                    break;
                case 'June':
                    $title_prosli='Jun';
                    break;
                case 'July':
                    $title_prosli='Juli';
                    break;
                case 'August':
                    $title_prosli='Avgust';
                    break;
                case 'September':
                    $title_prosli='Septmebar';
                    break;
                case 'October':
                    $title_prosli='Oktobar';
                    break;
                case 'November':
                    $title_prosli='Novembar';
                    break;
                case 'December':
                    $title_prosli='Decembar';
                    break;
                
            }
            switch($title_sledeci)
            {
                case 'January':
                    $title_sledeci='Januar';
                    break;
                case 'February':
                    $title_sledeci='Februar';
                    break;
                case 'March':
                    $title_sledeci='Mart';
                    break;
                case 'April':
                    $title_sledeci='April';
                    break;
                case 'May':
                    $title_sledeci='Maj';
                    break;
                case 'June':
                    $title_sledeci='Jun';
                    break;
                case 'July':
                    $title_sledeci='Juli';
                    break;
                case 'August':
                    $title_sledeci='Avgust';
                    break;
                case 'September':
                    $title_sledeci='Septembar';
                    break;
                case 'October':
                    $title_sledeci='Oktobar';
                    break;
                case 'November':
                    $title_sledeci='Novembar';
                    break;
                case 'December':
                    $title_sledeci='Decembar';
                    break;
                
            }

            //Here we find out what day of the week the first day of the month falls on 
            $day_of_week = date('D', $first_day) ; 



            //Once we know what day of the week it falls on, we know how many blank days occure before it. If the first day of the week is a Sunday then it would be zero

            switch($day_of_week){ 

                case "Mon": $blank = 0; break; 

                case "Tue": $blank = 1; break; 

                case "Wed": $blank = 2; break; 

                case "Thu": $blank = 3; break; 

                case "Fri": $blank = 4; break; 

                case "Sat": $blank = 5; break; 

                case "Sun": $blank = 6; break; 

            }   



            //We then determine how many days are in the current month

            $days_in_month = cal_days_in_month(0, $month, $year) ; 

            //Here we start building the table heads 

            echo "<table border=1 width=294>";

            echo "<tr><td><a target='' href='index.php?r=termag/rezervacija&mjesec=$this->broj'>$title_prosli $year</a></td><td><th colspan=7> $title $year </th></td><td><a target='' href='/termag/index.php?r=termag/rezervacija&mjesec=2'>$title_sledeci $year</a></td></tr>";

            echo "<tr><td width=42>Pon</td><td width=42>Uto</td><td 
                width=42>Sre</td><td width=42>Čet</td><td width=42>Pet</td><td 
                width=42>Sub</td><td width=42>Ned</td></tr>";



            //This counts the days in the week, up to 7

            $day_count = 1;



            echo "<tr>";

            //first we take care of those blank days

            while ( $blank > 0 ) 
            { 
                echo "<td></td>"; 

                $blank = $blank-1; 

                $day_count++;
            } 
 
            //sets the first day of the month to 1 

            $day_num = 1;



            //count up the days, untill we've done all of them in the month

            while ( $day_num <= $days_in_month ) 
            { 
                echo "<td> $day_num </td>"; 

                $day_num++; 

                $day_count++;

                //Make sure we start a new row every week

                if ($day_count > 7)
                {

                    echo "</tr><tr>";

                    $day_count = 1;
                }

            } 
 
            //Finaly we finish out the table with some blank details if needed

            while ( $day_count >1 && $day_count <=7 ) 
            { 

                echo "<td> </td>"; 

                $day_count++; 
            } 

 
            echo "</tr></table>"; 
         }
    }
?>