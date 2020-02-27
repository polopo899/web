<?php
/* 2
$fp = fopen('file.txt','w+');
while($i<=100)
{
    $write = $i."\n" ;
    fwrite($fp, $write);
    $i+=5;
}
*/


/* 4
$fp = fopen('file.txt','w+');
while($i<=100)
{
    $write = $i."\n" ;
    fwrite($fp, $write);
    $i+=50;
}
*/


/* 6
$host = "127.0.0.0";
$database = "db";
$user = "user";
$password ="pass";

$link = mysqli_connect($host, $user, $password, $database);
if($link)
{
    echo "Подключено к бд";
}
$query = "CREATE TABLE tabl ( id INT, name VARCHAR(40), price VARCHAR(40));";

$result = mysqli_query($link, $query);
if($result)
{
    echo "Запрос выполнен";
}
*/


/* 8
$host = "127.0.0.0";
$database = "db";
$user = "user";
$password ="pass";

$link = mysqli_connect($host, $user, $password, $database);
if($link)
{
    echo "Подключено к бд";
}
$query = "DROP TABLE tabl;";

$result = mysqli_query($link, $query);
if($result)
{
    echo "Запрос выполнен";
}
*/


/* 9 
$host = "127.0.0.1";
$database = "db";
$user = "user";
$password ="pass";

$link = mysqli_connect($host, $user, $password, $database);
if($link)
{
    echo "Подключено к бд";
}
$query = "INSERT INTO tabl (id,name,price) values (10,'Cat',100);";

$result = mysqli_query($link, $query);
if($result)
{
    echo "Запрос выполнен";
}
*/


/* 13
$fp = fopen('file.txt','w+');
while($i<=100)
{
    $write = $i."\n" ;
    fwrite($fp, $write);
    $i+=20;
}
*/


/* 14
$fp = fopen('file.txt','w+');
while($i<=100)
{
    $write = $i."\n" ;
    fwrite($fp, $write);
    $i+=10;
}
*/


/* 15
$fp = fopen('file.txt','w+');
while($i<=100)
{
    $write = $i."\n" ;
    fwrite($fp, $write);
    $i+=50;
}
*/

/* 16
$fp = fopen('file.txt','w+');
while($i<=100)
{
    $write = $i."\n" ;
    fwrite($fp, $write);
    $i+=5;
}
*/


/* 30
$host = "127.0.0.0";
$database = "db";
$user = "user";
$password ="pass";

$link = mysqli_connect($host, $user, $password, $database);
if($link)
{
    echo "Подключено к бд";
}
$query = "CREATE TABLE tabl ( id INT, name VARCHAR(40), price VARCHAR(40));";

$result = mysqli_query($link, $query);
if($result)
{
    echo "Запрос выполнен";
}
*/


/* 31
$host = "127.0.0.0";
$database = "db";
$user = "user";
$password ="pass";

$link = mysqli_connect($host, $user, $password, $database);
if($link)
{
    echo "Подключено к бд";
}
$query = "DROP TABLE tabl;";

$result = mysqli_query($link, $query);
if($result)
{
    echo "Запрос выполнен";
}
*/



/* 34
$fp = fopen('file.txt','w+');
while($i<=100)
{
    $write = $i."\n" ;
    fwrite($fp, $write);
    $i+=50;
}
*/

/* 37
$fp = fopen('file.txt','w+');
while($i<=100)
{
    $write = $i."\n" ;
    fwrite($fp, $write);
    $i+=20;
}
*/
?>