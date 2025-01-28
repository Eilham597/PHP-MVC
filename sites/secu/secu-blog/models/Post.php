<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */


class Post
{
    private int $id;
    private string $title;
    private string $excerpt;
    private string $content;
    private int $author;
    private string $createdAt;

    public function __construct(
        int $id,
        string $title,
        string $excerpt,
        string $content,
        int $author,
        string $createdAt
    ) {
        $this->id = $id;
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->content = $content;
        $this->author = $author;
        $this->createdAt = $createdAt;
    }

    // Getters
    public function getId(): int { return $this->id; }
    public function getTitle(): string { return $this->title; }
    public function getExcerpt(): string { return $this->excerpt; }
    public function getContent(): string { return $this->content; }
    public function getAuthor(): int { return $this->author; }
    public function getCreatedAt(): string { return $this->createdAt; }

    // Setters
    public function setId(int $id): void { $this->id = $id; }
    public function setTitle(string $title): void { $this->title = $title; }
    public function setExcerpt(string $excerpt): void { $this->excerpt = $excerpt; }
    public function setContent(string $content): void { $this->content = $content; }
    public function setAuthor(int $author): void { $this->author = $author; }
    public function setCreatedAt(string $createdAt): void { $this->createdAt = $createdAt; }
}

