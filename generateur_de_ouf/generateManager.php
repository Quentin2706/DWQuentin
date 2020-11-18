<?php

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
function genereEnt($nom,$fichier)
{
    $nom.="Manager";
    $entete='<?php'."\n\nclass $nom ";
    $entete.="\n{\n";
    fputs($fichier,$entete); 
}

function genereAdd($fichier,$nom,$tabAtt)
{
    $lib=$val='';
    for($i=1;$i<count($tabAtt);$i++)
    {
        $lib.= $tabAtt[$i];
        $val.=':'.$tabAtt[$i];
        if ($i!=(count($tabAtt)-1))
        {
            $lib.=',';
            $val.=',';
        }
    }

    $cons= "\t".'public static function add('.$nom.' $obj)'."\n".
           "\t{\n ".
           "\t\t".'$db=DbConnect::getDb();'."\n".
           "\t\t".'$q=$db->prepare("INSERT INTO '.$nom.' ('.$lib.') VALUES ('.$val.')");'."\n";
           foreach($tabAtt as $att)
           {
               $cons.="\t\t".'$q->bindValue(":'.$att.'", $obj->get'.ucfirst($att).'());'."\n";
           }
     $cons.="\t\t".'$q->execute();'."\n".
            "\t}\n\n";
    fputs($fichier,$cons);
}


function genereUpdate($fichier,$nom,$tabAtt)
{     
     $bind=$lib="";                
     $cons= "\t".'public static function update('.$nom.' $obj)'."\n".
            "\t{\n ".
            "\t\t".'$db=DbConnect::getDb();'."\n".
            "\t\t".'$q=$db->prepare("UPDATE '.$nom.' SET ';
            for($i=1;$i<count($tabAtt);$i++)
            {
                $lib.=$tabAtt[$i].'=:'.$tabAtt[$i];
                $bind.="\t\t".'$q->bindValue(":'.$tabAtt[$i].'", $obj->get'.ucfirst($tabAtt[$i]).'());'."\n";
                if ($i!=(count($tabAtt)-1))
                {
                    $lib.=',';
                }
            }
      $cons.= $lib.' WHERE '.$tabAtt[0].'=:'.$tabAtt[0].'");'."\n".
            $bind.
            "\t\t".'$q->execute();'."\n".
            "\t}\n";
        fputs($fichier,$cons);
}

function genereDelete($fichier,$nom,$tabAtt)
{                    
    $cons= "\t".'public static function delete('.$nom.' $obj)'."\n".
            "\t{\n ".
            "\t\t".'$db=DbConnect::getDb();'."\n".
            "\t\t".'$db->exec("DELETE FROM '.$nom.' WHERE '.$tabAtt[0].'=" .$obj->get'.ucfirst($tabAtt[0]).'());'."\n".
            "\t}\n";
            fputs($fichier,$cons);
}

function genereFindById($fichier, $nom, $tabAtt)
{
    $cons= "\t".'public static function findById($id)'."\n".
    "\t{\n ".
    "\t\t".'$db=DbConnect::getDb();'."\n".
    "\t\t".'$id = (int) $id;'."\n".
    "\t\t".'$q=$db->query("SELECT * FROM '.$nom.' WHERE '.$tabAtt[0].' =".$id);'."\n".
    "\t\t".'$results = $q->fetch(PDO::FETCH_ASSOC);'."\n".
    "\t\t".'if($results != false)'."\n".
    "\t\t".'{'."\n".
    "\t\t\t".'return new '.$nom.'($results);'."\n".
    "\t\t".'}'."\n".
    "\t\t".'else'."\n".
    "\t\t".'{'."\n".
    "\t\t\t".'return false;'."\n".
    "\t\t".'}'."\n".
    "\t".'}'."\n";
    fputs($fichier,$cons);
}

function genereGetList($fichier, $nom)
{
    $cons= "\t".'public static function getList()'."\n".
    "\t{\n ".
    "\t\t".'$db=DbConnect::getDb();'."\n".
    "\t\t".'$liste = [];'."\n".
    "\t\t".'$q = $db->query("SELECT * FROM '.$nom.'");'."\n".
    "\t\t".'while($donnees = $q->fetch(PDO::FETCH_ASSOC))'."\n".
    "\t\t".'{'."\n".
    "\t\t\t".'if($donnees != false)'."\n".
    "\t\t\t".'{'."\n".
    "\t\t\t\t".'$liste[] = new '.$nom.'($donnees);'."\n".
    "\t\t\t".'}'."\n".
    "\t\t".'}'."\n".
    "\t\t".'return $liste;'."\n".
    "\t".'}'."\n";
    fputs($fichier,$cons);
}


// Genere le nom et ouvre le fichier contenant la classe

function genereManager($chemin,$nomProjet,$nomTable,$tabAtt)
{
    $nomFichier = $chemin.'/'.$nomProjet.'/PHP/MODEL/'.$nomTable."Manager.Class.php";
    $nomObj=ucfirst($nomTable);
    $fp=fopen($nomFichier,"w");

    genereEnt($nomObj,$fp);
    genereAdd($fp,$nomObj,$tabAtt);
    genereUpdate($fp,$nomObj,$tabAtt);
    genereDelete($fp,$nomObj,$tabAtt);
    genereFindById($fp,$nomObj,$tabAtt);
    genereGetList($fp,$nomObj);
    fputs($fp,'}');
    fclose($fp);
}


?>