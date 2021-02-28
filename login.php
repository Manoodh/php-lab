<?php

$r=$_POST['user'];
$n=$_POST['password'];

$db=pg_connect("host=127.0.0.1 port=5432 dbname=college user=postgres password=post");

if(!$db){
    echo "Error Unable to open database<br>";
}
$f=0;
$query="SELECT * FROM login";
$rs=pg_query($db,$query);

while($row=pg_fetch_row($rs))

{
    if($r==$row[0])
        if($n==$row[1])
            $f=1;
}

if($f==1)
    echo "Your are successfully loggged in";
else  
    echo "Login failure";
pg_free_result($result);
pg_close($db);

?>
