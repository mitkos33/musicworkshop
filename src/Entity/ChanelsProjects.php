<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ChanelsProjects
 *
 * @ORM\Table(name="chanels_projects", indexes={@ORM\Index(name="Chanel_projects_projectId", columns={"project_id"}), @ORM\Index(name="chanel_projects_userid", columns={"user_id"})})
 * @ORM\Entity
 */
class ChanelsProjects
{
    /**
     * @var int
     *
     * @ORM\Column(name="chanel_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $chanelId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="text", length=65535, nullable=false)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="description", type="integer", nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="string", length=255, nullable=false)
     */
    private $link;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createDate", type="datetime", nullable=false)
     */
    private $createdate;

    /**
     * @var \User
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

    /**
     * @var \Projects
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Projects")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="project_id", referencedColumnName="project_id")
     * })
     */
    private $project;

    public function getChanelId(): ?int
    {
        return $this->chanelId;
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

    public function getDescription(): ?int
    {
        return $this->description;
    }

    public function setDescription(int $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function setLink(string $link): self
    {
        $this->link = $link;

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

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getProject(): ?Projects
    {
        return $this->project;
    }

    public function setProject(?Projects $project): self
    {
        $this->project = $project;

        return $this;
    }


}
