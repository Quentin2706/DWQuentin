<?php
class Paiement
{
    /*******************************Attributs*******************************/
    private $_idPaiement;
    private $_idModePaiement;
    private $_idTicket;
    private $_prixTTC;
    private $_ModePaiement;
    private $_Ticket;


    /*******************************Accesseurs*******************************/
   
    public function getidPaiement()
    {
        return $this->_idPaiement;
    }
    public function setidPaiement($_idPaiement)
    {
        $this->_idPaiement = $_idPaiement;

        return $this;
    }
    public function getidModePaiement()
    {
        return $this->_idModePaiement;
    }
    public function setidModePaiement($_idModePaiement)
    {
        $this->_idModePaiement = $_idModePaiement;
        $this->setModePaiement(ModesPaiements::findById($_idModePaiement));

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
    public function getprixTTC()
    {
        return $this->_prixTTC;
    }
    public function setprixTTC($_prixTTC)
    {
        $this->_prixTTC = $_prixTTC;

        return $this;
    }
    
    public function getModePaiement()
    {
        return $this->_ModePaiement;
    }

    public function setModePaiement($_ModePaiement)
    {
        $this->_ModePaiement = $_ModePaiement;
    }

    public function getTicket()
    {
        return $this->_Ticket;
    }

    public function setTicket($_Ticket)
    {
        $this->_Ticket = $_Ticket;
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
    public function toString()
    {
        return $this->getidPaiement()."\n" . $this->getModePaiement()->getTypePaiement()."\n" . $this->getidTicket()."\n" . $this->getprixTTC();
    }

}
