
<div class="collapse navbar-collapse " id="navbarSupportedContent">
    <a class="nav-link dropdown-toggle  " href="?controller=livres&action=livre_admin" role="button" data-bs-toggle="dropdown" aria-expanded="false">
      Livres
    </a>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item text-bg-warning p-3" href="?controller=livres&action=livre_admin">Tous les livres</a></li>  
    </ul>

    <a class="nav-link dropdown-toggle" href="?controller=livres&action=all_fournisseurs" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    Fournisseurs
    </a>

    <ul class="dropdown-menu">
        <li><a class="dropdown-item text-bg-warning p-3"  href="?controller=fournisseurs&action=all_fournisseurs">Tous les Fournisseurs</a></li>   
    </ul>

    <a class="nav-link dropdown-toggle " href="?controller=livres&action=all_commandes" role="button" data-bs-toggle="dropdown" aria-expanded="false">
      Commandes
    </a>

    <ul class="dropdown-menu">
      <li><a class="dropdown-item text-bg-warning p-3" href="?controller=commandes&action=all_commandes">Toutes les commandes</a></li> 
    </ul> 
</div>

  <?php
    if (isset($_SESSION['nom']))
      {
        echo $_SESSION['nom']." ".$_SESSION['prenom']. " <br>".$_SESSION['Statut'];   
      }
  ?>
<a class="btn btn-warning" href="?controller=home&action=user_deconnexion" > Deconnexion </a> 
