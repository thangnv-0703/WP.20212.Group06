<?php
        $string1 = "Day la string 1 ";
        $string2 = "Day la string 2";

        $len = strlen($string1);
        print  $len;
        print "<br>";

        print str_word_count($string1); // print 3
        print "<br>";

        print strpos($string1,"string"); // print 7
        print "<br>";

        print str_replace("string","new string",$string1);
        print "<br>";

        print $string1.$string2;
        print "<br>";

        $new_string_1 = trim($string1);
        print $new_string_1.$string2;
        print "<br>";

        print strtolower($string1);
        print "<br>";

        print strtoupper($string1);
        print "<br>";

        $substring = substr($string1,0,5);
        echo $substring;

?>