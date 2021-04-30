<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="shortcut icon" href="img/icon.jpg">

    <style>
        .navbar {
            background-color: #343334;
        }
        #input {
            margin-top: 100px;
        }
        .btn {
            border-radius: 10px;
            background-color:  #343334;
            border-color: #343334;
            color: white;
            font-weight: bold;
            width: 150px;
            margin-left: 190px;
        }
        body {
            background-image: url(img/wallpaper3.jpg);
            background-size: cover;
            color: white;
            font-weight: bold;
        }
        .nav-item {
          font-size: 14px;
        }
    </style>

    <title>Input Tracking</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <img class="ml-3" src="img/truck_logo.png" alt="" href="home.php">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item text-white font-weight-bold">
                    <a class="nav-link" href="home.php">BERANDA <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown text-white font-weight-bold">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    DATA
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="data_pegawai.php">Data Pegawai Logistik</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="data_purchase_order.php">Data Purchase Order</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="data_pelanggan.php">Data Pelanggan</a>
                    </div>
                </li>
                <li class="nav-item text-white font-weight-bold">
                    <a class="nav-link" href="pengiriman_input.php">PENGIRIMAN</a>
                </li>
                <li class="nav-item text-white font-weight-bold">
                    <a class="nav-link" href="jadwal_input.php">JADWAL</a>
                </li>
                <li class="nav-item dropdown text-white font-weight-bold active">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    TRACKING
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item active" href="#">Input Data</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="tracking_update.php">Update Status</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="tracking_select.php">Tracking Details</a>
                    </div>
                </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container" id="input">
        <div class="row">
            <div class="col-md-6">
                <form action="process/insert_tracking.php" method="post">
                    <div class="form-group">
                        <label>No. AWB</label>
                        <input type="text" name="awb" class="form-control" required placeholder="Contoh: SND001"/>
                    </div>
                    <div class="form-group">
                        <label>Services</label><br>
                         <select name="services" id="services" required class="form-control">
                                    <option value="REG">REGULER</option>
                                    <option value="FAST">FAST</option>
                              </select>
                    </div>
                    <div class="form-group">
                        <label>Date of Shipment</label>
                        <input type="date" name="dos" required class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label>Origin</label>
                        <input type="text" name="origin" required class="form-control" placeholder="Contoh: Bandung"/>
                    </div>
                    <div class="form-group">
                        <label>Destination</label>
                        <input type="text" name="destination" required class="form-control" placeholder="Contoh: Jakarta"/>
                    </div>
                    
            </div>

            <div class="col-md-6">
                    <div class="form-group">
                        <label>Shipper</label>
                        <input type="text" name="shipper" required class="form-control" placeholder="Contoh: Xiaomi"/>
                    </div>
                    <div class="form-group">
                        <label>Consignee</label>
                        <input type="text" name="consignee" required class="form-control" placeholder="Contoh: Tomi"/>
                    </div>
                    <div class="form-group">
                        <label>Time</label>
                        <input type="date" name="time" required class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label>Position</label>
                        <input type="text" name="position" required class="form-control" placeholder="Contoh: Purwakarta"/>
                    </div>
                    <div class="form-group">
                        <label>Status</label><br>
                         <select name="status" id="services" required class="form-control">
                                    <option value="Manifested">Manifested</option>
                                    <option value="On Transit">On Transit</option>
                                    <option value="On Process">On Process</option>
                                    <option value="Received on Destination">Received on Destination</option>
                                    <option value="Delivered">Delivered</option>
                              </select>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>
