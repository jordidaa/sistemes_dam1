<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <?php include ('../includes/meta_heder.php') ?>
    </head>    
    <body>
        <!--menu-->
        <?php include ('../includes/menu.php') ?>
        <h1 class="margin_top"></h1>
        <!--index-->
        <div class="center">
                <div class="pagination">
                    <a href="#" class="fletxas"><!--&laquo;--></a>
                    <a href="jornada2.php" class="fletxas">Jornada 2 &raquo; </a>
                </div>
        </div>
        <!-- Trigger the Modal -->
        <img id="myImg" src="../images/pb_sf.jpg" alt="Snow" style="width:100%;max-width:300px">

        <!-- The Modal -->
        <div id="myModal" class="modal">

          <!-- The Close Button -->
          <span class="close">&times;</span>

          <!-- Modal Content (The Image) -->
          <img class="modal-content" id="img01">

          <!-- Modal Caption (Image Text) -->
          <div id="caption"></div>
        </div>
    </body>
    <?php include ('../includes/meta_footer.php') ?>
</html>