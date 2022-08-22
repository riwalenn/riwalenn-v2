<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity("src\Entity\FavoritePost")
 * @ORM\Table(name="favorite_post")
 */
class FavoritePost
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer", length=11)
     */
    private int $id;

    /**
     * @var User
     * @ORM\Column(type="integer", length=11)
     */
    private User $id_user;

    /**
     * @var Post
     * @ORM\Column(type="integer", length=11)
     */
    private Post $id_post;

    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private string $title;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getId_user(): User
    {
        return $this->id_user;
    }

    public function setId_user(?User $id_user): self
    {
        $this->id_user = $id_user;

        return $this;
    }

    public function getId_post(): Post
    {
        return $this->id_post;
    }

    public function setId_post(?Post $id_post): self
    {
        $this->id_post = $id_post;

        return $this;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(): self
    {
        $post = new Post();
        $this->title = $post->getTitle();

        return $this;
    }
}