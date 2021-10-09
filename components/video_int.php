<!DOCTYPE html>
<html>
    <head>
        <title>Disc durs interns</title>
        <?php include ('../includes/meta_heder.php') ?>
    </head>    
    <body>
        <!--menu-->
        <?php include ('../includes/menu.php') ?>
        <h1 class="margin_top"></h1>
        
        <!--index-->
        <div class="center">
            <div class="pagination">
                <a href="tc_disc_dur.php" class="fletxas">&laquo;Disc + Targes de connexió de disc dur (connexió interna i/o externa) + 
                Slots d’Expansió a la PB + Placa</a></p>
                <a href="#" class="fletxas"> Targes de Video + Slots d’Expansió a la PB + Placa &raquo; </a>
            </div>
        </div>
        <h1 class="titolcp">Connexions de Video Integrades + Placa</h1>
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
        <h1 class="titolcp">HDMI</h1>
        <div class="col-sm-5 col-md-6 cent md">
          <img id="myImg" class="imgcent2" src="../images/hdmi.png" alt="Placa base" style="width:100%;max-width:250px">
        </div>
        <div class="col-sm-5 col-md-6 cent md">
          <p> 
          L'HDMI és una manera de connectar la placa base a una pantalla, va sortir al marcat el 2003.<br>
          L'HDMI tanmateix so i vídeo.<br>
          Té una màxima resolució de 2560x1440p60.
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
                <h4 class="modal-title">HDMI</h4>
              </div>
              <div class="modal-body">
              <img id="myImg" class="imgcentbtn" src="../images/hdmi.png" alt="Placa base" style="width:100%;max-width:600px"> 
              </div>
              <!--<div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>-->
            </div>

          </div>
        </div>
        </div>
        <h1 class="titolcp">DisplayPort</h1>
        <div class="col-sm-5 col-md-6 cent md">
        <p> 
        El DisplayPort és una manera de connectar la placa base a una pantalla, va sortir al marcat el 2008.<br>
          El DisplayPort tanmateix so i vídeo.<br>
          Té una màxima resolució de 4096 x 2160.
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
                <h4 class="modal-title">DisplayPort</h4>
              </div>
              <div class="modal-body">
              <img id="myImg" class="imgcentbtn" src="../images/dp.png" alt="Placa base" style="width:100%;max-width:600px"> 
              </div>
              <!--<div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>-->
            </div>

          </div>
        </div>
        </div>
        <div class="col-sm-5 col-md-6 cent md">
          <img id="myImg" class="imgcent2" src="../images/dp.png" alt="Placa base" style="width:100%;max-width:250px">
        </div>
        <!--<h1 class="titolcp">Disc dur a PCIe x2</h1>
        <div class="col-sm-5 col-md-6 cent md">
          <img id="myImg" class="imgcent2" src="../images/dd_expan.png" alt="Placa base" style="width:100%;max-width:250px">
        </div>
        <div class="col-sm-5 col-md-6 cent md">
        <p>
          Targeta de ampliacio de disc durs HDD i SSD.<br>
          La conexio es fa a partir de PCIe x2.<br>
          Te una velocitat de transferencia de dades de 6 Gbit/s.
        </p>

         Trigger the modal with a button -->
        <!--  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal3">Veure imatge gran</button>

         Modal -->
        <!--<div class="modal fade" id="myModal3" role="dialog">
          <div class="modal-dialog">

             Modal content-->
            <!--<div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Disc dur a PCIe x2</h4>
              </div>
              <div class="modal-body">
              <img id="myImg" class="imgcentbtn" src="../images/dd_expan.png" alt="Placa base" style="width:100%;max-width:600px"> 
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>

          </div>
        </div>
        </div>-->
        <!--<h1 class="titolcp">Disc dur SATA 3</h1>
        <div class="col-sm-5 col-md-6 cent md">
        <p>
        Aquest disc dur SATA 3 té diferents velocitats de lectura, escriptura i a les revolucions que van:
            <ul>
              <li>Té una velocitat d'escriptura i de lectura de 150 MB/s.</li>
              <li>El disc dur va a 7200 revolucions per minut.</li>
            </ul>
        </p>
         Trigger the modal with a button -->
        <!--  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal4">Veure imatge gran</button>

         Modal -->
        <!--<div class="modal fade" id="myModal4" role="dialog">
          <div class="modal-dialog">

             Modal content-->
            <!--<div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Disc dur SATA 3</h4>
              </div>
              <div class="modal-body">
              <img id="myImg" class="imgcentbtn" src="../images/sata_3_dd.png" alt="Placa base" style="width:100%;max-width:600px"> 
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>

          </div>
        </div>
        </div>
        <div class="col-sm-5 col-md-6 cent md">
          <img id="myImg" class="imgcent2" src="../images/sata_3_dd.png" alt="Placa base" style="width:100%;max-width:250px">
        </div>-->
    </body>
    <?php include ('../includes/meta_footer.php') ?>
</html>