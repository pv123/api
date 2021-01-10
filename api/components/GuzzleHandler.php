<?php

namespace app\api\components;

class GuzzleHandler implements HandlerInterface {

    public $client;
    public $id;

    public function __construct() {
        $this->client = new \GuzzleHttp\Client();
    }

    public function getAllPosts(): array {
        $request = $this->client->get('https://jsonplaceholder.typicode.com/posts');
        $response = $request->getBody()->getContents();
        //$posts = $this->client->get('https://jsonplaceholder.typicode.com/posts');
        $response = json_decode($response);
        $postArray = [];
        foreach ($response as $item) {
            $post = new Post();
            $post->setBody($item->body)->setId($item->id)->setTitle($item->title)->setUserId($item->userId);
            $postArray[] = $post;
        }
     
        return $postArray;
    }

    public function getPost(int $postId): Post {
        $request = $this->client->get('https://jsonplaceholder.typicode.com/posts/' . $postId);
        $response = $request->getBody()->getContents();
        $response = json_decode($response);
        $post = new Post();
        $post->setBody($response->body)->setId($response->id)->setTitle($response->title)->setUserId($response->userId);
       
        return $post;
    }

}
