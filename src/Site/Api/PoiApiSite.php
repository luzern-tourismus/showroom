<?php

namespace LuzernTourismus\ShowRoom\Site\Api;

use LuzernTourismus\ShowRoom\Data\Category\CategoryReader;

use LuzernTourismus\ShowRoom\Data\Poi\PoiReader;
use Nemundo\Core\Json\Document\JsonDocument;
use Nemundo\Core\Language\LanguageCode;
use Nemundo\Web\Site\AbstractSite;

class PoiApiSite extends AbstractSite
{
    protected function loadSite()
    {

        $this->url = 'poi';
    }

    public function loadContent()
    {

        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Headers: Content-Type, Authorization');

        $json = new JsonDocument();


        $poiReader = new PoiReader();

        foreach ($poiReader->getData() as $poiRow) {

            $row = [];
            $row['id'] = $poiRow->id;
            $row['poi'] = $poiRow->poi;

            $json->addRow($row);

        }


        $json->render();


    }
}