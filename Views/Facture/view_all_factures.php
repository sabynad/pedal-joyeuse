<?php 
// var_dump($factures)
?>

<div>
    <p> <?= isset($search)?'Recherche par '.$search:'' ?></p>
    <table class="table table-striped-columns" id='table'>
        <thead>
            <th>Id</th>
            <th>Date</th>
            <th>Prix HT</th>
            <th>Prix TTC</th>
            <th>Id clients</th>
            <th>Id personnel</th>     
        </thead>

        <?php  foreach($factures as $f ): ?>
        <tr>
            <td><?=$f->id?></td>
            <td><?=$f->date?></td>
            <td><?=$f->prix_ht?></td>
            <td><?=$f->prix_ttc?></td>         
            <td><?=$f->id_clients?></td>         
            <td><?=$f->id_personnel?></td>         
        </tr>
        <?php endforeach; ?>
    </table>
</div>            
              