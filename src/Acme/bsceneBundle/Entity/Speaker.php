<?php

/* 
 * Speaker.php
 * The entity for the Speaker object
 * Revision History:
 *      16.03.2015: created, Mahmoud Jallala
 */
//src/bsceneBundle/Entity/Speaker.php

namespace Acme\bsceneBundle\Entity;



use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Speaker")
 */
class Speaker
{
     /**
     * @ORM\Column(type="integer", length=5, unique=true)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $name;
    
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $title;
    
    
    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    protected $biography;
}
