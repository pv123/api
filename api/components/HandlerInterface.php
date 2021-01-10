<?php

namespace app\api\components;

interface HandlerInterface{
    /**
    * @param int $postId
    *
    * @return Post
    */
    public function getPost(int $postId): Post;
    
    /**
    * @return Post[]
    */
    public function getAllPosts(): array;    
}