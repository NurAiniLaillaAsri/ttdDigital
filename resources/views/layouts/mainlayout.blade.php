<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laravel | @yield('title')</title>
  <!-- CSS Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="resources\css\form.css">

  <!-- script -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
    integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script type="text/javascript" src="http://keith-wood.name/js/jquery.signature.js"></script>
  <link rel="stylesheet" type="text/css" href="http://keith-wood.name/css/jquery.signature.css">

  <style>
    .kbw-signature {
      width: 100%;
      height: 200px;
    }

    #sign canvas {
      width: 100% !important;
      height: auto;
    }
  </style>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar bg-body-tertiary fixed-top">
    <div class="d-flex flex-row">
      <div class="p-2">
        <!-- <img src="..\Logo_Pegadaian.png" alt="Logo" width="150" height="50"
          class="d-inline-block align-text-top object-fit-fill border rounded"> -->
      </div>
      <!-- <div class="p-2 text-center fs-3">Pengajuan Gadai Efek</div> -->
    </div>
  </nav>

  <div class="content pt-5">
    @yield('content')
  </div>

  <!-- Footer -->
  <div class="footer bg-body-secondary flex">
    <!-- <div class="container text-center py-3">
      &copy; 2024 Gadai Efek | Made with ❤️
    </div> -->
  </div>
  <!-- Javascript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>