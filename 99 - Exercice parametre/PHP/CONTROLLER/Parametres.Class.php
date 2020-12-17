<?php
class Parametres
{
    /*****************Attributs***************** */

    private static $_host;
    private static $_port;
    private static $_dbname;
    private static $_login;
    private static $_pwd;

    /*****************Accesseurs***************** */

    public static function getHost()
    {
        return self::$_host;
    }

    public static function getPort()
    {
        return self::$_port;
    }
    
    public static function getDbname()
    {
        return self::$_dbname;
    }

    public static function getLogin()
    {
        return self::$_login;
    }

    public static function getPwd()
    {
        return self::$_pwd;
    }

    /*****************Autres Méthodes***************** */

    /**
     * Initialise les paramètres de connexion à la base de données
     *
     * @return void
     */
    public static function init()
    {
    //on récupere les paramètres de connection base de données

        if (file_exists("parametre.ini"))
        {
            //ouverture du fichier en lecture seule
            $fp = fopen("parametre.ini", "r");
            //boucle jusqu'à la fin du fichier
            while (!feof($fp))
            {
                //lecture d'une ligne, le contenu est stocké dans un tableau
                $ligne = fgets($fp, 4096);
                if ($ligne) //$ligne = false, si la ligne est vide. cela evite de planter s'il y a des passages à la lignes en fin de fichier
                {
                    //on garde la partie utile (c'est a dire le parametre)
                    $info = explode(":", $ligne);
                    // on enleve le caractere espace à la fin
                    $param[] = substr($info[1], 0, strlen($info[1]) - 2);
                }
            }

            self::$_host = $param[0];
            self::$_port = $param[1];
            self::$_dbname = $param[2];
            self::$_login = $param[3];
            self::$_pwd = $param[4];
        }
    }

}