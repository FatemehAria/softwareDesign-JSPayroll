<?php
if(isset($_POST['delete'])){
    $deleteValue = $_POST['deleteValue'];
    $xml = simplexml_load_file("../xmlFile.xml");
    foreach($xml -> children() as $child){
        if($child == $deleteValue){
            unset($child[0]);
            break;
        }
    }
}
$xml->asXML("../xmlFile.xml");
header("Location:../show.html");
//  $str .= "<form method='post' action='./delete.php'>";
// $str .= "<input type='hidden' name='deleteValue' value='$value[0]'/>";
// $str .= "</form> ";

// $str .= "<form method='post' action='./delete.php'>";
// $str .= "<input type='hidden' name='deleteValue' value='$value'/>";
// $str .= "</form> ";