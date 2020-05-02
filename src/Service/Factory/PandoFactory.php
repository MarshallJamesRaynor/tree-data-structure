<?php

declare(strict_types=1);

/**
 *
 * Pando NOTICE OF MIT LICENSE
 *
 * @copyright Paolo Combi (https://combi.li)
 * @link    https://github.com/colapiombo/pando
 * @author  Paolo Combi <paolo@combi.li>
 * @license https://github.com/colapiombo/pando/blob/master/LICENSE (MIT License)
 *
 *
 */

namespace Pando\Service\Factory;

use Pando\Api\PandoInterface;
use Pando\Api\Service\Factory\FactoryInterface;
use Pando\Pando;

class PandoFactory implements FactoryInterface
{
    /**
     * @return PandoInterface     */
    public static function create(): PandoInterface
    {
        return new Pando();
    }
}
