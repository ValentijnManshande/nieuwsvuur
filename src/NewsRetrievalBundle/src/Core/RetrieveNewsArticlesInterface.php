<?php

namespace App\NewsRetrievalBundle\Core\Interfaces;

/**
* Methods to retrieve either a single news article from a specified news agent or 
* retrieve a multiple number of news articles from specified news agent.
*
* @author Valentijn Manshande <v.manshande88@gmail.com>
*/

interface RetrieveNewsArticlesInterface
{
    function retrieveSingleArticle(string $mediaAgent, string $url);

    function retrieveMultipleArticles(string $mediaAgent, array $urls);
}