<?php

namespace app\api\components;

class PostService {

    public $id;
    public $handler;
    public $data;

    public function __construct(HandlerInterface $handler) {
        $this->handler = $handler;
    }

    public function getPosts() {
        if(isset($this->id)){
            $this->data = $this->handler->getPost($this->id);
        }
        else{
            $this->data = $this->handler->getAllPosts();
        }
        
        return json_encode($this->data);
    }

    public function setParams($id = null) {
        $this->id = $id;
    }

}
