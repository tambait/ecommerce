<?php

declare(strict_types=1);

/*
 * This file is part of the Sonata Project package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\CustomerBundle\Menu;

use Knp\Menu\ItemInterface;
use Symfony\Contracts\EventDispatcher\Event;

/**
 * @author Hugo Briand <briand@ekino.com>
 */
final class ProfileMenuEvent extends Event
{
    /**
     * @var ItemInterface
     */
    private $menu;

    public function __construct(ItemInterface $menu)
    {
        $this->menu = $menu;
    }

    public function getMenu(): ItemInterface
    {
        return $this->menu;
    }
}
