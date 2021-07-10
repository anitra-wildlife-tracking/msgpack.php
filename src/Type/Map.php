<?php

/**
 * This file is part of the rybakit/msgpack.php package.
 *
 * (c) Eugene Leonovich <gen.work@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace MessagePack\Type;

use MessagePack\Packer;
use MessagePack\TypeTransformer\CanBePacked;

final class Map implements CanBePacked
{
    public $map;

    public function __construct(array $map)
    {
        $this->map = $map;
    }

    public function pack(Packer $packer) : string
    {
        return $packer->packMap($this->map);
    }
}
