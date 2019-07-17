<?php
/**
 * This file is part of Berlioz framework.
 *
 * @license   https://opensource.org/licenses/MIT MIT License
 * @copyright 2019 Ronan GIRON
 * @author    Ronan GIRON <https://github.com/ElGigi>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code, to the root.
 */

namespace Berlioz\Form\Type;

/**
 * Class DateTime.
 *
 * @package Berlioz\Form\Type
 */
class DateTime extends Date
{
    /**
     * @inheritdoc
     */
    public function getType(): string
    {
        return 'datetime-local';
    }
}