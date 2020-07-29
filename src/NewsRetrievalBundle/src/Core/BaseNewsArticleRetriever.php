<?php

namespace App\NewsRetrievalBundle\Core;

use App\NewsRetrievalBundle\Core\Interfaces\RetrieveNewsArticlesInterface;

/**
* Predefined methods for retrieving a single news article from a specified news agent or 
* retrieve a multiple number of news articles from a specified news agent.
*
* @author Valentijn Manshande <v.manshande88@gmail.com>
*/

class BaseNewsArticleRetriever implements RetrieveNewsArticlesInterface
{
    
    public function __construct()
    {

    }

    protected function retrieveSingleArticle()
    {

    }

    protected function retrieveMultipleArticles()
    {
        
    }
}