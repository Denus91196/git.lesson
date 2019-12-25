<?php

$link=mysqli_connect('localhost','root','1','test');

if(mysqli_connect_errno())
{
    echo 'oshibka k bd('.mysqli_connect_errno().'): '. mysqli_connect_error();
    exit();
}