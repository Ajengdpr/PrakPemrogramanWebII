<?php
// DeleteMember.php
require 'Model.php';

$id_member = $_GET['id'];
$result = deleteMember($id_member);

echo $result;
?>