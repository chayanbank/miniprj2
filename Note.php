<!DOCTYPE html>
<?php
include("db.php");
$id = $_GET['id'];
?>
<html>
<head>
<meta charset="utf8">
<title>Note</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<script>
     $(document).on("pagecreate","#page_view",function(){
        $("div").on("swipeleft",function(){
            $.mobile.changePage( "index.php", { transition: "slide"} );
        }); 

        $("div").on("swiperight",function(){
            $.mobile.changePage( "Edit.php?id=<?php echo $id; ?>", { transition: "slide" ,reverse: "true" } );
        }); 
     });
</script>
</head>
<body>
    <div id="page_view" data-role="page">
        <div data-role="header">
            <a href="index.php" id="back" data-role="button" data-icon="carat-l">Back</a>
            <h2>Note</h2>
        </div>
        <div class="ui-content">
        <?php 
            $query = "SELECT * FROM note WHERE id=$id"; 
            mysqli_query("SET NAMES utf8");
            $result = $conn->query($query); 
            
            while($row = $result->fetch_array()) { ?> 
            <h2><?php echo $row['title']; ?></h2>
            <p><?php echo $row['content']; ?></p>
        <?php } ?>
        </div>
        <div data-role="footer" data-position="fixed">
            <h1>นายชยันต์ สุรัตน์เรืองชัย 58160253</h1>
        </div>
    </div>
</body>
</html>