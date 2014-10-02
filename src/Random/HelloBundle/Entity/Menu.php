<?php
/**
 * Created by PhpStorm.
 * User: jonlord
 * Date: 01/10/14
 * Time: 00:45
 */

namespace Random\HelloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Menu
 * @package Random\HelloBundle\Entity
 *
 * @ORM\Entity
 * @ORM\Table(name="menu")
 *
 */
class Menu {

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $title;

    /**
     * @ORM\Column(type="integer")
     */
    protected $padre_id;

    /**
     * @ORM\Column(type="integer")
     */
    protected $figlio_id;

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
     * Set title
     *
     * @param string $title
     * @return Menu
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set sub_id
     *
     * @param integer $subId
     * @return Menu
     */
    public function setSubId($subId)
    {
        $this->sub_id = $subId;

        return $this;
    }

    /**
     * Get sub_id
     *
     * @return integer 
     */
    public function getSubId()
    {
        return $this->sub_id;
    }
}
