<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PostRepository")
 */
class Post
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $_id;

    /**
     * @ORM\Column(type="string")
     * @Assert\Length(min=200)
     */
    private $_title;

    /**
     * @ORM\Column(type="text")
     */
    private $_content;

    /**
         * @ORM\Column(type="datetime")
     */
    private $_date;

    /**
     * @ORM\Column(type="boolean")
     */
    private $_published;

    public function getId(): ?int
    {
        return $this->_id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->_title;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->_content;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->_date;
    }

    /**
     * @return mixed
     */
    public function getPublished()
    {
        return $this->_published;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->_id = $id;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->_title = $title;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content): void
    {
        $this->_content = $content;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date): void
    {
        $this->_date = $date;
    }

    /**
     * @param mixed $published
     */
    public function setPublished($published): void
    {
        $this->_published = $published;
    }

}
