<?php
// Trait для работы с временными метками
trait Timestampable {
    private $createdAt;
    private $updatedAt;
    public function setCreatedAt($date) {
        $this->createdAt = $date;
    }
    public function setUpdatedAt($date) {
        $this->updatedAt = $date;
    }
    public function getCreatedAt() {
        return $this->createdAt;
    }
    public function getUpdatedAt() {
        return $this->updatedAt;
    }
}
class Post {
    use Timestampable;
    private $title;
    public function createPost($title) {
        $this->title = $title;
        $this->setCreatedAt(date("Y-m-d H:i:s"));
        $this->setUpdatedAt(date("Y-m-d H:i:s"));
    }
    public function updatePost($title) {
        $this->title = $title;
        $this->setUpdatedAt(date("Y-m-d H:i:s"));
    }
}
class Comment {
    use Timestampable;
    private $content;
    public function createComment($content) {
        $this->content = $content;
        $this->setCreatedAt(date("Y-m-d H:i:s"));
        $this->setUpdatedAt(date("Y-m-d H:i:s"));
    }
    public function updateComment($content) {
        $this->content = $content;
        $this->setUpdatedAt(date("Y-m-d H:i:s"));
    }
}
// Тестирование
$post = new Post();
$post->createPost("Мой первый пост");
echo "Дата создания поста: " . $post->getCreatedAt() . "<br>";

$comment = new Comment();
$comment->createComment("Это комментарий");
echo "Дата создания комментария: " . $comment->getCreatedAt() . "<br>";
?>