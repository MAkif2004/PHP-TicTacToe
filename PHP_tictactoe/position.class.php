<?php



require_once 'board.class.php';

class Position {




    public function setPosition($input, $player, $board){
        switch ($input) {

            case 1:
                $this->colrow = [2 => 0];
                break;
            case 2:
                $this->colrow = [2 => 1];
                break;
            case 3:
                $this->colrow = [2 => 2];
                break;
            case 4:
                $this->colrow = [1 => 0];
                break;
            case 5:
                $this->colrow = [1 => 1];
                break;
            case 6:
                $this->colrow = [1 => 2];
                break;
            case 7:
                $this->colrow = [0 => 0];
                break;
            case 8:
                $this->colrow = [0 => 1];
                break;
            case 9:
                $this->colrow = [0 => 2];
                break;
       }

       foreach ($this->colrow as $col => $row) {

        $board->Play($col, $row, $player->team, $board->tries);
        break;
    }


    }

}





?>