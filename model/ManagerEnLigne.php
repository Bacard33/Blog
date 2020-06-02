<?php

namespace p4_blog\model;

class Manager
{
    protected function dbConnect()
    {
        $db = new \PDO('mysql:host=db5000510060.hosting-data.io;dbname=dbs489527','dbu842930','Yh2-F8c-Av4-Uxy');
        return $db;
    }
}