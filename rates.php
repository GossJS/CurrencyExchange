<?php

 $json = file_get_contents('https://kodaktor.ru/j/rates2');
 $obj = json_decode($json);
 $rate = $obj[0] -> sell;

 echo $rate * $_GET['dollars'];
