<?php
class Parametres 
{
    private static $host;
    private static $port;
    private static $dbname;
    private static $login;
    private static $pwd;

    public static function getHost()
    {
        return self::$host; 
    }

    public static function getPort()
    {
        return self::$port;
    }
    public static function getDbname()
    {
        return self::$dbname; 
    }

    public static function getLogin()
    {
        return self::$login;
    }

    public static function getPwd()
    {
        return self::$pwd; 
    }

    public static function init()
    {
//on récupere les paramètres de connection base de données

        if(file_exists("parametres.ini"))
        {
            //ouverture du fichier en lecture seule
            $fp = fopen("parametres.ini", "r");
            // boucle jusqu'a la fin du fichier
            while(!feof($fp))
            {
                // lecture d'une ligne, le contenu est socké dans un tableau
                $ligne = fgets($fp, 4096);
                if ($ligne) //$ligne = false, si la ligne est vide. cela evite de planter s'il y a des passages à la lignes en fin de fichier
                {
                    //on garde la partie utile (c'est a dire le parametre)
                    $info = explode(":", $ligne);
                    // on enleve le caractere espace à la fin
                    $param[] = substr($info[1], 0, strlen($info[1]) - 2);
                }
            }

            self::$host = $param[0];
            self::$port = $param[1];
            self::$dbname = $param[2];
            self::$login = $param[3];
            self::$pwd = $param[4];
            }
        }
}

