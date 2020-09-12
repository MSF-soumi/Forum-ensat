<h1> Guide d'utilisation </h1>
<h3>Etape(0) :</h3>  <h4>Clonnage du projet à partir du Github </h4>
   #-Deplacez_vous dans le dossier local htdocs qui se trouve dans le chemin suivant c:/xamppp  </br>
   #-Saisissez dans votre terminal de GIT les commande suivantes : </br>
             git remote add P https://github.com/MSF-soumi/Forum-ensat.git </br>
             git clone https://github.com/MSF-soumi/Forum-ensat.git </br>
<h3>Etape(1) :</h3> <h4>Résolution des problémes aprés clonnage </h4>
      #Tout d'abord déplacez-vous dans le projet clonné en local et executez la commande suivante : </br>
            composer upgrade --no-scripts  </br>
       Remarque : cette commande peut prendre quelques minutes (génération des fichiers manquants) </br>
      #puis créez un fichier s'appel .env et copier le contenu d'un fichier déja existant s'appelle .env.example dans .env </br>
      #executez la commande :</br>
           php artisan key:generate </br>
       (générer un nouveau clé dans .env)   </br>              
<h3>Etape(2) :</h3><h4>Créeation et remplissage de la base de données </h4> 
       #midifier le champs : 'DB_DATABASE=ensat' dans le fichier .env </br>
       #Créez une base de données locale sur PhpMyadmin ou heidisql sous le nom de 'ensat' </br>
       #Executez la commande : </br>
            php artisan migrate  </br>
             (pour faire migrer les tables vers votre base de données locale) </br>
       #Executez la commande : </br>
           composer dump-autoload </br>
       #puis la commande : </br>
            php artisan db:seed </br>
        (pour que votre base de donées soit automatiquement remplie)</br>
<h3>Etape(3) :</h3><h4>Deploiement du sereveur LARAVEL</h4>
        #Executez la commande :</br>
            php artisan serve </br>
        #Copier l'URL donné dans votre navigateur . </br>
<h3>Etape(4) : </h3><h4>Testez l'application </h4>
        # Soyez libre pour s'inscrire en cliquant sur le boutton JOIN THE TEAM . </br>
        # Ajoutez de nouveaux postes et commentez les postes des autres participants .</br>
                                                                                                          <h5> MERCI <h5> 
