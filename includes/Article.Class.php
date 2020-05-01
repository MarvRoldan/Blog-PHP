<?php 

class Article 
{
    public $id = 0;
    public $title = '';
    public $content = '';

    function __construct( $id = 0, $title = 'Title', $content = 'Content' )
    {
        if ( is_integer( $id ) && !empty( $id ) )
            $this-> id = $id;
        if ( is_string( $title ) && !empty( $title ) )
            $this-> title = $title;
        if ( is_string( $content ) && !empty( $content ) )
            $this-> content = $content;
    }

    public function output ( $echo = TRUE )
    {
        
    }
}


