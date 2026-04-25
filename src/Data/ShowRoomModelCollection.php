<?php
namespace LuzernTourismus\ShowRoom\Data;
use Nemundo\Model\Collection\AbstractModelCollection;
class ShowRoomModelCollection extends AbstractModelCollection {
protected function loadCollection() {
$this->addModel(new \LuzernTourismus\ShowRoom\Data\Category\CategoryModel());
$this->addModel(new \LuzernTourismus\ShowRoom\Data\Poi\PoiModel());
}
}