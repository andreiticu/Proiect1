<?php
 //include connection file
 include "connection2.php";
$sql="CREATE TRIGGER after_delete AFTER DELETE ON images FOR EACH ROW
                BEGIN
                INSERT INTO images_updated(title,status,edtime)VALUES(OLD.title,'DELETED',NOW());
                END;
";
        $stmt=$con->prepare($sql);
        $stmt->execute();
 $sql2="CALL deleteimage('{$_GET['id']}')";
 $q=$con->query($sql2);
 if ($q) {
     $header = header('location:welcome.php');
} else {
    "problema";
}
