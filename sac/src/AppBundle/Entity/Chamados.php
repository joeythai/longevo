<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chamados
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\ChamadosRepository")
 */
class Chamados
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
     * @ORM\Column(name="numero_chamados", type="string", length=255)
     */
    private $numeroChamados;

    /**
     * @var string
     *
     * @ORM\Column(name="id_produto", type="string", length=255)
     */
    private $idProduto;

    /**
     * @var string
     *
     * @ORM\Column(name="id_cliente", type="string", length=255)
     */
    private $idCliente;


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
     * Set numeroChamados
     *
     * @param string $numeroChamados
     * @return Chamados
     */
    public function setNumeroChamados($numeroChamados)
    {
        $this->numeroChamados = $numeroChamados;

        return $this;
    }

    /**
     * Get numeroChamados
     *
     * @return string 
     */
    public function getNumeroChamados()
    {
        return $this->numeroChamados;
    }

    /**
     * Set idProduto
     *
     * @param string $idProduto
     * @return Chamados
     */
    public function setIdProduto($idProduto)
    {
        $this->idProduto = $idProduto;

        return $this;
    }

    /**
     * Get idProduto
     *
     * @return string 
     */
    public function getIdProduto()
    {
        return $this->idProduto;
    }

    /**
     * Set idCliente
     *
     * @param string $idCliente
     * @return Chamados
     */
    public function setIdCliente($idCliente)
    {
        $this->idCliente = $idCliente;

        return $this;
    }

    /**
     * Get idCliente
     *
     * @return string 
     */
    public function getIdCliente()
    {
        return $this->idCliente;
    }
}
