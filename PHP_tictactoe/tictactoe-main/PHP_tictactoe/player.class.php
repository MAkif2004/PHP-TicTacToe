<?php



class Player
{

    public function randomizeTeam(){
        $randomTeam = [' X ', ' O '];
        $xo = shuffle( $randomTeam );
    }
    public $team = Vakje::circle;

    public function switchTeam() {
        if ($this->team == Vakje::circle) {
            $xo = ' X ';
            $this->team = Vakje::cross;
        } else {
            $this->team = Vakje::circle;
            $xo = ' O ';
        }

    }

}
?>