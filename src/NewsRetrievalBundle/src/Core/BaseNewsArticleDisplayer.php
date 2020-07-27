<?php

namespace App\NewsRetrievalBundle\Core;

use App\NewsRetrievalBundle\Core\Interfaces\DisplayNewsArticlesInterface;

/**
* Predefined methods for displaying a single news article from a specified news agent or 
* retrieve a multiple number of news articles from a specified news agent.
*
* @author Valentijn Manshande <v.manshande88@gmail.com>
*/

class BaseNewsArticleDisplayer implements DisplayNewsArticlesInterface
{
    private BaseNewsArticleRetriever $articleRetriever;

    private BaseNewsAgentConfiguration $newsAgentConfig;

    public function __construct(BaseNewsArticleRetriever $articleRetriever, BaseNewsAgentConfiguration $config)
    {
        $this->articleRetriever = $articleRetriever;
        $this->newsAgentConfig = $config;
    }

    public function displaySingleArticle()
    {
        // TO DO: call template for single article display
    }

    public function displayMultipleArticles()
    {
        // TO DO: call and loop over template for multiple articles display;
    }

    public function display()
    {
        // retrieve parameters set by user in form
        $displayParameters = $this->newsAgentConfig->returnSetParameters();

        $articles = $this->articleRetriever(
            $displayParameters['url'],
            $displayParameters['amount_of_articles'],
            $displayParameters['max_article_amount']
        );
        
        if (count($articles) > 1) {    

            return $this->displayMultipleArticles(
                $displayParameters['news_agent'],
                $articles,
                $displayParameters['template'],
                $displayParameters['amount_of_articles'],
                $displayParameters['max_article_amount'],
            );
        } elseif (count($articles) === 1) {

            return $this->displaySingleArticle(
                $displayParameters['news_agent'],
                $articles,
                $displayParameters['template'],
                $displayParameters['amount_of_articles'],
            );
        } 
        else return $this->displaySingleArticle(
            $displayParameters['news_agent'],
            [],
            $displayParameters['template'],
        );
    }
}