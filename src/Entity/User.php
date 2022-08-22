<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity("src\Entity\User")
 * @ORM\Table(name="user")
 */
class User
{
    const ROLE_AUTHOR                       = 3; //auteur
    const ROLE_USER                         = 2; //utilisateur
    const ROLE_ADMIN                        = 1; //admin

    const CGU_NOT_VALIDATED                 = 0;
    const CGU_VALIDATED                     = 1; //les cgu sont validées

    const USER_PENDING_STATUS               = 0; //en attente
    const USER_PENDING_STATUS_MODO          = 1; //en attente validation modérateur
    const USER_STATUS_VALIDATED             = 2; //compte validé
    const USER_STATUS_DELETED               = 3; //compte à supprimer

    static public array $listeStatut = [
        self::USER_PENDING_STATUS => 'Compte non validé',
        self::USER_PENDING_STATUS_MODO => 'token validé',
        self::USER_STATUS_VALIDATED => 'compte validé',
        self::USER_STATUS_DELETED => 'compte supprimé',
    ];

    static public array $listeRole = [
        self::ROLE_ADMIN => 'Administrateur',
        self::ROLE_AUTHOR => 'Auteur',
        self::ROLE_USER => 'Utilisateur',
    ];
    
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
    private string $pseudo;

    /**
     * @var array
     * @ORM\Column(type="json")
     */
    private array $role = [];

    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private string $email;

    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private string $password;

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
     * @var bool
     * @ORM\Column(type="boolean")
     */
    private bool $cgu;

    /**
     * @var bool
     * @ORM\Column(type="boolean")
     */
    private bool $state;

    /**
     * @var string|null
     *  @ORM\Column(type="string", length=255)
     */
    private ?string $token;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId($id): self
    {
        $this->id = $id;

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

    public function getRole(): array
    {
        return $this->role;
    }

    public function setRole($role): self
    {
        $this->role = $role;

        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail($email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword($password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getCreatedAt(): ?DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getModifiedAt(): ?DateTimeInterface
    {
        return $this->modifiedAt;
    }

    public function setModifiedAt(?DateTimeInterface $modifiedAt): self
    {
        $this->modifiedAt = $modifiedAt;

        return $this;
    }

    public function getCgu(): bool
    {
        return $this->cgu;
    }

    public function getCguClass(): ?string
    {
        if ($this->cgu == self::CGU_VALIDATED) :
            return '<i class="fa fa-check-square cgu-green"></i>';
        else:
            return $this->cgu;
        endif;
    }

    public function setCgu($cgu): self
    {
        $this->cgu = $cgu;

        return $this;
    }

    public function getState(): int
    {
        return $this->state;
    }

    public function getStateName(): ?string
    {
        return self::$listeStatut[$this->getState()];
    }

    public function getStateClass(): ?string
    {
        $helper = new UserHelper();
        return $helper->getStateClass($this->state);
    }

    public function setState($state): self
    {
        $this->state = $state;

        return $this;
    }

    public function getToken(): ?string
    {
        return $this->token;
    }

    public function setToken($token): self
    {
        $this->token = $token;

        return $this;
    }
}