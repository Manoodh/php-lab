<html>
    <head><title></title></head>
    <body>
        <h2>Last visited time on the webpage</h2>
        <?php
                $inTwoMonths=60*60*24*60+time();
                setcookie('lastvisit',date("G:i-m/d/y"),$inTwoMonths);
                if(isset($_COOKIE['lastvisit'])){
                    $visit=$_COOKIE['lastvisit'];
                    echo "Your last visit was :",$visit;
                }
                else
                    echo "You have got stale cookies";


        ?>

    </body>
</html>