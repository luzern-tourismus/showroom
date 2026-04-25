<?php

namespace LuzernTourismus\ShowRoom\Script;

use LuzernTourismus\ShowRoom\Application\ShowRoomApplication;
use Nemundo\App\Script\Type\AbstractConsoleScript;

class CleanScript extends AbstractConsoleScript
{
    protected function loadScript()
    {
        $this->scriptName = 'showroom-clean';
    }

    public function run()
    {

        (new ShowRoomApplication())->reinstallApp();

    }
}