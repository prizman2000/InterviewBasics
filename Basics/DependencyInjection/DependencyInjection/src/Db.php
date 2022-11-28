<?php

namespace DependencyInjection\App;

use PDO;

class Db
{
    private PDO $dbh;

    public function __construct()
    {
        $this->dbh = new PDO('pgsql:host=localhost;dbname=interview_basics;port=5422', 'postgres', 'postgres');
    }

    public function query(string $sql, array $params = [], $class = \stdClass::class): array
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($params);
        return $sth->fetchAll(PDO::FETCH_CLASS, $class);
    }
}