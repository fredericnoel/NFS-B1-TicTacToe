<?php

class Deck
{
    private $deck = [[0, 0, 0], [0, 0, 0], [0, 0, 0]];
    private $player1Value = 1;
    private $player2Value = 2;

    public function __construct()
    {
        if (!isset($_SESSION['deck']) || $_SESSION['deck'] === false) {
            $_SESSION['deck'] = $this->deck;
        }
    }

    public function displayDeck()
    {

    }
}