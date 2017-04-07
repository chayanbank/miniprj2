<!DOCTYPE html>
<?php
include("db.php");
?>
<html>
<head>
<meta charset="utf8">
<title>NewNote</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>
    <div id="page_addNote" data-role="page">
        <div data-role="header">
            <a href="index.php" data-role="button" data-icon="carat-l">Back</a>
            <h2>Add Note</h2>
        </div>
        <div class="ui-content">
        <form method="post" action="del.php">
            <input type="text" id="tf_title" name="title" placeholder="Title">
            <textarea id="tf_content" name="content" placeholder="Content"></textarea>
            <input type="submit" name="add" id="btn_addNote" value="Add Note">
        </form>
        <script>
        $('#btn_addNote').on('click', function(event){
            var valid = true,
            errorMessage = "";

            if($('#tf_title').val() == ''){
                errorMessage = "Please enter title. \n";
                valid = false;
            }
            if($('#tf_content').val() == ''){
                errorMessage += "Please enter content. \n";
                valid = false;
            }
            if(!valid && errorMessage.length > 0){
                alert(errorMessage);
                event.preventDefault();
            }
        });
    </script>
        </div>
        <div data-role="footer" data-position="fixed">
            <h1>นายชยันต์ สุรัตน์เรืองชัย 58160253</h1>
        </div>
    </div>
</body>
</html>