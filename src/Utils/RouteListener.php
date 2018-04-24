<?php

namespace Drupal\eventdispatcherexample\Utils;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\KernelEvents;

class RouteListener implements EventSubscriberInterface
{
    public function onKernelRequest($event)
    {
        var_dump($event);die;
    }
    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::REQUEST => 'onKernelRequest',
        ];
    }
}