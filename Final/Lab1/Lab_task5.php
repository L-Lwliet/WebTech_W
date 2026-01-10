<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <title>Lab Task 5</title>
</head>
<body>
    <?php
    class Book{
        private $title;
        private $author;
        private $year;

        //public function __construct()

        /*public function __construct($title, $author, $year) {
            $this->title = $title;
            $this->author = $author;
            $this->year = $year;
        }*/

        public function __construct($title = null, $author = null, $year = null) {
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
        }

        public function __distruct(){
            echo "destructor<br>";
        }

        public function set_title($title){
            $this->title = $title;
        }
        public function get_title(){
            return $this->title;
        }

        public function set_author($author){
            $this->author = $author;
        }
        public function get_author(){
            return $this->author;
        }

        public function set_year($year){
            $this->year = $year;
        }
        public function get_year(){
            return $this->year;
        }

        public function get_details(){
            return "Title: " . $this->title . "<br>Author: " . $this->author . "<br>Publication Year: " . $this->year;
        }
    }

    $book1 = new Book("The witcher", "Andrzej Sapkowski", 1990);
    $book2 = new Book();
    $book2->set_title("Dracula");
    $book2->set_author("Bram Stoker");
    $book2->set_year(1897);
    $Book1Dtls = $book1->get_details();
    $Book2Dtls = $book2->get_details();
    echo $Book1Dtls;
    echo "<br><br>";
    echo $Book2Dtls;
    ?>
</body>