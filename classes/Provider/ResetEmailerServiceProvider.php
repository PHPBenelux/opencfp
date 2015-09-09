<?php

namespace OpenCFP\Provider;

use OpenCFP\Domain\Services\ResetEmailer;
use Silex\Application;
use Silex\ServiceProviderInterface;

class ResetEmailerServiceProvider implements ServiceProviderInterface
{
    /**
     * {@inheritdoc}
     */
    public function register(Application $app)
    {
        $app['reset_emailer'] = $app->share(function ($app) {
            return new ResetEmailer(
                $app['mailer'],
                $app['twig']->loadTemplate('emails/reset_password.twig'),
                $app->config('application.email'),
                $app->config('application.title')
            );
        });
    }

    /**
     * {@inheritdoc}
     */
    public function boot(Application $app)
    {
    }
}
