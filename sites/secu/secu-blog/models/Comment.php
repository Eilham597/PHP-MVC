<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */


class Comment
{
    private int $id;    
    private int $content;
    private int $user_id;
    private int $post_id;

    public function __construct(
        ?int $id,
        ?int $content,
        ?int $user_id,
        ?int $post_id
    ) {
        $this->id = $id;
        $this->content = $content;
        $this->user_id = $user_id;
        $this->post_id = $post_id;
    }
    // Getters
    public function getId(): ?int { return $this->id; }
    public function getContent(): ?int { return $this->content; }
    public function getUserId(): ?int { return $this->user_id; }
    public function getPostId(): ?int { return $this->post_id; }
    // Setters
    public function setId(?int $id): void { $this->id = $id; }
    public function setContent(?int $content): void { $this->content = $content; }
    public function setUserId(?int $user_id): void { $this->user_id = $user_id; }
    public function setPostId(?int $post_id): void { $this->post_id = $post_id; }
    


}