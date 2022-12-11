<?php

require_once 'board.class.php';
require_once 'enum.php';
require_once 'player.class.php';
require_once 'checkwin.class.php';
require_once 'position.class.php';

$player = new Player();
$win = new Winner();
$position = new Position();



$board = new Board();
$board->Show();
echo PHP_EOL;





for ($i = 9; $i > 0; $i--) {



$player->switchTeam();
$input = readline('Number?' . $xo);


$position->setPosition($input, $player, $board);
echo PHP_EOL;






$board->show();
echo PHP_EOL;
$win->CheckWin($board, $player);


$i += $board->tries;
$board->tries = 0;
}
?>