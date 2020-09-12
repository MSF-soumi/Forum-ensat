<h1> Guide d'utilisation </h1>
<h3>Etape(0) :</h3>  <h4>Clonnage du projet à partir du Github </h4>
   #-Deplacez_vous dans le dossier local htdocs qui se trouve dans le chemin suivant c:/xampp
   #-Saisissez dans votre terminal de GIT les commande suivantes :
             git remote add P https://github.com/MSF-soumi/Forum-ensat.git
             git clone https://github.com/MSF-soumi/Forum-ensat.git
<h3>Etape(1) :</h3> <h4>Résolution des problémes aprés clonnage </h4>
      #Tout d'abord déplacez-vous dans le projet cloné en local et executez la commande suivante 
            composer upgrade --no-scripts
       Remarque : cette commande peut prendre quelques minutes (génération des fichier manquants)
      #puis créez un fichier s'appel .env et copier le contenu d'un fichier déja existant s'appelle .env.example dans .env
      #executez la commande 
           php artisan key:generate 
       (générer un nouveau clé dans .env)                
<h3>Etape(2) :</h3><h4>Créeation et remplissage de la base de donées </h4> 
       #Créez une base de donées local sur PhpMyadmin ou heidisql sous le nom de 'ensat'
       #Executez la commande php artisan migrate  (pour faire migrer les tables vers votre base de données local)
       #Executez la commande 
           composer dump-autoload
       #puis la commande
            php artisan db:seed 
        (pour que votre base de donées soit automatiquement remplis)
<h3>Etape(3) :</h3><h4>Deploiement du sereveur LARAVEL</h4>
        #Executez la commande 
            php artisan serve 
        #Copier l'URL donné dans votre navigateur .
<h3>Etape(4) : </h3><h4>Testez l'application </h4>
        # Soyez libre pour s'inscrire en cliquant sur le boutton JOIN THE TEAM .
        # Ajoutez de nouveaux postes et commentez les postes des autres participants .
                                                                                                          <h5> MERCI <h5> 
