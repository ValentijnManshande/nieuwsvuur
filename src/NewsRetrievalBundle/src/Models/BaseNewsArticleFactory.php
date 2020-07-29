<?php

namespace App\NewsRetrievalBundle\Models;

use App\NewsRetrievalBundle\Models\BaseNewsArticleModel;

class BaseNewsArticleFactory
{
    
    public static function createNewsArticleModel(string $title, string $author, string $newsAgent, string $articlUrl) : BaseNewsArticleModel
    {

        return new BaseNewsArticleModel($title, $author, $newsAgent, $articlUrl);
    }
}