<?php

namespace app\controllers;

class ReportcomtypeController extends \yii\web\Controller {

    public function actionIndex() {
        $conn = \Yii::$app->db;
        $sql = 'SELECT * FROM com_type';
        $cmd = $conn->createCommand($sql);
        $data = $cmd->queryAll();
        // print_r($data);
        // die();

        return $this->render('index', ['data' => $data]);
    }

}
