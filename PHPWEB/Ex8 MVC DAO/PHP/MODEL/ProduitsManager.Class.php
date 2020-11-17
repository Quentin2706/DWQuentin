<?php
class ProduitsManager
{
    public static function add(Produits $obj)
    {
        $db = DbConnect::getDb();
        $q = $db -> prepare('INSERT INTO Produits (libelleProduit, prix, dateDePeremption) VALUES (:libelleProduit,:prix,dateDePeremption)');
        $q->bindValue(':libelleProduit', $obj->getLibelleproduit());
        $q->bindValue(':prix', $obj->getPrix());
        $q->bindValue(':dateDePeremption', $obj->getDateDePeremption());
        $q->execute();
    }

    public static function update(Produits $obj)
    {
        $db = DbConnect::getDb();
        $q-> $db->prepare('UPDATE Produits SET libellePr