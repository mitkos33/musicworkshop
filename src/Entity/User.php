<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 * @UniqueEntity(fields={"email"}, message="There is already an account with this email")
 */
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=180, nullable=false)
     */
    private $email;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];


    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @var int
     *
     * @ORM\Column(name="is_verified", type="integer", nullable=false)
     */
    private $isVerified;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=false)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="music_role", type="text", length=65535, nullable=false)
     */
    private $musicRole;

    /**
     * @var string
     *
     * @ORM\Column(name="webpage", type="text", length=65535, nullable=false)
     */
    private $webpage;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="youtube", type="text", length=65535, nullable=false)
     */
    private $youtube;

    /**
     * @var string
     *
     * @ORM\Column(name="mywork1_youtube", type="string", length=255, nullable=false)
     */
    private $mywork1Youtube;

    /**
     * @var string
     *
     * @ORM\Column(name="mywork2_youtube", type="string", length=255, nullable=false)
     */
    private $mywork2Youtube;

    /**
     * @var string
     *
     * @ORM\Column(name="mywork3_youtube", type="string", length=255, nullable=false)
     */
    private $mywork3Youtube;

    /**
     * @var string
     *
     * @ORM\Column(name="mywork4_youtube", type="string", length=255, nullable=false)
     */
    private $mywork4Youtube;

    /**
     * @var string
     *
     * @ORM\Column(name="mywork5_youtube", type="string", length=255, nullable=false)
     */
    private $mywork5Youtube;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @deprecated since Symfony 5.3, use getUserIdentifier instead
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }


    public function getName(): string
    {
        return (string) $this->username;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Returning a salt is only needed, if you are not using a modern
     * hashing algorithm (e.g. bcrypt or sodium) in your security.yaml.
     *
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        return null;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getIsVerified(): ?int
    {
        return $this->isVerified;
    }

    public function setIsVerified(int $isVerified): self
    {
        $this->isVerified = $isVerified;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getMusicRole(): ?string
    {
        return $this->musicRole;
    }

    public function setMusicRole(string $musicRole): self
    {
        $this->musicRole = $musicRole;

        return $this;
    }

    public function getWebpage(): ?string
    {
        return $this->webpage;
    }

    public function setWebpage(string $webpage): self
    {
        $this->webpage = $webpage;

        return $this;
    }


    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getYoutube(): ?string
    {
        return $this->youtube;
    }

    public function setYoutube(string $youtube): self
    {
        $this->youtube = $youtube;

        return $this;
    }

    public function getMywork1Youtube(): ?string
    {
        return $this->mywork1Youtube;
    }

    public function setMywork1Youtube(string $mywork1Youtube): self
    {
        $this->mywork1Youtube = $mywork1Youtube;

        return $this;
    }

    public function getMywork2Youtube(): ?string
    {
        return $this->mywork2Youtube;
    }

    public function setMywork2Youtube(string $mywork2Youtube): self
    {
        $this->mywork2Youtube = $mywork2Youtube;

        return $this;
    }

    public function getMywork3Youtube(): ?string
    {
        return $this->mywork3Youtube;
    }

    public function setMywork3Youtube(string $mywork3Youtube): self
    {
        $this->mywork3Youtube = $mywork3Youtube;

        return $this;
    }

    public function getMywork4Youtube(): ?string
    {
        return $this->mywork4Youtube;
    }

    public function setMywork4Youtube(string $mywork4Youtube): self
    {
        $this->mywork4Youtube = $mywork4Youtube;

        return $this;
    }

    public function getMywork5Youtube(): ?string
    {
        return $this->mywork5Youtube;
    }

    public function setMywork5Youtube(string $mywork5Youtube): self
    {
        $this->mywork5Youtube = $mywork5Youtube;

        return $this;
    }


}
