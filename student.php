<?php

$regno=$_GET['no'];
$host="host=127.0.0.1";
$port="5432";
$dbname="dbname=college";
$credential="user=postgres password=post";
$db=pg_connect($host $port $dbname $credential);

if(!$db){
    echo "Error Unable to open database<br>";
}
else{
    echo "Opened database successfully";
}
$f=0;
$query="SELECT * FROM student";
$rs=pg_query($db,$query);

while($row=pg_fetch_row($rs))

{
    if($row[0]==$regno)
       {
           $f=1;
           echo "Register number: $row[0]<br>";
           echo "Name: $row[1]<br>";
           echo "Total Mark: $row[2]<br>";
           echo "Grade: $row[3]<br>";
       }
}

if($f==0)
    echo "Register number not found";

pg_free_result($result);
pg_close($db);

?>