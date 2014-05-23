<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Mapa\Bundle\SiteBundle\Entity;

/**
 * Description of HorarioMissa
 *
 * @author ajunior
 */

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Mapa\SiteBundle\Entity\Repository\HorarioMissaRepository")
 * @ORM\Table(name="horario_missa")
 * @ORM\HasLifecycleCallbacks
 */
class HorarioMissa {
    
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\Column(type="string")
     */
    private $descricao;
    
    /**
     * @ORM\ManyToOne(targetEntity="Igreja")
     * @ORM\JoinColumn(name="igreja_id", referencedColumnName="id")
     */
    private $igreja;
    
    /**
     * @ORM\ManyToOne(targetEntity="Horario")
     * @ORM\JoinColumn(name="horario_id", referencedColumnName="id")
     */
    private $horario;
    

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
     * Set descricao
     *
     * @param string $descricao
     * @return HorarioMissa
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    
        return $this;
    }

    /**
     * Get descricao
     *
     * @return string 
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set igreja
     *
     * @param \Mapa\Bundle\SiteBundle\Entity\Igreja $igreja
     * @return HorarioMissa
     */
    public function setIgreja(\Mapa\Bundle\SiteBundle\Entity\Igreja $igreja = null)
    {
        $this->igreja = $igreja;
    
        return $this;
    }

    /**
     * Get igreja
     *
     * @return \Mapa\Bundle\SiteBundle\Entity\Igreja 
     */
    public function getIgreja()
    {
        return $this->igreja;
    }

    /**
     * Set horario
     *
     * @param \Mapa\Bundle\SiteBundle\Entity\Horario $horario
     * @return HorarioMissa
     */
    public function setHorario(\Mapa\Bundle\SiteBundle\Entity\Horario $horario = null)
    {
        $this->horario = $horario;
    
        return $this;
    }

    /**
     * Get horario
     *
     * @return \Mapa\Bundle\SiteBundle\Entity\Horario 
     */
    public function getHorario()
    {
        return $this->horario;
    }
}