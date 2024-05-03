<?php 
// var_dump($produits)
?>

<div>
    <p> <?= isset($search)?'Recherche par '.$search:'' ?></p>
    <table class="table table-striped-columns" id='table'>
        <thead>
            <th>Id</th>
            <th>Nom</th>
            <th>Référence</th>
            <th>Stock</th>     
            <th>Alerte</th>     
            <th>Id TVA</th>     
        </thead>

        <?php  foreach($produits as $pr ): ?>
        <tr>
            <td><?=$pr->id?></td>
            <td><?=$pr->name?></td>
            <td><?=$pr->reference?></td>
            <td><?=$pr->stock?></td>
            <td><?=$pr->alerte?></td>         
            <td><?=$pr->id_tva?></td>         

        </tr>
        <?php endforeach; ?>
    </table>
</div>            
              