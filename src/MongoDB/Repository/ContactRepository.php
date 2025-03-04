<?php

namespace App\MongoDB\Repository;

use App\MongoDB\Repository\AbstractCollectionRepository;

class ContactRepository extends AbstractCollectionRepository
{
    protected string $collectionName = 'contact';
}