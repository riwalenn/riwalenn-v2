<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity("src\Entity\PortfolioCategory")
 * @ORM\Table(name="portfolio_category")
 */
class PortfolioCategory
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer", length=11)
     */
    private int $id;

    /**
     * @var Portfolio
     * @ORM\Column(type="integer", length=11)
     */
    private Portfolio $idPortfolio;

    /**
     * @var PortfolioCategory
     * @ORM\Column(type="integer", length=11)
     */
    private PortfolioCategory $idPortfolioCategory;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getIdPortfolio(): int
    {
        return $this->idPortfolio;
    }

    public function setIdPortfolio($idPortfolio): self
    {
        $this->id = $idPortfolio;

        return $this;
    }

    public function getIdPortfolioCategory(): PortfolioCategory
    {
        return $this->idPortfolioCategory;
    }

    public function setIdPortfolioCategory($idPortfolioCategory): self
    {
        $this->id = $idPortfolioCategory;

        return $this;
    }
}