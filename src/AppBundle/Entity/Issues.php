<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Issues
 *
 * @ORM\Table(name="issues")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\IssuesRepository")
 */
class Issues
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
     * @ORM\Column(name="issue", type="string", length=255, unique=true)
     */
    private $issue;

    /**
     * @var array
     *
     * @ORM\Column(name="answers", type="array")
     */
    private $answers;


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
     * Set issue
     *
     * @param string $issue
     *
     * @return Issues
     */
    public function setIssue($issue)
    {
        $this->issue = $issue;

        return $this;
    }

    /**
     * Get issue
     *
     * @return string
     */
    public function getIssue()
    {
        return $this->issue;
    }

    /**
     * Set answers
     *
     * @param array $answers
     *
     * @return Issues
     */
    public function setAnswers($answers)
    {
        $this->answers = $answers;

        return $this;
    }

    /**
     * Get answers
     *
     * @return array
     */
    public function getAnswers()
    {
        return $this->answers;
    }
}

