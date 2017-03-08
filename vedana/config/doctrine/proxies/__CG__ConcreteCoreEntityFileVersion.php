<?php

namespace DoctrineProxies\__CG__\Concrete\Core\Entity\File;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Version extends \Concrete\Core\Entity\File\Version implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', 'file', 'fvID', 'fvFilename', 'fvPrefix', 'fvDateAdded', 'fvActivateDateTime', 'fvIsApproved', 'fvAuthorUID', 'fvSize', 'fvApproverUID', 'fvTitle', 'fvDescription', 'fvExtension', 'fvType', 'fvTags', 'fvHasListingThumbnail', 'fvHasDetailThumbnail'];
        }

        return ['__isInitialized__', 'file', 'fvID', 'fvFilename', 'fvPrefix', 'fvDateAdded', 'fvActivateDateTime', 'fvIsApproved', 'fvAuthorUID', 'fvSize', 'fvApproverUID', 'fvTitle', 'fvDescription', 'fvExtension', 'fvType', 'fvTags', 'fvHasListingThumbnail', 'fvHasDetailThumbnail'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Version $proxy) {
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
    public function setFilename($filename)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFilename', [$filename]);

        return parent::setFilename($filename);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrefix()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrefix', []);

        return parent::getPrefix();
    }

    /**
     * {@inheritDoc}
     */
    public function isApproved()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isApproved', []);

        return parent::isApproved();
    }

    /**
     * {@inheritDoc}
     */
    public function getTagsList()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTagsList', []);

        return parent::getTagsList();
    }

    /**
     * {@inheritDoc}
     */
    public function getTags()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTags', []);

        return parent::getTags();
    }

    /**
     * {@inheritDoc}
     */
    public function getFile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFile', []);

        return parent::getFile();
    }

    /**
     * {@inheritDoc}
     */
    public function setFile(\Concrete\Core\Entity\File\File $file)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFile', [$file]);

        return parent::setFile($file);
    }

    /**
     * {@inheritDoc}
     */
    public function getFileID()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFileID', []);

        return parent::getFileID();
    }

    /**
     * {@inheritDoc}
     */
    public function getFileVersionID()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFileVersionID', []);

        return parent::getFileVersionID();
    }

    /**
     * {@inheritDoc}
     */
    public function delete($deleteFilesAndThumbnails = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'delete', [$deleteFilesAndThumbnails]);

        return parent::delete($deleteFilesAndThumbnails);
    }

    /**
     * {@inheritDoc}
     */
    public function deleteThumbnail($type)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'deleteThumbnail', [$type]);

        return parent::deleteThumbnail($type);
    }

    /**
     * {@inheritDoc}
     */
    public function updateThumbnailStorageLocation($type, \Concrete\Core\Entity\File\StorageLocation\StorageLocation $location)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'updateThumbnailStorageLocation', [$type, $location]);

        return parent::updateThumbnailStorageLocation($type, $location);
    }

    /**
     * {@inheritDoc}
     */
    public function getFileResource()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFileResource', []);

        return parent::getFileResource();
    }

    /**
     * {@inheritDoc}
     */
    public function getMimeType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMimeType', []);

        return parent::getMimeType();
    }

    /**
     * {@inheritDoc}
     */
    public function getSize()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSize', []);

        return parent::getSize();
    }

    /**
     * {@inheritDoc}
     */
    public function getFullSize()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFullSize', []);

        return parent::getFullSize();
    }

    /**
     * {@inheritDoc}
     */
    public function getAuthorName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAuthorName', []);

        return parent::getAuthorName();
    }

    /**
     * {@inheritDoc}
     */
    public function getAuthorUserID()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAuthorUserID', []);

        return parent::getAuthorUserID();
    }

    /**
     * {@inheritDoc}
     */
    public function getDateAdded()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateAdded', []);

        return parent::getDateAdded();
    }

    /**
     * {@inheritDoc}
     */
    public function getExtension()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExtension', []);

        return parent::getExtension();
    }

    /**
     * {@inheritDoc}
     */
    public function setFileVersionID($fvID)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFileVersionID', [$fvID]);

        return parent::setFileVersionID($fvID);
    }

    /**
     * {@inheritDoc}
     */
    public function duplicate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'duplicate', []);

        return parent::duplicate();
    }

    /**
     * {@inheritDoc}
     */
    public function deny()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'deny', []);

        return parent::deny();
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
    public function getDisplayType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDisplayType', []);

        return parent::getDisplayType();
    }

    /**
     * {@inheritDoc}
     */
    public function getTypeObject()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTypeObject', []);

        return parent::getTypeObject();
    }

    /**
     * {@inheritDoc}
     */
    public function getVersionLogComments()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVersionLogComments', []);

        return parent::getVersionLogComments();
    }

    /**
     * {@inheritDoc}
     */
    public function updateTitle($title)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'updateTitle', [$title]);

        return parent::updateTitle($title);
    }

    /**
     * {@inheritDoc}
     */
    public function duplicateUnderlyingFile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'duplicateUnderlyingFile', []);

        return parent::duplicateUnderlyingFile();
    }

    /**
     * {@inheritDoc}
     */
    public function logVersionUpdate($updateTypeID, $updateTypeAttributeID = 0)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'logVersionUpdate', [$updateTypeID, $updateTypeAttributeID]);

        return parent::logVersionUpdate($updateTypeID, $updateTypeAttributeID);
    }

    /**
     * {@inheritDoc}
     */
    public function updateTags($tags)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'updateTags', [$tags]);

        return parent::updateTags($tags);
    }

    /**
     * {@inheritDoc}
     */
    public function updateDescription($descr)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'updateDescription', [$descr]);

        return parent::updateDescription($descr);
    }

    /**
     * {@inheritDoc}
     */
    public function rename($filename)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'rename', [$filename]);

        return parent::rename($filename);
    }

    /**
     * {@inheritDoc}
     */
    public function updateContents($contents)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'updateContents', [$contents]);

        return parent::updateContents($contents);
    }

    /**
     * {@inheritDoc}
     */
    public function updateFile($filename, $prefix)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'updateFile', [$filename, $prefix]);

        return parent::updateFile($filename, $prefix);
    }

    /**
     * {@inheritDoc}
     */
    public function approve()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'approve', []);

        return parent::approve();
    }

    /**
     * {@inheritDoc}
     */
    public function getFileContents()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFileContents', []);

        return parent::getFileContents();
    }

    /**
     * {@inheritDoc}
     */
    public function getForceDownloadURL()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getForceDownloadURL', []);

        return parent::getForceDownloadURL();
    }

    /**
     * {@inheritDoc}
     */
    public function forceDownload()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'forceDownload', []);

        return parent::forceDownload();
    }

    /**
     * {@inheritDoc}
     */
    public function getFileName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFileName', []);

        return parent::getFileName();
    }

    /**
     * {@inheritDoc}
     */
    public function getRelativePath()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRelativePath', []);

        return parent::getRelativePath();
    }

    /**
     * {@inheritDoc}
     */
    public function getThumbnails()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getThumbnails', []);

        return parent::getThumbnails();
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
    public function getImagineImage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImagineImage', []);

        return parent::getImagineImage();
    }

    /**
     * {@inheritDoc}
     */
    public function rescanThumbnails()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'rescanThumbnails', []);

        return parent::rescanThumbnails();
    }

    /**
     * {@inheritDoc}
     */
    public function hasThumbnail($level)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasThumbnail', [$level]);

        return parent::hasThumbnail($level);
    }

    /**
     * {@inheritDoc}
     */
    public function getDetailThumbnailImage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDetailThumbnailImage', []);

        return parent::getDetailThumbnailImage();
    }

    /**
     * {@inheritDoc}
     */
    public function getThumbnailURL($type)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getThumbnailURL', [$type]);

        return parent::getThumbnailURL($type);
    }

    /**
     * {@inheritDoc}
     */
    public function importThumbnail(\Concrete\Core\File\Image\Thumbnail\Type\Version $version, $path)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'importThumbnail', [$version, $path]);

        return parent::importThumbnail($version, $path);
    }

    /**
     * {@inheritDoc}
     */
    public function getURL()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getURL', []);

        return parent::getURL();
    }

    /**
     * {@inheritDoc}
     */
    public function getDownloadURL()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDownloadURL', []);

        return parent::getDownloadURL();
    }

    /**
     * {@inheritDoc}
     */
    public function getAttributes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAttributes', []);

        return parent::getAttributes();
    }

    /**
     * {@inheritDoc}
     */
    public function refreshAttributes($rescanThumbnails = true)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'refreshAttributes', [$rescanThumbnails]);

        return parent::refreshAttributes($rescanThumbnails);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitle', []);

        return parent::getTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function getJSONObject()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getJSONObject', []);

        return parent::getJSONObject();
    }

    /**
     * {@inheritDoc}
     */
    public function canView()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'canView', []);

        return parent::canView();
    }

    /**
     * {@inheritDoc}
     */
    public function canEdit()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'canEdit', []);

        return parent::canEdit();
    }

    /**
     * {@inheritDoc}
     */
    public function getGenericTypeText()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGenericTypeText', []);

        return parent::getGenericTypeText();
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function getListingThumbnailImage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getListingThumbnailImage', []);

        return parent::getListingThumbnailImage();
    }

    /**
     * {@inheritDoc}
     */
    public function generateThumbnail(\Concrete\Core\File\Image\Thumbnail\Type\Version $type)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'generateThumbnail', [$type]);

        return parent::generateThumbnail($type);
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
