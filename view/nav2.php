<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="profile">
			<h1>Bonjour <?= $_SESSION['users_fname']." ".$_SESSION['users_name']?></h1>
		</div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php?ctl=connexion&action=about">A propos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?ctl=connexion&action=deconnexion">Se déconnecter</a>
      </li>
    </ul>

  </div>
</nav>
