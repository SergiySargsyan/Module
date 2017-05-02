<?php 
    $second = ["31", "32","33"];
    $a = array("zero",$second, "first");
    var_dump($a);
    var_dump(is_array($a[2]));
    function prr ($arr, $level){
        for($i = 0; $i<count($arr); $i++){
            if (is_array($arr[$i])){
                prr($arr[$i],($level+1));
            }
            else
            {
                for ($k = 0; $k < $level; $k++) {
                    echo "--";
                }
                echo $arr[$i]."<br/>";
            }
        }
    }
    prr($a,1);
?>