<?php
   include "Page.php";

    $header = $_POST["header"];
    $content = $_POST["content"];
    $year = $_POST["year"];
    $copyright = $_POST["copyright"];
    $submit = $_POST["submit"];

    if(isset($header) && isset($content) && isset($year) && isset($copyright)) {
        if($submit) {
            $obj_new = new Page($content, $header, $year, $copyright);
            $obj_new->get();
        }

    }
?>