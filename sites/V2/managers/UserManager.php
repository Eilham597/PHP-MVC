<?php
class UserManager extends AbstractManager {
    public function findAll() {
        return $this->db->query('SELECT * FROM users')->fetchAll();
    }

    public function find($id) {
        $query = $this->db->prepare('SELECT * FROM users WHERE id = :id');
        $query->execute(['id' => $id]);
        return $query->fetch();
    }

    public function create($user) {
        $query = $this->db->prepare('INSERT INTO users (email, first_name, last_name) VALUES (:email, :first_name, :last_name)');
        $query->execute([
            'email' => $user['email'],
            'first_name' => $user['first_name'],
            'last_name' => $user['last_name']
        ]);
    }

    public function update($user) {
        $query = $this->db->prepare('UPDATE users SET email = :email, first_name = :first_name, last_name = :last_name WHERE id = :id');
        $query->execute([
            'id' => $user['id'],
            'email' => $user['email'],
            'first_name' => $user['first_name'],
            'last_name' => $user['last_name']
        ]);
    }

    public function delete($id) {
        $query = $this->db->prepare('DELETE FROM users WHERE id = :id');
        $query->execute(['id' => $id]);
    }
}