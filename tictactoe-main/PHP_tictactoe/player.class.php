<?php



class Player
{

    public string $xo;

    public string $playerX;

    public string $playerO;

    public string $currentPlayer;

    public $team;


    public function askPlayerNames() {
        $this->playerX = readline('Name of player X: ');
        $this->playerO = readline('Name of player O: ');
    }

    public function randomizeTeam(){
        $randomTeam = [' X ', ' O '];
        shuffle( $randomTeam );
        $xo = $randomTeam[0];

        if ($xo == ' X ') {
            $this->currentPlayer = $this->playerX;
            $this->team = Vakje::cross;
        } else {
            $this->currentPlayer = $this->playerO;
            $this->team = Vakje::circle;
        }
    }

    public function switchTeam() {
        if ($this->team == Vakje::circle) {
            $this->xo = ' X ';
            $this->currentPlayer = $this->playerX;
            $this->team = Vakje::cross;
        } else {
            $this->team = Vakje::circle;
            $this->currentPlayer = $this->playerO;
            $this->xo = ' O ';
        }
    }

}
?>