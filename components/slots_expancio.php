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

            <!-- The Modal -->
            <div id="myModal" class="modal">
              <span class="close">&times;</span>
              <img class="modal-content" id="img01">
              <div id="caption"></div>
            </div>
        </div>
        <h1 class="titolcp">PCIe x16</h1>
        <div class="col-sm-5 col-md-6"><div class="imgcent">
            <img id="myImg2" class="imgcent1" src="../images/pb_sf.jpg" alt="Placa base" style="width:100%;max-width:500px">

            <!-- The Modal -->
            <div id="myModal2" class="modal">
              <span class="close">&times;</span>
              <img class="modal-content" id="img02">
              <div id="caption2"></div>
            </div>
        </div></div>
        <div class="col-sm-5 col-md-6"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tempor orci id lorem rhoncus, vitae euismod ex vestibulum. Integer scelerisque, lacus vel finibus feugiat, nisl nulla pulvinar odio, aliquam dignissim augue turpis hendrerit lorem. Aenean sodales ante eu vulputate sodales. Sed suscipit odio a ullamcorper congue. Maecenas sit amet justo elit. Praesent feugiat massa et mi placerat consequat vitae eget velit. Curabitur volutpat semper erat suscipit vulputate. Quisque finibus tempus commodo. Ut neque metus, eleifend in ultrices convallis, porttitor at eros. In semper ligula sem, quis sagittis ipsum tincidunt vitae. Nullam consequat sapien et ipsum tincidunt, a aliquam sapien tristique. Phasellus non erat a arcu aliquam consectetur. In hac habitasse platea dictumst. Donec vulputate lectus at tortor ullamcorper malesuada.

Pellentesque euismod iaculis semper. Nulla imperdiet accumsan massa, sed sagittis ante viverra eget. Ut ac mauris porta, imperdiet arcu sed, auctor magna. Phasellus egestas vestibulum libero, non pretium urna mollis quis. Aliquam sodales dolor ut placerat vestibulum. Curabitur volutpat eros urna, vestibulum scelerisque mauris elementum non. Etiam vitae sagittis ligula, non fermentum libero. Vivamus velit turpis, sagittis eu dui aliquam, laoreet luctus felis. Sed molestie ipsum id elit dignissim fermentum. Donec hendrerit justo imperdiet condimentum gravida. Quisque eu cursus ligula.

Proin bibendum maximus accumsan. Suspendisse et neque quam. Donec nulla massa, tincidunt eu mollis ac, vulputate sed nulla. Integer hendrerit sed est a commodo. Sed condimentum erat porttitor, condimentum nulla in, ullamcorper felis. Suspendisse elementum ex nec volutpat mollis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec mattis, magna varius vestibulum fringilla, lectus dolor imperdiet nisi, sit amet porta tellus ex vel urna. Praesent consequat orci vitae mi interdum, ut dapibus mi euismod. Vivamus et risus lorem. Duis eget tortor volutpat, pulvinar justo eget, placerat mi. Maecenas fermentum felis quis leo sagittis, eget iaculis nunc maximus. Maecenas in lacus quam. Sed enim nunc, malesuada vitae nisi at, rhoncus laoreet lectus.</p></div>


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
<script>
// Get the modal
var modal = document.getElementById("myModal2");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg2");
var modalImg = document.getElementById("img02");
var captionText = document.getElementById("caption2");
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