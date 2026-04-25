<?php
namespace LuzernTourismus\ShowRoom\Install;
use Nemundo\App\Application\Type\Install\AbstractUninstall;
use Nemundo\Model\Setup\ModelCollectionSetup;
use LuzernTourismus\ShowRoom\Data\ShowRoomModelCollection;
use LuzernTourismus\ShowRoom\Application\ShowRoomApplication;
use Nemundo\App\Application\Setup\ApplicationSetup;
class ShowRoomUninstall extends AbstractUninstall {
public function uninstall() {
(new ModelCollectionSetup())->removeCollection(new ShowRoomModelCollection());
}
}