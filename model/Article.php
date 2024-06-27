<?php

class Article
{
    private $id;
    private $title;
    private $author;
    private $content;
    private $created_at;
    private $updated_at;
    
    /** 
     * @return mixed
    */

    public function getId(){
        return $this->id;
    }

    /**
     * * @param mixed $id
    */
    
    public function setId($id){
        $this->id = $id;
    }

      
    /** 
     * @return mixed
    */

    public function getTitle(){
        return $this->title;
     
    }

    /**
      * @param mixed $title
    */
    
    public function setTitle($title){
        $this->title = $title;
    }

    /** 
     * @return mixed
    */

    public function getAuthor(){
        return $this->author;
    }

    /**
      * @param mixed $author
    */
    
    public function setAuthor($author){
        $this->author = $author;
    }

    /** 
     * @return mixed
    */

    public function getContent(){
        return $this->content;
    }

    /**
      * @param mixed $content
    */
    
    public function setContent($content){
        $this->content = $content;
    }

    /** 
     * @return mixed
    */

    public function getCreated(){
        return $this->created_at;
    }

    /**
      * @param mixed $created_at
    */
    
    public function setCreated($created_at){
        $this->created_at = $created_at;
    }

    /** 
     * @return mixed
    */
    
    public function getUpdated(){
        return $this->updated_at;
    }

    /**
      * @param mixed $updated_at
    */
    
    public function setUpdated($updated_at){
        $this->updated_at = $updated_at;
    }

}
