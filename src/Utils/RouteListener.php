<?php

namespace Drupal\event_dispatcher_example\Utils;

use Drupal\Core\Routing\RouteSubscriberBase;
use Symfony\Component\Routing\RouteCollection;

class RouteListener extends RouteSubscriberBase
{
    protected function alterRoutes(RouteCollection $collection)
    {
        if ($route = $collection->get('contact.site_page')) {
            $route->setRequirement("_permission", "cool_permission");
            $route->setPath('/contactform');
        }
    }

}