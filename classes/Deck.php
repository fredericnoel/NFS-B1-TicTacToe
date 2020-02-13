<?php


class Deck
{
    private $deck;
    private $player1Value = 1;
    private $player2Value = 2;

    public function __construct()
    {
        if (!isset($_SESSION['deck'])) {
            $this->deck = [[0,0,0], [0,0,0], [0,0,0]];
            $_SESSION['deck'] = $this->deck;
        }
    }
}