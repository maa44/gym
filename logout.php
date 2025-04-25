<?php
include("header.php");
unset($_SESSION["login"]);
unset($_SESSION["admin"]);
unset($_SESSION["scomm"]);

    ?>
    <script>
        location.replace("index.php");
    </script>
    <?php

include("footer.html");
?>