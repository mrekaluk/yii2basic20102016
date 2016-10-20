<?php
$this->params['breadcrumbs'][] = ['label' => 'ประเภทคอม', 'url' => ['/reportcomtype/index']];
?>

<table class="table table-bordered table-hover table-responsive table-striped ">
    <thead>
        <tr>
            <th>ลำดับ</th>
            <th>ยี่ห้อ</th>
            <th>รหัสครุภัณฑ์</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($data as $key => $value) {
   // echo ($key + 1) . ' / ' . $value->brand . ' / ' . $value->asset_code . '<br>';

        echo '<tr>';
        echo '<td>'.($key + 1).'</td>';
        echo '<td>'.$value['brand'] .'</td>';
        echo '<td>'.$value['asset_code'].'</td>';
        echo '<tr>';
        }
        ?>
    </tbody>
</table>
