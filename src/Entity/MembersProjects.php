<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MembersProjects
 *
 * @ORM\Table(name="members_projects", indexes={@ORM\Index(name="members_projects_projectid", columns={"project_id"}), @ORM\Index(name="members_projects_userid", columns={"user_id"})})
 * @ORM\Entity
 */
class MembersProjects
{
    /**
     * @var int
     *
     * @ORM\Column(name="member_project_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $memberProjectId;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_owner", type="boolean", nullable=false)
     */
    private $isOwner;

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

    public function getMemberProjectId(): ?int
    {
        return $this->memberProjectId;
    }

    public function isIsOwner(): ?bool
    {
        return $this->isOwner;
    }

    public function setIsOwner(bool $isOwner): self
    {
        $this->isOwner = $isOwner;

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
