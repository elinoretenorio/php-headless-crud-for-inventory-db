<?php

declare(strict_types=1);

namespace Inventory\Database;

interface IDatabase
{
    public function prepare(string $sql): IDatabaseResult;

    public function lastInsertId(): int;
}
