<?php
class LigneTicket
{
    /*******************************Attributs*******************************/
    private $_idLigneTicket;
    private $_quantite;
    private $_prixHt;
    private $_montantTVA;
    private $_idTicket;
    private $_idArticle;
    private $_Ticket;
    private $_Article;


    /*******************************Accesseurs*******************************/
    public function getidLigneTicket()
    {
        return $this->_idLigneTicket;
    }
    public function setidLigneTicket($_idLigneTicket)
    {
        $this->_idLigneTicket = $_idLigneTicket;

    }
    public function getquantite()
    {
        return $this->_quantite;
    }
    public function setquantite($_quantite)
    {
        $this->_quantite = $_quantite;

        return $this;
    }
    public function getprixHt()
    {
        return $this->_prixHt;
    }
    public function setprixHt($_prixHt)
    {
        $this->_prixHt = $_prixHt;

        return $this;
    }
    public function getmontantTVA()
    {
        return $this->_montantTVA;
    }
    public function setmontantTVA($_montantTVA)
    {
        $this->_montantTVA = $_montantTVA;

        return $this;
    }
    public function getidTicket()
    {
        return $this->_idTicket;
    }
    public function setidTicket($_idTicket)
    {
        $this->_idTicket = $_idTicket;
        $this->setTicket(TicketManager::findById($_idTicket));
    }
    public function getidArticle()
    {
        return $this->_idArticle;
    }
    public function setidArticle($_idArticle)
    {
        $this->_idArticle = $_idArticle;
        $this->setArticle(ArticleManager::getById($_idArticle));

    }
    public function getTicket()
    {
        return $this->_Ticket;
    }

    public function setTicket($_Ticket)
    {
        $this->_Ticket = $_Ticket;
    }

    public function getArticle()
    {
        return $this->_Article;
    }

    public function setArticle($_Article)
    {
        $this->_Article = $_Article;
    }
    /*******************************Construct*******************************/
    public function __construct(array $options = [])
    {
        if (!empty($options)) {
            $this->hydrate($options);
        }
    }

    public function hydrate($data)
    {
        foreach ($data as $key => $value) {
            $methode = "set" . ucfirst($key);
            if (is_callable(([$this, $methode]))) {
                $this->$methode($value);
            }
        }
    }

    /****************************Autres méthodes****************************/

    /******************************AFFICHAGE DE TOUTE LA CLASSE ******************************/
    public function toString()
    {
        return $this->getidLigneTicket()."\n" . $this->getquantite()."\n" . $this->getprixHT()."\n" . $this->getmontantTVA()."\n". $this->getIdTicket()."\n". $this->getArticle()->getLibelleArticle();
    }


    /*******FUNCTION QUI PERMET DE CALCUL LE MONTANT TTC DE CHAQUE LIGNE DU TICKET*********/

    static public function calculTTC($prixHt, $montantTva, $quantite)
    {
        $total = ($prixHt+($prixHt*$montantTva))*$quantite;
        return $total;
    }

    
}
