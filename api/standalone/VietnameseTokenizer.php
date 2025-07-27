<?php

namespace StandAlone;

use voku\helper\ASCII;
use TeamTNT\TNTSearch\Support\AbstractTokenizer;
use TeamTNT\TNTSearch\Support\TokenizerInterface;

class VietnameseTokenizer extends AbstractTokenizer implements TokenizerInterface
{
    public function tokenize($text, $stopwords = [])
    {
        if (!empty($text)) {
            $text = ASCII::to_ascii($text);
        }
        $split = $this->splitWord($text);
        return array_diff($split, $stopwords);
    }
    public function getPattern() {}

    private function splitWord($text)
    {
        $text = mb_strtolower($text);
        return preg_split("/[^\p{L}\p{N}]+/u", $text, -1, PREG_SPLIT_NO_EMPTY);
    }
}
