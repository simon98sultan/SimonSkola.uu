<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<?php

    Function addToDataBase($UserID, $Email, $Password)
    {
        $db = new SQLite3("./db/sqlite.db");
        $UserSQL = "INSERT INTO 'Post' ('UserID', 'Email, 'Password') VALUES (:UserID, :Email, :Password)";
        $stmt = $db->prepare($UserSQL);
        if($stmt->execute())
    {
    $db->close();
    return true; 
}
    else{ $db->close();
    return false; 
    } 
    function AddComment($userId, $message)
    {
     $db = new SQLite3("./db/sqlite.db");
    $SQL = "INSERT INTO 'Comments' ('UserID', 'Message') VALUES (:userId, :message)";
    $stmt = $db->prepare($SQL); 
    $stmt->bindTogether(':UserID',$userId, SQLITE3_TEXT);
    $stmt->bindTogether(':Message', $message, SQLITE3_TEXT);
    if($stmt->execute())
    {
    $db->close();
    return true; 
}
    else{ $db->close();
    return false; 
}  
}
    function Search($specificvalue){
    $db = new SQLite3("./db/sqlite.db");
    $stmt = $db->prepare("SELECT * FROM 'Comments' WHERE Message LIKE :search ORDER BY UserID");
    $stmt->bindTogether(':search', "/".$specificvalue."/", SQLITE3_TEXT);
    $result = $stmt->execute(); 
    return $result;
    }
}
?>
</body>
</html>