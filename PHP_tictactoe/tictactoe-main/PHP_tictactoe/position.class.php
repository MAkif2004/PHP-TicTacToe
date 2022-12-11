<?php



require_once 'board.class.php';
require_once 'input.class.php';
require_once 'player.class.php';
$player = new Player();
class Position{

    public array $colrow;

    public int $a = 0;

    public function setPosition($input, $player, $board){
        switch ($input) {

            case 'a1':
                $this->colrow = [2 => 0];
                break;
            case 'b1':
                $this->colrow = [2 => 1];
                break;
            case 'c1':
                $this->colrow = [2 => 2];
                break;
            case 'a2':
                $this->colrow = [1 => 0];
                break;
            case 'b2':
                $this->colrow = [1 => 1];
                break;
            case 'c2':
                $this->colrow = [1 => 2];
                break;
            case 'a3':
                $this->colrow = [0 => 0];
                break;
            case 'b3':
                $this->colrow = [0 => 1];
                break;
            case 'c3':
                $this->colrow = [0 => 2];
                break;
            default:
                echo 'Invalid position my man.';
                $this->colrow = [2 => 0];
                $this->a = 1;
                break;
       }
       
       foreach ($this->colrow as $col => $row) {
        if ($this->a == 0) 
        {
            $board->Play($col, $row, $player->team, $board->tries, $player);
        } else {
            $this->a = 0;
            $player->switchTeam();
        }

        break;
    }


    }

}





?>