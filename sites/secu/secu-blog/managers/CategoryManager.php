<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */


class CategoryManager extends AbstractManager
{
   /**
    * Récupère toutes les catégories
    * @return array Liste des catégories
    */
   public function findAll(): array 
   {
       $query = $this->db->query('SELECT * FROM categories');
       return $query->fetchAll(PDO::FETCH_ASSOC);
   }

   /**
    * Trouve une catégorie par son ID
    * @param int $id Identifiant de la catégorie
    * @return Category|null Catégorie trouvée ou null
    */
   public function findOne(int $id): ?Category 
   {
       $query = $this->db->prepare('SELECT * FROM categories WHERE id = :id');
       $query->execute(['id' => $id]);
       $category = $query->fetch(PDO::FETCH_ASSOC);
       
       return $category ? $this->hydrate($category) : null;
   }

   /**
    * Hydrate une instance de Category à partir de données
    * @param array $data Données de la catégorie
    * @return Category Instance de Category
    */
   public function hydrate(array $data): Category 
   {
       return new Category(
           $data['id'], 
           $data['title'], 
           $data['description']
       );
   }
}