<?php
// $str = "";
$str .= "<div>";
foreach ($_POST as $key => $value) {
    if (is_array($value)) {
        $str .= "<pre>";
        $str .= "<p>";
        print_r("$key:$value[0]");
        $str .= "</p>";
        $str .= "<button>Delete</button>";
        $str .= "</pre>";
    } else {
        $str .= "<pre>";
        $str .= "<p>";
        $str .= "$key:$value";
        $str .= "</p>";
        $str .= "<button>Delete</button>";
        $str .= "</pre>";
    }
}
$str .= "<p>-------------------------------------</p>";
$str .= "</div>";
file_put_contents("../xmlFile.xml", $str, FILE_APPEND);
header("Location:../show.html");