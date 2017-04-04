<!DOCTYPE html>
<?php
include("db.php");
    if (isset($_POST['add'])) {
        $title = $_POST['title'];
        $content = $_POST['content'];
        $date = date('Y-m-d');
        if ($title != '' && $content != '') {
            $sql = "INSERT INTO note(title, content, dt) VALUES('$title','$content','$date')";
            $conn->query($sql);
            echo "<meta HTTP-EQUIV='Refresh' CONTENT='2; URL=index.php'>";
        }else{
            header('Location:NewNote.php');
        }
    }
?>
<html>
<head>
<meta charset="utf-8">
<title>NewNote</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>
    <div id="page_addNote" data-role="page">
        <div data-role="header">
            <a data-rel="back" data-role="button" data-icon="carat-l">Back</a>
            <h2>Add Note</h2>
        </div>
        <div class="ui-content">
        <form action="NewNote.php" method="post">
            <input type="text" id="tf_title" name="title" placeholder="Title">
            <textarea id="tf_content" name="content" placeholder="Content"></textarea>
            <input type="submit" name="add" id="btn_addNote" data-role="button" value="Add Note">
        </form>
        </div>
    </div>
</body>
</html>