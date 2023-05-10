<?php


require_once 'enum.php';
require_once 'index.php';
require_once 'position.class.php';
require_once 'player.class.php';


class Gameboard{

    public int $width;
    public int $height;

    public array $board = [];


    public function Show() {
        $num = 1;
        $row = $this->width;

        foreach ($this->board as $col) {
            for ($i = 0; $i < $row; $i++) {
                echo '----- ';
            }
            echo PHP_EOL;
            foreach ($col as $row) {
                switch ($row){
                    case Vakje::empty:
                        if ($num > 99) {
                            echo "|$num|";
                        }
                        elseif ($num > 9) {
                            echo "| $num| ";
                        } else {
                            echo "| $num | ";
                        }
                        break;
                    case Vakje::cross:
                        echo "| \033[31mX\033[0m | ";
                        break;
                    case Vakje::circle:
                        echo "| \033[34mO\033[0m | ";
                        break;
                    }
                $num++;
            }
            echo PHP_EOL;
            $row = $this->width;
            for ($i = 0; $i < $row; $i++) {
                echo '----- ';
            }
            echo PHP_EOL;
        }
    }


    public $tries = 0;

    public function Play (int $roww, int $column, $vakje, $tries, $player)
    {
        if ($this->board[$roww][$column] == Vakje::empty) {
            $this->board[$roww][$column] = $vakje;

        } else {
            $this->tries += 1;
            $player->switchTeam();
        }
    }

    public function tryAgain() {
        $retry = readline('Would you like to try again? ');

        switch ($retry) {
            case 'yes':
            case 'y':
                $this->reset();
                game();
                break;
            default:
                echo 'Thank you for checking my project!';
                exit;
        }
    }

    private function reset () {
        $this->board = [];
    }

    public function setSize($position) {
        $size = readline('Size? (3 for standard Tic-Tac-Toe): ');
        $this->height = $size;
        $this->width = $size;

        for ($i = 0; $i < $this->height; $i++) {
            $this->board[$i] = [];
            for ($j = 0; $j < $this->width; $j++) {
                $this->board[$i][$j] = Vakje::empty;
            }
        }



        $position->width = $this->height;
        $position->height = $this->height;
    }

}



?>