<?php

    require_once 'src/FindReplace.php';

    class FindReplaceTest extends PHPUnit_Framework_TestCase
    {

        function test_replace()
        {

            $test_FindReplace = new FindReplace;
            $first_input = "This is a sentence";
            $second_input = "sentence";
            $third_input = "porcupine";

            $result = $test_FindReplace->replaceWord($first_input, $second_input, $third_input);

            $this->assertEquals("This is a porcupine", $result);
        }

        function test_capsreplace()
        {

            $test_FindReplace = new FindReplace;
            $first_input = "This is a Sentence";
            $second_input = "sentence";
            $third_input = "porcupine";

            $result = $test_FindReplace->replaceWord($first_input, $second_input, $third_input);

            $this->assertEquals("This is a porcupine", $result);
        }


    }






?>
