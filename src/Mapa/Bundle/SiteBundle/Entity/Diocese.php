<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Mapa\Bundle\SiteBundle\Entity;

/**
 * Description of Diocese
 *
 * @author ajunior
 */

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Mapa\SiteBundle\Entity\Repository\DioceseRepository")
 * @ORM\Table(name="diocese")
 * @ORM\HasLifecycleCallbacks
 */
class Diocese {
    
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
     * @ORM\ManyToOne(targetEntity="Arquidiocese")
     * @ORM\JoinColumn(name="arquidiocese_id", referencedColumnName="id")
     */
    private $arquidiocese;
    
    
    private $cidades;
    
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
     * @return Diocese
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
     * Set arquidiocese
     *
     * @param \Mapa\Bundle\SiteBundle\Entity\Arquidiocese $arquidiocese
     * @return Diocese
     */
    public function setArquidiocese(\Mapa\Bundle\SiteBundle\Entity\Arquidiocese $arquidiocese = null)
    {
        $this->arquidiocese = $arquidiocese;
    
        return $this;
    }

    /**
     * Get arquidiocese
     *
     * @return \Mapa\Bundle\SiteBundle\Entity\Arquidiocese 
     */
    public function getArquidiocese()
    {
        return $this->arquidiocese;
    }

    /**
     * Set cidadeSede
     *
     * @param \Mapa\Bundle\SiteBundle\Entity\Localidade $cidadeSede
     * @return Diocese
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