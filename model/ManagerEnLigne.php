<?php

namespace p4_blog\model;

class Manager
{
    protected function dbConnect()
    {
        $db = new \PDO('mysql:host=db5000510060.hosting-data.io;dbname=dbs489527','dbu842930','B3A-4rP-pno-Bnn');
        return $db;
    }
}



//pour le travail en local
<?php

namespace p4_blog\model;

class Manager
{
    protected function dbConnect()
    {
        $db = new \PDO('mysql:host=localhost;dbname=p4_blog;charset=utf8', 'root', 'root');
        return $db;
    }
}