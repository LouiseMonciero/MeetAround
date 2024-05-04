<?php

   function connect_with_data_base(){
      echo ("connect with bdd");
      $connexion = mysqli_connect($servername, $username, $password,"MeetAround");
      if (mysqli_connect_errno()) {
         echo "Failed to connect to MySQL: " . mysqli_connect_error();
         exit();
      }
   $query = "SELECT * FROM TEST";
   echo mysqli_query($connexion, $query);
   }

   function insert_tables(){
      $filling_request ="
      CREATE DATABASE myDB;

      CREATE TABLE Users(
         ID_user INT,
         first_name VARCHAR(50) ,
         last_name VARCHAR(50) ,
         VIP BOOLEAN,
         mail VARCHAR(50) ,
         pseudo VARCHAR(50) ,
         user_coins INT,
         PRIMARY KEY(ID_user)
      );
      
      CREATE TABLE Company_association(
         ID_company INT,
         name VARCHAR(50) ,
         siret INT,
         country VARCHAR(50) ,
         structure_type VARCHAR(50) ,
         verification BOOLEAN,
         comp_coins INT,
         PRIMARY KEY(ID_company)
      );
      
      CREATE TABLE Satisfaction(
         ID_grade INT,
         comment VARCHAR(500) ,
         PRIMARY KEY(ID_grade)
      );
      
      CREATE TABLE bank_details(
         ID_coins INT,
         ID_company INT NOT NULL,
         ID_user INT NOT NULL,
         PRIMARY KEY(ID_coins),
         FOREIGN KEY(ID_company) REFERENCES Company_association(ID_company),
         FOREIGN KEY(ID_user) REFERENCES Users(ID_user)
      );
      
      CREATE TABLE Activitiy(
         ID_activity INT,
         name VARCHAR(50) ,
         localisation VARCHAR(50) ,
         description VARCHAR(500) ,
         price DECIMAL(15,2)  ,
         accesibility VARCHAR(50) ,
         event_type VARCHAR(50) ,
         event_date DATETIME,
         ID_grade INT NOT NULL,
         ID_company INT NOT NULL,
         ID_user INT NOT NULL,
         PRIMARY KEY(ID_activity),
         FOREIGN KEY(ID_grade) REFERENCES Satisfaction(ID_grade),
         FOREIGN KEY(ID_company) REFERENCES Company_association(ID_company),
         FOREIGN KEY(ID_user) REFERENCES Users(ID_user)
      );";
      $resultat = mysqli_query($connexion, $filling_request);
      if ($resultat){
         // traiter la variable resultat
         echo "table has been filled successfully";
      }else {
         echo "Erreur de requête : " . mysqli_error($connexion);
      }
   }

   function filling_tables(){}

   function select_all_event(){
      echo "event 1";
   }

   function initialize_data_base(){
      // Create the data base
      echo("coucsou");
      $servername = "localhost:8000";
      $username = "root";
      $password = "1234";

      $connexion = mysqli_connect($servername, $username, $password,"MeetAround"); // this line does not work
      // https://www.w3schools.com/php/php_mysql_create.asp

      if (!$connexion) {
         die("Connection failed : " . mysqli_connect_error());
      }
      echo("coucou2");

      // tables creation
      insert_tables();
      //filling_tables();

      mysqli_close($connexion);

   }






   // Vérifier si le bouton a été cliqué
   if (isset($_POST['submit'])) {
      echo "coucou";
   }
   ?>


