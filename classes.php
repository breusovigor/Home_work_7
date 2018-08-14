<?php
class Book {
    public $id;
    public $name;
    public $author;
    public $file_path;
    public $type;
    public $sort_order;

    function __construct($book)
    {
        $this->id = $book['id'];
        $this->name = $book['name'];
        $this->author = $book['author'];
        $this->file_path = $book['file_path'];
        $this->type = $book['type'];
        $this->sort_order = $book['sort_order'];
    }
}

class BookTxt extends Book {
    public function printInfo(){
        return '<p> <img src="files/icons/txt.png" alt="txt" />
        <a href="' . $this->file_path . '" download>' . $this->author . ' , ' . $this->name . '</a>
        </p>';
    }
}

class BookDoc extends Book {
    public function printInfo(){
        return '<p> <img src="files/icons/doc.png" alt="doc" />
        <a href="' . $this->file_path . '" download>' . $this->author . ' , ' . $this->name . '</a>
        </p>';
    }
}

class BookPdf extends Book {
    public function printInfo(){
        return '<p> <img src="files/icons/pdf.png" alt="pdf" />
        <a href="' . $this->file_path . '" download>' . $this->author . ' , ' . $this->name . '</a>
        </p>';
    }
}

class BookOther extends Book {
    public function printInfo(){
        return '<p> <img src="files/icons/default.png" alt="other" />
        <a href="' . $this->file_path . '" download>' . $this->author . ' , ' . $this->name . '</a>
        </p>';
    }
}