<?php   // Constants 

define('WIDTH','1140px');



const SALES_TAX = 0.085;

$gross_price = 100;

$net_price = $gross_price * (1 + SALES_TAX);

echo $net_price; // 108.5



if(true) 
{
    echo WIDTH;
}