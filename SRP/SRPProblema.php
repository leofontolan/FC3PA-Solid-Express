<?php

# Essa é um exemplo de classe muito prpblemática.
# O problema é que a classe não está bem definida, e tem muitas responsabilidades.
# O ideal seria que ela fosse apenas uma classe anemica, apenas alterando os valores dos atributos.
# Porém, ela faz conexão com o banco de dados, e faz a persistência dos dados.
# Cria cateogrias, cria curso, faz a persistência dos dados.

class Course {

    private $name;
    private $category;
    private $description;	


    public function connection(){
        $pdo = new PDO('mysql:host=localhost;dbname=srp', 'root', '');
        return $pdo;
    }

    public function createCategory(){
        $pdo = $this->connection();
        $sql = "INSERT INTO category (name) VALUES (:name)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':name', $this->name);
        $stmt->execute();
    }

    public function createCourse(){
        $pdo = $this->connection();
        $sql = "INSERT INTO course (name, category, description) VALUES (:name, :category, :description)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':category', $this->category);
        $stmt->bindParam(':description', $this->description);
        $stmt->execute();
    }

    public function getName(){
        return $this->name;
    }

    public function getCategory(){
        return $this->category;
    }

    public function getDescription(){
        return $this->description;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function setCategory($category){
        $this->category = $category;
    }

    public function setDescription($description){
        $this->description = $description;
    }
}
