<?php

namespace App\NewsRetrievalBundle\Core;

use App\NewsRetrievalBundle\Core\Interfaces\ProcessSpecificNewsAgentInterface;
use App\NewsRetrievalBundle\Core\NewsAgentTemplateGenerator;
use App\NewsRetrievalBundle\Core\NewsAgentUrlGenerator;

/**
* Predefined class containing some general use methods.
*
* @author Valentijn Manshande <v.manshande88@gmail.com>
*/

class BaseNewsAgentConfigurator implements ProcessSpecificNewsAgentInterface
{
    private $templator;

    private $urlGenerator;

    protected array $parameters = [
        'news_agent' => '',
        'url' => '',
        'template' => '',
        'amount_of_articles' => 0,
        'max_article_amount' => 0,
    ];

    public function __construct(NewsAgentTemplator $templator, NewsAgentUrlGenerator $urlGenerator)
    {
        $this->templator = $templator;
        $this->urlGenerator = $urlGenerator;
    }

    public function configureParameters(string $newsAgent, int $articleAmount = 1, int $max = 5) : self
    {
        $this->parameters['news_agent'] = $newsAgent;
        $this->parameters['url'] = $this->urlGenerator->generateUrl($newsAgent);
        $this->parameters['template'] = $this->templator->retrieveTemplateFor($newsAgent);
        $this->parameters['amount_of_articles'] = $articleAmount;
        $this->parameters['max_article_amount'] = $max;

        return $this;
    }

    public function returnSetParameters() : array
    {
        if (!empty($this->parameters)) {
            return $this->parameters;
        }      
    }
}