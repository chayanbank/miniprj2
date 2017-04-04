<?php
include('db.php');

if ($submit=="DEL"){
    $sql="DELETE FROM note WHERE id='".$_GET['id']."'";
    $conn->query($sql);
    echo "<meta http-equiv='refresh' content='1;URL=index.php'>";
}
?>