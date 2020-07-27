<?php

namespace App\NewsRetrievalBundle\Core;

class NewsAgentUrlGenerator
{
    const NEWS_AGENTS = [
        'volkskrant' => 'https://www.volkskrant.nl',
        'nrc' => 'https://www.nrc.nl',
        'nu.nl' => 'https://www.nu.nl',
        'nos' => 'https://www.nos.nl',
    ];

    public function generateUrl(string $newsAgent) : string
    {
        $newsAgent = strtolower($newsAgent);

        return $this::NEWS_AGENTS[$newsAgent];
    }
}