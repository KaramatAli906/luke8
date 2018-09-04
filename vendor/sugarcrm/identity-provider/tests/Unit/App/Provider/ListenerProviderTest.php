<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

namespace Sugarcrm\IdentityProvider\Tests\Unit\App\Provider;

use Sugarcrm\IdentityProvider\App\Application;
use Sugarcrm\IdentityProvider\App\Listener\Success\UpdateUserLastLoginListener;
use Sugarcrm\IdentityProvider\App\Listener\Success\UserPasswordListener;
use Sugarcrm\IdentityProvider\App\Provider\ListenerProvider;
use Sugarcrm\IdentityProvider\App\Subscriber\OnAuthLockoutSubscriber;

use Psr\Log\LoggerInterface;

use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Security\Core\AuthenticationEvents;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Doctrine\DBAL\Connection;

/**
 * @coversDefaultClass Sugarcrm\IdentityProvider\App\Provider\ListenerProvider
 */
class ListenerProviderTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers ::register
     */
    public function testRegister()
    {
        $application = $this->createMock(Application::class);
        $application->expects($this->once())
            ->method('extend')
            ->with($this->equalTo('dispatcher'), $this->anything());

        $listenerProvider = new ListenerProvider();
        $listenerProvider->register($application);
    }
}
