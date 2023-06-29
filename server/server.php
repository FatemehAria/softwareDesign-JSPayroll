<?php
// echo $_POST['firstname'];
// echo $_POST['lastname'];
// echo $_POST['nationalid'];
// echo $_POST['contacrt'];
// echo $_POST['personalid'];
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
echo $str;
file_put_contents("../file_926.xml", $str, FILE_APPEND);
header("Location:../show.html");
