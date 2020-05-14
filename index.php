<!DOCTYPE html>
<html>
 <head>
  <title>Обменный пункт</title><meta charset="utf-8">
 </head>
 <body>
    <h2>Введите доллары и получите рубли</h2>
    <input type="text">
    <h5></h5>
    <script>{ console.clear();
      document.querySelector('input')
      .addEventListener('input', e => {
         //document.querySelector('h5').textContent = e.target.value;
         fetch('https://enigmatic-temple-26169.herokuapp.com/rates.php')
         .then(x => x.text())
         .then(x => document.querySelector('h5').textContent = x)
         .catch(() => document.querySelector('h5').textContent = 'ERR');
      });
  
    }</script>
<hr />
<div>
<?php
  require 'vendor/autoload.php';
  use Carbon\Carbon;  // import moment from 'moment'
  echo Carbon::now() -> format('j.m.Y h:i'); 
           // Paamayim Nekudotayim   פעמיים נקודתיים   == double colon
           
?>
</div>
</body>
</html>
