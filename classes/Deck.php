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
        $htmlDeck = '<table>';

        foreach ($this->deck as $value) {
            $htmlDeck .= '<tr>';

            foreach ($value as $subValue) {
                $htmlDeck .= '<td>';
                switch ($subValue) {
                    case 0 : $subValue = '-' ;break;
                    case 1 : $subValue = '&bigcirc;' ;break;
                    case 2 : $subValue = '&cross;' ;break;
                    default: ''; break;
                }

                $htmlDeck .= $subValue;
                $htmlDeck .= '</td>';
            }

            $htmlDeck .= '</tr>';
        }

        $htmlDeck .= '</table>';
        return $htmlDeck;
    }
}
