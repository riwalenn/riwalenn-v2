<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity("src\Entity\Post")
 * @ORM\Table(name="post")
 */
class Post
{
    const POST_PENDING_STATUS               = 0; //en attente
    const POST_STATUS_VALIDATED             = 1; //article validé
    const POST_STATUS_ARCHIVED              = 2; //article archivé
    const POST_STATUS_DELETED               = 3; //article à supprimer

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


    private User $author;

    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private string $pseudo;

    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private string $content;

    /**
     * @var string|null
     * @ORM\Column(type="string", length=255)
     */
    private ?string $url;

    /**
     * @var DateTimeInterface
     * @ORM\Column(type="datetime", nullable=false)
     */
    private DateTimeInterface $createdAt;

    /**
     * @var DateTimeInterface
     * @ORM\Column(type="datetime", nullable=false)
     */
    private DateTimeInterface $modifiedAt;

    /**
     * @var Category|null
     * @ORM\Column(type="integer", length=11)
     */
    private ?Category $category;

    /**
     * @var bool
     * @ORM\Column(type="boolean")
     */
    private bool $state;

    static public array $listeStatut = [
        self::POST_PENDING_STATUS => 'Article en attente',
        self::POST_STATUS_VALIDATED => 'Article validé',
        self::POST_STATUS_ARCHIVED => 'Article archivé',
        self::POST_STATUS_DELETED => 'Article supprimé'
    ];

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

    public function getKicker(): string
    {
        return $this->kicker;
    }

    public function setKicker($kicker): self
    {
        $this->kicker = $kicker;

        return $this;
    }

    public function getAuthor(): ?User
    {
        return $this->author;
    }

    public function setAuthor($author): self
    {
        $this->author = $author;

        return $this;
    }

    public function getPseudo(): string
    {
        return $this->pseudo;
    }

    public function setPseudo($pseudo): self
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    public function getContent(): string
    {
        if (!empty($this->getUrl())) :
            $url = ' <a href="' . $this->getUrl() . '" target="_blank">[voir l\'article]</a>';
        else:
            $url = '';
        endif;
        return $this->content . $url;
    }

    public function setContent($content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl($url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getCreatedAt(): DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreated_at($createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getModifiedAt(): DateTimeInterface
    {
        return $this->modifiedAt;
    }

    public function setModified_at($modifiedAt): self
    {
        $this->modifiedAt = $modifiedAt;

        return $this;
    }

    public function getCategory(): Category
    {
        return $this->category;
    }

    public function setCategory(Category $category): static
    {
        $this->category = $category;

        return $this;
    }

    public function getState(): int
    {
        return $this->state;
    }

    public function setState($state): self
    {
        $this->state = $state;

        return $this;
    }

    public function getStateName(): string
    {
        return self::$listeStatut[$this->getState()];
    }

    public function getStateClass(): string
    {
        $helper = new PostHelper();
        return $helper->getStateClass($this->state);
    }
}