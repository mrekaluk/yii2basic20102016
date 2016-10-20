<?php

namespace app\controllers;

class Report_com_DetailController extends \yii\web\Controller
{
    public function actionIndex()
    {
        
        $conn=\Yii::$app->db;
        $sql='SELECT * FROM COM';
        $cmd=$conn->createCommand($sql);
        $data=$cmd->queryAll();
       // print_r($data);
       // die();
        
        return $this->render('index',$data);
    }

}
