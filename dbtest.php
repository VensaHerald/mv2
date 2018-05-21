<!DOCTYPE html>
<html>
<?php 

require_once("model/dbHandler.php");
require_once("model/post.php");

$conn = Db::getInstance();

$status = $conn->getAttribute(PDO::ATTR_CONNECTION_STATUS);

var_dump($status);

?>


</html>