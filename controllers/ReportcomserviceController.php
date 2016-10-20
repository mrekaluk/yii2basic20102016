<?php

namespace app\controllers;

class ReportcomserviceController extends \yii\web\Controller {

    public function actionIndex() {
        $conn = \Yii::$app->db;
        $sql = 'SELECT c.brand,s.* FROM com_service s LEFT JOIN com c on c.com_id=s.com_id';
        $cmd = $conn->createCommand($sql);
        $data = $cmd->queryAll();
        return $this->render('index', ['data' => $data]);
    }

}
