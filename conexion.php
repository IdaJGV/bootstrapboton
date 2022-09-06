<?php

    class conexion 
    {
        function Conectar()
        {
          $mysqli = new mysqli("brkpmyf7fcbwvw6zfwzn-mysql.services.clever-cloud.com","utoucsucailex2sa","Y1VU6LZ8hs2LQ5hlY56g","brkpmyf7fcbwvw6zfwzn");
          
          if($mysqli->connect_errno)
          {
            echo "Error Al conectar a la Base de datos   ".$mysqli->connect_errno;
          } 
          return $mysqli; 
        }
    }