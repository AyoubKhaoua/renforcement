1 - Afficher le nom du client et le total pour chaque commande
INNER JOIN commandes + utilisateurs

SELECT u.nom AS client, c.total, c.statut
FROM commandes c
    INNER JOIN utilisateurs u ON c.client_id = u.id;

2 - Afficher le nom du restaurant et le nombre de commandes reçues,
même pour les restaurants sans commande

SELECT r.nom AS restaurant, r.ville, COUNT(c.id) AS nbrCommandes
FROM restaurants r
    LEFT JOIN commandes c ON c.restaurant_id = r.id;

3 - Lister toutes les commandes livrées avec le nom du client,
le nom du livreur et le nom du restaurant;

SELECT
    u_client.nom AS client,
    u_livreur.nom AS livreur,
    r.nom AS restaurant
FROM
    commandes c
    INNER JOIN utilisateurs u_client ON c.client_id = u_client.id
    INNER JOIN utilisateurs u_livreur ON c.livreur_id = u_livreur.id
    INNER JOIN restaurants r ON c.restaurant_id = r.id
WHERE
    c.statut = 'livre';

4 - Afficher les plats commandés au moins une fois avec leur quantité totale vendue "JOIN + 
GROUP BY + SUM";

SELECT p.nom AS plat, p.prix, SUM(lc.quantite) AS quantiteVende
FROM plats p
    INNER JOIN lignes_commande lc ON lc.plat_id = p.id
GROUP BY
    p.id,
    p.nom,
    p.prix
ORDER BY quantiteVende DESC;