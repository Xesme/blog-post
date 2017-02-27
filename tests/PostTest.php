<?php

    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    // require_once "src/Tag.php";
    require_once "src/Post.php";

    $server = 'mysql:host=localhost:8889;dbname=airline_planner';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);

    class PostTest extends PHPUnit_Framework_TestCase
    {

        protected function tearDown()
        {
          Tag::deleteAll();
          Post::deleteAll();
        }

        function test_construct()
        {
            // Arrange
            // Act
            // Assert
        }
    }

?>
