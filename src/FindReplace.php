<?php
    class FindReplace
    {
        function replaceWord($sentence, $wordInput, $wordReplace)
        {
            $sentence_array = explode(" ", $sentence);
            $lowerc_sentence_array = explode(" ", strtolower($sentence));
            $position = array_search(strtolower($wordInput), $lowerc_sentence_array);
            array_splice($sentence_array, $position, 1, $wordReplace);

            return implode(" ", $sentence_array);
        }

        function regexReplace($sentence, $wordInput, $wordReplace)
        {
            $word_search = '/' . $wordInput . '/';
            return preg_replace($word_search, $wordReplace, $sentence);
        }


    }


?>
