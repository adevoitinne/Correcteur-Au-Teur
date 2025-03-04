<?php
namespace App\MongoDB\Repository;

use MongoDB\InsertOneResult;
use MongoDB\DeleteResult;

interface CollectionRepositoryInterface
{
    public function insertOne(object $document, array $options = []): InsertOneResult;
    public function find(array $filter = [], array $options = []):array;
    public function deleteOne(array $filter = [], array $options = []):DeleteResult;
}