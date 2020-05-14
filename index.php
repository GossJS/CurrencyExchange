<?php
  require 'vendor/autoload.php';
  use Carbon\Carbon;  // import moment from 'moment'
  echo Carbon::now() -> format('j.m.Y h:i'); 
           // Paamayim Nekudotayim   פעמיים נקודתיים   == double colon
           
