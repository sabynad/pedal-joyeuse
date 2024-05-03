<?php 
// var_dump($clients)
?>

<div>
    <p> <?= isset($search)?'Recherche par '.$search:'' ?></p>
    <table class="table table-striped-columns" id='table'>
        <thead>
            <th>Id</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Adresse 1</th>
            <th>Adresse 2</th>
            <th>Code postal</th>
            <th>Ville</th>
            <th>Email</th>
            <th>Téléphone</th>
          
        </thead>

        <?php  foreach($clients as $c ): ?>
        <tr>
            <td><?=$c->id?></td>
            <td><?=$c->nom?></td>
            <td><?=$c->prenom?></td>
            <td><?=$c->adresse1?></td>
            <td><?=$c->adresse2?></td>
            <td><?=$c->code_postal?></td>         
            <td><?=$c->ville?></td>         
            <td><?=$c->email?></td>         
            <td><?=$c->telephone?></td>         

        </tr>
        <?php endforeach; ?>
    </table>
</div>            
              