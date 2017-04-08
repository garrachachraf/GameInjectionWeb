<?php

namespace Proxies\__CG__\Eloboosted\GameinjectionBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Post extends \Eloboosted\GameinjectionBundle\Entity\Post implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'Eloboosted\\GameinjectionBundle\\Entity\\Post' . "\0" . 'idPost', '' . "\0" . 'Eloboosted\\GameinjectionBundle\\Entity\\Post' . "\0" . 'sujet', '' . "\0" . 'Eloboosted\\GameinjectionBundle\\Entity\\Post' . "\0" . 'titre', '' . "\0" . 'Eloboosted\\GameinjectionBundle\\Entity\\Post' . "\0" . 'date', '' . "\0" . 'Eloboosted\\GameinjectionBundle\\Entity\\Post' . "\0" . 'cathegorieSpecifique', '' . "\0" . 'Eloboosted\\GameinjectionBundle\\Entity\\Post' . "\0" . 'idComptePost'];
        }

        return ['__isInitialized__', '' . "\0" . 'Eloboosted\\GameinjectionBundle\\Entity\\Post' . "\0" . 'idPost', '' . "\0" . 'Eloboosted\\GameinjectionBundle\\Entity\\Post' . "\0" . 'sujet', '' . "\0" . 'Eloboosted\\GameinjectionBundle\\Entity\\Post' . "\0" . 'titre', '' . "\0" . 'Eloboosted\\GameinjectionBundle\\Entity\\Post' . "\0" . 'date', '' . "\0" . 'Eloboosted\\GameinjectionBundle\\Entity\\Post' . "\0" . 'cathegorieSpecifique', '' . "\0" . 'Eloboosted\\GameinjectionBundle\\Entity\\Post' . "\0" . 'idComptePost'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Post $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getIdPost()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdPost();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdPost', []);

        return parent::getIdPost();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdPost($idPost)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdPost', [$idPost]);

        return parent::setIdPost($idPost);
    }

    /**
     * {@inheritDoc}
     */
    public function getSujet()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSujet', []);

        return parent::getSujet();
    }

    /**
     * {@inheritDoc}
     */
    public function setSujet($sujet)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSujet', [$sujet]);

        return parent::setSujet($sujet);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitre', []);

        return parent::getTitre();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitre($titre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitre', [$titre]);

        return parent::setTitre($titre);
    }

    /**
     * {@inheritDoc}
     */
    public function getDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDate', []);

        return parent::getDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setDate($date)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDate', [$date]);

        return parent::setDate($date);
    }

    /**
     * {@inheritDoc}
     */
    public function getCathegorieSpecifique()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCathegorieSpecifique', []);

        return parent::getCathegorieSpecifique();
    }

    /**
     * {@inheritDoc}
     */
    public function setCathegorieSpecifique($cathegorieSpecifique)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCathegorieSpecifique', [$cathegorieSpecifique]);

        return parent::setCathegorieSpecifique($cathegorieSpecifique);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdComptePost()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdComptePost', []);

        return parent::getIdComptePost();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdComptePost($idComptePost)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdComptePost', [$idComptePost]);

        return parent::setIdComptePost($idComptePost);
    }

}