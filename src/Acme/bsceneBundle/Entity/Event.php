<?php

/* 
 * Event.php
 * The entity for the Event object
 * Revision History:
 *      16.03.2015: created, Mahmoud Jallala
 */
//src/bsceneBundle/Entity/Event.php

namespace Acme\bsceneBundle\Entity;



use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Event")
 */
class Event
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
    protected $title;
    
    
    /**
     * @ORM\Column(type="datetime")
     */
    protected $date;
    
    /**
     * @ORM\Column(type="datetime")
     */
    protected $time;
    
    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $endDate;
    
     /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $endTime;
    
    /**
     * @ORM\Column(type="string", length=1000, nullable=true)
     */
    protected $description;
    
    /**
     *
     * @ORM\Column(type="integer", length=10)
     */
    protected $capacity;
    
}
