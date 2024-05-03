<?php 
// var_dump($lignes_factures)
?>

<div>
    <p> <?= isset($search)?'Recherche par '.$search:'' ?></p>
    <table class="table table-striped-columns" id='table'>
        <thead>
            <th>Quantité</th>
            <th>Id produits</th>
            <th>Id facture</th>         
        </thead>

        <?php  foreach($lignes_factures as $lf ): ?>
        <tr>
            <td><?=$lf->quantité?></td>
            <td><?=$lf->id_produits?></td>
            <td><?=$lf->id_facture?></td>      
        </tr>
        <?php endforeach; ?>
    </table>
</div>            
              