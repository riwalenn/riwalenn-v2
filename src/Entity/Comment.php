<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity("src\Entity\Comment")
 * @ORM\Table(name="comment")
 */
class Comment
{
    const COM_PENDING_STATUS                = 0; //en attente
    const COM_STATUS_VALIDATED              = 1; //commentaire validé
    const COM_STATUS_ARCHIVED               = 2; //commentaire archivé
    const COM_STATUS_DELETED                = 3; //commentaire à supprimer

    static public array $listeStatut = [
        self::COM_PENDING_STATUS => 'Commentaire en attente',
        self::COM_STATUS_VALIDATED => 'Commentaire validé',
        self::COM_STATUS_ARCHIVED => 'Commentaire archivé',
        self::COM_STATUS_DELETED => 'Commentaire supprimé'
    ];

    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer", length=11)
     */
    private int $id;

    /**
     * @var Post
     * @ORM\Column(type="integer", length=11)
     */
    private Post $id_post;

    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private string $pseudo;

    /**
     * @var DateTimeInterface
     * @ORM\Column(type="datetime", nullable=false)
     */
    private DateTimeInterface $createdAt;

    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private string $title;

    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private string $content;

    /**
     * @var bool
     * @ORM\Column(type="boolean")
     */
    private bool $state;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getId_post(): Post
    {
        return $this->id_post;
    }

    public function setId_post($id_post): self
    {
        $this->id_post = $id_post;

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

    public function getCreatedAt(): DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreated_at($createdAt): self
    {
        $this->createdAt = $createdAt;

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

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent($content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getState(): bool
    {
        return $this->state;
    }

    public function setState($state): self
    {
        $this->state = $state;

        return $this;
    }

    public function getStateClass(): string
    {
        $helper = new CommentHelper();
        return $helper->getStateClass($this->state);
    }
}