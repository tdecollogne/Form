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

namespace Berlioz\Form\Hydrator;

use Berlioz\Form\Element\ElementInterface;
use Berlioz\Form\Group;

/**
 * Class GroupHydrator.
 *
 * @package Berlioz\Form\Hydrator
 */
class GroupHydrator extends AbstractHydrator
{
    /** @var \Berlioz\Form\Group Group */
    private $group;

    /**
     * GroupHydrator constructor.
     *
     * @param \Berlioz\Form\Group $group
     */
    public function __construct(Group $group)
    {
        $this->group = $group;
    }

    /**
     * @inheritdoc
     */
    public function getElement(): ElementInterface
    {
        return $this->group;
    }

    /**
     * @inheritdoc
     */
    public function hydrate(&$mapped)
    {
        if ($this->group->getOption('mapped', false, true)) {
            $subMapped = $this->getSubMapped($this->getElement(), $mapped);

            /** @var \Berlioz\Form\Element\ElementInterface $element */
            foreach ($this->group as $element) {
                $hydrator = $this->locateHydrator($element);
                $hydrator->hydrate($subMapped);
            }
        }
    }
}