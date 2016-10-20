<?php
use yii\helpers\Html;

?>

<table class="table table-bordered table-hover table-responsive table-striped ">
    <thead>
        <tr>
            <th>ลำดับ</th>
            <th>ยี่ห้อคอมพิวเตอร์</th>
            <th>ปัญหาคอมพิวเตอร์</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($data as $key => $value) {
 

        echo '<tr>';
        echo '<td>'.($key+1) .'</td>';
        echo '<td>'.$value['brand'] .'</td>';
        echo '<td>'.$value['problem'].'</td>';
        echo '<td>'.Html::a('<span class="glyphicon glyphicon-list-alt"> </span>', ['/reportcom-detail','id'=>$value['com_service_id']]).'</td>';
        echo '<tr>';
        }
        ?>
    </tbody>
</table>