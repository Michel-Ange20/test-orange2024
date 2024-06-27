<?php
class ArticleManager
{    
    public function findAll()
    {
        
        $bdd = Database::connect();
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        /** Access to model Township */

        $query = "SELECT * FROM articles";
        $req = $bdd->prepare($query);
        $req->execute();

        while ($row = $req->fetch(PDO::FETCH_ASSOC)) {
            # code...
            $article = new Article();
            $article->setId($row['id']);
            $article->setTitle($row['title']);
            $article->setAuthor($row['auteur']);
            $article->setContent($row['content']);
            $article->setCreated($row['created_at']);
            $article->setUpdated($row['updated_at']);
            

            $articles[] = $article; // Tableau d'objet
        };

        if(isset($articles)): return $articles; endif;
        $bdd = Database::disconnect();

    }

    public function read($id)
    {

        $bdd = Database::connect();
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        /** Access to model Article */
        $query = "SELECT * FROM articles WHERE id = :id ";

        $statement = $bdd->prepare($query);
        $statement->bindValue(':id_article', $id, PDO::PARAM_INT);

     
        $statement->execute();

        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            # code...
            $article = new Article();
            $article->setId($row['id']);
            $article->setTitle($row['title']);
            $article->setAuthor($row['auteur']);
            $article->setContent($row['content']);
            $article->setCreated($row['created_at']);
            $article->setUpdated($row['updated_at']);
            

            $articles[] = $article; // Tableau d'objet

        };

        if (isset($articles)) { return $articles;}

        $bdd = Database::disconnect();
    }

    public function create($values)
    {
        $bdd = Database::connect();
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $created = date('Y-m-d h:i:s');

        /** Access to model Person */

        $query = "INSERT INTO articles (id, title, auteur, content, created_at) VALUES (NULL, :title, :auteur, :content, :created)";        

        $statement = $bdd->prepare($query);

        $statement->bindValue(':title', $values['title'], PDO::PARAM_STR);
        $statement->bindValue(':auteur', $values['auteur'], PDO::PARAM_STR);
        $statement->bindValue(':content',$values['content'], PDO::PARAM_STR);
        $statement->bindValue(':created', $created, PDO::PARAM_STR);
        
        if($statement->execute()){
            $count = $statement->rowCount();
        };
        $statement->closeCursor();

        return $count;
    }

    public function delete($id)
    {

        $bdd = Database::connect();
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $count = 0;

        /** Access to model Article */

        $query = "DELETE FROM articles WHERE id = :id";        

        $statement = $bdd->prepare($query);

        $statement->bindValue(':id', $id, PDO::PARAM_INT);
    
        if($statement->execute()){
            $count = $statement->rowCount();
        };
        $statement->closeCursor();

        return $count;
        
        $bdd = Database::disconnect();  
    }


    public function update($values)
    {
        $bdd = Database::connect();
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $updated = date('Y-m-d h:i:s');

        /** Access to model Person */

        $query = "UPDATE articles SET title = :title, auteur = :auteur, content = :content, updated_at = :updated_at WHERE id = :id";  
        
        $statement = $bdd->prepare($query);

        $statement->bindValue(':id', $values['id'], PDO::PARAM_STR);
        $statement->bindValue(':title', $values['title'], PDO::PARAM_STR);
        $statement->bindValue(':auteur', $values['auteur'], PDO::PARAM_STR);
        $statement->bindValue(':content', $values['content'], PDO::PARAM_STR);
        $statement->bindValue(':updated_at', $updated, PDO::PARAM_STR);
        
        if($statement->execute()){
            $count = $statement->rowCount();
        };
        $statement->closeCursor();

        return $count;
    }


    
}
