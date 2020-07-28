<?php


namespace app\controllers;


use app\models\Category;
use yii\web\Controller;

class CategoryController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionTree()
    {
        $modelCategory = new Category();

        $categories = $modelCategory->find()->all();

        $categoriesTree = $modelCategory->getTree($categories);

        return $this->asJson($categoriesTree);
    }
}