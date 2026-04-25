<?php
namespace LuzernTourismus\ShowRoom\Data\Poi;
class PoiModel extends \Nemundo\Model\Definition\Model\AbstractModel {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\External\Id\NumberExternalIdType
*/
public $categoryId;

/**
* @var \LuzernTourismus\ShowRoom\Data\Category\CategoryExternalType
*/
public $category;

/**
* @var \Nemundo\Model\Type\Text\TranslationLargeTextType
*/
public $text;

/**
* @var \Nemundo\Model\Type\Text\TranslationTextType
*/
public $poi;

/**
* @var \Nemundo\Model\Type\File\ImageType
*/
public $image;

protected function loadModel() {
$this->tableName = "showroom_poi";
$this->aliasTableName = "showroom_poi";
$this->label = "Poi";

$this->primaryIndex = new \Nemundo\Db\Index\AutoIncrementIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "showroom_poi";
$this->id->externalTableName = "showroom_poi";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "showroom_poi_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->categoryId = new \Nemundo\Model\Type\External\Id\NumberExternalIdType($this);
$this->categoryId->tableName = "showroom_poi";
$this->categoryId->fieldName = "category";
$this->categoryId->aliasFieldName = "showroom_poi_category";
$this->categoryId->label = "Category";
$this->categoryId->allowNullValue = false;

$this->text = new \Nemundo\Model\Type\Text\TranslationLargeTextType($this);
$this->text->tableName = "showroom_poi";
$this->text->externalTableName = "showroom_poi";
$this->text->fieldName = "text";
$this->text->aliasFieldName = "showroom_poi_text";
$this->text->label = "Text";
$this->text->allowNullValue = true;

$this->poi = new \Nemundo\Model\Type\Text\TranslationTextType($this);
$this->poi->tableName = "showroom_poi";
$this->poi->externalTableName = "showroom_poi";
$this->poi->fieldName = "poi";
$this->poi->aliasFieldName = "showroom_poi_poi";
$this->poi->label = "Poi";
$this->poi->allowNullValue = false;
$this->poi->length = 255;

$this->image = new \Nemundo\Model\Type\File\ImageType($this);
$this->image->tableName = "showroom_poi";
$this->image->externalTableName = "showroom_poi";
$this->image->fieldName = "image";
$this->image->aliasFieldName = "showroom_poi_image";
$this->image->label = "Image";
$this->image->allowNullValue = false;

}
public function loadCategory() {
if ($this->category == null) {
$this->category = new \LuzernTourismus\ShowRoom\Data\Category\CategoryExternalType($this, "showroom_poi_category");
$this->category->tableName = "showroom_poi";
$this->category->fieldName = "category";
$this->category->aliasFieldName = "showroom_poi_category";
$this->category->label = "Category";
}
return $this;
}
}