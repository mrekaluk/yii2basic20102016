<?php

namespace app\controllers;

class ReportcomDetailController extends \yii\web\Controller {

    public function actionIndex($id) {
        
        $conn = \Yii::$app->db;
        $sql = 'SELECT * FROM com WHERE com_type_id=:id';
        $cmd = $conn->createCommand($sql);
        $cmd->bindValue(':id',$id);
        $data = $cmd->queryAll();
        return $this->render('index', ['data' => $data]);
    }

}
