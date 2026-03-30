Contexte : 
En utilisant le schéma de la base de données de l'application de livraison présenté en section 
1, écrivez les requêtes SQL suivantes. Testez chaque requête dans MySQL Workbench. 
Requêtes à écrire : 
1. Afficher le nom et l'email de tous les utilisateurs de type 'client' 
SELECT nom, email FROM utilisateurs WHERE type = 'client';

2. Afficher tous les plats dont le prix est inférieur à 15€, triés du moins cher au plus cher
SELECT nom, prix, categorie FROM plats WHERE prix < 15 ORDER BY prix ASC;

3. Compter le nombre de commandes par statut ('livré', 'en cours', 'annulé')
SELECT statut, COUNT(*) AS nbrCommandes
FROM commandes
GROUP BY
    statut;

4. Afficher les 3 restaurants avec la meilleure note moyenne (ORDER BY + LIMIT) 
SELECT nom, ville, note FROM restaurants ORDER BY note DESC
LIMIT 3;

5. Calculer le chiffre d'affaires total et le panier moyen de toutes les commandes livrées ;
 
SELECT  SUM(total) AS chiffre_affaires, AVG(total) AS panier_moyen
FROM commandes
WHERE statut ='livre';

6. Afficher tous les plats dont le nom contient le mot 'poulet' (LIKE)
SELECT nom, prix, categorie FROM plats WHERE nom LIKE '%poulet%';