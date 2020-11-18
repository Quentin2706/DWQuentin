<?php

/*********************************************************************************************************/
/**********************************  GENERATION DE CLASSE  ***********************************************/
/******************************************************************************************************* */


 /**
 * Méthode qui crée l'entête de la classe
 * Prend en paramètre le nom de la classe, le nom de la classe mere le fichier
 * et un booleen indiquant si il y a un heritage 
 * dans lequel on crée la classe
 * 
 * @param String  $nom
 * @param Resousce $fichier
 * @return Void
 */
function genereEntete($nom,$fichier)
{
    $nom=ucfirst($nom);
    $entete='<?php'."\n\nclass $nom ";
    $entete.="\n{\n\n";
    fputs($fichier,$entete); 
}

/**
 * Méthode qui crée l'affichage des attributs de la classe
 * Prend en paramètre le tableau d'attribut et le fichier 
 * dans lequel on crée la classe
 * 
 * @param Array  $tabAtt
 * @param Resousce $fichier
 * @return void
 * 
 */
function affichageAttributs($tabAtt,$fichier)
{
    $sepAt="\t/*****************Attributs***************** */\n\n";  
    for($i=0;$i<count($tabAtt);$i++)
    {
            $sepAt.="\t".'private $_'.$tabAtt[$i].";\n";
    }
    fputs($fichier,$sepAt);
}

/**
 * Méthode qui crée l'affichage du constructeur de classe
 * Prend en paramètre le fichier dans lequel on crée la classe
 * 
 * @param Resousce $fichier
 * @return Void
 */
function genereConstruct($fichier)
{
    $cons= "\n\t/*****************Constructeur***************** */\n\n".
           "\t".'public function __construct(array $options = [])'."\n".
           "\t{\n ".
           "\t\tif (!empty(".'$options'.")) // empty : renvoi vrai si le tableau est vide\n".
           "\t\t{\n".
           "\t\t\t".'$this->hydrate($options);'."\n".
           "\t\t}\n".  
           "\t}\n".
           "\t".'public function hydrate($data)'."\n".
           "\t{\n ".
           "\t\t".'foreach ($data as $key => $value)'."\n".
           "\t\t{\n ".
           "\t\t\t".'$methode = "set".ucfirst($key); //ucfirst met la 1ere lettre en majuscule'."\n". 
           "\t\t\t".'if (is_callable(([$this, $methode]))) // is_callable verifie que la methode existe'."\n". 
           "\t\t\t{\n".
           "\t\t\t\t".'$this->$methode($value);'."\n".
           "\t\t\t}\n".
           "\t\t}\n".
           "\t}\n";

        fputs($fichier,$cons);
}

/**
 * Méthode qui crée l'affichage des Accesseurs de la classe
 * Prend en paramètre le tableau d'attribut et le fichier 
 * dans lequel on crée la classe
 * 
 * @param Array  $tabAtt
 * @param Resousce $fichier
 * @return Void
 */
function genereSetters($tabAtt,$fichier)
{
    $get="\n\t/***************** Accesseurs ***************** */\n\n";
    for($i=0;$i<count($tabAtt);$i++)
    {
            $get.="\n\t".'public function get'.ucfirst($tabAtt[$i])."()".
                  "\n\t{".
                  "\n\t\treturn ".'$this->_'.$tabAtt[$i].";\n".  
                  "\t}\n".
                  "\n\t".'public function set'.ucfirst($tabAtt[$i])."($".$tabAtt[$i].")".
                  "\n\t{".
                  "\n\t\t".'$this->_'.$tabAtt[$i].'=$'.$tabAtt[$i].';'."\n".  
                  "\t}\n";
    }
    fputs($fichier,$get);
}

/**
 * Méthode qui crée l'affichage de la méthode toString() de la classe
 * Prend en paramètre le tableau d'attribut et le fichier 
 * dans lequel on crée la classe
 * 
 * @param Array  $tabAtt
 * @param Resousce $fichier
 * @return Void
 */
function genereToString($tabAt,$fichier)
{
    $rep="";
    for ($i=0;$i<count($tabAt);$i++)
    {
        $rep.='"'.ucfirst($tabAt[$i]).' : ".$this->get'.ucfirst($tabAt[$i]).'().';
    }
    $rep.='"\n"';
    $toStr="\n\t/*****************Autres Méthodes***************** */\n\n".
            "\t/**\n".
            "\t* Transforme l'objet en chaine de caractères\n".
            "\t*\n".
            "\t* @return String\n".
            "\t*/\n".
            "\tpublic function toString()\n".
            "\t{\n".
            "\t\treturn ".$rep.";\n".
            "\t}\n";
    fputs($fichier,$toStr);
}

/**
 * Méthode qui crée l'affichage de la méthode equalsTo()de la classe
 * Prend en paramètre le fichier dans lequel on crée la classe
 * 
 * @param Resousce $fichier
 * @return Void
 */
function genereEqualsTo($fichier)
{
     $toStr="\n\n\t\n".
            "\t/* Renvoit Vrai si lobjet en paramètre est égal \n".
            "\t* à l'objet appelant\n".
            "\t*\n".
            "\t* @param [type] ".'$obj'."\n".
            "\t* @return bool\n".
            "\t*/\n".
            "\tpublic function equalsTo(".'$obj'.")\n".
            "\t{\n".
            "\t\treturn;\n".
            "\t}\n";
    fputs($fichier,$toStr);
}

/**
 * Méthode qui crée l'affichage de la méthode compareTo()de la classe
 * Prend en paramètre le fichier dans lequel on crée la classe
 * 
 * @param Resousce $fichier
 * @return Void
 */
function genereCompareTo($fichier)
{
     $toStr="\n\n\t/**\n".
            "\t* Compare l'objet à un autre\n".
            "\t* Renvoi 1 si le 1er est >\n".
            "\t*        0 si ils sont égaux\n".
            "\t*      - 1 si le 1er est <\n".
            "\t*\n".
            "\t* @param [type] ".'$obj1'."\n".
            "\t* @param [type] ".'$obj2'."\n".
            "\t* @return Integer\n".
            "\t*/\n".
            "\tpublic function compareTo(".'$obj'.")\n".
            "\t{\n".
            "\t\treturn;\n".
            "\t}\n";
    fputs($fichier,$toStr);
}


/********************************* FIN DES FONCTIONS********************************************** */





function genereClasse($chemin,$nomProjet,$nomTable,$colonne)
{
    // Genere le nom et ouvre le fichier contenant la classe
    $nomFichier = $chemin.'/'.$nomProjet.'/PHP/CONTROLLER/'.$nomTable.'Class.php';
    $fp=fopen($nomFichier,"w");

    // Affichage de l'entête du fichier
    genereEntete($nomTable,$fp);
    // Affichage des attributs
    affichageAttributs($colonne,$fp);
    // Affichage des getters setters
    genereSetters($colonne,$fp);
    // Affichage du constructeur
    genereConstruct($fp);
    // Affichage la fonction toString
    genereToString($colonne,$fp);
    // Affichage la fonction equalsTo
    genereEqualsTo($fp);
    // Affiche la fonction CompareTo
    genereCompareTo($fp);
    //Parenthèse de la fin de classe
    fputs($fp,'}');
    //Fermeture du fichier contenant la classe
    fclose($fp);
}
?>