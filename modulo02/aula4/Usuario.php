<?php

class Usuario
{

    private string $nome;
    private string $email;
    private string $senha;
    private string $cpf;

        public function __construct(string $email, string $senha)
        {
            $this->senha = $senha;
            $this->email = $email;
        }
    public function getNote(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setSenha(string $senha): void
    {
        $this->senha = $senha;
    }

    public function getSenha(): string
    {
        return $this->senha;
    }

    public function setCpf(string $cpf): void
    {
        $this->cpf = $cpf;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }
}
