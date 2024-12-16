<?php

namespace App;

use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\HttpKernel\Kernel as BaseKernel;
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

class Kernel extends BaseKernel
{
    use MicroKernelTrait;

    // AF: xml and php routing must be configured as below
    protected function configureRoutes(RoutingConfigurator $routes): void
    {
        $extensions = '{php,yaml,xml}';

        $routes->import('../config/{routes}' . $this->environment . "*.$extensions");
        $routes->import("../config/{routes}/*.$extensions");
        $routes->import("../config/{routes}.$extensions");
    }
}
