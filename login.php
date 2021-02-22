<?php

$r=$_POST['user'];
$n=$_POST['password'];

$host="host=127.0.0.1";
$port="5432";
$dbname="dbname=college";
$credential="user=postgres password=post";

$db=pg_connect("$host $port $dbname $credential");

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