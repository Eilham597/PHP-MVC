<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */


class CommentManager extends AbstractManager
{
    /**
     * Trouve les commentaires d'un post
     * @param int $postId Identifiant du post
     * @return array Liste des commentaires
     */
    public function findByPost(int $postId): array 
    {
        $query = $this->db->prepare('SELECT * FROM comments WHERE post_id = :postId');
        $query->execute(['postId' => $postId]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Crée un nouveau commentaire
     * @param Comment $comment Commentaire à créer
     * @return bool Succès de la création
     */
    public function create(Comment $comment): bool 
    {
        $query = $this->db->prepare('
            INSERT INTO comments (content, user_id, post_id) 
            VALUES (:content, :userId, :postId)
        ');

        return $query->execute([
            'content' => $comment->getContent(),
            'userId' => $comment->getUserId(),
            'postId' => $comment->getPostId()
        ]);
    }

    /**
     * Hydrate une instance de Comment à partir de données
     * @param array $data Données du commentaire
     * @return Comment Instance de Comment
     */
    public function hydrate(array $data): Comment 
    {
        return new Comment(
            $data['id'],
            $data['content'],
            $data['user_id'],
            $data['post_id']
        );
    }
}