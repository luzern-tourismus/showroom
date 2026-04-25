<?php
namespace LuzernTourismus\ShowRoom\Data\Poi;
class PoiCount extends \Nemundo\Model\Count\AbstractModelDataCount {
/**
* @var PoiModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new PoiModel();
}
}