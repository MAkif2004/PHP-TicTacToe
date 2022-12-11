<?php

require_once 'board.class.php';
require_once 'player.class.php';

class Winner extends Board{

    public function CheckWin($board, $player){
        if ($board->board[2][0] == $player->team && $board->board[2][1] == $player->team && $board->board[2][2] == $player->team ||
            $board->board[1][0] == $player->team && $board->board[1][1] == $player->team && $board->board[1][2] == $player->team ||
            $board->board[0][0] == $player->team && $board->board[0][1] == $player->team && $board->board[0][2] == $player->team ||
            $board->board[2][2] == $player->team && $board->board[1][2] == $player->team && $board->board[0][2] == $player->team ||
            $board->board[2][1] == $player->team && $board->board[1][1] == $player->team && $board->board[0][1] == $player->team ||
            $board->board[2][0] == $player->team && $board->board[1][0] == $player->team && $board->board[0][0] == $player->team ||
            $board->board[2][0] == $player->team && $board->board[1][1] == $player->team && $board->board[0][2] == $player->team ||
            $board->board[0][0] == $player->team && $board->board[1][1] == $player->team && $board->board[2][2] == $player->team)  {
            echo $player->xo . " wins";
            echo PHP_EOL . PHP_EOL . PHP_EOL;
            exit;
        }
    }

}


?>