<?php

/* 
 * Image.php
 * The entity for the Image object
 * Revision History:
 *      16.03.2015: created, Mahmoud Jallala
 */
//src/bsceneBundle/Entity/Image.php

namespace Acme\bsceneBundle\Entity;



use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Image")
 */
class Image
{
     /**
     * @ORM\Column(type="integer", length=5,  unique=true)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $URL;
    
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $Name;
}
