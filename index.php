<?php
/**
 * Created by PhpStorm.
 * User: Rin
 * Date: 15.03.2016
 * Time: 19:25
 */

class Article {
    public $title;
    public $text;

    public function __construct($title, $text){
        $this->title=$title;
        $this->text=$text;
    }

    public function view(){
        echo $this->title;
    }
}

$a = new Article('Заголовок новости','Текст новости');
$a->view();

$b=new Article('Другой заголовок','Текст');
$b->view();