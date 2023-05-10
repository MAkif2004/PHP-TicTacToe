<?php

require_once 'board.class.php';
require_once 'enum.php';
require_once 'player.class.php';
require_once 'checkwin.class.php';
require_once 'position.class.php';



game();



function game()
{

    $player = new Player();
    $winner = new Winner();
    $position = new Position();
    $gameboard = new Gameboard();


    $gameboard->setSize($position);
    $gameboard->Show();
    echo PHP_EOL;
    $player->askPlayerNames();
    $player->randomizeTeam();



    for ($i = 0; $i < $gameboard->height * $gameboard->width; $i++) {
        $player->switchTeam();
        $input = readline('Number? ' . $player->currentPlayer . ':');

        echo "\033[2J\033[;H";

        if ($input > $gameboard->height * $gameboard->width || $input < 1) {
            echo "Invalid position bro \n";
            $i += 1;
        }

        $position->setPosition($input, $player, $gameboard);
        echo PHP_EOL;

        $gameboard->show();
        echo PHP_EOL;
        if ($winner->CheckWin($gameboard->board, $player)) {
            echo $player->currentPlayer . " wins";
            echo PHP_EOL . PHP_EOL . PHP_EOL;
            $gameboard->tryAgain();
        }
        $i += $gameboard->tries;
        $gameboard->tries = 0;
    }
}
