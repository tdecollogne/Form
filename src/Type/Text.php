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

declare(strict_types=1);

namespace Berlioz\Form\Type;

use Berlioz\Form\Validator\LengthValidator;

/**
 * Class Text.
 *
 * @package Berlioz\Form\Type
 */
class Text extends AbstractType
{
    /**
     * @inheritdoc
     */
    public function getType(): string
    {
        return 'text';
    }

    /**
     * @inheritdoc
     * @throws \Berlioz\Form\Exception\ValidatorException
     */
    public function build()
    {
        parent::build();

        // Length validator
        if ($this->hasValidator(LengthValidator::class) === false) {
            $this->addValidator(new LengthValidator);
        }
    }
}