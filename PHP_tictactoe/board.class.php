<?php


require_once 'enum.php';
require_once 'index.php';
require_once 'position.class.php';
class Board{

    protected array $board =
    [
        [Vakje::empty, Vakje::empty, Vakje::empty,],
        [Vakje::empty, Vakje::empty, Vakje::empty,],
        [Vakje::empty, Vakje::empty, Vakje::empty,]
    ];


    public function Show() {
        foreach ($this->board as $col) {
            echo '----- ----- -----';
            echo PHP_EOL;
            foreach ($col as $row) {
                switch ($row){
                    case Vakje::empty:
                        echo '| . | ';
                        break;
                    case Vakje::cross:
                        echo '| X | ';
                        break;
                    case Vakje::circle:
                        echo '| o | ';
                        break;
                    }

            }
            echo PHP_EOL;
            echo '----- ----- -----';
            echo PHP_EOL;
        }
    }


    public $tries = 0;

    public function Play (int $roww, int $column, $vakje, $tries)
    {
        if ($this->board[$roww][$column] == Vakje::empty) {
            $this->board[$roww][$column] = $vakje;

        } else {$this->tries += 1;}
    }

}



?>