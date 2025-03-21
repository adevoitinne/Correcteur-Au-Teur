<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\MemberRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;


#[ORM\Entity(repositoryClass: MemberRepository::class)]
#[ORM\Table(name: '`member`')]
#[ORM\UniqueConstraint(name: 'UNIQ_IDENTIFIER_EMAIL', fields: ['email'])]
#[UniqueEntity(fields: ['email'], message: 'Il y a déjà un profil avec cet email')]
class Member implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column()]
    private ?string $email = null;

    /**
     * @var list<string> The user roles
     */
    #[ORM\Column]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    private ?string $password = null;

    #[ORM\Column]
    private ?bool $isVerified = false;

    #[ORM\Column(length:125)]
    private ?string $firstname = null;

    #[ORM\Column(length:125)]
    private ?string $lastname = null;

    #[ORM\Column(type: Types::DATE_IMMUTABLE , nullable:true )]
    private ?\DateTimeImmutable $birth_at = null;

    #[ORM\Column()]
    private ?string $contact_network = null;

    #[ORM\Column(nullable:true)]
    private ?string $phone = null;

    #[ORM\Column(nullable:true)]
    private ?bool $is_published = null;

    #[ORM\Column(nullable:true)]
    private ?bool $is_self_published = null;

    #[ORM\Column(nullable:true)]
    private ?string $artwork_type = null;

    #[ORM\Column()]
    private ?string $genres = null;

    /**
     * @var Collection<int, Interest>
     */
    #[ORM\ManyToMany(targetEntity: Interest::class, inversedBy: 'members')]
    private Collection $interests;

    /**
     * @var Collection<int, Request>
     */
    #[ORM\OneToMany(targetEntity: Request::class, mappedBy: 'member', orphanRemoval: true)]
    private Collection $requests;

    
    public function __construct()
    {
        $this->interests = new ArrayCollection();
        $this->requests = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
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
     * @see UserInterface
     * @return list<string>
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    /**
     * @param list<string> $roles
     */
    public function setRoles(array $roles): static
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials(): void
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function isVerified(): ?bool
    {
        return $this->isVerified;
    }

    public function setIsVerified(bool $isVerified): static
    {
        $this->isVerified = $isVerified;

       return $this;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getBirthAt(): ?\DateTimeImmutable
    {
        return $this->birth_at;
    }

    public function setBirthAt(\DateTimeImmutable $birth_at)
    {
        $this->birth_at = $birth_at;

        return $this;
    }

    public function getContactNetwork(): ?string
    {
        return $this->contact_network;
    }

    public function setContactNetwork(string $contact_network)
    {
        $this->contact_network = $contact_network;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(string $phone)
    {
        $this->phone = $phone;

        return $this;
    }

    public function getIsPublished(): ?bool
    {
        return $this->is_published;
    }

    public function setIsPublished(bool $is_published)
    {
        $this->is_published = $is_published;

        return $this;
    }

    public function getIsSelfPublished(): ?bool
    {
        return $this->is_self_published;
    }

    public function setIsSelfPublished(bool $is_self_published)
    {
        $this->is_self_published = $is_self_published;

        return $this;
    }

    public function getArtworkType(): ?string
    {
        return $this->artwork_type;
    }

    public function setArtworkType(string $artwork_type)
    {
        $this->artwork_type = $artwork_type;

        return $this;
    }

    public function getGenres(): ?string
    {
        return $this->genres;
    }

    public function setGenres(string $genres)
    {
        $this->genres = $genres;

        return $this;
    }

    /**
     * @return Collection<int, Interest>
     */
    public function getInterests(): Collection
    {
        return $this->interests;
    }

    public function addInterest(Interest $interest): static
    {
        if (!$this->interests->contains($interest)) {
            $this->interests->add($interest);
        }

        return $this;
    }

    public function removeInterest(Interest $interest): static
    {
        $this->interests->removeElement($interest);

        return $this;
    }

    /**
     * @return Collection<int, Request>
     */
    public function getRequests(): Collection
    {
        return $this->requests;
    }

    public function addRequest(Request $request): static
    {
        if (!$this->requests->contains($request)) {
            $this->requests->add($request);
            $request->setMember($this);
        }

        return $this;
    }

    public function removeRequest(Request $request): static
    {
        if ($this->requests->removeElement($request)) {
            // set the owning side to null (unless already changed)
            if ($request->getMember() === $this) {
                $request->setMember(null);
            }
        }

        return $this;
    }
    
}
