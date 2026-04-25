<?php

namespace LuzernTourismus\ShowRoom\Site;

use LuzernTourismus\ShowRoom\Site\Api\CategoryApiSite;
use LuzernTourismus\ShowRoom\Site\Api\PoiApiSite;
use Nemundo\Web\Site\AbstractSite;

class ShowRoomApiSite extends AbstractSite
{
    protected function loadSite()
    {
        $this->title = 'ShowRoomApi';
        $this->url = 'show-room-api';


        new CategoryApiSite($this);
        new PoiApiSite($this);

    }

    public function loadContent()
    {

    }
}