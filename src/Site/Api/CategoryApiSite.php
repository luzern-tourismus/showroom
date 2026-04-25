<?php

namespace LuzernTourismus\ShowRoom\Site\Api;

use LuzernTourismus\ShowRoom\Data\Category\CategoryReader;

use Nemundo\Core\Json\Document\JsonDocument;
use Nemundo\Core\Language\LanguageCode;
use Nemundo\Web\Site\AbstractSite;

class CategoryApiSite extends AbstractSite
{
    protected function loadSite()
    {
        $this->title = 'Category';
        $this->url = 'category';
    }

    public function loadContent()
    {

        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Headers: Content-Type, Authorization');

        $json = new JsonDocument();


        $categoryReader = new CategoryReader();

        foreach ($categoryReader->getData() as $categoryRow) {

            $row = [];
            $row['id'] = $categoryRow->id;
            $row['category'] = $categoryRow->category;  //[LanguageCode::DE];

            $json->addRow($row);

        }


        $json->render();


    }
}