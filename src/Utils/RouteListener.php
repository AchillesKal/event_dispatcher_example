<?php

namespace Drupal\eventdispatcherexample\Utils;

use Drupal\Core\Routing\RouteSubscriberBase;
use Symfony\Component\Routing\RouteCollection;

class RouteListener extends RouteSubscriberBase
{
    protected function alterRoutes(RouteCollection $collection)
    {
        if ($route = $collection->get('contact.site_page')) {

            var_dump($route);die;
            $route->setPath('/contactform');
        }
    }

}