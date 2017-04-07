<!DOCTYPE html>
<?php
    include("db.php");
?>
<html>

<head>
    <meta charset="utf8">
    <title>My Notes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>

<body>
    <div id="page_notes" data-role="page">
        <div data-role="header">
            <h2>My Notes</h2>
            <a href="NewNote.php" data-icon="plus" class="ui-btn-right" data-role="button">Add</a>
        </div>
        <div class="ui-content">
            <ul id="list_notes" data-role="listview" data-inset="true">
                <?php 
                $query = "SELECT * FROM note GROUP BY dt ORDER BY dt DESC"; 
                mysqli_query("SET NAMES utf8");
                $result1 = $conn->query($query); 
                while ($row = $result1->fetch_array()) { ?>
                    <li data-role="list-divider"><?php echo $row['dt']; ?></li>
                    <?php
                    $query = "SELECT * FROM note WHERE dt='".$row['dt']."'"; 
                    mysqli_query("SET NAMES utf8");
                    $result2 = $conn->query($query);
                    while($row = $result2->fetch_array()) {
                    ?> 
                        <li><a name="refresh" href="refresh.php?id=<?php echo $row['id']."&refresh=1"; ?>"><h2> <?php echo $row['title']; ?> </h2><p><?php echo $row['content']; ?></p></a>
                        <a href='Edit.php?id=<?php echo $row['id']; ?>'></a></li>
                    <?php } ?>
                <?php } ?>
            </ul>
        </div>
        <div data-role="footer" data-position="fixed">
            <h1>นายชยันต์ สุรัตน์เรืองชัย 58160253</h1>
        </div>
    </div>
</body>

</html>