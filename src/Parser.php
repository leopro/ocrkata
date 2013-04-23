<?php

namespace Kata;

class Parser
{
    const VALID     = '';
    const ERROR     = 'ERR';
    const ILLEGIBLE = 'ILL';
    const AMBIGOUS  = 'AMB';

    protected $text;

    /**
     * @param string $text
     */
    public function __construct($text)
    {
        $this->text = $text;
    }

    /**
     * @return string
     */
    public function parse()
    {
        // TODO fare qualcosa con $this->text;

        return '000000000'; // fake!
    }

    /**
     * @return string Vedi costanti di classe
     */
    public function validate()
    {
        $number = $this->parse($this->text);
        // TODO fare qualcosa per validare $number

        return self::VALID; // fake
    }

}
