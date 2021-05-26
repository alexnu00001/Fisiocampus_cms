<?php

namespace Proxies\__CG__\Mautic\FormBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Field extends \Mautic\FormBundle\Entity\Field implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
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
            return ['__isInitialized__', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Field' . "\0" . 'id', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Field' . "\0" . 'label', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Field' . "\0" . 'showLabel', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Field' . "\0" . 'alias', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Field' . "\0" . 'type', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Field' . "\0" . 'isCustom', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Field' . "\0" . 'customParameters', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Field' . "\0" . 'defaultValue', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Field' . "\0" . 'isRequired', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Field' . "\0" . 'validationMessage', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Field' . "\0" . 'helpMessage', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Field' . "\0" . 'order', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Field' . "\0" . 'properties', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Field' . "\0" . 'validation', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Field' . "\0" . 'form', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Field' . "\0" . 'labelAttributes', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Field' . "\0" . 'inputAttributes', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Field' . "\0" . 'containerAttributes', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Field' . "\0" . 'leadField', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Field' . "\0" . 'saveResult', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Field' . "\0" . 'isAutoFill', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Field' . "\0" . 'changes', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Field' . "\0" . 'sessionId', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Field' . "\0" . 'showWhenValueExists', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Field' . "\0" . 'showAfterXSubmissions'];
        }

        return ['__isInitialized__', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Field' . "\0" . 'id', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Field' . "\0" . 'label', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Field' . "\0" . 'showLabel', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Field' . "\0" . 'alias', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Field' . "\0" . 'type', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Field' . "\0" . 'isCustom', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Field' . "\0" . 'customParameters', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Field' . "\0" . 'defaultValue', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Field' . "\0" . 'isRequired', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Field' . "\0" . 'validationMessage', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Field' . "\0" . 'helpMessage', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Field' . "\0" . 'order', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Field' . "\0" . 'properties', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Field' . "\0" . 'validation', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Field' . "\0" . 'form', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Field' . "\0" . 'labelAttributes', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Field' . "\0" . 'inputAttributes', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Field' . "\0" . 'containerAttributes', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Field' . "\0" . 'leadField', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Field' . "\0" . 'saveResult', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Field' . "\0" . 'isAutoFill', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Field' . "\0" . 'changes', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Field' . "\0" . 'sessionId', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Field' . "\0" . 'showWhenValueExists', '' . "\0" . 'Mautic\\FormBundle\\Entity\\Field' . "\0" . 'showAfterXSubmissions'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Field $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * {@inheritDoc}
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);

        parent::__clone();
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
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getChanges()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChanges', []);

        return parent::getChanges();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setLabel($label)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLabel', [$label]);

        return parent::setLabel($label);
    }

    /**
     * {@inheritDoc}
     */
    public function getLabel()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLabel', []);

        return parent::getLabel();
    }

    /**
     * {@inheritDoc}
     */
    public function setAlias($alias)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAlias', [$alias]);

        return parent::setAlias($alias);
    }

    /**
     * {@inheritDoc}
     */
    public function getAlias()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAlias', []);

        return parent::getAlias();
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
    public function getType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getType', []);

        return parent::getType();
    }

    /**
     * {@inheritDoc}
     */
    public function setDefaultValue($defaultValue)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDefaultValue', [$defaultValue]);

        return parent::setDefaultValue($defaultValue);
    }

    /**
     * {@inheritDoc}
     */
    public function getDefaultValue()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDefaultValue', []);

        return parent::getDefaultValue();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsRequired($isRequired)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsRequired', [$isRequired]);

        return parent::setIsRequired($isRequired);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsRequired()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsRequired', []);

        return parent::getIsRequired();
    }

    /**
     * {@inheritDoc}
     */
    public function isRequired()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isRequired', []);

        return parent::isRequired();
    }

    /**
     * {@inheritDoc}
     */
    public function setOrder($order)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrder', [$order]);

        return parent::setOrder($order);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrder', []);

        return parent::getOrder();
    }

    /**
     * {@inheritDoc}
     */
    public function setProperties($properties)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProperties', [$properties]);

        return parent::setProperties($properties);
    }

    /**
     * {@inheritDoc}
     */
    public function getProperties()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProperties', []);

        return parent::getProperties();
    }

    /**
     * {@inheritDoc}
     */
    public function setValidation($validation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setValidation', [$validation]);

        return parent::setValidation($validation);
    }

    /**
     * {@inheritDoc}
     */
    public function getValidation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getValidation', []);

        return parent::getValidation();
    }

    /**
     * {@inheritDoc}
     */
    public function setValidationMessage($validationMessage)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setValidationMessage', [$validationMessage]);

        return parent::setValidationMessage($validationMessage);
    }

    /**
     * {@inheritDoc}
     */
    public function getValidationMessage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getValidationMessage', []);

        return parent::getValidationMessage();
    }

    /**
     * {@inheritDoc}
     */
    public function setForm(\Mautic\FormBundle\Entity\Form $form)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setForm', [$form]);

        return parent::setForm($form);
    }

    /**
     * {@inheritDoc}
     */
    public function getForm()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getForm', []);

        return parent::getForm();
    }

    /**
     * {@inheritDoc}
     */
    public function setLabelAttributes($labelAttributes)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLabelAttributes', [$labelAttributes]);

        return parent::setLabelAttributes($labelAttributes);
    }

    /**
     * {@inheritDoc}
     */
    public function getLabelAttributes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLabelAttributes', []);

        return parent::getLabelAttributes();
    }

    /**
     * {@inheritDoc}
     */
    public function setInputAttributes($inputAttributes)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInputAttributes', [$inputAttributes]);

        return parent::setInputAttributes($inputAttributes);
    }

    /**
     * {@inheritDoc}
     */
    public function getInputAttributes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInputAttributes', []);

        return parent::getInputAttributes();
    }

    /**
     * {@inheritDoc}
     */
    public function getContainerAttributes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContainerAttributes', []);

        return parent::getContainerAttributes();
    }

    /**
     * {@inheritDoc}
     */
    public function setContainerAttributes($containerAttributes)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContainerAttributes', [$containerAttributes]);

        return parent::setContainerAttributes($containerAttributes);
    }

    /**
     * {@inheritDoc}
     */
    public function convertToArray()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'convertToArray', []);

        return parent::convertToArray();
    }

    /**
     * {@inheritDoc}
     */
    public function setShowLabel($showLabel)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setShowLabel', [$showLabel]);

        return parent::setShowLabel($showLabel);
    }

    /**
     * {@inheritDoc}
     */
    public function getShowLabel()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShowLabel', []);

        return parent::getShowLabel();
    }

    /**
     * {@inheritDoc}
     */
    public function showLabel()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'showLabel', []);

        return parent::showLabel();
    }

    /**
     * {@inheritDoc}
     */
    public function setHelpMessage($helpMessage)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHelpMessage', [$helpMessage]);

        return parent::setHelpMessage($helpMessage);
    }

    /**
     * {@inheritDoc}
     */
    public function getHelpMessage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHelpMessage', []);

        return parent::getHelpMessage();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsCustom($isCustom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsCustom', [$isCustom]);

        return parent::setIsCustom($isCustom);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsCustom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsCustom', []);

        return parent::getIsCustom();
    }

    /**
     * {@inheritDoc}
     */
    public function isCustom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isCustom', []);

        return parent::isCustom();
    }

    /**
     * {@inheritDoc}
     */
    public function setCustomParameters($customParameters)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCustomParameters', [$customParameters]);

        return parent::setCustomParameters($customParameters);
    }

    /**
     * {@inheritDoc}
     */
    public function getCustomParameters()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCustomParameters', []);

        return parent::getCustomParameters();
    }

    /**
     * {@inheritDoc}
     */
    public function getSessionId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSessionId', []);

        return parent::getSessionId();
    }

    /**
     * {@inheritDoc}
     */
    public function setSessionId($sessionId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSessionId', [$sessionId]);

        return parent::setSessionId($sessionId);
    }

    /**
     * {@inheritDoc}
     */
    public function getLeadField()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLeadField', []);

        return parent::getLeadField();
    }

    /**
     * {@inheritDoc}
     */
    public function setLeadField($leadField)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLeadField', [$leadField]);

        return parent::setLeadField($leadField);
    }

    /**
     * {@inheritDoc}
     */
    public function getSaveResult()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSaveResult', []);

        return parent::getSaveResult();
    }

    /**
     * {@inheritDoc}
     */
    public function setSaveResult($saveResult)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSaveResult', [$saveResult]);

        return parent::setSaveResult($saveResult);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsAutoFill()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsAutoFill', []);

        return parent::getIsAutoFill();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsAutoFill($isAutoFill)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsAutoFill', [$isAutoFill]);

        return parent::setIsAutoFill($isAutoFill);
    }

    /**
     * {@inheritDoc}
     */
    public function getShowWhenValueExists()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShowWhenValueExists', []);

        return parent::getShowWhenValueExists();
    }

    /**
     * {@inheritDoc}
     */
    public function setShowWhenValueExists($showWhenValueExists)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setShowWhenValueExists', [$showWhenValueExists]);

        return parent::setShowWhenValueExists($showWhenValueExists);
    }

    /**
     * {@inheritDoc}
     */
    public function getShowAfterXSubmissions()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShowAfterXSubmissions', []);

        return parent::getShowAfterXSubmissions();
    }

    /**
     * {@inheritDoc}
     */
    public function setShowAfterXSubmissions($showAfterXSubmissions)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setShowAfterXSubmissions', [$showAfterXSubmissions]);

        return parent::setShowAfterXSubmissions($showAfterXSubmissions);
    }

    /**
     * {@inheritDoc}
     */
    public function showForContact($submissions = NULL, \Mautic\LeadBundle\Entity\Lead $lead = NULL, \Mautic\FormBundle\Entity\Form $form = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'showForContact', [$submissions, $lead, $form]);

        return parent::showForContact($submissions, $lead, $form);
    }

    /**
     * {@inheritDoc}
     */
    public function isCaptchaType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isCaptchaType', []);

        return parent::isCaptchaType();
    }

    /**
     * {@inheritDoc}
     */
    public function isFileType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isFileType', []);

        return parent::isFileType();
    }

}
