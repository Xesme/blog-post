<?php

class Post
{
    private $title;
    private $content;
    private $id;

    function __construct($title, $content, $id = NULL)
    {
        $this->title = $title;
        $content->content = $content;
        $this->id = $id;
    }

    // getters and setters
    function setTitle($new_title)
    {
        $this->title = $new_title;
    }

    function getTitle()
    {
        return $this->title;
    }

    function setContent($new_content)
    {
        $this->content = $new_content;
    }

    function getContent()
    {
        return $this->content;
    }

    function getId()
    {
        return $this->id;
    }


}

 ?>
