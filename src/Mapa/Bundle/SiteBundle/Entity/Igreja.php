<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Mapa\Bundle\SiteBundle\Entity;

/**
 * Description of Igreja
 *
 * @author ajunior
 */

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Mapa\SiteBundle\Entity\Repository\IgrejaRepository")
 * @ORM\Table(name="igreja")
 * @ORM\HasLifecycleCallbacks
 */
class Igreja {
    
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
     * @ORM\ManyToOne(targetEntity="Padroeiro", inversedBy="igrejas")
     * @ORM\JoinColumn(name="padroeiro_id", referencedColumnName="id")
     */
    private $padroeiro;
    
    /**
     * @ORM\ManyToOne(targetEntity="Localidade")
     * @ORM\JoinColumn(name="cidade_id", referencedColumnName="id")
     */
    private $localidade;
    
    /**
     * @ORM\ManyToOne(targetEntity="Diocese")
     * @ORM\JoinColumn(name="diocese_id", referencedColumnName="id")
     */
    private $diocese;
    
    /**
     * @ORM\Column(type="string")
     */
    private $latitude;
    
    /**
     * @ORM\Column(type="string")
     */
    private $longitude;
    
    /**
     * @ORM\Column(type="integer")
     */
    private $situacao;
    

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
     * @return Igreja
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
     * Set latitude
     *
     * @param string $latitude
     * @return Igreja
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    
        return $this;
    }

    /**
     * Get latitude
     *
     * @return string 
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param string $longitude
     * @return Igreja
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    
        return $this;
    }

    /**
     * Get longitude
     *
     * @return string 
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set situacao
     *
     * @param integer $situacao
     * @return Igreja
     */
    public function setSituacao($situacao)
    {
        $this->situacao = $situacao;
    
        return $this;
    }

    /**
     * Get situacao
     *
     * @return integer 
     */
    public function getSituacao()
    {
        return $this->situacao;
    }

    /**
     * Set padroeiro
     *
     * @param \Mapa\Bundle\SiteBundle\Entity\Padroeiro $padroeiro
     * @return Igreja
     */
    public function setPadroeiro(\Mapa\Bundle\SiteBundle\Entity\Padroeiro $padroeiro = null)
    {
        $this->padroeiro = $padroeiro;
    
        return $this;
    }

    /**
     * Get padroeiro
     *
     * @return \Mapa\Bundle\SiteBundle\Entity\Padroeiro 
     */
    public function getPadroeiro()
    {
        return $this->padroeiro;
    }

    /**
     * Set localidade
     *
     * @param \Mapa\Bundle\SiteBundle\Entity\Localidade $localidade
     * @return Igreja
     */
    public function setLocalidade(\Mapa\Bundle\SiteBundle\Entity\Localidade $localidade = null)
    {
        $this->localidade = $localidade;
    
        return $this;
    }

    /**
     * Get localidade
     *
     * @return \Mapa\Bundle\SiteBundle\Entity\Localidade 
     */
    public function getLocalidade()
    {
        return $this->localidade;
    }

    /**
     * Set diocese
     *
     * @param \Mapa\Bundle\SiteBundle\Entity\Diocese $diocese
     * @return Igreja
     */
    public function setDiocese(\Mapa\Bundle\SiteBundle\Entity\Diocese $diocese = null)
    {
        $this->diocese = $diocese;
    
        return $this;
    }

    /**
     * Get diocese
     *
     * @return \Mapa\Bundle\SiteBundle\Entity\Diocese 
     */
    public function getDiocese()
    {
        return $this->diocese;
    }
}