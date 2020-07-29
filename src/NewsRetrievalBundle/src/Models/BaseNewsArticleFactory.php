<?php

namespace App\NewsRetrievalBundle\Models;

use App\NewsRetrievalBundle\Models\BaseNewsArticleModel;

/**
* Basic factory class for creating new Models representing a news article.
*
* @author Valentijn Manshande <v.manshande88@gmail.com>
*/


class BaseNewsArticleFactory
{
    
    public static function createNewsArticleModel(string $title, string $author, string $newsAgent, string $articlUrl) : BaseNewsArticleModel
    {

        return new BaseNewsArticleModel($title, $author, $newsAgent, $articlUrl);
    }
}