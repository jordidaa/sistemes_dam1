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
                <a href="disc_intern.php" class="fletxas">Disc + Connexions Integrades Internes de Disc Dur + Placa &raquo; </a>
            </div>
        </div>
        <h1 class="titolcp">Slots d’Expansió a la PB + Placa</h1>
        <div class="imgcent">
            <img id="myImg" class="imgcent1" src="../images/pb_sf.png" alt="Placa base" style="width:100%;max-width:400px">
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
                <img id="myImg" class="imgcentbtn" src="../images/pb_sf.png" alt="Placa base" style="width:100%;max-width:600px">
              </div>
              <!--<div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>-->
            </div>
        
          </div>
        </div>
        <h1 class="titolcp">PCIe x16</h1>
        <div class="col-sm-5 col-md-6 cent md">
          <img id="myImg" class="imgcent2" src="../images/pci_ex16.png" alt="Placa base" style="width:100%;max-width:250px">
        </div>
        <div class="col-sm-5 col-md-6 cent md">
          <p> 
            El PCI expres x16 vol dir que té 16 canals de transferència de dades.<br>
            Hi ha diferents tipus de versió de pci expres en aquesta placa base:
              <ul>
                <li>El que a la placa base és gris, és versió 4.0 i va a una velocitat de 31,51 GB/s.</li>
                <li>Els que a la placa base són negres, són versió 3.0 i va a una velocitat de 15,75 GB/s.</li>
              </ul>
              
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
                <h4 class="modal-title">PCIe x16</h4>
              </div>
              <div class="modal-body">
              <img id="myImg" class="imgcentbtn" src="../images/pci_ex16.png" alt="Placa base" style="width:100%;max-width:600px"> 
              </div>
              <!--<div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>-->
            </div>

          </div>
        </div>
        </div>
        <h1 class="titolcp">PCIe x1</h1>
        <div class="col-sm-5 col-md-6 cent md">
        <p>
        El PCI expres x1 vol dir que té 1 canal de transferència de dades.<br>
        En aquesta placa base és la versió 3.0 i va a una velocitat de 15,75 GB/s
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
                <h4 class="modal-title">PCIe x1</h4>
              </div>
              <div class="modal-body">
              <img id="myImg" class="imgcentbtn" src="../images/pci_ex1.png" alt="Placa base" style="width:100%;max-width:600px"> 
              </div>
              <!--<div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>-->
            </div>

          </div>
        </div>
        </div>
        <div class="col-sm-5 col-md-6 cent md">
          <img id="myImg" class="imgcent2" src="../images/pci_ex1.png" alt="Placa base" style="width:100%;max-width:250px">
        </div>
    </body>
    <?php include ('../includes/meta_footer.php') ?>
</html>