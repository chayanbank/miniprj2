<?php
if($_GET['refresh']==1){
        $id = $_GET['id'];

?>

<html>
    <head>
        <title>MyNotes</title>
    </head>
    <body>
    <script language="JavaScript">
        document.location = "Note.php?id=<?php echo $id; ?>";
    </script>
    </body>
</html>
<?php } ?>