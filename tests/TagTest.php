<?php

    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    require_once "src/Tag.php";
    // require_once "src/Post.php";

    $server = 'mysql:host=localhost:8889;dbname=test_blog';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);

    class TagTest extends PHPUnit_Framework_TestCase
    {

        protected function tearDown()
        {
        Tag::deleteAll();
        // Post::deleteAll();
        }

        function test_construct()
        {
            // Arrange
            $input_name = "PDX";
            $input_id = 1;
            $test_tag = new Tag("", $input_id);
            $test_tag->setName($input_name);

            // Act
            $result1 = $test_tag->getName();
            $result2 = $test_tag->getId();
            // Assert
            $this->assertEquals($input_name, $result1);
            $this->assertEquals($input_id, $result2);
        }

        function test_save()
        {
            // Arrange
            $input_name = "PDX";
            $test_tag = new Tag($input_name);
            $test_tag->save();
            $test_tag->getId();

            // Act
            $result = Tag::getAll();

            // Assert
            $this->assertEquals($test_tag, $result[0]);
        }

        function test_getAll()
        {
            // Arrange
            $input_name = "PDX";
            $test_tag = new Tag($input_name);
            $test_tag->save();
            $test_tag->getId();

            // Act
            $result = Tag::getAll();

            // Assert
            $this->assertEquals($test_tag, $result[0]);
        }

        function test_deleteAll()
        {
            // Arrange
            $input_name = "PDX";
            $test_tag = new Tag($input_name);
            $test_tag->save();
            $test_tag->getId();

            // Act
            Tag::deleteAll();
            $result = Tag::getAll();

            // Assert
            $this->assertEquals(array(), $result);
        }

        function test_update()
        {
            // Arrange
            $input_name = "PDX";
            $test_tag = new Tag($input_name);
            $test_tag->save();
            $input_name2 = "SFO";

            // Act
            $test_tag->update($input_name2);
            $result = Tag::getAll();

            // Assert
            $this->assertEquals($input_name2, $result[0]->getName());

        }

        function test_delete()
        {
            // Arrange
            $input_name = "PDX";
            $id = NULL;
            $test_tag = new Tag($input_name, $id);
            $test_tag->save();

            $input_name2 = "SFO";
            $test_tag2 = new Tag($input_name2, $id);
            $test_tag2->save();

            // Act
            $test_tag->delete();
            $result = Tag::getAll();

            // Assert
            $this->assertEquals($test_tag2, $result[0]);
        }
    }


?>
