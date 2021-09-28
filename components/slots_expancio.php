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
        <img id="myImg" src="../images/pb_sf.jpg" alt="Placa base" style="width:100%;max-width:300px">

<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>
    </body>
    <?php include ('../includes/meta_footer.php') ?>
</html>