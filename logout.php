<?php
    session_start();
    session_destroy();
    echo "You successfully logout. click here to <a href = 'login1.php'>login again</a>";
?>