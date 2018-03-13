<?php
    $s = isset($_GET['sidebar']) ? $_GET['sidebar'] : null;
    switch($s)
    {
        default     : include("./media/sidebar_kanan/1.html");break;
    }
?>