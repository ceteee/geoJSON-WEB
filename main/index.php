<?php
	session_start();
	include "php/connection.php";
?>


<?php
                  $query = mysqli_query($conn, "SELECT longitude,latitude From datarelawan") or die(mysqli_error());
                      if (mysqli_num_rows($query) == 0) {
                        echo "<tr align='center'><td colspan='6'>Tidak ada data !</td></tr>";
                      } else {

                        $geojson = array( 'type' => 'FeatureCollection', 'features' => array());

                        while ($row = mysqli_fetch_assoc($query)) {
                              $marker = array(
                              'type' => 'Feature',
                              'geometry' => array(
                                'type' => 'Point',
                                'coordinates' => array(
                                  $row['longitude'],
                                  $row['latitude'] 
                                )
                              )
                            );
                            array_push($geojson['features'], $marker);
                                                  }
                      }
                      
                      ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin-Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <script src="https://api.mapbox.com/mapbox-gl-js/v1.10.0/mapbox-gl.js"></script>
  <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
  <link href="https://api.mapbox.com/mapbox-gl-js/v1.10.0/mapbox-gl.css" rel="stylesheet" />

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate">
          <i class="fas fa-grin"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Welcome Admin<sup></sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Geolokasi</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-user-friends"></i>
          <span>Tabel</span>
        </a>
        <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">daftar user</h6>
            <a class="collapse-item" href="katimsukses.php">Kepala Tim Sukses</a>
            <a class="collapse-item" href="table-kacam.php">Kepala Kecamatan</a>
            <a class="collapse-item" href="table-kalur.php">Kepala Kelurahan</a>
            <a class="collapse-item" href="table-kaling.php">Kepala Lingkungan</a>
            <a class="collapse-item" href="table-vol.php">Volunteer</a>
          </div>
        </div>
      </li>





      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-info" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">1</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">There is (dynamic sum) people  </span>
                  </div>
                </a>


            </li>



            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo 	$_SESSION['username']; ?></span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

                          <!-- Begin Page Content -->
                          <div class="container-fluid">

                            <!-- Page Heading --
                                          <!-- Area Chart -->
                        <div class="row">
                          <div class="col-xl-9 col-lg-7">
                            <div class="card shadow mb-4">
                              <!-- Card Header - Dropdown -->
                              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Geolokasi Pendukung</h6>
                                <div class="dropdown no-arrow">
                                  <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                  </a>
                                  <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                    <div class="dropdown-header">Dropdown Header:</div>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                  </div>
                                </div>
                              </div>
                              <!-- Card Body -->
                              <div class="card-body">
                                <div id="map" style="width: 100%; height: 400px;"></div>
                              </div>
                            </div>
                          </div>
                            
                          <div class="col-xl-3 col-lg-5">
                            <div class="card shadow mb-4">
                              <!-- Card Header - Dropdown -->
                              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Keterangan</h6>
  
                              </div>
                              <!-- Card Body -->
                              <div class="card-body">
                                <div class="row-mb-12">
                                  <p class="font-weight-light">Jumlah Pendukung </p>
                                </div>

                                <div class="row-mb-12">
                                  <h5 class="font-weight-bold">1.000.021</h5>
                                </div>
                                <hr>
                                <div class="row-mb-12">
                                  <p class="font-weight-light">Jumlah Penduduk </p>
                                </div>

                                <div class="row-mb-12">
                                  <h5 class="font-weight-bold">2.900.231</h5>
                                </div>
                                <hr>
                              </div>
                            </div>

                          </div>
                        </div>
                          </div>
                          <!-- /.container-fluid -->

                        </div>
                        <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Geolocation 2020  <?php echo json_encode($geojson,JSON_NUMERIC_CHECK); ?>



</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="php/logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>



  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
  
    <!-- Menyisipkan library Google Maps -->
    <script src="http://maps.googleapis.com/maps/api/js"></script>

    <script>
      mapboxgl.accessToken = 'pk.eyJ1IjoiY2hyc3RtYm4iLCJhIjoiY2thOTF2ZTFqMDYyZTJ4czRkMnQ4YnN4ZCJ9.fDs1DFytJ4Tez_jH_09j0w';
        var map = new mapboxgl.Map({
        container: 'map', // container id
        style: 'mapbox://styles/mapbox/outdoors-v11', // stylesheet location
        center: [ 98.664040,3.5846293], // starting position [lng, lat]
        zoom: 11 // starting zoom
        });
    </script>
    <script>
    var geoJson = <?php echo json_encode($geojson,JSON_NUMERIC_CHECK); ?>;
            map.on('load', function() {
                            map.addSource('relawan', {
                            'type': 'geojson',
                            'data': geoJson
                            });
                            
                            map.addLayer({
                            'id': 'peta-relawan',
                            'type': 'circle',
                            'source': 'relawan',
                            'paint': {
                            'circle-radius': 6,
                            'circle-color': '#B42222'
                            },
                            'filter': ['==', '$type', 'Point']
                            });
                          });


    </script>


</body>

</html>
