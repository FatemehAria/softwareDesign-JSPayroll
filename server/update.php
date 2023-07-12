<?php
if (isset($_POST['updatedXml'])) {
  $updatedXml = $_POST['updatedXml'];
  file_put_contents("../xmlFile.xml", $updatedXml);
  echo "XML updated successfully";
} else {
  echo "No XML data received";
}