<!DOCTYPE html>
<?php
    include("db.php");
?>
<html>

<head>
    <meta charset="utf-8">
    <title>MyNotes</title>
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <script>
        $(function() {
            var notesList = [];
            var selectedID = 0;

            $("#btn_addNote").on("click", function() {
                var note = new Object();
                note.title = $("#tf_title").val();
                note.content = $("#tf_content").val();
                notesList.push(note);

                localStorage.notesList = JSON.stringify(notesList);
            });

            $("btn_editNote").on("click", function() {
                notesList[selectedID].title = $("#tf_title_edit").val();
                notesList[selectedID].content = $("#tf_content_edit").val();
                localStorage.notesList = JSON.stringify(notesList);
            });

            $("#btn_deleteNote").on("click", function() {
                notesList.splice(selectedID, 1);
                localStorage.notesList = JSON.stringify(notesList);
            });

            $("#page_notes").on("pagebeforeshow", function() {
                $("#list_notes").html("");

                if (localStorage.notesList != undefined) {
                    notesList = JSON.parse(localStorage.notesList);
                }

                for (i = 0; i < notesList.length; i++) {
                    $("#list_notes").append("<li id='" + i + "'><a href='#page_viewNote'>" + notesList[i].title + "</a></li>");
                }

                $("#list_notes li").on("click", function() {
                    selectedID = this.id;
                });

                $("#list_notes").listview("refresh");
            });

            $("#page_viewNote").on("pagebeforeshow", function() {
                $(this).find(".ui-content h2").html(notesList[selectedID].title);
                $(this).find(".ui-content p").html(notesList[selectedID].content);
            });

            $("#page_editNote").on("pagebeforeshow", function() {
                $(this).find("#tf_title_edit").val(notesList[selectedID].title);
                $(this).find("#tf_content_edit").val(notesList[selectedID].content);
            });
        });
    </script>
</head>

<body>
    <div id="page_notes" data-role="page">
        <div data-role="header">
            <h2>My Notes</h2>
            <a href="#page_addNote" data-icon="plus" class="ui-btn-right" data-role="button">Add</a>
        </div>
        <div class="ui-content">
            <ul id="list_notes" data-role="listview">

            </ul>
        </div>
    </div>
</body>

</html>