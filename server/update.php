<?php
$xmlFile = file_get_contents("../xmlFile.xml");
$xml = new SimpleXMLElement($xmlFile);

// Loop through the XML elements
foreach ($_POST as $key => $value) {
  if (is_array($value)) {
    // Update the XML element with the updated value
    $xml->$key[0] = $value[0];
  } else {
    // Update the XML element with the updated value
    $xml->$key = $value;
  }
}

// Save the updated XML to the file
$xml->asXML("../xmlFile.xml");