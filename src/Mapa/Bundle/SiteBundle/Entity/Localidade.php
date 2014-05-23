<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Mapa\Bundle\SiteBundle\Entity;

/**
 * Description of Cidade
 *
 * @author ajunior
 */

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Mapa\SiteBundle\Entity\Repository\LocalidadeRepository")
 * @ORM\Table(name="localidade")
 * @ORM\HasLifecycleCallbacks
 */
class Localidade {
    
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
     * @ORM\ManyToOne(targetEntity="Localidade", inversedBy="localidades")
     * @ORM\JoinColumn(name="cidade_id", referencedColumnName="id")
     */
    private $cidade;
    

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
     * @return Localidade
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
     * Set cidade
     *
     * @param \Mapa\Bundle\SiteBundle\Entity\Cidade $cidade
     * @return Localidade
     */
    public function setCidade(\Mapa\Bundle\SiteBundle\Entity\Cidade $cidade = null)
    {
        $this->cidade = $cidade;
    
        return $this;
    }

    /**
     * Get cidade
     *
     * @return \Mapa\Bundle\SiteBundle\Entity\Cidade 
     */
    public function getCidade()
    {
        return $this->cidade;
    }
}