<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Security\Http\Authenticator;

use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Http\Authenticator\Token\PostAuthenticationToken;

/**
 * An optional base class that creates the necessary tokens for you.
 *
 * @author Ryan Weaver <ryan@symfonycasts.com>
 *
 * @experimental in 5.1
 */
abstract class AbstractAuthenticator implements AuthenticatorInterface
{
    /**
     * Shortcut to create a PostAuthenticationToken for you, if you don't really
     * care about which authenticated token you're using.
     *
     * @return PostAuthenticationToken
     */
    public function createAuthenticatedToken(UserInterface $user, string $providerKey): TokenInterface
    {
        return new PostAuthenticationToken($user, $providerKey, $user->getRoles());
    }
}
