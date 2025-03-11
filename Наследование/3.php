<?php
class Material {
    public $title;
    public $author;
    public function __construct($title, $author) {
        $this->title = $title;
        $this->author = $author;
    }
    public function getInfo() {
        return "Title: {$this->title}, Author: {$this->author}";
    }
}
class Book extends Material {
    public $pages;
    public function __construct($title, $author, $pages) {
        parent::__construct($title, $author);
        $this->pages = $pages;
    }
    public function getInfo() {
        return parent::getInfo() . ", Pages: {$this->pages}";
    }
}
class Article extends Material {
    public function getInfo() {
        return parent::getInfo();
    }
}
class Video extends Material {
    public $duration; // in minutes
    public function __construct($title, $author, $duration) {
        parent::__construct($title, $author);
        $this->duration = $duration;
    }
    public function getInfo() {
        return parent::getInfo() . ", Duration: {$this->duration} min";
    }
}
// Пример использования:
$book = new Book("PHP for Beginners", "John Smith", 350);
$article = new Article("OOP in PHP", "Jane Doe");
$video = new Video("Learning PHP", "John Doe", 120);

echo $book->getInfo() . "\n";
echo $article->getInfo() . "\n";
echo $video->getInfo() . "\n";
?>