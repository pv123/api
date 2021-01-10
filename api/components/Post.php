<?php

namespace app\api\components;

class Post{

    public $userId;
    public $id;
    public $title;
    public $body;

    public function setUserId($userId) {
        $this->userId = $userId;
        return $this;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setTitle($title) {
        $this->title = $title;
        return $this;
    }

    public function setBody($body) {
        $this->body = $body;
        return $this;
    }
}