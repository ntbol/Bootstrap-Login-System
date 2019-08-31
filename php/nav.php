<nav class="navbar navbar-expand-lg navbar-light bg-ligh container" style="padding-top:15px; z-index:90">
    <div class="container">
      <a class="navbar-brand" href="#"><h3 class="whitetext"><b>sharing is caring</b></h3></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto ">

        </ul>
        <ul class="navbar-nav justify-content-end">
          <li class="nav-item">
            <a class="nav-link" href="#"><p class="whitetext"><b>welcome, <?php echo htmlspecialchars($_SESSION["username"]); ?></b></p></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="php/logout.php"><span class="whitetext fa fa-sign-out"></span></a>
          </li>
      </ul>
      </div>
    </div>
</nav>