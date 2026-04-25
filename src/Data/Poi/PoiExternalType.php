<?php
namespace LuzernTourismus\ShowRoom\Data\Poi;
class PoiExternalType extends \Nemundo\Model\Type\External\ExternalType {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Id\IdType
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

protected function loadExternalType() {
parent::loadExternalType();
$this->externalModelClassName = PoiModel::class;
$this->externalTableName = "showroom_poi";
$this->aliasTableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id = new \Nemundo\Model\Type\Id\IdType();
$this->id->fieldName = "id";
$this->id->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id->externalTableName = $this->externalTableName;
$this->id->aliasFieldName = $this->id->tableName . "_" . $this->id->fieldName;
$this->id->label = "Id";
$this->addType($this->id);

$this->categoryId = new \Nemundo\Model\Type\Id\IdType();
$this->categoryId->fieldName = "category";
$this->categoryId->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->categoryId->aliasFieldName = $this->categoryId->tableName ."_".$this->categoryId->fieldName;
$this->categoryId->label = "Category";
$this->addType($this->categoryId);

$this->text = new \Nemundo\Model\Type\Text\TranslationLargeTextType();
$this->text->fieldName = "text";
$this->text->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->text->externalTableName = $this->externalTableName;
$this->text->aliasFieldName = $this->text->tableName . "_" . $this->text->fieldName;
$this->text->label = "Text";
$this->addType($this->text);

$this->poi = new \Nemundo\Model\Type\Text\TranslationTextType();
$this->poi->fieldName = "poi";
$this->poi->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->poi->externalTableName = $this->externalTableName;
$this->poi->aliasFieldName = $this->poi->tableName . "_" . $this->poi->fieldName;
$this->poi->label = "Poi";
$this->addType($this->poi);

$this->image = new \Nemundo\Model\Type\File\ImageType();
$this->image->fieldName = "image";
$this->image->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->image->externalTableName = $this->externalTableName;
$this->image->aliasFieldName = $this->image->tableName . "_" . $this->image->fieldName;
$this->image->label = "Image";
$this->addType($this->image);

}
public function loadCategory() {
if ($this->category == null) {
$this->category = new \LuzernTourismus\ShowRoom\Data\Category\CategoryExternalType(null, $this->parentFieldName . "_category");
$this->category->fieldName = "category";
$this->category->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->category->aliasFieldName = $this->category->tableName ."_".$this->category->fieldName;
$this->category->label = "Category";
$this->addType($this->category);
}
return $this;
}
}