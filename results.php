<?php include('config/db.php'); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Historique des résultats</title>
    <!-- jQuery + Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>
<?php include('./header.php'); ?>
    <div class="container mt-5">
        <div class="d-flex justify-content-center">        
    
            <div class="card">
                <div class="card-body">
                    <!--<h5 class="card-title text-center mb-4">User Profile</h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?php echo $_SESSION['firstname']; ?>
                        <?php echo $_SESSION['lastname']; ?></h6>
                    <p class="card-text">Email address: <?php echo $_SESSION['email']; ?></p>
                    <p class="card-text">Mobile number: <?php echo $_SESSION['mobilenumber']; ?></p>
                    
                    <a class="btn btn-danger btn-block" href="logout.php">Log out</a>-->

                    <table class="table table-striped">                     
    <div class="table responsive">
        <thead>
            <tr>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Email</th>
               <th>Win Prize</th>
               <th>TimeStamp</th>
            </tr>
        </thead>
        <tbody>
<?php 
$email_user = $_SESSION['email'];
$sql = "SELECT u.firstname,u.lastname,u.email,w.win_label,w.time_stamp FROM win_results w,users u WHERE u.email = w.user_email and u.email='{$email_user}'";

//$sql = 'SELECT u.firstname,u.lastname,u.email,w.win_label,w.time_stamp FROM win_results w,users u WHERE u.email = w.user_email AND u.email="'.$_SESSION['email']'"' ;
        $result = mysqli_query($connection, $sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {


        echo '<tr>
                  <td scope="row">' . $row["firstname"]. '</td>
                  <td>' . $row["lastname"] .'</td>
                  <td> '.$row["email"] .'</td>
                  <td> '.$row["win_label"] .'</td>
                  <td> '.$row["time_stamp"] .'</td>
                </tr>';





    }
} else {
    echo "0 results";
} 
?>
       </tbody>
    </div>
</table>
                </div>
            </div>
        </div>
          <div class="main-container">
            
            

  </div>
    <script src="https://d3js.org/d3.v3.min.js" charset="utf-8"></script>
    <script src="./assets/main.js" charset="utf-8"></script>

</body>

</html>