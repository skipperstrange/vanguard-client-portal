<?php if(count($data) > 0): ?>
<div class="table-responsive d-print-none mb-3">
      <table class="table table-bordered table-sm">
      <thead class="card-header">
          <tr>
            <td colspan="12" class="col-12 data-title">
                <strong><?= $data_title; ?></strong>
                <span style="font-size: 1.5rem;" onclick="toggleDataTable('<?= $controlId ?>');" id="<?= $controlId ?>_data_control" class="data-control float-right icon-chevron-circle-up mr-2"></span>
            </td>
          </tr>
        </thead>
        <tbody class="data-info" id="<?= $controlId ?>">
<?php 

foreach($data as $c => $info){
    echo $c;
?>
    <tr><td colspan="12" style="background: #ccc;"></td></tr>
        <?php foreach($info as $title => $detail){ ?>
    <tr>
            <td class="col-4 text-end">
            <strong>
                <?= ucfirst(str_replace('_',' ',$title)) ?>:
            </strong>    
            </td>
            <td class="col-8"><?= $detail ?></td>
    </tr>
    <?php
    }
} 
?>
    </tbody>
      </table>
    </div>
<?php
endif;
?>