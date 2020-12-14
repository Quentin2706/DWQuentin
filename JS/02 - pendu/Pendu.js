/**
 * Affiche le tableau entré en paramètre
 * et sépare les lettres par des espaces.
 *
 * @param   array   tab    Tableau contentant une lettre par case.
 *
 * @return  void            Affiche le mot.
 */
function afficherTableau(tab)
{
    let elt; 
    for(elt in tab)
    {
        document.write( tab[elt] + " ");
    }
}

/**
 * méthode qui prend un mot en paramètre d'entrée et qui renvoi un tableau de caractères contenant autant de case que de lettres dans le mot.
 * si Niveau =1 les cases du milieu contiennent des _, les 1eres et dernières lettres restent apparantes
 * sinon Chacune de ces cases contient un _
 *
 * @param string mot
 * @param int niveau   //niveau de difficulté
 * @return void array
 */
function coderMot(mot, niveau)
{
    var tab = mot.split("");
    if (niveau == 1)
    {
        for (let i = 1; i < (tab.length - 1); i++)
        {
            tab[i] = "_";
        }
    }
    else
    {
        for (let i = 0; i < tab.length; i++)
        {
            tab[i] = "_";
        }
    }
    document.write("<br>");
    return tab;
}

// tab = coderMot("test", 1);


function creer_dico()
{
    tabMots= [];
    //Cree le dictionnaire de mots
    tabMots.push("AEROPORT");
    tabMots.push("AFFAIRE");
    tabMots.push("ALBUM");
    tabMots.push("ALPHABET");
    tabMots.push("AMENER");
    tabMots.push("AMPOULE");
    tabMots.push("ANCIEN");
    tabMots.push("ANORAK");
    tabMots.push("ANTENNE");
    tabMots.push("APPAREIL");
    tabMots.push("APPORTER");
    tabMots.push("APPUYER");
    tabMots.push("APRES");
    tabMots.push("ARC");
    tabMots.push("ARMOIRE");
    tabMots.push("ARRET");
    tabMots.push("ARRIERE");
    tabMots.push("ARRIVER");
    tabMots.push("ARROSER");
    tabMots.push("ASSIETTE");
    tabMots.push("ASSIS");
    tabMots.push("ATTACHER");
    tabMots.push("ATTENDRE");
    tabMots.push("ATTENTION");
    tabMots.push("ATTERRIR");
    tabMots.push("ATTRAPER");
    tabMots.push("AU");
    tabMots.push("AUTANT");
    tabMots.push("AUTO");
    tabMots.push("AUTOMOBILISTE");
    tabMots.push("AUTORADIO");
    tabMots.push("AUTOUR");
    tabMots.push("AVANCER");
    tabMots.push("AVANT");
    tabMots.push("AVEC");
    tabMots.push("AVION");
    tabMots.push("BAGAGE");
    tabMots.push("BAGUETTE");
    tabMots.push("BAIGNER");
    tabMots.push("BÂILLER");
    tabMots.push("BALLE");
    tabMots.push("BANC");
    tabMots.push("BARBE");
    tabMots.push("BARBOTER");
    tabMots.push("BARQUE");
    tabMots.push("BARRE");
    tabMots.push("BARREAU");
    tabMots.push("BAS");
    tabMots.push("BATEAU");
    tabMots.push("BEAUCOUP");
    tabMots.push("BIBLIOTHEQUE");
    tabMots.push("BLANC");
    tabMots.push("BLEU");
    tabMots.push("BOIS");
    tabMots.push("BOITE");
    tabMots.push("BONDIR");
    tabMots.push("BONNET");
    tabMots.push("BORD");
    tabMots.push("BOSSER");
    tabMots.push("BOTTE");
    tabMots.push("BOUCHER");
    tabMots.push("BOUCHON");
    tabMots.push("BOUDER");
    tabMots.push("BOUGER");
    tabMots.push("BOUSCULER");
    tabMots.push("BOUT");
    tabMots.push("BOUTEILLE");
    tabMots.push("BOUTON");
    tabMots.push("BRAS");
    tabMots.push("BRETELLE");
    tabMots.push("BRICOLAGE");
    tabMots.push("BRUIT");
    tabMots.push("BRUN");
    tabMots.push("BULLES");
    tabMots.push("BUREAU");
    tabMots.push("CABANE");
    tabMots.push("CABINET");
    tabMots.push("CAGOULE");
    tabMots.push("CAHIER");
    tabMots.push("CAISSE");
    tabMots.push("CALME");
    tabMots.push("CAMARADE");
    tabMots.push("CAMESCOPE");
    tabMots.push("CAMION");
    tabMots.push("CANARD");
    tabMots.push("CARNET");
    tabMots.push("CARREAU");
    tabMots.push("CARTABLE");
    tabMots.push("CARTON");
    tabMots.push("CASIER");
    tabMots.push("CASQUE");
    tabMots.push("CASQUETTE");
    tabMots.push("CASSE");
    tabMots.push("CASSER");
    tabMots.push("CASSEROLE");
    tabMots.push("CASSETTE");
    tabMots.push("CATALOGUE");
    tabMots.push("CEDE");
    tabMots.push("CEDEROM");
    tabMots.push("CEINTURE");
    tabMots.push("CERCEAU");
    tabMots.push("CHAINE");
    tabMots.push("CHAISE");
    tabMots.push("CHAISES");
    tabMots.push("CHANSON");
    tabMots.push("CHAPEAU");
    tabMots.push("CHARGER");
    tabMots.push("CHAT");
    tabMots.push("CHAUD");
    tabMots.push("CHAUSSETTE");
    tabMots.push("CHAUSSON");
    tabMots.push("CHAUSSURE");
    tabMots.push("CHEMISE");
    tabMots.push("CHERCHER");
    tabMots.push("CHEVILLE");
    tabMots.push("CHIFFRE");
    tabMots.push("CHOISIR");
    tabMots.push("CHOSE");
    tabMots.push("CHUCHOTER");
    tabMots.push("CHUTE");
    tabMots.push("CIGARETTE");
    tabMots.push("CINQ");
    tabMots.push("CISEAUX");
    tabMots.push("CLASSE");
    tabMots.push("CLAVIER");
    tabMots.push("CLE");
    tabMots.push("CLOU");
    tabMots.push("COIN");
    tabMots.push("COL");
    tabMots.push("COLERE");
    tabMots.push("COLLANT");
    tabMots.push("COLLE");
    tabMots.push("COLLER");
    tabMots.push("COLORIAGE");
    tabMots.push("COLORIER");
    tabMots.push("COMMENCER");
    tabMots.push("COMPARER");
    tabMots.push("COMPTER");
    tabMots.push("CONDUIRE");
    tabMots.push("CONSTRUIRE");
    tabMots.push("CONTE");
    tabMots.push("CONTINUER");
    tabMots.push("CONTRAIRE");
    tabMots.push("CONTRE");
    tabMots.push("COPAIN");
    tabMots.push("COPIER");
    tabMots.push("COQUILLAGE");
    tabMots.push("COQUILLETTE");
    tabMots.push("COQUIN");
    tabMots.push("CORDE");
    tabMots.push("CORPS");
    tabMots.push("COTE");
    tabMots.push("COU");
    tabMots.push("COUCHE");
    tabMots.push("COUDE");
    tabMots.push("COUDRE");
    tabMots.push("COULEUR");
    tabMots.push("COULOIR");
    tabMots.push("COUPER");
    tabMots.push("COURIR");
    tabMots.push("COURONNE");
    tabMots.push("COURT");
    tabMots.push("CRAIE");
    tabMots.push("CRAVATE");
    tabMots.push("CROCHET");
    tabMots.push("CROISSANT");
    tabMots.push("CUBE");
    tabMots.push("CUILLERE");
    tabMots.push("CUISSE");
    tabMots.push("CULOTTE");
    tabMots.push("CURIEUX");
    tabMots.push("CUVETTE");
    tabMots.push("DAME");
    tabMots.push("DANGER");
    tabMots.push("DANS");
    tabMots.push("DANSER");
    tabMots.push("DE");
    tabMots.push("DEBORDER");
    tabMots.push("DEBOUT");
    tabMots.push("DECHIRER");
    tabMots.push("DECOLLER");
    tabMots.push("DECORER");
    tabMots.push("DECOUPAGE");
    tabMots.push("DECOUPER");
    tabMots.push("DEDANS");
    tabMots.push("DEFENDRE");
    tabMots.push("DEHORS");
    tabMots.push("DELTAPLANE");
    tabMots.push("DEMANDER");
    tabMots.push("DEMARRER");
    tabMots.push("DEMOLIR");
    tabMots.push("DEPASSER");
    tabMots.push("DERNIER");
    tabMots.push("DERRIERE");
    tabMots.push("DESCENDRE");
    tabMots.push("DESOBEIR");
    tabMots.push("DESSIN");
    tabMots.push("DESSINER");
    tabMots.push("DETRUIRE");
    tabMots.push("DEUX");
    tabMots.push("DEUXIEME");
    tabMots.push("DEVANT");
    tabMots.push("DICTIONNAIRE");
    tabMots.push("DIFFERENCE");
    tabMots.push("DIFFERENT");
    tabMots.push("DIFFICILE");
    tabMots.push("DIRE");
    tabMots.push("DIRECTEUR");
    tabMots.push("DIRECTRICE");
    tabMots.push("DISCUTER");
    tabMots.push("DISPARAITRE");
    tabMots.push("DISTRIBUER");
    tabMots.push("DIX");
    tabMots.push("DOIGT");
    tabMots.push("DOIGTS");
    tabMots.push("DOMINO");
    tabMots.push("DONNER");
    tabMots.push("DORMIR");
    tabMots.push("DOS");
    tabMots.push("DOSSIER");
    tabMots.push("DOUCHE");
    tabMots.push("DOUCHER");
    tabMots.push("DOUX");
    tabMots.push("DROIT");
    tabMots.push("DU");
    tabMots.push("DUR");
    tabMots.push("EAU");
    tabMots.push("ECARTER");
    tabMots.push("ECHANGER");
    tabMots.push("ECHARPE");
    tabMots.push("ECHASSES");
    tabMots.push("ECHELLE");
    tabMots.push("ECLABOUSSER");
    tabMots.push("ECLAIRER");
    tabMots.push("ECOLE");
    tabMots.push("ECOUTER");
    tabMots.push("ECRAN");
    tabMots.push("ECRASER");
    tabMots.push("ECRIRE");
    tabMots.push("ECRITURE");
    tabMots.push("EFFACER");
    tabMots.push("EFFORT");
    tabMots.push("ELASTIQUE");
    tabMots.push("ELECTRICITE");
    tabMots.push("ELEVE");
    tabMots.push("EMMENER");
    tabMots.push("EMPORTER");
    tabMots.push("ENCORE");
    tabMots.push("ENERVE");
    tabMots.push("ENFANT");
    tabMots.push("ENFILER");
    tabMots.push("ENFONCER");
    tabMots.push("ENGIN");
    tabMots.push("ENLEVER");
    tabMots.push("ENTENDRE");
    tabMots.push("ENTONNOIR");
    tabMots.push("ENTOURER");
    tabMots.push("ENTREE");
    tabMots.push("ENTRER");
    tabMots.push("ENVELOPPE");
    tabMots.push("ENVOYER");
    tabMots.push("EPAIS");
    tabMots.push("EPAULE");
    tabMots.push("EPEE");
    tabMots.push("EQUIPE");
    tabMots.push("ESCABEAU");
    tabMots.push("ESCALADER");
    tabMots.push("ESCALIER");
    tabMots.push("ESCARGOT");
    tabMots.push("ESCARPIN");
    tabMots.push("ESSUYER");
    tabMots.push("ETAGERE");
    tabMots.push("ETANG");
    tabMots.push("ETIQUETTE");
    tabMots.push("ETROIT");
    tabMots.push("ETUDE");
    tabMots.push("ETUDIER");
    tabMots.push("EXPLIQUER");
    tabMots.push("EXTERIEUR");
    tabMots.push("FABRIQUER");
    tabMots.push("FACILE");
    tabMots.push("FAIRE");
    tabMots.push("FATIGUE");
    tabMots.push("FAUTE");
    tabMots.push("FAUTEUIL");
    tabMots.push("FEE");
    tabMots.push("FENETRE");
    tabMots.push("FERMER");
    tabMots.push("FESSE");
    tabMots.push("FEU");
    tabMots.push("FEUILLE");
    tabMots.push("FEUTRE");
    tabMots.push("FICELLE");
    tabMots.push("FIL");
    tabMots.push("FILET");
    tabMots.push("FILLE");
    tabMots.push("FILM");
    tabMots.push("FINIR");
    tabMots.push("FLECHE");
    tabMots.push("FLEUR");
    tabMots.push("FLOTTER");
    tabMots.push("FOIS");
    tabMots.push("FONCE");
    tabMots.push("FOND");
    tabMots.push("FOOTBALL");
    tabMots.push("FORT");
    tabMots.push("FOUILLER");
    tabMots.push("FRAPPER");
    tabMots.push("FREIN");
    tabMots.push("FROID");
    tabMots.push("FUSEE");
    tabMots.push("FUSIL");
    tabMots.push("GAGNER");
    tabMots.push("GANT");
    tabMots.push("GARAGE");
    tabMots.push("GARÇON");
    tabMots.push("GARDER");
    tabMots.push("GARDIEN");
    tabMots.push("GARE");
    tabMots.push("GAUCHE");
    tabMots.push("GENER");
    tabMots.push("GENOU");
    tabMots.push("GENTIL");
    tabMots.push("GLISSER");
    tabMots.push("GOLF");
    tabMots.push("GOMME");
    tabMots.push("GONFLER");
    tabMots.push("GOUTER");
    tabMots.push("GOUTTES");
    tabMots.push("GRAND");
    tabMots.push("GRIMPER");
    tabMots.push("GRIS");
    tabMots.push("GRONDER");
    tabMots.push("GROS");
    tabMots.push("GROUPE");
    tabMots.push("GRUE");
    tabMots.push("GYMNASTIQUE");
    tabMots.push("HABIT");
    tabMots.push("HANCHE");
    tabMots.push("HANDICAPE");
    tabMots.push("HAUT");
    tabMots.push("HELICOPTERE");
    tabMots.push("HEXAGONE");
    tabMots.push("HISTOIRE");
    tabMots.push("HORLOGE");
    tabMots.push("HUIT");
    tabMots.push("HUMIDE");
    tabMots.push("IDEE");
    tabMots.push("ILE");
    tabMots.push("IMAGE");
    tabMots.push("IMITER");
    tabMots.push("IMMEUBLE");
    tabMots.push("IMMOBILE");
    tabMots.push("INONDER");
    tabMots.push("INSEPARABLE");
    tabMots.push("INSTRUMENT");
    tabMots.push("INTERESSANT");
    tabMots.push("INTERIEUR");
    tabMots.push("INTRUS");
    tabMots.push("JALOUX");
    tabMots.push("JAMBES");
    tabMots.push("JAUNE");
    tabMots.push("JEAN");
    tabMots.push("JEU");
    tabMots.push("JOLI");
    tabMots.push("JOUER");
    tabMots.push("JOUET");
    tabMots.push("JUPE");
    tabMots.push("LAC");
    tabMots.push("LACER");
    tabMots.push("LACET");
    tabMots.push("LAINE");
    tabMots.push("LAISSER");
    tabMots.push("LARGE");
    tabMots.push("LAVABO");
    tabMots.push("LAVER");
    tabMots.push("LECTURE");
    tabMots.push("LETTRE");
    tabMots.push("LIERRE");
    tabMots.push("LIGNE");
    tabMots.push("LINGE");
    tabMots.push("LIRE");
    tabMots.push("LISSE");
    tabMots.push("LISTE");
    tabMots.push("LIT");
    tabMots.push("LITRE");
    tabMots.push("LIVRE");
    tabMots.push("LOIN");
    tabMots.push("LONG");
    tabMots.push("LUMIERE");
    tabMots.push("LUNETTES");
    tabMots.push("MADAME");
    tabMots.push("MAGAZINE");
    tabMots.push("MAGICIEN");
    tabMots.push("MAGIE");
    tabMots.push("MAGNETOSCOPE");
    tabMots.push("MAILLOT");
    tabMots.push("MAIN");
    tabMots.push("MAINS");
    tabMots.push("MAISON");
    tabMots.push("MAITRE");
    tabMots.push("MAITRESSE");
    tabMots.push("MAL");
    tabMots.push("MALADROIT");
    tabMots.push("MANCHE");
    tabMots.push("MANQUER");
    tabMots.push("MANTEAU");
    tabMots.push("MARCHE");
    tabMots.push("MARIONNETTE");
    tabMots.push("MARTEAU");
    tabMots.push("MATELAS");
    tabMots.push("MATERNELLE");
    tabMots.push("MELANGER");
    tabMots.push("MEME");
    tabMots.push("MENSONGE");
    tabMots.push("MESURER");
    tabMots.push("METAL");
    tabMots.push("METRE");
    tabMots.push("METTRE");
    tabMots.push("MEUBLE");
    tabMots.push("MICRO");
    tabMots.push("MIEUX");
    tabMots.push("MILIEU");
    tabMots.push("MINE");
    tabMots.push("MODELE");
    tabMots.push("MOINS");
    tabMots.push("MONTAGNE");
    tabMots.push("MONTER");
    tabMots.push("MONTRER");
    tabMots.push("MORCEAU");
    tabMots.push("MOT");
    tabMots.push("MOTEUR");
    tabMots.push("MOTO");
    tabMots.push("MOUCHOIR");
    tabMots.push("MOUFLE");
    tabMots.push("MOUILLE");
    tabMots.push("MOUILLER");
    tabMots.push("MOULIN");
    tabMots.push("MOUSSE");
    tabMots.push("MOYEN");
    tabMots.push("MUET");
    tabMots.push("MULTICOLORE");
    tabMots.push("MUR");
    tabMots.push("MUSCLE");
    tabMots.push("MUSIQUE");
    tabMots.push("NAGER");
    tabMots.push("NENUPHAR");
    tabMots.push("NEUF");
    tabMots.push("NŒUD");
    tabMots.push("NOIR");
    tabMots.push("NOM");
    tabMots.push("NOMBRE");
    tabMots.push("NOUVEAU");
    tabMots.push("NU");
    tabMots.push("NUMERO");
    tabMots.push("OBEIR");
    tabMots.push("OBJET");
    tabMots.push("OBLIGER");
    tabMots.push("ONGLE");
    tabMots.push("ORCHESTRE");
    tabMots.push("ORDINATEUR");
    tabMots.push("ORDRE");
    tabMots.push("OURS");
    tabMots.push("OUTIL");
    tabMots.push("OUVRIR");
    tabMots.push("PAGE");
    tabMots.push("PAIRE");
    tabMots.push("PANNE");
    tabMots.push("PANTALON");
    tabMots.push("PAPIER");
    tabMots.push("PARACHUTE");
    tabMots.push("PARCOURS");
    tabMots.push("PAREIL");
    tabMots.push("PARKING");
    tabMots.push("PARLER");
    tabMots.push("PARTAGER");
    tabMots.push("PARTIR");
    tabMots.push("PAS");
    tabMots.push("PASSERELLE");
    tabMots.push("PATAUGER");
    tabMots.push("PEDALO");
    tabMots.push("PEINDRE");
    tabMots.push("PEINTURE");
    tabMots.push("PELUCHE");
    tabMots.push("PENTE");
    tabMots.push("PERCER");
    tabMots.push("PERDRE");
    tabMots.push("PERLE");
    tabMots.push("PERSONNE");
    tabMots.push("PETIT");
    tabMots.push("PEU");
    tabMots.push("PEUR");
    tabMots.push("PHOTO");
    tabMots.push("PIED");
    tabMots.push("PIEDS");
    tabMots.push("PILOTE");
    tabMots.push("PINCEAU");
    tabMots.push("PION");
    tabMots.push("PLACARD");
    tabMots.push("PLAFOND");
    tabMots.push("PLAGE");
    tabMots.push("PLANCHE");
    tabMots.push("PLÂTRE");
    tabMots.push("PLEUVOIR");
    tabMots.push("PLI");
    tabMots.push("PLIAGE");
    tabMots.push("PLIER");
    tabMots.push("PLONGEOIR");
    tabMots.push("PLONGER");
    tabMots.push("PLUIE");
    tabMots.push("PLUS");
    tabMots.push("PNEU");
    tabMots.push("POCHE");
    tabMots.push("POIGNET");
    tabMots.push("POING");
    tabMots.push("POINT");
    tabMots.push("POINTE");
    tabMots.push("POINTU");
    tabMots.push("POISSON");
    tabMots.push("POLI");
    tabMots.push("POMPIERS");
    tabMots.push("PONT");
    tabMots.push("PORTE");
    tabMots.push("PORTEMANTEAU");
    tabMots.push("PORTER");
    tabMots.push("POSER");
    tabMots.push("POSTER");
    tabMots.push("POT");
    tabMots.push("POUBELLE");
    tabMots.push("POUCE");
    tabMots.push("POUSSER");
    tabMots.push("POUVOIR");
    tabMots.push("PREMIER");
    tabMots.push("PRENDRE");
    tabMots.push("PRENOM");
    tabMots.push("PREPARER");
    tabMots.push("PRES");
    tabMots.push("PRESENT");
    tabMots.push("PRESQUE");
    tabMots.push("PRESSER");
    tabMots.push("PRETER");
    tabMots.push("PRINCE");
    tabMots.push("PRISES");
    tabMots.push("PRIVER");
    tabMots.push("PROMETTRE");
    tabMots.push("PROPRE");
    tabMots.push("PUNAISE");
    tabMots.push("PUNIR");
    tabMots.push("PUZZLE");
    tabMots.push("PYJAMA");
    tabMots.push("PYRAMIDE");
    tabMots.push("QUAI");
    tabMots.push("QUATRE");
    tabMots.push("QUESTION");
    tabMots.push("RACONTER");
    tabMots.push("RADIATEUR");
    tabMots.push("RADIO");
    tabMots.push("RAME");
    tabMots.push("RAMPE");
    tabMots.push("RAMPER");
    tabMots.push("RANGER");
    tabMots.push("RATER");
    tabMots.push("RAYURE");
    tabMots.push("RECEVOIR");
    tabMots.push("RECITER");
    tabMots.push("RECOMMENCER");
    tabMots.push("RECREATION");
    tabMots.push("RECULER");
    tabMots.push("REFUSER");
    tabMots.push("REGARDER");
    tabMots.push("REINE");
    tabMots.push("REMETTRE");
    tabMots.push("REMPLACER");
    tabMots.push("REMPLIR");
    tabMots.push("RENTREE");
    tabMots.push("RENTRER");
    tabMots.push("RENVERSER");
    tabMots.push("REPARER");
    tabMots.push("REPETER");
    tabMots.push("REPONDRE");
    tabMots.push("RESPIRER");
    tabMots.push("RESSEMBLER");
    tabMots.push("RESTER");
    tabMots.push("RETARD");
    tabMots.push("REUSSIR");
    tabMots.push("REVENIR");
    tabMots.push("RIDEAU");
    tabMots.push("ROBE");
    tabMots.push("ROBINET");
    tabMots.push("ROI");
    tabMots.push("ROND");
    tabMots.push("ROUE");
    tabMots.push("ROUGE");
    tabMots.push("ROULADE");
    tabMots.push("ROULER");
    tabMots.push("ROUX");
    tabMots.push("RUBAN");
    tabMots.push("RUGUEUX");
    tabMots.push("SAGE");
    tabMots.push("SALADIER");
    tabMots.push("SALE");
    tabMots.push("SALLE");
    tabMots.push("SAUT");
    tabMots.push("SAUTER");
    tabMots.push("SAVON");
    tabMots.push("SCIE");
    tabMots.push("SEAU");
    tabMots.push("SEC");
    tabMots.push("SECHER");
    tabMots.push("SEMELLE");
    tabMots.push("SENS");
    tabMots.push("SENTIR");
    tabMots.push("SEPARER");
    tabMots.push("SEPT");
    tabMots.push("SERIEUX");
    tabMots.push("SERPENT");
    tabMots.push("SERRE");
    tabMots.push("SERRER");
    tabMots.push("SERRURE");
    tabMots.push("SERVIETTE");
    tabMots.push("SERVIR");
    tabMots.push("SEUL");
    tabMots.push("SIEGE");
    tabMots.push("SIESTE");
    tabMots.push("SILENCE");
    tabMots.push("SIX");
    tabMots.push("SOL");
    tabMots.push("SOLDAT");
    tabMots.push("SOLIDE");
    tabMots.push("SOMMEIL");
    tabMots.push("SONNER");
    tabMots.push("SONNETTE");
    tabMots.push("SORCIERE");
    tabMots.push("SORTIE");
    tabMots.push("SORTIR");
    tabMots.push("SOUFFLER");
    tabMots.push("SOULEVER");
    tabMots.push("SOULIGNER");
    tabMots.push("SOUPLE");
    tabMots.push("SOURD");
    tabMots.push("SOURIRE");
    tabMots.push("SOUS");
    tabMots.push("SPAGHETTI");
    tabMots.push("SPORT");
    tabMots.push("STYLO");
    tabMots.push("SUIVANT");
    tabMots.push("SUIVRE");
    tabMots.push("SUR");
    tabMots.push("SURFEUR");
    tabMots.push("TABLE");
    tabMots.push("TABLEAU");
    tabMots.push("TABLIER");
    tabMots.push("TABOURET");
    tabMots.push("TACHE");
    tabMots.push("TAILLE");
    tabMots.push("TAILLER");
    tabMots.push("TALON");
    tabMots.push("TAMBOUR");
    tabMots.push("TAMPON");
    tabMots.push("TAPER");
    tabMots.push("TAPIS");
    tabMots.push("TARD");
    tabMots.push("TASSE");
    tabMots.push("TELECOMMANDE");
    tabMots.push("TELEPHONE");
    tabMots.push("TELEVISION");
    tabMots.push("TENDRE");
    tabMots.push("TENIR");
    tabMots.push("TENNIS");
    tabMots.push("TERMINER");
    tabMots.push("TETE");
    tabMots.push("TIRER");
    tabMots.push("TIROIR");
    tabMots.push("TISSU");
    tabMots.push("TITRE");
    tabMots.push("TOBOGGAN");
    tabMots.push("TOILETTE");
    tabMots.push("TOMBER");
    tabMots.push("TORDU");
    tabMots.push("TOT");
    tabMots.push("TOUCHER");
    tabMots.push("TOUR");
    tabMots.push("TOURNER");
    tabMots.push("TOURNEVIS");
    tabMots.push("TRAIN");
    tabMots.push("TRAIT");
    tabMots.push("TRAMPOLINE");
    tabMots.push("TRANQUILLE");
    tabMots.push("TRANSPARENT");
    tabMots.push("TRANSPIRER");
    tabMots.push("TRANSPORTER");
    tabMots.push("TRAVAIL");
    tabMots.push("TRAVAILLER");
    tabMots.push("TRAVERSER");
    tabMots.push("TREMPER");
    tabMots.push("TRICHER");
    tabMots.push("TRICOT");
    tabMots.push("TRIER");
    tabMots.push("TROIS");
    tabMots.push("TROISIEME");
    tabMots.push("TROMPETTE");
    tabMots.push("TROP");
    tabMots.push("TROUER");
    tabMots.push("TROUS");
    tabMots.push("TROUSSE");
    tabMots.push("TUNNEL");
    tabMots.push("UN");
    tabMots.push("UNIFORME");
    tabMots.push("USE");
    tabMots.push("VACHE");
    tabMots.push("VALISE");
    tabMots.push("VASE");
    tabMots.push("VEHICULE");
    tabMots.push("VENIR");
    tabMots.push("VENTRE");
    tabMots.push("VERRE");
    tabMots.push("VERS");
    tabMots.push("VERSER");
    tabMots.push("VERT");
    tabMots.push("VESTE");
    tabMots.push("VETEMENT");
    tabMots.push("VIDER");
    tabMots.push("VIRAGE");
    tabMots.push("VIS");
    tabMots.push("VITE");
    tabMots.push("VITESSE");
    tabMots.push("VITRE");
    tabMots.push("VOITURE");
    tabMots.push("VOIX");
    tabMots.push("VOLER");
    tabMots.push("VOULOIR");
    tabMots.push("VOYAGE");
    tabMots.push("WAGON");
    tabMots.push("XYLOPHONE");
    tabMots.push("ZERO");
    tabMots.push("ZIGZAG");

    return tabMots;
}

function dessinerPendu(nbErreur)
{
    switch (nbErreur)
    {
        case 0:
            document.write( "                      " + "<br>");
            document.write( "                      " + "<br>");
            document.write( "                      " + "<br>");
            document.write( "                      " + "<br>");
            document.write( "                      " + "<br>");
            document.write( "                      " + "<br>");
            document.write( "                      " + "<br>");
            document.write( "                      " + "<br>");
            break;
        case 1:
            document.write( "                      " + "<br>");
            document.write( "                      " + "<br>");
            document.write( "                      " + "<br>");
            document.write( "                      " + "<br>");
            document.write( "                      " + "<br>");
            document.write( "                      " + "<br>");
            document.write( "                      " + "<br>");
            document.write( "     ________         " + "<br>");
            break;
        case 2:
            document.write( "                      " + "<br>");
            document.write( "      |               " + "<br>");
            document.write( "      |               " + "<br>");
            document.write( "      |               " + "<br>");
            document.write( "      |               " + "<br>");
            document.write( "      |               " + "<br>");
            document.write( "      |               " + "<br>");
            document.write( "     _|_______        " + "<br>");
            break;
        case 3:
            document.write( "     ________         " + "<br>");
            document.write( "      |               " + "<br>");
            document.write( "      |               " + "<br>");
            document.write( "      |               " + "<br>");
            document.write( "      |               " + "<br>");
            document.write( "      |               " + "<br>");
            document.write( "      |               " + "<br>");
            document.write( "     _|_______        " + "<br>");
            break;
        case 4:
            document.write( "     ________         " + "<br>");
            document.write( "      |     |         " + "<br>");
            document.write( "      |               " + "<br>");
            document.write( "      |               " + "<br>");
            document.write( "      |               " + "<br>");
            document.write( "      |               " + "<br>");
            document.write( "      |               " + "<br>");
            document.write( "     _|_______        " + "<br>");
            break;
        case 5:
            document.write( "     ________         " + "<br>");
            document.write( "      |     |         " + "<br>");
            document.write( "      |     O         " + "<br>");
            document.write( "      |               " + "<br>");
            document.write( "      |               " + "<br>");
            document.write( "      |               " + "<br>");
            document.write( "      |               " + "<br>");
            document.write( "     _|_______        " + "<br>");
            break;
        case 6:
            document.write( "     ________         " + "<br>");
            document.write( "      |     |         " + "<br>");
            document.write( "      |     O         " + "<br>");
            document.write( "      |     |         " + "<br>");
            document.write( "      |     |         " + "<br>");
            document.write( "      |               " + "<br>");
            document.write( "      |               " + "<br>");
            document.write( "     _|_______        " + "<br>");
            break;
        case 7:
            document.write( "     ________          " + "<br>");
            document.write( "      |     |          " + "<br>");
            document.write( "      |     O          " + "<br>");
            document.write( "      |    /|\\        " + "<br>");
            document.write( "      |     |          " + "<br>");
            document.write( "      |                " + "<br>");
            document.write( "      |                " + "<br>");
            document.write( "     _|_______         " + "<br>");
            break;
        case 8:
            document.write( "     ________          " + "<br>");
            document.write( "      |     |          " + "<br>");
            document.write( "      |     O          " + "<br>");
            document.write( "      |    /|\\        " + "<br>");
            document.write( "      |     |          " + "<br>");
            document.write( "      |    / \\        " + "<br>");
            document.write( "      |                " + "<br>");
            document.write( "     _|_______         " + "<br>");
            break;
        default:
            break;
    }
}
/**
 * méthode qui cherche toutes les occurrences d'une lettre passée en paramètre
 * dans un tableau de caractères passé aussi en paramètre. Cette méthode retourne toutes les positions dans un tableau
 *
 * @param char lettre
 * @param array tab
 * @param int depart  represente le point de depart de la recherche
 * @return array tableau des positions
 */
function testerLettre(lettre, tab, depart)
{
    var tabRec = tab.slice(depart); // on détermine le tableau de recherche en fonction de la position depart.
    //slice, permet d'extraire le sous tableau en fonction de la position
    // exemple slice(['B','O','N','J','O','U','R'], 5) donne ['U','R']
    var res = tabRec.indexOf(lettre); //recherche la lettre dans le tableau
    if (res == -1) // === false pour eviter la confusion entre 0 et false
    {
        return [];
    }
    else
    {
        var reponse = [];
        reponse.push(res + depart);
        var tabPos = reponse.concat(testerLettre(lettre, tab, res + depart + 1)); // concat permet de fusionner le tableau résultat avec le tableau de l'appel recursif
        // concat de [1,2] et [4] donne [1,2,4]
        return tabPos;
    }
}
//  tab =  ["T", "E", "S","T"];
//  tabpos = testerLettre("T", tab, 0);
// document.write(tabpos);

/**
 * méthode qui modifie le tableau passé en paramètre en affectant la lettre à la position passée en paramètre
 *
 * @param char lettre    lettre à placer
 * @param array tab       tableau dans lequel mettre la lettre
 * @param int pos       position à laquelle mettre la lettre
 * @return void             le tableau est mis à jour
 */
function ajouterUneLettre(lettre, tab, pos)
{
    tab[pos] = lettre;
    return tab;
}
// var  tab =  ["T", "_", "_","T"];
// lettre = "E";
// pos = 1;
// var tabfin = ajouterUneLettre(lettre, tab, pos);
//  document.write(tabfin);

/**
 *
 * methode qui permet d'echanger plusieurs valeurs dans un meme tableau et renvoi le tableau remplit
 * renvoi le tableau remplis
 * @param char val    la lettre  a ajouter
 * @param array tab    le tableau dans lequel on doit ajouter les valeurs
 * @param array tabpos le tableau avec les positions qui indique quels valeurs sont echanger dans le tableau initial
 *
 */
function ajouterLesLettres(val, tab, tabpos, niveau)
{
    switch (niveau)
    {
        case 1:
            for (let i = 0; i < tabpos.length; i++) //boucle permettant de parcourir le tableau des positions
                {
                tab = ajouterUneLettre(val, tab, tabpos[i]);
            }
            return tab;
        case 2:
        case 4:
            //on place les lettres une à une de gauche à droite
            for (let i = 0; i < tabpos.length; i++) //on parcours les positions
                {
                var posEtudiee = tabpos[i];
                //on verifie que la position n'est pas occupée
                if (tab[posEtudiee] != val)
                {
                    tab = ajouterUneLettre(val, tab, posEtudiee);
                    return tab;
                }
            }
            return -1; // plus de place pour la lettre
        case 3:
            // on place les lettres aléatoirement
            var test=testerLettre(val,tab,0);    //on cherche les lettres déjà placées dans le mot code
            var pos = tabpos.filter(lettre => test.indexOf(lettre) === -1);
            console.log(pos);
            if(pos.length > 0)        //s'il reste des lettres à placer
            {
                var posetudie = pos[Math.floor(Math.random()*pos.length)];
                tab = ajouterUneLettre(val, tab, posetudie);
                return tab;
            }
            else    //il n'y a plus de lettre à placer
            {
                return -1;
            }
    }
    return -1;
}
// var lettre = "E";
// var  tab =  ["T", "_", "_","T"];
// var tabpos = [1,2];
// var niveau = 3;
// test = ajouterLesLettres(lettre, tab, tabpos, niveau);
// document.write(test);
// console.log(test);
/**
 * Permet d'afficher les caractères contenus dans la liste
 * passée en paramètre
 *
 * @param array listeLettres contenant la liste de lettres à afficher
 */
function afficherMauvaisesLettres(listeLettres)
{
    document.write("<br> Les lettres non présentes sont ");
    var taille = listeLettres.length;
    for (let i = 0; i < taille; i++)
    {
        if (i == taille - 1) // evite la , après la dernière lettre
        {
            document.write( listeLettres[i] + "<br>");
        }
        else
        {
            document.write( listeLettres[i] + ",");
        }
    }
}
// mauvaiselettre = ["a", "b"];
// afficherMauvaisesLettres(mauvaiselettre)

/**
 * méthode qui renvoi un mot en le choisissant au hasard parmi une liste de mots
 *
 * si le niveau =3, le mot sera inférieur ou égal à 4 lettres
 *
 * @param int niv  niveau de difficulté
 * @return  string  mot    le mot choisi le dictionnaire
 *
 */
// function choisirMot()
// {

//     dico = creer_dico();
//     nb = rand(0, count(dico) - 1);
//     return dico[nb]; // ou  return dico[array_rand(dico)]
// }
function choisirMot(niv)
{
    var dico = creer_dico();
    if (niv == 4) // mot <= à 4 lettres
    {
        do
        {
            var nb = Math.floor(Math.random()*dico.length - 1);
        } while (dico[nb].length > 4);
        var mot = dico[nb];
    }
    else
    { //mot au hasard dans tout le dico
        var mot = dico[Math.floor(Math.random()*dico.length)];
    }
    return mot;
}
// niv = 2;
// mot = choisirMot(niv);
// document.write(mot);
/**
 * méthode qui demande une lettre à l’utilisateur, elle vérifie que le caractère saisi est une lettre et le renvoi en majuscule.
 */
function demanderLettre()
{
    do
    {
        document.write ("<br>");
        // do {
        var lettre = prompt("entrez une lettre : ").toUpperCase();
        flag = lettre.charCodeAt(0) >= 65 && lettre.charCodeAt(0) <= 90 ? true : false;
    } while (flag== false || lettre.length != 1); // ou utilisation de  while (!IntlChar::isalpha(lettre))
    return lettre;
}
// lettre = demanderLettre();
// document.write(lettre);
/**
 * méthode qui renvoi 1 si la partie est gagné, -1 si la partie est perdu, 0 si la partie continue.
 * Elle reçoit en paramètre le nombre d’erreurs et le tableau contenant le mot composé
 *
 * @param int nberreur
 * @param array tab 
 * @return void //0 si la partie est toujours en cours, 1 si c'est gagné, -1 sinon
 */
function testerGagner(nberreur, tab)
{
    if (nberreur == 9) // si nb erreur =9, partie perdue
    {
        return -1;
    }
    else if (tab.includes("_") === false) // s'il y a un _ dans le tableau, la partie est en cours
    {
        return 1;
    }
    else
    {
        return 0;
    }
}
// tab = ["T","E","_","T", "E","R"];
// test=testerGagner(9, tab);
// console.log(test);

/**
 * Demande le niveau à l'utilisateur
 *
 * @return int le niveau de difficulté
 */
function choisirNiveau()
{
    do
    {
        var niveau = parseInt(prompt("\t\tNiveau de difficulé :\n"+"\tFacile (1)\t Normal (2)\t Difficile (3)\t Court(4)"));
        if (niveau > 4 || niveau < 1)
        {
            alert("\nSaisie invalide ! Recommencer (rappel : 1 ou 2 ou 3 ou 4) \n");
        }
    } while (niveau > 4 || niveau < 1);
    switch (niveau)
    {
        case "1":
            document.write("<br>Niveau Facile ! C'est parti ! <br>");
            break;
        case "2":
            document.write("<br>Niveau Normal ! C'est parti ! <br>");
            break;
        case "3":
            document.write("<br>Niveau Difficile ! C'est parti ! <br>");
            break;
        case "4":
            document.write("<br>Niveau Court ! C'est parti ! <br>");
            break;
    }
    return niveau;
}

// test=choisirNiveau();
// console.log(test);

/**
 * Permet de gérer la partie
 *
 * @return void
 */
function lancerPartie(niveau)
{
    var motATrouver = choisirMot(niveau); // determine la mot à trouver
    console.log(motATrouver);
    document.write(motATrouver + "<br>");
    var tabMotATrouver = motATrouver.split(""); // toutes les functions travaillent avec des tableaux, on transforme la chaine en tableau
    console.log(tabMotATrouver);
    document.write(tabMotATrouver);
     var motCode = coderMot(motATrouver, niveau);
     var nbErreur = 0; // compte le nombre d'erreur
     var gagne = false;
    var mauvaisesLettres = []; // tableau contenant les mauvaises lettres
     do
    {
         document.write("<br><br>");
         afficherTableau(motCode); // on affiche le mot contenant les _
         dessinerPendu(nbErreur);
         if (mauvaisesLettres.length > 0)
         { //s'il y a des mauvaises lettres, on les affiche
             afficherMauvaisesLettres(mauvaisesLettres);
         }
         var lettre = demanderLettre();
        var lesPositions = testerLettre(lettre, tabMotATrouver, 0); //on recupere toutes les positions de cette lettre dans le mot
         if (lesPositions.length == 0)
        { //la lettre n'est pas dans le mot
             nbErreur++;
             mauvaisesLettres.push(lettre);
        }
         else
         {
    reponse = ajouterLesLettres(lettre, motCode, lesPositions, niveau); //motCode = pour récuperer le tableau mis à jour
             if (reponse == -1) // la lettre ne peut plus etre placée
             {
                nbErreur++;
                mauvaisesLettres.push(lettre);
            }
            else
            {
                motCode = reponse;
            }
        }

        gagne = testerGagner(nbErreur, motCode); // on teste l'état de la partie
        // echo chr(27) . chr(91) . 'H' . chr(27) . chr(91) . 'J'; //permet de vider l'écran
     } while (gagne == 0);
    if (gagne == 1)
    {
        document.write ("Bravo!! vous avez gagné. Le mot était "+motATrouver+"<br>");
    }
    else
    {
        document.write ("Vous avez perdu. Le mot était "+motATrouver+"<br>");
    }
}

var niv = choisirNiveau();
lancerPartie(niv);