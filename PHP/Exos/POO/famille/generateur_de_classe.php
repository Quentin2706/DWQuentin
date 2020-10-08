<?php
//Je demande à l'utilsiateur le nom de la classe, le nombre d'attributs ainsi que le nom de ceux-ci

/********************************VERIF A FAIRE****************************** */
$nomClasse = ucfirst(strtolower(readline("Nom de la classe :")));
do {
    $nbrAttributs = readline("Nombre d'attributs :");
} while (!ctype_digit($nbrAttributs));
$tabAttributs = [];
for ($i = 0; $i < $nbrAttributs; $i++) {
    do {
        $nomAttribut = readline("Nom de l'attribut :");
        $tabAttributs[] = $nomAttribut;
    } while (!ctype_alpha($nomAttribut));
}
/*****************Variables***************** */
$extension = '<?php';
$className = "\n\n" . 'class ' . $nomClasse;
$accoladeOuvrante = "\n" . '{';
$accoladeFermante = "\n" . '}';
$ligneVide = "\n\n";
$commentaireAttribut = "\t" . '/*****************Attributs***************** */' . "\n";
$commentaireAccesseurs = "\n\n\t" . '/*****************Accesseurs***************** */';
$commentaireConstructeur = "\t" . '/*****************Constructeur***************** */' . "\n";

$construct = "\n\t" . 'public function __construct(array $options = [])' .
    "\n\t" . '{' .
    "\n\t\t" . 'if (!empty($options)) // empty : renvoi vrai si le tableau est vide' .
    "\n\t\t" . '{' .
    "\n\t\t\t" . '$this->hydrate($options);' .
    "\n\t\t" . '}' .
    "\n\t" . '}';

$hydrate = "\n\t" . 'public function hydrate($data)' .
    "\n\t" . '{' .
    "\n\t\t" . 'foreach ($data as $key => $value)' .
    "\n\t\t" . '{' .
    "\n\t\t\t" . '$methode = "set" . ucfirst($key); //ucfirst met la 1ere lettre en majuscule' .
    "\n\t\t\t" . 'if (is_callable(([$this, $methode]))) // is_callable verifie que la methode existe' .
    "\n\t\t\t" . '{' .
    "\n\t\t\t\t" . '$this->$methode($value);' .
    "\n\t\t\t" . '}' .
    "\n\t\t" . '}' .
    "\n\t" . '}';

$commentaireAutreMethodes = "\n\n\t" . '/*****************Autres Méthodes***************** */' . "\n";

$toString = "\n\t" . '/**' .
    "\n\t" . '* Transforme l\'objet en chaine de caractères' .
    "\n\t" . '*' .
    "\n\t" . '* @return String.' .
    "\n\t" . '*/' .
    "\n\t" . 'public function toString()' .
    "\n\t" . '{' .
    "\n\t\t" . 'return ';

$equalsTo = "\n\t" . '/**' .
    "\n\t" . '* Renvoi vrai si l\'objet en paramètre est égal à l\'objet appelant' .
    "\n\t" . '*' .
    "\n\t" . '* @param [type] $obj' .
    "\n\t" . '* @return bool' .
    "\n\t" . '*/' .
    "\n\t" . 'public function equalsTo ($obj)' .
    "\n\t" . '{' .
    "\n\t\t" . 'return true;' .
    "\n\t" . '}';

$compareTo = "\n\t" . '/**' .
    "\n\t" . '* Compare 2 objets' .
    "\n\t" . '* Renvoi 1 si le 1er est >' .
    "\n\t" . '*' . "\t\t" . '0 si ils sont égaux' .
    "\n\t" . '*' . "\t\t" . '-1 si le 1er est <' .
    "\n\t" . '*' .
    "\n\t" . '* @param [type] $obj1' .
    "\n\t" . '* @param [type] $obj2' .
    "\n\t" . '* @return void' .
    "\n\t" . '*/' .
    "\n\t" . 'public function compareTo ($obj1, $obj2)' .
    "\n\t" . '{' .
    "\n\t\t" . 'return 0;' .
    "\n\t" . '}';

//Ouverture du fichier
$fp = fopen('./' . $nomClasse . '.Class.php', "w");

//Ecriture dans le fichier
fputs($fp, $extension);
fputs($fp, $className);
fputs($fp, $accoladeOuvrante);
fputs($fp, $ligneVide);
fputs($fp, $commentaireAttribut);
//Boucle de création d'attributs
for ($i = 0; $i < $nbrAttributs; $i++) {
    $creationAttribut = "\n" . 'private $_' . $tabAttributs[$i] . ';';
    fputs($fp, $creationAttribut);
}
fputs($fp, $commentaireAccesseurs);
fputs($fp, $ligneVide);
//Boucle de création de setter et getter
for ($i = 0; $i < $nbrAttributs; $i++) {
    $setterGetter = 'public function get' . ucfirst($tabAttributs[$i]) . '()' . "\n" . '{' . "\n\t" . 'return $this->_' . $tabAttributs[$i] . ';' . "\n" . '}' . "\n\n"
    . 'public function set' . ucfirst($tabAttributs[$i]) . '($' . $tabAttributs[$i] . ')' . "\n" . '{' . "\n\t" . '$this->_' . $tabAttributs[$i] . ' = $' . $tabAttributs[$i] . ';' . "\n" . '}' . "\n\n";
    fputs($fp, $setterGetter);
}
fputs($fp, $commentaireConstructeur);
fputs($fp, $construct);
fputs($fp, $hydrate);
fputs($fp, $commentaireAutreMethodes);
fputs($fp, $toString);
//Boucle de creation du toString
for ($i = 0; $i < $nbrAttributs; $i++) {
    $contenuToString = '"' . ucfirst($tabAttributs[$i]) . ' :"' . '.$this->get' . ucfirst($tabAttributs[$i]) . '()'.'."\n"'."\n\t\t";
    fputs($fp, $contenuToString);
    if ($i == count($tabAttributs) - 1) {
        fputs($fp, ";");
    } else {
        fputs($fp, ".");
    }
}
fputs($fp, "\n\t" . '}');
fputs($fp, $equalsTo);
fputs($fp, $compareTo);
fputs($fp, $accoladeFermante);

//Fermeture du fichier
fclose($fp);
