<?php

class Base_Model extends Core_Model
{
    // Execute sql query (:array), $retrieve = true for SELECT query
    public function exec_query($sql = '', $data = [], $retrieve = true)
    {
        // Prepare sql query
        $sth = $this->db->prepare($sql);
        // Execute query
        $sth->execute($data);
        if ($retrieve === true) {
            // Fetch all records
            $records = $sth->fetchAll(PDO::FETCH_ASSOC);
            // Free up the connection to the server
            $sth->closeCursor();
            // Return records
            return $records;
        } else {
            $sth->closeCursor();
            return true;
        }
    }
    // Return array of records (:array)
    public function all() {
        $sql = "SELECT * FROM {$this->table}";
        $records = $this->exec_query($sql);
        return $records;
    }
    // Return one record (:object) or array if duplicate (:array) or empty array if not found (:array)
    public function findBy($data = []) //Example findBy(1), findBy(['id' => 1])
    {   
        if (is_array($data)) {
            $placeholder = "";
            foreach ($data as $key => $value) {
                if (is_string($value)) {
                    $placeholder .= " AND {$key} = '{$value}'";
                } else {
                    $placeholder .= " AND {$key} = {$value}";
                }
            }
            $sql =  "SELECT * FROM {$this->table} WHERE " .trim($placeholder,  " AND ");
            $records = $this->exec_query($sql, $data);
        } else {
            $sql =  "SELECT * FROM {$this->table} WHERE id = {$data}";
            $records = $this->exec_query($sql);
        }
        

        if (count($records) === 1) {
            return array_first($records);
        } else {
            return $records;
        }
    }
    // Insert new record to database (:true if success)
    public function insert($data = [])
    {
        if (is_array($data)) {
            $cols = "";
            $placeholder = "";
            foreach (array_keys($data) as $key) {
                $cols .= ", " . $key;
                $placeholder .= ", :" . $key;
            }
            $sql = "INSERT INTO {$this->table} (" . trim($cols, ', ') . ") VALUES (" . trim($placeholder, ', ') . ")";
            $result = $this->exec_query($sql, $data, false);
            // $result = true if insert successfully
            return $result;
        }
        return false;
    }
    // Update a record with one or multi conditions (:true if success)
    public function update($data = [], $conds) //Example update(['title' => 'test', 'description' => 1], ['id' => 1])
    {
        if (is_array($data)) {
            $content = "";
            foreach ($data as $key => $value) {
                if (is_string($value)) {
                    $content .= "{$key} = '{$value}', ";
                } else {
                    $content .= "{$key} = {$value}, ";
                }
            }

            $placeholder = "";
            if (is_array($conds)) {
                foreach (array_keys($conds) as $key) {
                    $placeholder .= "{$key} = :{$key} AND";
                }
            }
                
            $sql = "UPDATE {$this->table} SET " . trim($content, ', ') . " WHERE " . trim($placeholder, ' AND');

            $result = $this->exec_query($sql, $conds, false);
            return $result;
        }
        return false;
    }
    // Delete a record with one or multi conditions (:true if success)
    public function delete($conds) //Example delete(['id' => 1])
    {
        $placeholder = "";
        if (is_array($conds)) {
            foreach (array_keys($conds) as $key) {
                $placeholder .= "{$key} = :{$key} AND";
            }

            $sql = "DELETE FROM {$this->table} WHERE " . trim($placeholder, ' AND');
            $result = $this->exec_query($sql, $conds, false);
        } else {
            $sql = "DELETE FROM {$this->table} WHERE id = {$conds}";
            $result = $this->exec_query($sql, null, false);
        }

        return $result;
    }
    // Filter record with multi conditions (:array)
    public function filter($conds) //Example filter(['id > 10'])
    {
        if(is_array($conds)) {
            $placeholder = "";
            foreach ($conds as $cond) {
                $placeholder .= "{$cond} AND";
            }
            $sql = "SELECT * FROM {$this->table} WHERE " . trim($placeholder, ' AND');

            $records = $this->exec_query($sql, $conds);
            return $records;
        }
    }
}

?>