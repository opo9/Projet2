<?php

namespace App\Entity;

class Genre extends Entity
{
    protected ?int $id = null;
    protected ?int $name = null;

    public function setId(?int $id): void {
        $this->id = $id;
    }

    // Getter pour id
    public function getId(): ?int {
        return $this->id;
    }

    // Setter pour book_id
    public function setBookId(?string $name): void {
        $this->name = $name;
    }

    // Getter pour book_id
    public function getBookId(): ?string {
        return $this->name;
    }
}
