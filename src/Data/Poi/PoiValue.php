<?php
namespace LuzernTourismus\ShowRoom\Data\Poi;
class PoiValue extends \Nemundo\Model\Value\AbstractModelDataValue {
/**
* @var PoiModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new PoiModel();
}
}