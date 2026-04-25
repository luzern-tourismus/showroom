<?php
namespace LuzernTourismus\ShowRoom\Data\Category;
use Nemundo\Core\Language\LanguageConfig;
use Nemundo\Model\Type\Text\TextType;
class Category extends \Nemundo\Model\Data\AbstractModelData {
/**
* @var CategoryModel
*/
protected $model;

/**
* @var string[]
*/
public $category;

public function __construct() {
parent::__construct();
$this->model = new CategoryModel();
}
public function save() {
foreach (LanguageConfig::$languageList as $language) {
if (isset($this->category[$language])) {
$type = new TextType();
$type->fieldName = $this->model->category->fieldName."_" . $language;
$this->typeValueList->setModelValue($type, $this->category[$language]);
}
}
$id = parent::save();
return $id;
}
}