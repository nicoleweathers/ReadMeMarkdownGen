<?php
    session_start(); // GET SESSION INFO
    session_unset(); 
    session_destroy(); //DESTROY SESSION INFO
    header('location: form'); //REDIRECT TO MAIN PAGE