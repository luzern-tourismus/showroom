<?php
require  "config.php";

//(new \Showroom\Setup\ShowroomSetup())->run();

$reset = new \Nemundo\Project\Reset\ProjectReset();
(new \Nemundo\Project\Install\ProjectInstall())->install();

(new \LuzernTourismus\ShowRoom\Application\ShowRoomApplication())->installApp();

$reset->remove();