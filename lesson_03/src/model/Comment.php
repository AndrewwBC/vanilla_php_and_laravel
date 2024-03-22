<?php

namespace Tsi\Php\model;
use Tsi\Php\interfaces\iDAO;

class Comment extends ModelExemplo implements iDAO {
    private string $commentContent;
    private string $user_id;
    private string $post_id;


    public function __construct(string $commentContent, string $user_id, string $post_id){  
        $this->commentContent = $commentContent;
        $this->user_id = $user_id;
        $this->post_id = $post_id;
    }

    public function getCommentContent(): string {
        return $this->commentContent;
    }
    public function getUserId(): string {
        return $this->user_id;
    }
    public function getPostId(): string {
        return $this->post_id;
    }
    public function setCommentContent(string $commentContent): void {
        $this->commentContent = $commentContent;
    }
    public function setUserId(string $user_id): void {
        $this->user_id = $user_id;
    }
    public function setPostId(string $post_id): void {
        $this->post_id = $post_id;
    }

    public function getColumns(): array {
        return [];
    }
    
    public function create():bool{
       return true;
    }
    
    public function read(int $id = null):array{
        return [];
    }
    
    public function update():bool{
        return true;
    }
    
    public function delete($id):bool{
       return true;
    }
   
    public function filter(array $filters):array{
        return [];
    }

}