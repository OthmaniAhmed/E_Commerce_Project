<?php

class article {
    private $ref,$lib,$qte,$prix,$des,$photo;
    


    /**
     * Get the value of ref
     */ 
    public function getRef()
    {
        return $this->ref;
    }

    
    /**
     * Get the value of lib
     */ 
    public function getLib()
    {
        return $this->lib;
    }

    /**
     * Set the value of lib
     *
     * @return  self
     */ 
    public function setLib($lib)
    {
        $this->lib = $lib;

        return $this;
    }

    /**
     * Get the value of photo
     */ 
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set the value of photo
     *
     * @return  self
     */ 
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get the value of qte
     */ 
    public function getQte()
    {
        return $this->qte;
    }

    /**
     * Set the value of qte
     *
     * @return  self
     */ 
    public function setQte($qte)
    {
        $this->qte = $qte;

        return $this;
    }

    /**
     * Get the value of prix
     */ 
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set the value of prix
     *
     * @return  self
     */ 
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get the value of des
     */ 
    public function getDes()
    {
        return $this->des;
    }

    /**
     * Set the value of des
     *
     * @return  self
     */ 
    public function setDes($des)
    {
        $this->des = $des;

        return $this;
    }

 
}


?>