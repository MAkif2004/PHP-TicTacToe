<?php

require_once 'board.class.php';

class Winner{


    public function checkWin($grid, $player) {


        // Check rows for a win
        for ($i = 0; $i < count($grid); $i++) {
          $row_win = true;
          for ($j = 0; $j < count($grid[$i]); $j++) {
            if ($grid[$i][$j] != $player->team) {
              $row_win = false;
              break;
            }
          }
          if ($row_win) {
            return true;
          }
        }

        // Check columns for a win
        for ($i = 0; $i < count($grid); $i++) {
          $col_win = true;
          for ($j = 0; $j < count($grid[$i]); $j++) {
            if ($grid[$j][$i] != $player->team) {
              $col_win = false;
              break;
            }
          }
          if ($col_win) {
            return true;
          }
        }



        // Check diagonal from top left to bottom right
        $diag_win = true;
        for ($i = 0; $i < count($grid); $i++) {
          if ($grid[$i][$i] != $player->team) {
            $diag_win = false;
            break;
          }
        }
        if ($diag_win) {
          return true;
        }

        // Check diagonal from top right to bottom left
        $diag_win = true;
        for ($i = 0; $i < count($grid); $i++) {
          if ($grid[$i][count($grid)-$i-1] != $player->team) {
            $diag_win = false;
            break;
          }
        }
        if ($diag_win) {
          return true;
        }

        // No win found
        return false;
      }



    // public function CheckWin($board, $player){

    //     // echo $player->team;


    //     if ($board->board[2][0] == $player->team && $board->board[2][1] == $player->team && $board->board[2][2] == $player->team ||
    //         $board->board[1][0] == $player->team && $board->board[1][1] == $player->team && $board->board[1][2] == $player->team ||
    //         $board->board[0][0] == $player->team && $board->board[0][1] == $player->team && $board->board[0][2] == $player->team ||
    //         $board->board[2][2] == $player->team && $board->board[1][2] == $player->team && $board->board[0][2] == $player->team ||
    //         $board->board[2][1] == $player->team && $board->board[1][1] == $player->team && $board->board[0][1] == $player->team ||
    //         $board->board[2][0] == $player->team && $board->board[1][0] == $player->team && $board->board[0][0] == $player->team ||
    //         $board->board[2][0] == $player->team && $board->board[1][1] == $player->team && $board->board[0][2] == $player->team ||
    //         $board->board[0][0] == $player->team && $board->board[1][1] == $player->team && $board->board[2][2] == $player->team)  {
            // echo $player->currentPlayer . " wins";
            // echo PHP_EOL . PHP_EOL . PHP_EOL;
            // $board->tryAgain();
    //     }
    // }

}


?>