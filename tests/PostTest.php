<?php

    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    // require_once "src/Tag.php";
    require_once "src/Post.php";

    $server = 'mysql:host=localhost:8889;dbname=test_blog';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);

    class PostTest extends PHPUnit_Framework_TestCase
    {

        // protected function tearDown()
        // {
        //   Tag::deleteAll();
        //   Post::deleteAll();
        // }

        function test_construct()
        {
            // Arrange
            $title = "My so called life";
            $content = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
            $id = NULL;
            $test_post = new Post($title, $content, $id);

            // Act
            $result = $test_post->getTitle();
            // $result2 = $test_post->getContent();
            // $result3 = $test_post->getId();

            // Assert
            $this->assertEquals($title, $result);
            // $this->assertEquals($content, $result2);
            // $this->assertEquals($id, $result3);
        }
    }

?>
