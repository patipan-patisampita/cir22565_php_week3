<?php
    $star = "Namax star"; //2.Global varoable
    function drakonball(){
        //echo "สวัสดีชาว $star"; 
        static $x = 0; // 3.Static variable
        $star = "Earth star";  //1.Local variable

        echo "1.Local variable $star";
        echo "<br />";
        echo "3.Static variable $x";
        echo "<br />";
    }
    drakonball(); //call function drakonball

    echo "2.Global varoable $star";
?>