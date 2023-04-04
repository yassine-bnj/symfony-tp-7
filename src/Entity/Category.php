<?php

namespace App\Entity;

use App\Repository\CategoryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategoryRepository::class)]
class Category
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $titre = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\OneToMany(mappedBy: 'category', targetEntity: Article::class)]
    private Collection $articles;

    #[ORM\OneToMany(mappedBy: 'category', targetEntity: CategorySearch::class)]
    private Collection $categorySearches;

    public function __construct()
    {
        $this->articles = new ArrayCollection();
        $this->categorySearches = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return Collection<int, Article>
     */
    public function getArticles(): Collection
    {
        return $this->articles;
    }

    public function addArticle(Article $article): self
    {
        if (!$this->articles->contains($article)) {
            $this->articles->add($article);
            $article->setCategory($this);
        }

        return $this;
    }

    public function removeArticle(Article $article): self
    {
        if ($this->articles->removeElement($article)) {
            // set the owning side to null (unless already changed)
            if ($article->getCategory() === $this) {
                $article->setCategory(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, CategorySearch>
     */
    public function getCategorySearches(): Collection
    {
        return $this->categorySearches;
    }

    public function addCategorySearch(CategorySearch $categorySearch): self
    {
        if (!$this->categorySearches->contains($categorySearch)) {
            $this->categorySearches->add($categorySearch);
            $categorySearch->setCategory($this);
        }

        return $this;
    }

    public function removeCategorySearch(CategorySearch $categorySearch): self
    {
        if ($this->categorySearches->removeElement($categorySearch)) {
            // set the owning side to null (unless already changed)
            if ($categorySearch->getCategory() === $this) {
                $categorySearch->setCategory(null);
            }
        }

        return $this;
    }
}
