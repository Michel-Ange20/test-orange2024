<?php

/**
 * Create Class Home by controller
*/

class Home
{
    public function View()
    {
        $manager = new ArticleManager();
        $article = $manager->findAll();
        

        include(VIEW.'view.php');
    
    }

    public function Created(){
        if (isset($_GET['values'])) {
            
            $values = $_GET['values'];

            $manager = new ArticleManager();
            $manager->create($values);

            
            if ($manager == true ) {
                $alert = "alert-success";
                $response = "L'enregistrement a réussi avec succès";                
                
            }
            else {
                $alert = "alert-warning";
                $response = " L'enregistrement a échoué";                
            }
                
            
        }
        include(VIEW.'add.php');
    }
    
    public function Updated(){

        if (isset($_GET['id'])) {
            
            $values = $_GET['id'];

            $manager = new ArticleManager();
            $manager->update($values);

            if ($manager == true ) {
                $alert = "alert-success";
                $response = "L'enregistrement a réussi avec succès";                
                
                $manager = new ArticleManager();
                $articles = $manager->read();
            }
            else {
                $alert = "alert-warning";
                $response = " L'enregistrement a échoué";                
            }
        }

        include(VIEW.'update.php');


    }

    public function Delete(){
        if (isset($_GET['id'])) {
            
            $values = $_GET['id'];

            $manager = new ArticleManager();
            $manager->delete($values);
        }

        header("location: home");
    }
   
    
    

}


