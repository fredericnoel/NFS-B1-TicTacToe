<?php

class Deck
{
    public $deck = [[0,0,0], [0,0,0], [0,0,0]];
    private $player1Value = 1;
    private $player2Value = 2;

    public function __construct()
    {
        if (!isset($_SESSION['deck']) || $_SESSION['deck'] === false ) {
            $_SESSION['deck'] = [[0,0,0], [0,0,0], [0,0,0]];
            $this->deck = $_SESSION['deck'];
        }
    }
}