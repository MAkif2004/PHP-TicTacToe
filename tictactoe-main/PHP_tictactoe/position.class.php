<?php



require_once 'board.class.php';
require_once 'input.class.php';
require_once 'player.class.php';
$player = new Player();
class Position
{

    public array $colrow;

    public int $a = 0;

    public int $column;
    public $row;


    public int $width;
    public int $height;

    public function setPosition($input, $player, $board)
    {

        if (!is_numeric($input)) {
            return;
        }

        $this->column = $input % $this->height;
        $this->column == 0 ? $this->column = $this->height - 1 : $this->column -= 1;

        $this->row = $input / $this->width;

        $this->colrow = [ceil($this->row) - 1 => $this->column];



        foreach ($this->colrow as $col => $row) {
            if ($this->a == 0) {
                $board->Play($col, $row, $player->team, $player, $input);
            } else {
                $this->a = 0;
                $player->switchTeam();
            }
        }
    }

    public function setSize() {

    }
}
