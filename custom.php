<?php

    function multiplication()
    {
        echo '<table border=\"1\">';
        for($x=2; $x<=10; $x++)
        {
                    
            echo '<tr><td>Multiplication On '.$x.'</td>';

            for($y=1; $y<=10; $y++)
            {
                // echo $y.'*'.$x.'='. $x*$y .'<br>';
                echo '<p>
                
                    <td>'.$y.'*'.$x.'='. $x*$y .'</td>
                ';
                echo '</p>';
            }
            echo '</tr>';


   

        }
        echo '</table>';
        

    }


    function shape($width,$height)
    {
        for($row=1; $row<=$height; $row++)
        {
            for($col=1; $col<=$width; $col++)
            {
                echo '*   ';
            }
            echo '<br>';
        }
    }

?> 
