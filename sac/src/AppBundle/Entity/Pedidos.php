<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pedidos
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\PedidosRepository")
 */
class Pedidos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name_prod", type="string", length=255)
     */
    private $nameProd;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nameProd
     *
     * @param string $nameProd
     * @return Pedidos
     */
    public function setNameProd($nameProd)
    {
        $this->nameProd = $nameProd;

        return $this;
    }

    /**
     * Get nameProd
     *
     * @return string 
     */
    public function getNameProd()
    {
        return $this->nameProd;
    }
}
