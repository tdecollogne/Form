<?php
/**
 * This file is part of Berlioz framework.
 *
 * @license   https://opensource.org/licenses/MIT MIT License
 * @copyright 2017 Ronan GIRON
 * @author    Ronan GIRON <https://github.com/ElGigi>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code, to the root.
 */

declare(strict_types=1);

namespace Berlioz\Form\Validator;

use Berlioz\Form\Validator\Constraint\FormatConstraint;

/**
 * Class NumberFormatValidator.
 *
 * @package Berlioz\Form\Validator
 */
class NumberFormatValidator extends FormatValidator
{
    const FORMAT = '/^-?[0-9]+(\.[0-9]+)?$/';

    /**
     * EmailFormatValidator constructor.
     *
     * @param string $constraint
     *
     * @throws \Berlioz\Form\Exception\ValidatorException
     */
    public function __construct(string $constraint = FormatConstraint::class)
    {
        parent::__construct(static::FORMAT, $constraint);
    }
}