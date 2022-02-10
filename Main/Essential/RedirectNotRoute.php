<?php 

if (strpos($_SERVER['REQUEST_URI'], '/resources/pages/') !== false) {
    header("Location: ./../../");
}

