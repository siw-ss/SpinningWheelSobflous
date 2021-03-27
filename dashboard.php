<?php include('config/db.php'); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Roue de Fortune</title>
    <!-- jQuery + Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>
<?php include('./header.php'); ?>

    <div class="container mt-5" style="margin: 10px !important;">
        <div class="d-flex justify-content-center">
            <div class="col-md-8">
                    <div id="chart"></div>
            </div>
            <div class="col-md-4">
                <div id="offer">
        <div class="closebtn" style="position: absolute;top: 20%">
      <div class="selected-message" style="position: absolute;top: 30%"></div>
<!--      <div class="disclaimer-text">*All offers applicable on your next order.</div>-->
    </div>

            </div>
    
            <!--<div class="card" style="width: 25rem">
                <div class="card-body">
                    <h5 class="card-title text-center mb-4">User Profile</h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?php echo $_SESSION['firstname']; ?>
                        <?php echo $_SESSION['lastname']; ?></h6>
                    <p class="card-text">Email address: <?php echo $_SESSION['email']; ?></p>
                    <p class="card-text">Mobile number: <?php echo $_SESSION['mobilenumber']; ?></p>
                    
                    <a class="btn btn-danger btn-block" href="logout.php">Log out</a>
                </div>-->
            </div>
        </div>
          <div class="main-container">
  </div>
    <script src="https://d3js.org/d3.v3.min.js" charset="utf-8"></script>
    <script src="./assets/main.js" charset="utf-8"></script>

    <button id="btnClose" class="btnClose"> X </button>
          <script type="text/javascript">
        var btnClose = document.getElementById('btnClose');
        btnClose.addEventListener('click',closeModal);
        function closeModal() {
         document.getElementById("offer").style.visibility = "hidden";
         document.getElementById("btnClose").style.visibility = "hidden"; }
          </script>

<!--compteur d'essais ---------------------------->
<div class="compteur">
  <p> Nombre d'essai restant :&nbsp;</p>
  <p id="demo"></p>
  <script>
    if (demo=5 ) {document.getElementById("demo").innerHTML = 3;}
</script>
</div>
<!-------------------------------------------->
</body>

</html>