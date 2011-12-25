<?php

namespace Proxies;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Application_Model_HospitalProxy extends \Application_Model_Hospital implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }
    
    
    public function getId()
    {
        $this->__load();
        return parent::getId();
    }

    public function setId($id)
    {
        $this->__load();
        return parent::setId($id);
    }

    public function getName()
    {
        $this->__load();
        return parent::getName();
    }

    public function setName($name)
    {
        $this->__load();
        return parent::setName($name);
    }

    public function getIk()
    {
        $this->__load();
        return parent::getIk();
    }

    public function setIk($ik)
    {
        $this->__load();
        return parent::setIk($ik);
    }

    public function getOperator()
    {
        $this->__load();
        return parent::getOperator();
    }

    public function setOperator($operator)
    {
        $this->__load();
        return parent::setOperator($operator);
    }

    public function getOpteratorType()
    {
        $this->__load();
        return parent::getOpteratorType();
    }

    public function setOpteratorType($opteratorType)
    {
        $this->__load();
        return parent::setOpteratorType($opteratorType);
    }

    public function getIsTeachingHospital()
    {
        $this->__load();
        return parent::getIsTeachingHospital();
    }

    public function setIsTeachingHospital($isTeachingHospital)
    {
        $this->__load();
        return parent::setIsTeachingHospital($isTeachingHospital);
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'name', 'ik', 'operator', 'opteratorType', 'isTeachingHospital');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields AS $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}