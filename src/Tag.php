<?php

    class  Tag
    {
        private $name;
        private $id;

        function __construct($name, $id = NULL)
        {
            $this->name = $name;
            $this->id = $id;
        }

        // getters and setters
        function setName($new_name)
        {
            $this->name = $new_name;
        }

        function getName()
        {
            return $this->name;
        }

        function getId()
        {
            return $this->id;
        }

        // Crud functions

        function save()
        {
            $GLOBALS['DB']->exec("INSERT INTO tag (name) VALUES ('{$this->getName()}');");

            $this->id = $GLOBALS['DB']->lastInsertId();
        }
        function update($new_name)
        {
            $GLOBALS['DB']->exec("UPDATE tag SET name = '{$new_name}' WHERE id = '{$this->id}';");
            $this->setName($new_name);
        }

        function delete()
        {
            $GLOBALS['DB']->exec("DELETE FROM tag WHERE id = '{$this->id}';");
        }
        // static functions

        static function getAll()
        {
            $retrieved_tags = array();
            $tags = $GLOBALS['DB']->query("SELECT * FROM tag;");
            foreach( $tags as $tag )
            {
                $name = $tag['name'];
                $id = $tag['id'];
                $new_tag = new Tag($name, $id);
                array_push($retrieved_tags, $new_tag);
            }
            return $retrieved_tags;
        }

        static function deleteAll()
        {
            $GLOBALS['DB']->exec("DELETE FROM tag;");
        }

    }

 ?>
