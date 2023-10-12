<?php

namespace App\Entity;


class BookGenre extends Entity{
    protected int $bookId;
    protected int $genreId;

    // Setters pour bookId et genreId
    public function setBookId(int $bookId): void {
        $this->bookId = $bookId;
    }

    public function setGenreId(int $genreId): void {
        $this->genreId = $genreId;
    }

    // Getters pour bookId et genreId
    public function getBookId(): int {
        return $this->bookId;
    }

    public function getGenreId(): int {
        return $this->genreId;
    }
}
