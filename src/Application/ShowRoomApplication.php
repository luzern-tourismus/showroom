<?php

namespace LuzernTourismus\ShowRoom\Application;

use LuzernTourismus\ShowRoom\Data\ShowRoomModelCollection;
use LuzernTourismus\ShowRoom\Install\ShowRoomInstall;
use LuzernTourismus\ShowRoom\Install\ShowRoomUninstall;
use LuzernTourismus\ShowRoom\Site\ShowRoomApiSite;
use Nemundo\App\Application\Type\AbstractApplication;

class ShowRoomApplication extends AbstractApplication
{
    protected function loadApplication()
    {
        $this->application = 'ShowRoom';
        $this->applicationId = '9c6eaba5-1a16-4ee5-a3b3-8cbc973e4a68';
        $this->modelCollectionClass = ShowRoomModelCollection::class;
        $this->installClass = ShowRoomInstall::class;
        $this->uninstallClass = ShowRoomUninstall::class;
        $this->publicSiteClass = ShowRoomApiSite::class;

    }
}