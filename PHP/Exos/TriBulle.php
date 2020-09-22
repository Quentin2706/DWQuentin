<?php
    do
    {
        for ($i = 0; $i < count($tableau)-1; $i++)
        {
            if ($tableau[$i] > $tableau[$i + 1])
            {
                $temp = $tableau[$i];
                $tableau[$i] = $tableau[$i+1];
                $tableau[$i+1] = $temp;
                $yapermut = true;
            }
        }
    } while ($yapermut)
?>