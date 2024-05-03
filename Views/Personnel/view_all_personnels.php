<?php 
// var_dump($personnels)
?>

<div>
    <p> <?= isset($search)?'Recherche par '.$search:'' ?></p>
    <table class="table table-striped-columns" id='table'>
        <thead>
            <th>Id</th>
            <th>Nom</th>
            <th>Password</th>
            <th>Role</th>
          
        </thead>

        <?php  foreach($personnels as $p ): ?>
        <tr>
            <td><?=$p->id?></td>
            <td><?=$p->nom?></td>
            <td><?=$p->password?></td>
            <td><?=$p->role?></td>         

        </tr>
        <?php endforeach; ?>
    </table>
</div>            
              