<?php declare(strict_types=1);

namespace Bartlett\CompatInfo\Presentation\Console;

use Symfony\Component\Console\CommandLoader\CommandLoaderInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;

/**
 * Console Application contract.
 *
 * @since Release 6.0.0
 */
interface ApplicationInterface extends ContainerAwareInterface
{
    public const NAME = 'phpCompatInfo';
    public const VERSION = '6.1.0-dev';

    /**
     * @param CommandLoaderInterface $commandLoader
     * @return void
     */
    public function setCommandLoader(CommandLoaderInterface $commandLoader);
}
