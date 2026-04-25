<?php
namespace LuzernTourismus\ShowRoom\Data\Category;
class CategoryModel extends \Nemundo\Model\Definition\Model\AbstractModel {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Text\TranslationTextType
*/
public $category;

protected function loadModel() {
$this->tableName = "showroom_category";
$this->aliasTableName = "showroom_category";
$this->label = "Category";

$this->primaryIndex = new \Nemundo\Db\Index\AutoIncrementIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "showroom_category";
$this->id->externalTableName = "showroom_category";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "showroom_category_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->category = new \Nemundo\Model\Type\Text\TranslationTextType($this);
$this->category->tableName = "showroom_category";
$this->category->externalTableName = "showroom_category";
$this->category->fieldName = "category";
$this->category->aliasFieldName = "showroom_category_category";
$this->category->label = "Category";
$this->category->allowNullValue = false;
$this->category->length = 255;

}
}