<?php
/**
 * This file is part of the World Of Shinobi (Minegame).
 *
 * Copyright (c) 2017. Vincent Glize <vincent.glize@live.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace GameBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TownRessource
 *
 * @ORM\Table(name="town_ressource")
 * @ORM\Entity(repositoryClass="GameBundle\Repository\TownRessourceRepository")
 */
class TownRessource
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var float
     *
     * @ORM\Column(name="nb", type="float")
     */
    private $nb;

    /**
     * @var int
     *
     * @ORM\Column(name="add", type="integer")
     */
    private $add;

    /**
     * @var int
     *
     * @ORM\Column(name="stock", type="integer")
     */
    private $stock;

    /**
     * @ORM\ManyToOne(targetEntity="Town", inversedBy="ressources")
     * @ORM\JoinColumn(name="town_id", referencedColumnName="id")
     */
    private $town;

    /**
     * @ORM\ManyToOne(targetEntity="Ressource", inversedBy="ressources")
     * @ORM\JoinColumn(name="ressource_id", referencedColumnName="id")
     */
    private $ressource;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nb
     *
     * @param integer $nb
     *
     * @return TownRessource
     */
    public function setNb($nb)
    {
        $this->nb = $nb;

        return $this;
    }

    /**
     * Get nb
     *
     * @return int
     */
    public function getNb()
    {
        return $this->nb;
    }

    public function addNb($nb)
    {
        $this->nb += $nb;

        return $this;
    }

    public function removeNb($nb)
    {
        $this->nb -= $nb;

        return $this;
    }

    /**
     * Set add
     *
     * @param integer $add
     *
     * @return TownRessource
     */
    public function setAdd($add)
    {
        $this->add = $add;

        return $this;
    }

    /**
     * Get add
     *
     * @return int
     */
    public function getAdd()
    {
        return $this->add;
    }

    public function addAdd($add) {
        $this->add += $add;
    }

    /**
     * Set town
     *
     * @param \GameBundle\Entity\Town $town
     *
     * @return TownRessource
     */
    public function setTown(\GameBundle\Entity\Town $town = null)
    {
        $this->town = $town;

        return $this;
    }

    /**
     * Get town
     *
     * @return \GameBundle\Entity\Town
     */
    public function getTown()
    {
        return $this->town;
    }

    /**
     * Set ressource
     *
     * @param \GameBundle\Entity\Ressource $ressource
     *
     * @return TownRessource
     */
    public function setRessource(\GameBundle\Entity\Ressource $ressource = null)
    {
        $this->ressource = $ressource;

        return $this;
    }

    /**
     * Get ressource
     *
     * @return \GameBundle\Entity\Ressource
     */
    public function getRessource()
    {
        return $this->ressource;
    }

    /**
     * Set stock
     *
     * @param integer $stock
     *
     * @return TownRessource
     */
    public function setStock($stock)
    {
        $this->stock = $stock;

        return $this;
    }

    /**
     * Get stock
     *
     * @return integer
     */
    public function getStock()
    {
        return $this->stock;
    }
}
