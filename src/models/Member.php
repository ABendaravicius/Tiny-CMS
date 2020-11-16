<?php
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="members")
 */
class Member
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    private $first_name;

    /**
     * @ORM\Column(type="string")
     */
    private $last_name;

    /**
     * @ORM\Column(type="string")
     */
    private $pic_id;
}