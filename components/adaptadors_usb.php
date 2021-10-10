<!DOCTYPE html>
<html>
    <head>
        <title>Adaptadors USB</title>
        <?php include ('../includes/meta_heder.php') ?>
    </head>    
    <body>
        <!--menu-->
        <?php include ('../includes/menu.php') ?>
        <h1 class="margin_top"></h1>
        
        <!--index-->
        <div class="center">
            <div class="pagination">
            <a href="tg_comunicacio_intagrades.php" class="fletxas">&laquo; Connexions Comunicació Integrades a la placa + placa</a>
                <a href="disc_extern.php" class="fletxas">Tipus de USB (Velocitat, Color) &raquo; </a>
            </div>
        </div>
        <h1 class="titolcp">Adaptadors de Comunicació a partir de USB</h1>
        <div class="imgcent">
            <img id="myImg" class="imgcent1" src="../images/pb_sf_usb.png" alt="Placa base" style="width:100%;max-width:400px">
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
                <h4 class="modal-title">Placa Base</h4>
              </div>
              <div class="modal-body">
                <img id="myImg" class="imgcentbtn" src="../images/pb_sf_usb.png" alt="Placa base" style="width:100%;max-width:600px">
              </div>
              <!--<div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>-->
            </div>
        
          </div>
        </div>
        <h1 class="titolcp">Antena WIFI</h1>
        <div class="col-sm-5 col-md-6 cent md">
          <img id="myImg" class="imgcent2" src="../images/antena_wifi.png" alt="Placa base" style="width:100%;max-width:250px">
        </div>
        <div class="col-sm-5 col-md-6 cent md">
        <p>
            Aquesta antena wifi fa servir USB per connectar-se a l'ordinador.<br>
            Aquesta targeta suporta 150 Mbit/s de transferència de dades.
        </p>

        <!-- Trigger the modal with a button -->
          <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1">Veure imatge gran</button>

        <!-- Modal -->
        <div class="modal fade" id="myModal1" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Antena WIFI</h4>
              </div>
              <div class="modal-body">
              <img id="myImg" class="imgcentbtn" src="../images/antena_wifi.png" alt="Placa base" style="width:100%;max-width:600px"> 
              </div>
              <!--<div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>-->
            </div>

          </div>
        </div>
        </div>
        <h1 class="titolcp">USB a Ethernet</h1>
        <div class="col-sm-5 col-md-6 cent md">
        <p>
            Aquesta antena Ethernet Rj-45 fa servir USB per connectar-se a l'ordinador.<br>
            Aquesta targeta suporta 100Mbps de transferència de dades.
        </p>
        <!-- Trigger the modal with a button -->
          <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">Veure imatge gran</button>

        <!-- Modal -->
        <div class="modal fade" id="myModal2" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">USB a Ethernet</h4>
              </div>
              <div class="modal-body">
              <img id="myImg" class="imgcentbtn" src="../images/usb_rj45.png" alt="Placa base" style="width:100%;max-width:600px"> 
              </div>
              <!--<div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>-->
            </div>

          </div>
        </div>
        </div>
        <div class="col-sm-5 col-md-6 cent md">
          <img id="myImg" class="imgcent2" src="../images/usb_rj45.png" alt="Placa base" style="width:100%;max-width:250px">
        </div>
        <h1 class="titolcp">USB a Bluetooth</h1>
        <div class="col-sm-5 col-md-6 cent md">
          <img id="myImg" class="imgcent2" src="../images/bluetooth_usb.png" alt="Placa base" style="width:100%;max-width:250px">
        </div>
        <div class="col-sm-5 col-md-6 cent md">
        <p>
            Aquesta antena Bluetooth fa servir USB per connectar-se a l'ordinador.<br>
        </p>

        <!-- Trigger the modal with a button -->
          <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal3">Veure imatge gran</button>

        <!-- Modal -->
        <div class="modal fade" id="myModal3" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">USB a Bluetooth</h4>
              </div>
              <div class="modal-body">
              <img id="myImg" class="imgcentbtn" src="../images/bluetooth_usb.png" alt="Placa base" style="width:100%;max-width:600px"> 
              </div>
              <!--<div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>-->
            </div>

          </div>
        </div>
        </div>
        <h1 class="titolcp">USB a HDMI</h1>
        <div class="col-sm-5 col-md-6 cent md">
        <p>
            Aquest cable serveix per connectar pantalles amb HDMI a partir de un USB.<br>
            Té una resolució maxima de 3840 x 2160 Pixels.
        </p>
        <!-- Trigger the modal with a button -->
          <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal4">Veure imatge gran</button>

        <!-- Modal -->
        <div class="modal fade" id="myModal4" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">USB a HDMI</h4>
              </div>
              <div class="modal-body">
              <img id="myImg" class="imgcentbtn" src="../images/usb_hdmi.png" alt="Placa base" style="width:100%;max-width:600px"> 
              </div>
              <!--<div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>-->
            </div>

          </div>
        </div>
        </div>
        <div class="col-sm-5 col-md-6 cent md">
          <img id="myImg" class="imgcent2" src="../images/usb_hdmi.png" alt="Placa base" style="width:100%;max-width:250px">
        </div>
    </body>
    <?php include ('../includes/meta_footer.php') ?>
</html>