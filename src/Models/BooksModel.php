<?php

declare(strict_types=1);


namespace App\Models;
use PDO;

class BooksModel
{
    protected PDO $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function getAllBooks(): array
    {
        $query = $this->db->prepare('SELECT `id`, `name`, `author`, `price`, `image`, `deleted` FROM `books` ORDER BY `author` DESC');
        $query->execute();
        return $query->fetchAll();
    }


}