<!DOCTYPE html>
<?php
include("db.php");
?>
<html>
<head>
<meta charset="utf-8">
<title>NewNote</title>
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
            <input type="text" id="tf_title" placeholder="Title">
            <textarea id="tf_content" placeholder="Content"></textarea>
            <a id="btn_addNote" href="#page_notes" data-role="button">Add Note</a>
        </div>
    </div>
</body>
</html>