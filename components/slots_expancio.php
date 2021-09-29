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
            <img id="myImg" class="imgcent1" src="../images/pb_sf.png" alt="Placa base" style="width:100%;max-width:500px">
        </div>
        <!-- Trigger the modal with a button -->
        <button type="button" class="btn btn-info btn-lg centbtn" data-toggle="modal" data-target="#myModal">Veure imatge gran</button>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Veure imatge gran</h4>
      </div>
      <div class="modal-body">
        <img id="myImg" class="imgcentbtn" src="../images/pb_sf.png" alt="Placa base" style="width:100%;max-width:600px">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
        <h1 class="titolcp">PCIe x16</h1>
        <div class="col-sm-5 col-md-6 cent">
          <img id="myImg" class="imgcent2" src="../images/pci_ex16.png" alt="Placa base" style="width:100%;max-width:250px">
        </div>
        <div class="col-sm-5 col-md-6 cent"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tempor orci id lorem rhoncus, vitae euismod ex vestibulum. Integer scelerisque, lacus vel finibus feugiat, nisl nulla pulvinar odio, aliquam dignissim augue turpis hendrerit lorem. Aenean sodales ante eu vulputate sodales. Sed suscipit odio a ullamcorper congue. Maecenas sit amet justo elit. Praesent feugiat massa et mi placerat consequat vitae eget velit. Curabitur volutpat semper erat suscipit vulputate. Quisque finibus tempus commodo. Ut neque metus, eleifend in ultrices convallis, porttitor at eros. In semper ligula sem, quis sagittis ipsum tincidunt vitae. Nullam consequat sapien et ipsum tincidunt, a aliquam sapien tristique. Phasellus non erat a arcu aliquam consectetur. In hac habitasse platea dictumst. Donec vulputate lectus at tortor ullamcorper malesuada.
        </p>
        <!-- Trigger the modal with a button -->
          <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1">Open Modal</button>

        <!-- Modal -->
        <div class="modal fade" id="myModal1" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
              </div>
              <div class="modal-body">
              <img id="myImg" class="imgcentbtn" src="../images/pci_ex16.png" alt="Placa base" style="width:100%;max-width:600px"> 
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>

          </div>
        </div>
        </div>
        <h1 class="titolcp">PCIe x1</h1>
        <div class="col-sm-5 col-md-6 cent">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tempor orci id lorem rhoncus, vitae euismod ex vestibulum. Integer scelerisque, lacus vel finibus feugiat, nisl nulla pulvinar odio, aliquam dignissim augue turpis hendrerit lorem. Aenean sodales ante eu vulputate sodales. Sed suscipit odio a ullamcorper congue. Maecenas sit amet justo elit. Praesent feugiat massa et mi placerat consequat vitae eget velit. Curabitur volutpat semper erat suscipit vulputate. Quisque finibus tempus commodo. Ut neque metus, eleifend in ultrices convallis, porttitor at eros. In semper ligula sem, quis sagittis ipsum tincidunt vitae. Nullam consequat sapien et ipsum tincidunt, a aliquam sapien tristique. Phasellus non erat a arcu aliquam consectetur. In hac habitasse platea dictumst. Donec vulputate lectus at tortor ullamcorper malesuada.
        </p>
        <!-- Trigger the modal with a button -->
          <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">Open Modal</button>

        <!-- Modal -->
        <div class="modal fade" id="myModal2" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
              </div>
              <div class="modal-body">
              <img id="myImg" class="imgcentbtn" src="../images/pci_ex1.png" alt="Placa base" style="width:100%;max-width:600px"> 
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>

          </div>
        </div>
        </div>
        <div class="col-sm-5 col-md-6 cent">
          <img id="myImg" class="imgcent2" src="../images/pci_ex1.png" alt="Placa base" style="width:100%;max-width:250px">
        </div>
    </body>
    <?php include ('../includes/meta_footer.php') ?>
</html>