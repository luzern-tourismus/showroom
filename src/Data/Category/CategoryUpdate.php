<?php
namespace LuzernTourismus\ShowRoom\Data\Category;
use Nemundo\Model\Data\AbstractModelUpdate;
use Nemundo\Core\Language\LanguageConfig;
use Nemundo\Model\Type\Text\TextType;
class CategoryUpdate extends AbstractModelUpdate {
/**
* @var CategoryModel
*/
public $model;

/**
* @var string[]
*/
public $category;

public function __construct() {
parent::__construct();
$this->model = new CategoryModel();
}
public function update() {
foreach (LanguageConfig::$languageList as $language) {
if (isset($this->category[$language])) {
$type = new TextType();
$type->fieldName = $this->model->category->fieldName."_" . $language;
$this->typeValueList->setModelValue($type, $this->category[$language]);
}
}
parent::update();
}
}