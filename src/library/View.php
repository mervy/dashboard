<?php

namespace Mervy\Kurama\library;

use League\Plates\Engine;

class View
{

    public static function render(string $page, array $vars)
    {
        // Create new Plates instance
        $templates = new Engine(__DIR__.'/../views');
        $templates->addFolder('partials', __DIR__.'/../views/partials');
        $templates->addFolder('pages', __DIR__.'/../views/pages');

        // Render a template
        echo $templates->render("pages::".$page, $vars);
    }
}
