<?php

namespace App\Entity;

use App\Repository\ClienteRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ClienteRepository::class)]
class Cliente
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 50)]
    private $nome;

    #[ORM\Column(type: 'date')]
    private $dt_nasc;

    #[ORM\Column(type: 'integer')]
    private $genero;

    #[ORM\Column(type: 'string', length: 9, nullable: true)]
    private $cep;

    #[ORM\Column(type: 'string', length: 60, nullable: true)]
    private $rua;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $numero;

    #[ORM\Column(type: 'string', length: 100, nullable: true)]
    private $compl;

    #[ORM\Column(type: 'string', length: 40, nullable: true)]
    private $bairro;

    #[ORM\Column(type: 'string', length: 40, nullable: true)]
    private $cidade;

    #[ORM\Column(type: 'string', length: 2, nullable: true)]
    private $uf;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNome(): ?string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getDtNasc(): ?\DateTimeInterface
    {
        return $this->dt_nasc;
    }

    public function setDtNasc(\DateTimeInterface $dt_nasc): self
    {
        $this->dt_nasc = $dt_nasc;

        return $this;
    }

    public function getGenero(): ?int
    {
        return $this->genero;
    }

    public function setGenero(int $genero): self
    {
        $this->genero = $genero;

        return $this;
    }

    public function getCep(): ?string
    {
        return $this->cep;
    }

    public function setCep(?string $cep): self
    {
        $this->cep = $cep;

        return $this;
    }

    public function getRua(): ?string
    {
        return $this->rua;
    }

    public function setRua(?string $rua): self
    {
        $this->rua = $rua;

        return $this;
    }

    public function getNumero(): ?int
    {
        return $this->numero;
    }

    public function setNumero(?int $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    public function getCompl(): ?string
    {
        return $this->compl;
    }

    public function setCompl(?string $compl): self
    {
        $this->compl = $compl;

        return $this;
    }

    public function getBairro(): ?string
    {
        return $this->bairro;
    }

    public function setBairro(?string $bairro): self
    {
        $this->bairro = $bairro;

        return $this;
    }

    public function getCidade(): ?string
    {
        return $this->cidade;
    }

    public function setCidade(?string $cidade): self
    {
        $this->cidade = $cidade;

        return $this;
    }

    public function getUf(): ?string
    {
        return $this->uf;
    }

    public function setUf(?string $uf): self
    {
        $this->uf = $uf;

        return $this;
    }
}
