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
                <a href="jornada2.php" class="fletxas">Disc + Connexions Integrades Internes de Disc Dur + Placa &raquo; </a>
            </div>
        </div>
        <div class="imgcent">
            <img id="myImg" class="imgcent1" src="../images/pb_sf.jpg" alt="Placa base" style="width:100%;max-width:500px">

            <!-- Large modal -->
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button>
          <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                ...
              </div>
            </div>
          </div>
        </div>
        <h1 class="titolcp">PCIe x16</h1>
        <div class="col-sm-5 col-md-6">
          <img class="" src="../images/pb_sf.jpg" >
        </div>
        <div class="col-sm-5 col-md-6"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tempor orci id lorem rhoncus, vitae euismod ex vestibulum. Integer scelerisque, lacus vel finibus feugiat, nisl nulla pulvinar odio, aliquam dignissim augue turpis hendrerit lorem. Aenean sodales ante eu vulputate sodales. Sed suscipit odio a ullamcorper congue. Maecenas sit amet justo elit. Praesent feugiat massa et mi placerat consequat vitae eget velit. Curabitur volutpat semper erat suscipit vulputate. Quisque finibus tempus commodo. Ut neque metus, eleifend in ultrices convallis, porttitor at eros. In semper ligula sem, quis sagittis ipsum tincidunt vitae. Nullam consequat sapien et ipsum tincidunt, a aliquam sapien tristique. Phasellus non erat a arcu aliquam consectetur. In hac habitasse platea dictumst. Donec vulputate lectus at tortor ullamcorper malesuada.
        </p>
        <!-- Large modal -->
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button>
          <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                ...
              </div>
            </div>
          </div>
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