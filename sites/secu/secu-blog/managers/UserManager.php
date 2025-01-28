<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */


class UserManager extends AbstractManager
{
    /**
     * Trouve un utilisateur par son email
     * @param string $email Email de l'utilisateur
     * @return User|null Utilisateur trouvé ou null
     */
    public function findByEmail(string $email): ?User 
    {
        $query = $this->db->prepare('SELECT * FROM users WHERE email = :email');
        $query->execute(['email' => $email]);
        $user = $query->fetch(PDO::FETCH_ASSOC);
        
        return $user ? $this->hydrate($user) : null;
    }

    /**
     * Crée un nouvel utilisateur
     * @param User $user Utilisateur à créer
     * @return bool Succès de la création
     */
    public function create(User $user): bool 
    {
        $query = $this->db->prepare('
            INSERT INTO users (username, email, password, role, created_at) 
            VALUES (:username, :email, :password, :role, :createdAt)
        ');

        return $query->execute([
            'username' => $user->getUsername(),
            'email' => $user->getEmail(),
            'password' => $user->getPassword(),
            'role' => $user->getRole(),
            'createdAt' => $user->getCreatedAt()
        ]);
    }

    /**
     * Hydrate une instance de User à partir de données
     * @param array $data Données de l'utilisateur
     * @return User Instance de User
     */
    public function hydrate(array $data): User 
    {
        return new User(
            $data['id'],
            $data['username'],
            $data['email'],
            $data['password'],
            $data['role'],
            $data['created_at']
        );
    }
}