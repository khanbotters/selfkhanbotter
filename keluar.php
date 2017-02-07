<?php
session_start();
session_destroy();
header('location: index.php?i=SUCESSED Logout  By GULRAIZ REHMAN !');
?>