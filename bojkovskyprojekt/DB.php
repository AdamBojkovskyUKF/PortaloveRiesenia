<?php

namespace portalove;

class DB
{
    private $host;
    private $dbname;
    private $username;
    private $password;

    private $connection;

    public function __construct($host, $dbname, $username, $password)
    {
        $this->host = $host;
        $this->dbname = $dbname;
        $this->username = $username;
        $this->password = $password;

        try {
            $this->connection = new \PDO('mysql:host='.$this->host.';dbname='.$this->dbname, $this->username, $this->password);
        } catch (\PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function getMenu()
    {
        $menuItems = [];
        $sql = "SELECT M.* FROM menu AS M";
        $query = $this->connection->query($sql);
        while ($row = $query->fetch()) {
            $menuItems[] = [
                'id' => $row['id'],
                'name' => $row['name'],
                'icon' => $row['icon'],
                'description' => $row['description'],
                'created_at' => $row['created_at'],
                'updated_at' => $row['updated_at']
            ];
        }
        return $menuItems;
    }

    public function createMenu($name, $icon, $description)
    {
        $dateTime = date('Y-m-d H:i:s', time());
        $sql = "INSERT INTO menu(name, icon, description, created_at, updated_at)
                VALUE ('".$name."', '".$icon."', '".$description."', '".$dateTime."', '".$dateTime."')";
        try {
            $this->connection->exec($sql);
            return true;
        } catch (\PDOException $e) {
            return false;
        }
    }

    public function updateMenu($id, $name, $icon, $description)
    {
        $dateTime = date('Y-m-d H:i:s', time());
        $sql = "UPDATE menu
                SET name = '".$name."', icon = '".$icon."', description = '".$description."', updated_at = '".$dateTime."'
                WHERE id = ".$id;
        try {
            $this->connection->exec($sql);
            return true;
        } catch (\PDOException $e) {
            return false;
        }
    }

    public function deleteMenu($id)
    {
        $sql = "DELETE FROM menu WHERE id = ".$id;
        try {
            $this->connection->exec($sql);
            return true;
        } catch (\PDOException $e) {
            return false;
        }
    }

    public function createEmail($name, $email, $offer, $start, $end)
    {
        $dateTime = date('Y-m-d H:i:s', time());
        $sql = "INSERT INTO email(name, email, offer, start, end, created_at, updated_at)
                VALUE ('".$name."', '".$email."', '".$offer."', '".$start."', '".$end."', '".$dateTime."', '".$dateTime."')";
        try {
            $this->connection->exec($sql);
            return true;
        } catch (\PDOException $e) {
            return false;
        }
    }

    public function getEmails()
    {
        $emails = [];
        $sql = "SELECT * FROM email";
        $query = $this->connection->query($sql);
        while ($row = $query->fetch()) {
            $emails[] = [
                'id' => $row['id'],
                'name' => $row['name'],
                'email' => $row['email'],
                'offer' => $row['offer'],
                'start' => $row['start'],
                'end' => $row['end'],
                'created_at' => $row['created_at'],
                'updated_at' => $row['updated_at']
            ];
        }

        return $emails;
    }

    public function deleteEmail($id)
    {
        $sql = "DELETE FROM email WHERE id = ".$id;
        try {
            $this->connection->exec($sql);
            return true;
        } catch (\PDOException $e) {
            return false;
        }
    }

    public function login($username, $password)
    {
        $sha1Password = sha1($password);
        $sql = "SELECT COUNT(id) AS is_admin FROM user WHERE username = '".$username."' AND password = '".$sha1Password."'";

        try {
            $query = $this->connection->query($sql);
            $result = $query->fetch(\PDO::FETCH_ASSOC);
            if(intval($result['is_admin']) === 1) {
                return true;
            } else {
                return false;
            }
        } catch (\PDOException $e) {
            return false;
        }
    }
}
