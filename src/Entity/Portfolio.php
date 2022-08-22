<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity("src\Entity\Portfolio")
 * @ORM\Table(name="portfolio")
 */
class Portfolio
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer", length=11)
     */
    private int $id;

    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private string $title;

    /**
     * @var string|null
     * @ORM\Column(type="string", length=255)
     */
    private ?string $kicker;

    /**
     * @var string|null
     * @ORM\Column(type="string", length=255)
     */
    private ?string $content;

    /**
     * @var DateTimeInterface
     * @ORM\Column(type="datetime", nullable=false)
     */
    private DateTimeInterface $createdAt;

    /**
     * @var string|null
     * @ORM\Column(type="string", length=255)
     */
    private ?string $client;

    /**
     * @var string|null
     * @ORM\Column(type="string", length=255)
     */
    private ?string $link;

    /**
     * @var string|null
     * @ORM\Column(type="string", length=255)
     */
    private ?string $codacy;

    /**
     * @var array
     * @ORM\Column(type="simple_array")
     */
    private array $categories;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle($title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getKicker(): ?string
    {
        return $this->kicker;
    }

    public function setKicker($kicker): self
    {
        $this->kicker = $kicker;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent($content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getCreatedAt(): DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt($createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getClient(): ?string
    {
        return $this->client;
    }

    public function setClient($client): self
    {
        $this->client = $client;

        return $this;
    }

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function setLink($link): self
    {
        $this->link = $link;

        return $this;
    }

    public function getCodacy(): ?string
    {
        return $this->codacy;
    }

    public function setCodacy($codacy): self
    {
        $this->codacy = $codacy;

        return $this;
    }

    public function getCategories(): array
    {
        return $this->categories;
    }

    public function setCategories($categories): self
    {
        $this->categories = $categories;

        return $this;
    }
}