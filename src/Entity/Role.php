<?php

namespace App\Entity;

use App\Repository\RoleRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RoleRepository::class)
 */
class Role
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nama_role;

    /**
     * @ORM\OneToOne(targetEntity=User::class, mappedBy="role", cascade={"persist", "remove"})
     */
    private $user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNamaRole(): ?string
    {
        return $this->nama_role;
    }

    public function setNamaRole(string $nama_role): self
    {
        $this->nama_role = $nama_role;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    // public function setUser(?User $user): self
    // {
    //     // unset the owning side of the relation if necessary
    //     if ($user === null && $this->user !== null) {
    //         $this->user->setRoleId(null);
    //     }

    //     // set the owning side of the relation if necessary
    //     if ($user !== null && $user->getRoleId() !== $this) {
    //         $user->setRoleId($this);
    //     }

    //     $this->user = $user;

    //     return $this;
    // }
}
