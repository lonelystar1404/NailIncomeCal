<?php
   session_start();
   // remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 
   
   echo 'Log out successful';
   header('Refresh: 1; URL = index.html');
   exit();
?>