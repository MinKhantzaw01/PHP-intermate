<?php

use app\author\Author;
use app\post\Post;

require_once "vendor/autoload.php";

class Index{
    public function __construct()
    {
        $fname="Min";
        $lname="Khant";
        $content="Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta ullam totam commodi officiis modi cupiditate quisquam accusamus illo magnam consequatur consequuntur exercitationem, dolorem, aut odit dolor. Debitis porro dicta asperiores?";

        $author=new Author($fname,$lname);


        $post=new Post($author,$content);
        $this->answerOut($post);

        }
        public function answerOut(Post $post){
            echo $post->getAuthor()->getFirstName();
            echo  "  ".$post->getAuthor()->getLastName();
            echo "<br>";
            echo $post->getContent();
        }

}
new Index;



?>
