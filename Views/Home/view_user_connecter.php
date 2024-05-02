<?php

$_SESSION['nom'] = $identification[0]->nom;
$_SESSION['prenom'] = $identification[0]->prenom;
$_SESSION['Statut'] = $identification[0]->Statut;

?>

<script>window.location.href="?controller=home&action=home"</script>

