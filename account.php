<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<head>
  <title>Account</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
  <?php require 'navbar.php'; ?>
  <div class="container bootstrap snippet">
    <div class="row">
      <div class="col-md-3">
        <div class="text-center">
          <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
          <div class="col-md-12"><h1>User name</h1>
          </div>
          <br>
          <div class="text-muted"><h4>Fakultas</h4>
          </div>
        </div>
        </hr><br>
        <button class="btn btn-lg btn-warning" type="reset"><i class="glyphicon glyphicon-shopping-cart"></i> Jual Barang</button>
        <ul class="list-group" style="color: black">
          <br>
          <li class="list-group-item text-muted">Activitas <i class="fa fa-dashboard fa-1x"></i></li>
          <li class="list-group-item"><strong>Terakhir Login</strong></li>
          <li class="list-group-item"><strong>Tanggal Bergabung</strong></li>
          <li class="list-group-item"><strong>Jumlah Barang</strong></li>
        </ul>
        <button class="btn btn-lg btn-warning" type="reset"><i class="glyphicon glyphicon-repeat"></i> Log Out</button>

      </div>
      <div class="tab-content">
        <div class="tab-pane active" id="home">
          <form class="form" action="##" method="post" id="registrationForm">
            <div class="form-group">
              <div class="col-md-10">
                <h4>Nama Lengkap</h4>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-10">
                <h4>User name</h4>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-10">
                <h4>Nomor Handphone</h4>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-10">
                <h4>Email</h4>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-10">
                <h4>Alamat</h4>
              </div>
            </div>
            <div class="form-group">
              <div class="col-s-12">
                <br>
                <button class="btn btn-lg btn-warning" type="reset"><i class="glyphicon glyphicon-repeat"></i> Edit</button>
              </div>
            </div>
          </form>

        </div>

      </div>
    </div>

  </div>
  </div>
  <?php require 'footer.php'; ?>
</body>
