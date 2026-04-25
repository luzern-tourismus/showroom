<?php

namespace LuzernTourismus\ShowRoom\Install;

use LuzernTourismus\ShowRoom\Application\ShowRoomApplication;
use LuzernTourismus\ShowRoom\Data\Category\Category;
use LuzernTourismus\ShowRoom\Data\Poi\Poi;
use LuzernTourismus\ShowRoom\Data\ShowRoomModelCollection;
use LuzernTourismus\ShowRoom\Script\CleanScript;
use Nemundo\App\Application\Type\Install\AbstractInstall;
use Nemundo\App\Script\Setup\ScriptSetup;
use Nemundo\Core\Language\LanguageCode;
use Nemundo\Model\Setup\ModelCollectionSetup;

class ShowRoomInstall extends AbstractInstall
{
    public function install()
    {


        (new ModelCollectionSetup())
            ->addCollection(new ShowRoomModelCollection());

        (new ScriptSetup(new ShowRoomApplication()))
            ->addScript(new CleanScript());


        $data = new Category();
        $data->category[LanguageCode::DE] = 'See';
        $data->category[LanguageCode::EN] = 'Lake';
        $data->category[LanguageCode::FR] = 'Le lac';
        $data->save();

        $data = new Category();
        $data->category[LanguageCode::DE] = 'Berge';
        $data->category[LanguageCode::EN] = 'Mountains';
        $data->category[LanguageCode::FR] = 'Le lac';
        $categoryId = $data->save();

        $data = new Poi();
        $data->categoryId = $categoryId;
        $data->poi[LanguageCode::EN] = 'Titlis';
        $data->poi[LanguageCode::DE] = 'Titlis';
        $data->poi[LanguageCode::FR] = 'Titlis';
        $data->text = 'bla bla';
        $data->image->fromFilename('C:\test\webp.webp');
        $data->save();

        $data = new Poi();
        $data->categoryId = $categoryId;
        $data->poi[LanguageCode::EN] = 'Rigi';
        $data->poi[LanguageCode::DE] = 'Titlis';
        $data->poi[LanguageCode::FR] = 'Titlis';

        $data->text = 'bla bla';
        $data->image->fromFilename('C:\test\webp.webp');
        $data->save();



        $data = new Category();
        $data->category[LanguageCode::DE] = 'Berge';
        $data->category[LanguageCode::EN] = 'City';
        $data->category[LanguageCode::FR] = 'Le lac';
        $data->save();

        $data = new Category();
        $data->category[LanguageCode::DE] = 'Berge';
        $data->category[LanguageCode::EN] = 'Museums';
        $data->category[LanguageCode::FR] = 'Le lac';
        $data->save();



    }
}