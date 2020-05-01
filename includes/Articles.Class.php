<?php

class Articles
{
    private $allArticles = array();

    function __construct($jsonFilePath = '')
    {
        if (file_exists($jsonFilePath)) 
        {
            $jsonString = file_get_contents($jsonFilePath);

            $jsonObject = json_decode($jsonString);

            if (is_array($jsonObject->articles)) {
                $this->allArticles = $jsonObject->articles;
            }
        }
    }

    public function output ()
    {
        if ( is_array( $this->allArticles ) && !empty ($this->allArticles))
        {
            echo'<h2>Articles<h2>';

            foreach ( $this->allArticles as $articles )
            {
                $newArticle = new 
            }
        }
    }
}
