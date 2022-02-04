<?php if(count($summary_columns) > 0):?>
<div class="row">
<?php
$column_width = 12/count($summary_columns);
foreach($summary_columns as $title => $column){
    ?>
<div class="col-sm-<?= $column_width ?>">
<strong><?= ucfirst(str_replace('_',' ',$title)) ?></strong><br />
    <?php
        foreach($column as $title => $detail){
?>
        <?= ucfirst(str_replace('_',' ',$title)) ?>: <?= $detail ?><br />
<?php
        }
    ?>
</div>
<?php
}
?>
</div>
<hr />
<?php
endif;
?>