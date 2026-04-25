<?php

namespace LuzernTourismus\ShowRoom;

use Nemundo\Core\Path\Path;
use Nemundo\Project\AbstractProject;

class ShowRoomProject extends AbstractProject
{
    public function loadProject()
    {
        $this->project = 'ShowRoom';
        $this->projectName = 'showroom';
        $this->path = __DIR__;
        $this->namespace = __NAMESPACE__;
        $this->modelPath = (new Path())
            ->addPath(__DIR__)
            ->addParentPath()
            ->addPath('model')
            ->getPath();
    }
}