<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */


class PostManager extends AbstractManager
{
    /**
     * Récupère les 4 derniers posts
     * @return array Liste des posts
     */
    public function findLatest(): array 
    {
        $query = $this->db->query('SELECT * FROM posts ORDER BY created_at DESC LIMIT 4');
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Trouve un post par son ID
     * @param int $id Identifiant du post
     * @return Post|null Post trouvé ou null
     */
    public function findOne(int $id): ?Post 
    {
        $query = $this->db->prepare('SELECT * FROM posts WHERE id = :id');
        $query->execute(['id' => $id]);
        $post = $query->fetch(PDO::FETCH_ASSOC);
        
        return $post ? $this->hydrate($post) : null;
    }

    /**
     * Trouve les posts d'une catégorie
     * @param int $categoryId Identifiant de la catégorie
     * @return array Liste des posts
     */
    public function findByCategory(int $categoryId): array 
    {
        $query = $this->db->prepare('
            SELECT posts.* FROM posts
        JOIN posts_categories ON posts.id = posts_categories.post_id
        WHERE posts_categories.category_id = :categoryId
        ');
        $query->execute(['categoryId' => $categoryId]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Hydrate une instance de Post à partir de données
     * @param array $data Données du post
     * @return Post Instance de Post
     */
    public function hydrate(array $data): Post 
    {
        return new Post(
            $data['id'],
            $data['title'],
            $data['excerpt'],
            $data['content'],
            $data['author'],
            $data['created_at']
        );
    }
}