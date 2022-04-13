<?php if($data && count($data) > 0): 
$titles = [];
foreach($data[1] as $title => $detail){
$titles[] = $title;
}
    ?>
<div class="table-responsive mb-3">
<strong><?= ucfirst(str_replace('_',' ',$data_title)); ?></strong>
      <table class="table  table table-stripedtable-sm">
      <thead class="card-header">
          <tr>
          <?php 
 foreach($titles as $title){ ?>
            <td class="col-4 text-start">
            <strong>
                <?= ucfirst(str_replace('_',' ',$title)) ?>:
            </strong>    
            </td>
            <?php 
    }
?>
            <td colspan="12" class="col-12 data-title">
                <span style="font-size: 1.5rem;" onclick="toggleDataTable('<?= $controlId ?>');" id="<?= $controlId ?>_data_control" class="data-control float-right icon-chevron-circle-up mr-2"></span>
            </td>
          </tr>
        </thead>
        <tbody class="data-info" id="<?= $controlId ?>">
<?php 
foreach($data as $c => $info){
?>
<tr>
<?php foreach($info as $title => $detail){ ?>
            <td><?= $detail ?></td>
        <?php
    }
    ?>
<td></td>

</tr>
       <?php
} 
?>
    </tbody>
      </table>
    </div>
<?php
endif;
?>