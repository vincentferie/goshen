<?php 

namespace App\Models;

use PDO;
use Database\DBConnection;

abstract class Model
{

    protected $db;
    protected $table;

    public function __construct(DBConnection $db)
    {
        $this->db = $db;
    }

    public function findAll()
    {
        return $this->query("SELECT * FROM {$this->table}");
    }

    public function all():array
    {
        return $this->query("SELECT * FROM {$this->table} ORDER BY created_at DESC");
    }

    public function findByID(int $id):Model
    {
        return $this->query("SELECT * FROM {$this->table} WHERE id = ?", $id, true);

    }

    public function destroy(int $id):bool
    {
        return $this->query("DELETE FROM {$this->table} WHERE id = ?", $id, true);
    }

    public function query(string $sql, int $param = null, bool $single = null)
    {
        $method = is_null($param) ? 'query' : 'prepare';

        if (strpos($sql, 'DELETE') === 0 || strpos($sql, 'UPDATE') === 0 || strpos($sql, 'INSERT') === 0) {
            $stmnt = $this->db->getPDO()->$method($sql);
            $stmnt->setFetchMode(PDO::FETCH_CLASS, get_class($this), [$this->db]);
            return $stmnt->execute([$param]);
        }

        $fetch = is_null($single) ? 'fetchAll' : 'fetch';

        $stmnt = $this->db->getPDO()->$method($sql);

        $stmnt->setFetchMode(PDO::FETCH_CLASS, get_class($this), [$this->db]);

        if ($method === 'query') {
            return $stmnt->$fetch();
        } else {
            $stmnt->execute([$param]);
            return $stmnt->$fetch();
        }
    }


}