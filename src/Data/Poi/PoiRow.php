<?php
namespace LuzernTourismus\ShowRoom\Data\Poi;
use Nemundo\Core\Language\LanguageConfig;
class PoiRow extends \Nemundo\Model\Row\AbstractModelDataRow {
/**
* @var \Nemundo\Model\Row\AbstractModelDataRow
*/
private $row;

/**
* @var PoiModel
*/
public $model;

/**
* @var string
*/
public $id;

/**
* @var int
*/
public $categoryId;

/**
* @var \LuzernTourismus\ShowRoom\Data\Category\CategoryRow
*/
public $category;

/**
* @var string|string[]
*/
public $text;

/**
* @var string|string[]
*/
public $poi;

/**
* @var \Nemundo\Model\Reader\Property\File\ImageReaderProperty
*/
public $image;

public function __construct(\Nemundo\Db\Row\AbstractDataRow $row, $model, $multiLanguage = false) {
parent::__construct($row->getData());
$this->row = $row;
$this->id = $this->getModelValue($model->id);
$this->categoryId = intval($this->getModelValue($model->categoryId));
if ($model->category !== null) {
$this->loadLuzernTourismusShowRoomDataCategoryCategorycategoryRow($model->category);
}
if ($multiLanguage) {
$data = [];
foreach ((new LanguageConfig())->getLanguageList() as $language) {
$data[$language] = $this->getValue($model->text->aliasFieldName."_".$language);
}
$this->text = $data;
} else {
$this->text = $this->getModelValue($model->text);
}
if ($multiLanguage) {
$data = [];
foreach ((new LanguageConfig())->getLanguageList() as $language) {
$data[$language] = $this->getValue($model->poi->aliasFieldName."_".$language);
}
$this->poi = $data;
} else {
$this->poi = $this->getModelValue($model->poi);
}
$this->image = new \Nemundo\Model\Reader\Property\File\ImageReaderProperty($row, $model->image);
}
private function loadLuzernTourismusShowRoomDataCategoryCategorycategoryRow($model) {
$this->category = new \LuzernTourismus\ShowRoom\Data\Category\CategoryRow($this->row, $model);
}
}