<!DOCTYPE html>
<?php
include("db.php");
?>
<html>
<head>
<meta charset="utf-8">
<title>Note</title>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>
    <div id="page_viewNote" data-role="page">
        <div data-role="header">
            <a href="#page_notes" data-role="button" data-icon="carat-l">Back</a>
            <h2>Note</h2>
            <a href='#page_editNote' data-role='button' data-icon='edit'>Edit</a>
        </div>
        <div class="ui-content">
            <h2>Test note</h2>
            <p>Content</p>
        </div>
    </div>
</body>
</html>