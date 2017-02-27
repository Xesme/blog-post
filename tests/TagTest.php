<?php

    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    require_once "src/Tag.php";
    // require_once "src/Post.php";

    $server = 'mysql:host=localhost:8889;dbname=airline_planner';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);

    class CityTest extends PHPUnit_Framework_TestCase
    {

        // protected function tearDown()
        // {
        // Tag::deleteAll();
        // Post::deleteAll();
        // }

        function test_construct()
        {
            // Arrange
            $input_name = "PDX";
            $input_id = 1;
            $test_tag = new Tag("", null);
            $test_tag->setName($input_name);
            
            // Act
            $result1 = $test_tag->getName();
            $result2 = $test_tag->getId();
            // Assert
            $this->assertEquals($input_name, $result1);
            $this->assertEquals($input_id, $result2);
        }
    }

?>
