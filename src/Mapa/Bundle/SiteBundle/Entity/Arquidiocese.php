<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Mapa\Bundle\SiteBundle\Entity;

/**
 * Description of Arquidiocese
 *
 * @author ajunior
 */

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Mapa\SiteBundle\Entity\Repository\ArquidioceseRepository")
 * @ORM\Table(name="arquidiocese")
 * @ORM\HasLifecycleCallbacks
 */
class Arquidiocese {
    
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\Column(type="string")
     */
    private $nome;
    
    /**
     * @ORM\ManyToOne(targetEntity="Localidade")
     * @ORM\JoinColumn(name="cidade_id", referencedColumnName="id")
     */
    private $cidadeSede;
    

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
     * Set nome
     *
     * @param string $nome
     * @return Arquidiocese
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    
        return $this;
    }

    /**
     * Get nome
     *
     * @return string 
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set cidadeSede
     *
     * @param \Mapa\Bundle\SiteBundle\Entity\Localidade $cidadeSede
     * @return Arquidiocese
     */
    public function setCidadeSede(\Mapa\Bundle\SiteBundle\Entity\Localidade $cidadeSede = null)
    {
        $this->cidadeSede = $cidadeSede;
    
        return $this;
    }

    /**
     * Get cidadeSede
     *
     * @return \Mapa\Bundle\SiteBundle\Entity\Localidade 
     */
    public function getCidadeSede()
    {
        return $this->cidadeSede;
    }
}