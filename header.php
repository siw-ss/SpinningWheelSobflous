<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <div class="container">
        <a href="./index.php" class="brand js-scroller" style="color: white; text-decoration: none; background-color: transparent; font-weight: 800; font-size: 35px;padding-right: 15px; float: left;">
                Sobflous
                                     
                    <span class="newlogo"><img src="https://www.sobflous.tn/images/logosobfloustn.png" style="height:33px;width: 23px;
                                               }"></span>        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02"
            aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <?php 
                   if (session_status() === PHP_SESSION_ACTIVE) {
                    echo '<a class="nav-link" style="float:left;color:white;font-size: 16px; font-weight: 400;" href="./results.php">Verifier résultats</a></li>';
  echo '<li><a class="btn btn-danger btn-block" href="logout.php">Log out</a></li>';


} else {
    echo'<a class="nav-link" style="color:white;font-size: 16px; font-weight: 400;" href="./signup.php">Inscription</a>';

}
                   ?>    
                   
                </li>
            </ul>
        </div>
    </div>
</nav>


 <a class="nav-link" href="./index.php">Sign in</a>