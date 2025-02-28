<?php

class Article{

    public $title;
    public $content;
    private $published= false;

    public function __construct($title, $content){

        $this->title = $title;
        $this->content = $content;

    }

    public function publish(){
        $this->published = true;
    }

    public function isPublished(){
        // $isPublished = $this->published;


        // return var_export($isPublished);
        return var_export($this->published);
    }
}

$article1 = new Article('Kauno Diena', 'lorem ipsum');
$article2 = new Article('15min', 'lorem ipsum 33e232');

$article1->publish();

echo $article1->isPublished();
echo '<br>';
echo $article2->isPublished();
echo '<br>';

echo '<br>';

var_dump($article1);

class StringUtility {
    public static function shout($string) {
        return strtoupper($string);
    }
    public static function whisper($string) {
        return strtolower($string) . ' ...';
    }
    public static function repeat($string, $times=2){
        // for($i = 0; $i < $times; $i++){
        //     echo $string . '<br>';
        // }
        return str_repeat($string, $times);
    }
}

$sentence = new StringUtility;

echo $sentence::shout('hello world');
echo '<br>';

echo $sentence::whisper('Hey');
echo '<br>';

echo $sentence::repeat('repeat with me', 10);




?>