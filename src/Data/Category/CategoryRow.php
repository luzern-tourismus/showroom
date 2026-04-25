<?php
namespace LuzernTourismus\ShowRoom\Data\Category;
use Nemundo\Core\Language\LanguageConfig;
class CategoryRow extends \Nemundo\Model\Row\AbstractModelDataRow {
/**
* @var \Nemundo\Model\Row\AbstractModelDataRow
*/
private $row;

/**
* @var CategoryModel
*/
public $model;

/**
* @var string
*/
public $id;

/**
* @var string|string[]
*/
public $category;

public function __construct(\Nemundo\Db\Row\AbstractDataRow $row, $model, $multiLanguage = false) {
parent::__construct($row->getData());
$this->row = $row;
$this->id = $this->getModelValue($model->id);
if ($multiLanguage) {
$data = [];
foreach ((new LanguageConfig())->getLanguageList() as $language) {
$data[$language] = $this->getValue($model->category->aliasFieldName."_".$language);
}
$this->category = $data;
} else {
$this->category = $this->getModelValue($model->category);
}
}
}