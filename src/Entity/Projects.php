<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Projects
 *
 * @ORM\Table(name="projects")
 * @ORM\Entity
 */
class Projects
{
    /**
     * @var int
     *
     * @ORM\Column(name="project_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $projectId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="comments", type="text", length=65535, nullable=false)
     */
    private $comments;

    /**
     * @var bool
     *
     * @ORM\Column(name="isFinish", type="boolean", nullable=false)
     */
    private $isfinish;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createDate", type="datetime", nullable=false)
     */
    private $createdate;

    public function getProjectId(): ?int
    {
        return $this->projectId;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getComments(): ?string
    {
        return $this->comments;
    }

    public function setComments(string $comments): self
    {
        $this->comments = $comments;

        return $this;
    }

    public function isIsfinish(): ?bool
    {
        return $this->isfinish;
    }

    public function setIsfinish(bool $isfinish): self
    {
        $this->isfinish = $isfinish;

        return $this;
    }

    public function getCreatedate(): ?\DateTimeInterface
    {
        return $this->createdate;
    }

    public function setCreatedate(\DateTimeInterface $createdate): self
    {
        $this->createdate = $createdate;

        return $this;
    }


}
