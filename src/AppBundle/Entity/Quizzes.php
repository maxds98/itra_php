<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Quizzes
 *
 * @ORM\Table(name="quizzes")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\QuizzesRepository")
 */
class Quizzes
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, unique=true)
     */
    private $name;

    /**
     * @var array
     *
     * @ORM\Column(name="issues", type="array")
     */
    private $issues;

    /**
     * @var bool
     *
     * @ORM\Column(name="status", type="boolean")
     */
    private $status;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Quizzes
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set issues
     *
     * @param array $issues
     *
     * @return Quizzes
     */
    public function setIssues($issues)
    {
        $this->issues = $issues;

        return $this;
    }

    /**
     * Get issues
     *
     * @return array
     */
    public function getIssues()
    {
        return $this->issues;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return Quizzes
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return bool
     */
    public function getStatus()
    {
        return $this->status;
    }
}

