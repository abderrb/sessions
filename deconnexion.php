<?php
session_start();

// On supprime la partie "user" de SESSION
unset($_SESSION['user']);

var_dump($_SESSION);
