<?php
$str = "";
foreach ($_POST as $key => $value) {
    if (is_array($value)) {
        $str .= "<pre>";
        print_r("$key:$value[0]</br>");
        $str .= "</pre> ";
    } else {
        $str .= "<pre>";
        $str .= "$key:$value</br>";
        $str .= "</pre> ";
    }
}
file_put_contents("../xmlFile.xml", $str, FILE_APPEND);
header("Location:../show.html");