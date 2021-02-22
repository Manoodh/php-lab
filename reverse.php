<?php
        $str=$_GET['string'];

        function rev($str){
            $s=$str;
            $len=strlen($str);
            echo "Reverse of $s is ";
            for($i=($len-1);$i>=0;$i--)
                echo " $str[$i]";
        }
        rev($str);
?>