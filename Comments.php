<?php
$db = new SQLite3(",/Comments.db"); 
$stmt = $db->prepare('SELECT UserID, Message FROM Comments on Post.Id-Comments.Id');
$arrayofcomments = $stmt->execute();

while($row = $arrayofcomments->GetArray())
{
    echo $row['UserID'];
}
$db->close();
?>