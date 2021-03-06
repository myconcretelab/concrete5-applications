<?php

namespace DoctrineProxies\__CG__\Concrete\Core\Entity\Site;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Site extends \Concrete\Core\Entity\Site\Site implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', 'siteConfig', 'siteID', 'pThemeID', 'siteIsDefault', 'siteHandle', 'locales', 'type'];
        }

        return ['__isInitialized__', 'siteConfig', 'siteID', 'pThemeID', 'siteIsDefault', 'siteHandle', 'locales', 'type'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Site $proxy) {
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
    public function getObjectAttributeCategory()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getObjectAttributeCategory', []);

        return parent::getObjectAttributeCategory();
    }

    /**
     * {@inheritDoc}
     */
    public function getAttributeValueObject($ak, $createIfNotExists = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAttributeValueObject', [$ak, $createIfNotExists]);

        return parent::getAttributeValueObject($ak, $createIfNotExists);
    }

    /**
     * {@inheritDoc}
     */
    public function updateSiteConfigRepository($appConfigRepository)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'updateSiteConfigRepository', [$appConfigRepository]);

        return parent::updateSiteConfigRepository($appConfigRepository);
    }

    /**
     * {@inheritDoc}
     */
    public function getConfigRepository()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getConfigRepository', []);

        return parent::getConfigRepository();
    }

    /**
     * {@inheritDoc}
     */
    public function getType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getType', []);

        return parent::getType();
    }

    /**
     * {@inheritDoc}
     */
    public function setType($type)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setType', [$type]);

        return parent::setType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function getLocales()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLocales', []);

        return parent::getLocales();
    }

    /**
     * {@inheritDoc}
     */
    public function setLocales($locales)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLocales', [$locales]);

        return parent::setLocales($locales);
    }

    /**
     * {@inheritDoc}
     */
    public function getSiteHomePageID()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSiteHomePageID', []);

        return parent::getSiteHomePageID();
    }

    /**
     * {@inheritDoc}
     */
    public function getSiteTreeID()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSiteTreeID', []);

        return parent::getSiteTreeID();
    }

    /**
     * {@inheritDoc}
     */
    public function getDefaultLocale()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDefaultLocale', []);

        return parent::getDefaultLocale();
    }

    /**
     * {@inheritDoc}
     */
    public function getSiteTreeObject()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSiteTreeObject', []);

        return parent::getSiteTreeObject();
    }

    /**
     * {@inheritDoc}
     */
    public function getSiteHomePageObject($version = 'RECENT')
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSiteHomePageObject', [$version]);

        return parent::getSiteHomePageObject($version);
    }

    /**
     * {@inheritDoc}
     */
    public function getSiteID()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getSiteID();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSiteID', []);

        return parent::getSiteID();
    }

    /**
     * {@inheritDoc}
     */
    public function getSiteHandle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSiteHandle', []);

        return parent::getSiteHandle();
    }

    /**
     * {@inheritDoc}
     */
    public function setSiteHandle($siteHandle)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSiteHandle', [$siteHandle]);

        return parent::setSiteHandle($siteHandle);
    }

    /**
     * {@inheritDoc}
     */
    public function isDefault()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isDefault', []);

        return parent::isDefault();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsDefault($siteIsDefault)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsDefault', [$siteIsDefault]);

        return parent::setIsDefault($siteIsDefault);
    }

    /**
     * {@inheritDoc}
     */
    public function getSiteName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSiteName', []);

        return parent::getSiteName();
    }

    /**
     * {@inheritDoc}
     */
    public function setSiteName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSiteName', [$name]);

        return parent::setSiteName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getSiteCanonicalURL()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSiteCanonicalURL', []);

        return parent::getSiteCanonicalURL();
    }

    /**
     * {@inheritDoc}
     */
    public function getThemeID()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getThemeID', []);

        return parent::getThemeID();
    }

    /**
     * {@inheritDoc}
     */
    public function setThemeID($pThemeID)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setThemeID', [$pThemeID]);

        return parent::setThemeID($pThemeID);
    }

    /**
     * {@inheritDoc}
     */
    public function getAttribute($ak, $mode = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAttribute', [$ak, $mode]);

        return parent::getAttribute($ak, $mode);
    }

    /**
     * {@inheritDoc}
     */
    public function getAttributeValue($ak)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAttributeValue', [$ak]);

        return parent::getAttributeValue($ak);
    }

    /**
     * {@inheritDoc}
     */
    public function clearAttribute($ak)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'clearAttribute', [$ak]);

        return parent::clearAttribute($ak);
    }

    /**
     * {@inheritDoc}
     */
    public function setAttribute($ak, $value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAttribute', [$ak, $value]);

        return parent::setAttribute($ak, $value);
    }

}
