<?php



class Player
{

    public $xo = ' O ';

    public $team = Vakje::circle;

    public function switchTeam() {
        if ($this->team == Vakje::circle) {
            $this->xo = ' X ';
            $this->team = Vakje::cross;
        } else {
            $this->team = Vakje::circle;
            $this->xo = ' O ';
        }

    }

}
?>