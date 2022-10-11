<?php

namespace backend\controllers;

use yii\base\Controller;

class HelloController extends Controller // it's id is hello , coming from class name
{

    public function actionIndex(){  //action id is index 
    
        return $this ->render(view:'index'); //convention is to call view as action index
    }
}

