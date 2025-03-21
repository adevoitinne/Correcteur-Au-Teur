<?php

namespace App\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

#[ORM\Entity()]
class Request{

    #[ORM\Id]
    #[ORM\GeneratedValue()]
    #[ORM\Column()]
    private ?int $id = null;
    
    #[ORM\Column(options:["default"=> "CURRENT_TIMESTAMP"])]
    private ?\DateTime $created_at = null;

    #[ORM\Column()]
    private ?string $type = null;

    #[ORM\Column(nullable:true)]
    private ?\DateTime $deadline = null;

    #[ORM\Column()]
    private ?string $title = null;

    #[ORM\Column(type: 'text')]
    private ?string $description = null;

    /**
     * @var Collection<int, Genre>
     */
    #[ORM\ManyToMany(targetEntity: Genre::class, inversedBy: 'requests')]
    private Collection $genres;

    #[ORM\ManyToOne(inversedBy: 'requests')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Member $member = null;

    public function __construct()
    {
        $this->genres = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCreatedAt(): ?\DateTime
    {
        return $this->created_at;
    }
    
    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type)
    {
        $this->type = $type;

        return $this;
    }

    public function getDeadline(): ?\DateTime
    {
        return $this->deadline;
    }

    public function setDeadline(\DateTime $deadline)
    {
        $this->deadline = $deadline;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title)
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return Collection<int, Genre>
     */
    public function getGenres(): Collection
    {
        return $this->genres;
    }

    public function addGenre(Genre $genre): static
    {
        if (!$this->genres->contains($genre)) {
            $this->genres->add($genre);
        }

        return $this;
    }

    public function removeGenre(Genre $genre): static
    {
        $this->genres->removeElement($genre);

        return $this;
    }

    public function getMember(): ?Member
    {
        return $this->member;
    }

    public function setMember(?Member $member): static
    {
        $this->member = $member;

        return $this;
    }
}