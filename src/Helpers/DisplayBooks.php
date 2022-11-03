<?php
namespace App\Helpers;

class DisplayBooks
{
    public function createAllBooks (array $books): string
    {
        foreach ($books as $book){
            return $book;
        }
}