<?php 
    $a = "1aaaaaaaaaaaaaaaaaaaaaaa";
    $b = array();
    $len = strlen($a);
    for ($i = 0; $i < $len; $i++) {
        $b[]=$a[$i];
    }
    for ($k = 0; $k < $len; $k++) 
    {
        for ($n = $k+1; $n < $len; $n++) 
        {
            if ($b[$k]==$b[$n]&&$b[$k]!='')
            {
                for ($l = $n; $l < $len; $l++) 
                {
                    $b[$l]=$b[$l+1];
                }
                $n = $n - 1; 
            }
        }
        
    }
    print_r(var_dump($b));
    // {
    //     $b[]=$value;
    // }
    // var_dump($a);
    // var_dump($b);
?>