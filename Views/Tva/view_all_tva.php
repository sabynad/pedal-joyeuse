<?php 
// var_dump($tva)
?>

<div>
    <p> <?= isset($search)?'Recherche par '.$search:'' ?></p>
    <table class="table table-striped-columns" id='table'>
        <thead>
            <th>id</th>
            <th>Taux</th>       
        </thead>

        <?php  foreach($tva as $t ): ?>
        <tr>
            <td><?=$t->id?></td>
            <td><?=$t->taux?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>            
              