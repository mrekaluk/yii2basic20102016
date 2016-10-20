<?php
use miloschuman\highcharts\Highcharts;

echo Highcharts::widget([
    'options' => [
        'chart' => [
            'type' => 'column'
        ],
        'title' => ['text' => 'จำนวนครุภัณฑ์แยกประเภท'],
        'xAxis' => [
            'categories' => ['ทั้งหมด'],
        ],
        'yAxis' => [
            'title' => ['text' => 'ครั้ง']],
        'series' => $chart
    ]
]);


