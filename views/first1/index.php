<?php
/* @var $this yii\web\View */
?>
<h1><?php echo $title; ?></h1>
<table class="table table-bordered table-hover table-striped">
    <thead>
        <tr>
            <th>Number</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>         
        <?php

        foreach ($person as $key => $item) {
            echo '<tr>';
            echo '<td>' . ($key+1). '</td>';
            echo '<td>' . $item['fname'] . '</td>';
            echo '<td>' . $item['lname'] . '</td>';
            echo '<td>' . $item['email'] . '</td>';
            echo '</tr>';
        }
        ?>
    </tbody>
</table>

