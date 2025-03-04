<?php

namespace App\MongoDB\Repository;

use MongoDB\Database;
use MongoDB\InsertOneResult;
use App\MongoDB\MongoDBDatabase;
use Symfony\Component\Serializer\Serializer;
use App\MongoDB\Repository\CollectionRepositoryInterface;
use MongoDB\DeleteResult;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;

abstract class AbstractCollectionRepository implements CollectionRepositoryInterface
{
    protected string $collectionName;
    protected Database $connection;
    private Serializer $serializer;

    public function __construct(readonly private MongoDBDatabase $mongoDBDatabase)
    {
        $this->connection = $mongoDBDatabase->connect();

        $normalizers = [new ObjectNormalizer(), new DateTimeNormalizer()];
        $this->serializer = new Serializer($normalizers);
    }

    private function objectToArray(object $object)
    {
        return $this->serializer->normalize($object);
    }

    public function insertOne(object $document, array $options =[]):InsertOneResult
    {
        $document = $this->objectToArray($document);

        $operation = $this->connection->selectCollection($this->collectionName)->insertOne($document, $options);

        return $operation;
    }

    public function find(array $filter = [], array $options = []):array
    {
        $operation = $this->connection->selectCollection($this->collectionName)->find($filter, $options)->toArray();

        return $operation;
    }

    public function deleteOne(array $filter = [], array $options = []):DeleteResult
    {
        $operation = $this->connection->selectCollection($this->collectionName)->deleteOne($filter, $options);

        return $operation;
    }
}