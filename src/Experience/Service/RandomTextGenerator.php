<?php

namespace Experience\Service;

class RandomTextGenerator
{
    /**
     * @var array
     */
    protected $pronouns;

    /**
     * @var array
     */
    protected $verbs;

    /**
     * @var array
     */
    protected $complements;

    /**
     * RandomTextGenerator constructor.
     */
    public function __construct()
    {
        $this->pronouns = ['I', 'She', 'He', 'You','They'];
        $this->verbs = ['need to', 'will', 'try', 'can'];
        $this->complements = ['drive', 'run', 'swim', 'take photos', 'go to parties'];
    }


    /**
     * @return string
     */
    public function generate()
    {
        $terms = [
            $this->getRandomTerm($this->pronouns),
            $this->getRandomTerm($this->verbs),
            $this->getRandomTerm($this->complements)
        ];

        return implode(' ', $terms) . '.';
    }


    /**
     * @param array $terms
     * @return string
     */
    protected function getRandomTerm(array $terms)
    {
        return $terms[mt_rand(0, count($terms) - 1)];
    }


}