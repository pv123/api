<?php

namespace app\api\modules\v1\controllers;

use yii\rest\Controller;

class PostsController extends Controller {

    public $postService;

    public function __construct($id, $module, $config = array()) {
        parent::__construct($id, $module, $config);
        $this->postService = new \app\api\components\PostService(new \app\api\components\GuzzleHandler());
    }

    public function actionIndex() {
        $id =  $request = \Yii::$app->request->get('id');

        $this->postService->setParams($id);
        
        return $this->postService->getPosts();
    }
    

}
