<?php
// Je dois TOUJOURS faire un 'session_start();' AVANT de lire un $_SESSION
session_start();
echo $_SESSION['user']['nom'];
 