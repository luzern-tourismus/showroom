<?php
namespace LuzernTourismus\ShowRoom\Data\Poi;
use Nemundo\Core\Language\LanguageConfig;
use Nemundo\Model\Type\Text\LargeTextType;
use Nemundo\Model\Type\Text\TextType;
class PoiBulk extends \Nemundo\Model\Data\AbstractModelDataBulk {
/**
* @var PoiModel
*/
protected $model;

/**
* @var string
*/
public $categoryId;

/**
* @var string[]
*/
public $text;

/**
* @var string[]
*/
public $poi;

/**
* @var \Nemundo\Model\Data\Property\File\ImageDataProperty
*/
public $image;

public function __construct() {
parent::__construct();
$this->model = new PoiModel();
$this->image = new \Nemundo\Model\Data\Property\File\ImageDataProperty($this->model->image, $this->typeValueList);
}
public function save() {
$this->typeValueList->setModelValue($this->model->categoryId, $this->categoryId);
foreach (LanguageConfig::$languageList as $language) {
if (isset($this->text[$language])) {
$type = new LargeTextType();
$type->fieldName = $this->model->text->fieldName."_" . $language;
$this->typeValueList->setModelValue($type, $this->text[$language]);
}
}
foreach (LanguageConfig::$languageList as $language) {
if (isset($this->poi[$language])) {
$type = new TextType();
$type->fieldName = $this->model->poi->fieldName."_" . $language;
$this->typeValueList->setModelValue($type, $this->poi[$language]);
}
}
$id = parent::save();
return $id;
}
}