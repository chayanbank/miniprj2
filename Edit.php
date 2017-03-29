<!DOCTYPE html>
<?php
include("db.php");
?>
<html>
<head>
<meta charset="utf-8">
<title>Edit</title>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>
    <div id="page_editNote" data-role="page">
        <div data-role="header">
            <a data-rel="back" data-role="button" data-icon="carat-l">Back</a>
            <h2>Edit</h2>
            <a id="btn_deleteNote" href="#page_notes" data-role="button" data-icon="delete">Delete</a>
        </div>
        <div class="ui-content">
            <input type="text" id="tf_title_edit">
            <textarea id="tf_content_edit"></textarea>
            <a id="btn_editNote" href="#page_viewNote" data-role="button">Edit</a>
        </div>
    </div>
</body>
</html>