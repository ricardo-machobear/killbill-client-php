<?php
/**
 * Subscription
 *
 * PHP version 5
 *
 * @category Class
 * @package  Killbill\Client\Swagger
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Kill Bill
 *
 * Kill Bill is an open-source billing and payments platform
 *
 * OpenAPI spec version: 0.22.11
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.22
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Killbill\Client\Swagger\Model;

use \ArrayAccess;
use \Killbill\Client\Swagger\ObjectSerializer;

/**
 * Subscription Class Doc Comment
 *
 * @category Class
 * @package  Killbill\Client\Swagger
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Subscription implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Subscription';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'accountId' => 'string',
'bundleId' => 'string',
'bundleExternalKey' => 'string',
'subscriptionId' => 'string',
'externalKey' => 'string',
'startDate' => '\DateTime',
'productName' => 'string',
'productCategory' => 'string',
'billingPeriod' => 'string',
'phaseType' => 'string',
'priceList' => 'string',
'planName' => 'string',
'state' => 'string',
'sourceType' => 'string',
'cancelledDate' => '\DateTime',
'chargedThroughDate' => '\DateTime',
'billingStartDate' => '\DateTime',
'billingEndDate' => '\DateTime',
'billCycleDayLocal' => 'int',
'events' => '\Killbill\Client\Swagger\Model\EventSubscription[]',
'priceOverrides' => '\Killbill\Client\Swagger\Model\PhasePrice[]',
'prices' => '\Killbill\Client\Swagger\Model\PhasePrice[]',
'auditLogs' => '\Killbill\Client\Swagger\Model\AuditLog[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'accountId' => 'uuid',
'bundleId' => 'uuid',
'bundleExternalKey' => null,
'subscriptionId' => 'uuid',
'externalKey' => null,
'startDate' => 'date',
'productName' => null,
'productCategory' => null,
'billingPeriod' => null,
'phaseType' => null,
'priceList' => null,
'planName' => null,
'state' => null,
'sourceType' => null,
'cancelledDate' => 'date',
'chargedThroughDate' => 'date',
'billingStartDate' => 'date',
'billingEndDate' => 'date',
'billCycleDayLocal' => 'int32',
'events' => null,
'priceOverrides' => null,
'prices' => null,
'auditLogs' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'accountId' => 'accountId',
'bundleId' => 'bundleId',
'bundleExternalKey' => 'bundleExternalKey',
'subscriptionId' => 'subscriptionId',
'externalKey' => 'externalKey',
'startDate' => 'startDate',
'productName' => 'productName',
'productCategory' => 'productCategory',
'billingPeriod' => 'billingPeriod',
'phaseType' => 'phaseType',
'priceList' => 'priceList',
'planName' => 'planName',
'state' => 'state',
'sourceType' => 'sourceType',
'cancelledDate' => 'cancelledDate',
'chargedThroughDate' => 'chargedThroughDate',
'billingStartDate' => 'billingStartDate',
'billingEndDate' => 'billingEndDate',
'billCycleDayLocal' => 'billCycleDayLocal',
'events' => 'events',
'priceOverrides' => 'priceOverrides',
'prices' => 'prices',
'auditLogs' => 'auditLogs'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accountId' => 'setAccountId',
'bundleId' => 'setBundleId',
'bundleExternalKey' => 'setBundleExternalKey',
'subscriptionId' => 'setSubscriptionId',
'externalKey' => 'setExternalKey',
'startDate' => 'setStartDate',
'productName' => 'setProductName',
'productCategory' => 'setProductCategory',
'billingPeriod' => 'setBillingPeriod',
'phaseType' => 'setPhaseType',
'priceList' => 'setPriceList',
'planName' => 'setPlanName',
'state' => 'setState',
'sourceType' => 'setSourceType',
'cancelledDate' => 'setCancelledDate',
'chargedThroughDate' => 'setChargedThroughDate',
'billingStartDate' => 'setBillingStartDate',
'billingEndDate' => 'setBillingEndDate',
'billCycleDayLocal' => 'setBillCycleDayLocal',
'events' => 'setEvents',
'priceOverrides' => 'setPriceOverrides',
'prices' => 'setPrices',
'auditLogs' => 'setAuditLogs'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accountId' => 'getAccountId',
'bundleId' => 'getBundleId',
'bundleExternalKey' => 'getBundleExternalKey',
'subscriptionId' => 'getSubscriptionId',
'externalKey' => 'getExternalKey',
'startDate' => 'getStartDate',
'productName' => 'getProductName',
'productCategory' => 'getProductCategory',
'billingPeriod' => 'getBillingPeriod',
'phaseType' => 'getPhaseType',
'priceList' => 'getPriceList',
'planName' => 'getPlanName',
'state' => 'getState',
'sourceType' => 'getSourceType',
'cancelledDate' => 'getCancelledDate',
'chargedThroughDate' => 'getChargedThroughDate',
'billingStartDate' => 'getBillingStartDate',
'billingEndDate' => 'getBillingEndDate',
'billCycleDayLocal' => 'getBillCycleDayLocal',
'events' => 'getEvents',
'priceOverrides' => 'getPriceOverrides',
'prices' => 'getPrices',
'auditLogs' => 'getAuditLogs'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    const PRODUCT_CATEGORY_BASE = 'BASE';
const PRODUCT_CATEGORY_ADD_ON = 'ADD_ON';
const PRODUCT_CATEGORY_STANDALONE = 'STANDALONE';
const BILLING_PERIOD_DAILY = 'DAILY';
const BILLING_PERIOD_WEEKLY = 'WEEKLY';
const BILLING_PERIOD_BIWEEKLY = 'BIWEEKLY';
const BILLING_PERIOD_THIRTY_DAYS = 'THIRTY_DAYS';
const BILLING_PERIOD_SIXTY_DAYS = 'SIXTY_DAYS';
const BILLING_PERIOD_NINETY_DAYS = 'NINETY_DAYS';
const BILLING_PERIOD_MONTHLY = 'MONTHLY';
const BILLING_PERIOD_BIMESTRIAL = 'BIMESTRIAL';
const BILLING_PERIOD_QUARTERLY = 'QUARTERLY';
const BILLING_PERIOD_TRIANNUAL = 'TRIANNUAL';
const BILLING_PERIOD_BIANNUAL = 'BIANNUAL';
const BILLING_PERIOD_ANNUAL = 'ANNUAL';
const BILLING_PERIOD_BIENNIAL = 'BIENNIAL';
const BILLING_PERIOD_NO_BILLING_PERIOD = 'NO_BILLING_PERIOD';
const PHASE_TYPE_TRIAL = 'TRIAL';
const PHASE_TYPE_DISCOUNT = 'DISCOUNT';
const PHASE_TYPE_FIXEDTERM = 'FIXEDTERM';
const PHASE_TYPE_EVERGREEN = 'EVERGREEN';
const STATE_PENDING = 'PENDING';
const STATE_ACTIVE = 'ACTIVE';
const STATE_BLOCKED = 'BLOCKED';
const STATE_CANCELLED = 'CANCELLED';
const STATE_EXPIRED = 'EXPIRED';
const SOURCE_TYPE_NATIVE = 'NATIVE';
const SOURCE_TYPE_MIGRATED = 'MIGRATED';
const SOURCE_TYPE_TRANSFERRED = 'TRANSFERRED';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getProductCategoryAllowableValues()
    {
        return [
            self::PRODUCT_CATEGORY_BASE,
self::PRODUCT_CATEGORY_ADD_ON,
self::PRODUCT_CATEGORY_STANDALONE,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBillingPeriodAllowableValues()
    {
        return [
            self::BILLING_PERIOD_DAILY,
self::BILLING_PERIOD_WEEKLY,
self::BILLING_PERIOD_BIWEEKLY,
self::BILLING_PERIOD_THIRTY_DAYS,
self::BILLING_PERIOD_SIXTY_DAYS,
self::BILLING_PERIOD_NINETY_DAYS,
self::BILLING_PERIOD_MONTHLY,
self::BILLING_PERIOD_BIMESTRIAL,
self::BILLING_PERIOD_QUARTERLY,
self::BILLING_PERIOD_TRIANNUAL,
self::BILLING_PERIOD_BIANNUAL,
self::BILLING_PERIOD_ANNUAL,
self::BILLING_PERIOD_BIENNIAL,
self::BILLING_PERIOD_NO_BILLING_PERIOD,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPhaseTypeAllowableValues()
    {
        return [
            self::PHASE_TYPE_TRIAL,
self::PHASE_TYPE_DISCOUNT,
self::PHASE_TYPE_FIXEDTERM,
self::PHASE_TYPE_EVERGREEN,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_PENDING,
self::STATE_ACTIVE,
self::STATE_BLOCKED,
self::STATE_CANCELLED,
self::STATE_EXPIRED,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSourceTypeAllowableValues()
    {
        return [
            self::SOURCE_TYPE_NATIVE,
self::SOURCE_TYPE_MIGRATED,
self::SOURCE_TYPE_TRANSFERRED,        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['accountId'] = isset($data['accountId']) ? $data['accountId'] : null;
        $this->container['bundleId'] = isset($data['bundleId']) ? $data['bundleId'] : null;
        $this->container['bundleExternalKey'] = isset($data['bundleExternalKey']) ? $data['bundleExternalKey'] : null;
        $this->container['subscriptionId'] = isset($data['subscriptionId']) ? $data['subscriptionId'] : null;
        $this->container['externalKey'] = isset($data['externalKey']) ? $data['externalKey'] : null;
        $this->container['startDate'] = isset($data['startDate']) ? $data['startDate'] : null;
        $this->container['productName'] = isset($data['productName']) ? $data['productName'] : null;
        $this->container['productCategory'] = isset($data['productCategory']) ? $data['productCategory'] : null;
        $this->container['billingPeriod'] = isset($data['billingPeriod']) ? $data['billingPeriod'] : null;
        $this->container['phaseType'] = isset($data['phaseType']) ? $data['phaseType'] : null;
        $this->container['priceList'] = isset($data['priceList']) ? $data['priceList'] : null;
        $this->container['planName'] = isset($data['planName']) ? $data['planName'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['sourceType'] = isset($data['sourceType']) ? $data['sourceType'] : null;
        $this->container['cancelledDate'] = isset($data['cancelledDate']) ? $data['cancelledDate'] : null;
        $this->container['chargedThroughDate'] = isset($data['chargedThroughDate']) ? $data['chargedThroughDate'] : null;
        $this->container['billingStartDate'] = isset($data['billingStartDate']) ? $data['billingStartDate'] : null;
        $this->container['billingEndDate'] = isset($data['billingEndDate']) ? $data['billingEndDate'] : null;
        $this->container['billCycleDayLocal'] = isset($data['billCycleDayLocal']) ? $data['billCycleDayLocal'] : null;
        $this->container['events'] = isset($data['events']) ? $data['events'] : null;
        $this->container['priceOverrides'] = isset($data['priceOverrides']) ? $data['priceOverrides'] : null;
        $this->container['prices'] = isset($data['prices']) ? $data['prices'] : null;
        $this->container['auditLogs'] = isset($data['auditLogs']) ? $data['auditLogs'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['productName'] === null) {
            $invalidProperties[] = "'productName' can't be null";
        }
        $allowedValues = $this->getProductCategoryAllowableValues();
        if (!is_null($this->container['productCategory']) && !in_array($this->container['productCategory'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'productCategory', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['billingPeriod'] === null) {
            $invalidProperties[] = "'billingPeriod' can't be null";
        }
        $allowedValues = $this->getBillingPeriodAllowableValues();
        if (!is_null($this->container['billingPeriod']) && !in_array($this->container['billingPeriod'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'billingPeriod', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPhaseTypeAllowableValues();
        if (!is_null($this->container['phaseType']) && !in_array($this->container['phaseType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'phaseType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['priceList'] === null) {
            $invalidProperties[] = "'priceList' can't be null";
        }
        if ($this->container['planName'] === null) {
            $invalidProperties[] = "'planName' can't be null";
        }
        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSourceTypeAllowableValues();
        if (!is_null($this->container['sourceType']) && !in_array($this->container['sourceType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'sourceType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets accountId
     *
     * @return string
     */
    public function getAccountId()
    {
        return $this->container['accountId'];
    }

    /**
     * Sets accountId
     *
     * @param string $accountId accountId
     *
     * @return $this
     */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;

        return $this;
    }

    /**
     * Gets bundleId
     *
     * @return string
     */
    public function getBundleId()
    {
        return $this->container['bundleId'];
    }

    /**
     * Sets bundleId
     *
     * @param string $bundleId bundleId
     *
     * @return $this
     */
    public function setBundleId($bundleId)
    {
        $this->container['bundleId'] = $bundleId;

        return $this;
    }

    /**
     * Gets bundleExternalKey
     *
     * @return string
     */
    public function getBundleExternalKey()
    {
        return $this->container['bundleExternalKey'];
    }

    /**
     * Sets bundleExternalKey
     *
     * @param string $bundleExternalKey bundleExternalKey
     *
     * @return $this
     */
    public function setBundleExternalKey($bundleExternalKey)
    {
        $this->container['bundleExternalKey'] = $bundleExternalKey;

        return $this;
    }

    /**
     * Gets subscriptionId
     *
     * @return string
     */
    public function getSubscriptionId()
    {
        return $this->container['subscriptionId'];
    }

    /**
     * Sets subscriptionId
     *
     * @param string $subscriptionId subscriptionId
     *
     * @return $this
     */
    public function setSubscriptionId($subscriptionId)
    {
        $this->container['subscriptionId'] = $subscriptionId;

        return $this;
    }

    /**
     * Gets externalKey
     *
     * @return string
     */
    public function getExternalKey()
    {
        return $this->container['externalKey'];
    }

    /**
     * Sets externalKey
     *
     * @param string $externalKey externalKey
     *
     * @return $this
     */
    public function setExternalKey($externalKey)
    {
        $this->container['externalKey'] = $externalKey;

        return $this;
    }

    /**
     * Gets startDate
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['startDate'];
    }

    /**
     * Sets startDate
     *
     * @param \DateTime $startDate startDate
     *
     * @return $this
     */
    public function setStartDate($startDate)
    {
        $this->container['startDate'] = $startDate;

        return $this;
    }

    /**
     * Gets productName
     *
     * @return string
     */
    public function getProductName()
    {
        return $this->container['productName'];
    }

    /**
     * Sets productName
     *
     * @param string $productName productName
     *
     * @return $this
     */
    public function setProductName($productName)
    {
        $this->container['productName'] = $productName;

        return $this;
    }

    /**
     * Gets productCategory
     *
     * @return string
     */
    public function getProductCategory()
    {
        return $this->container['productCategory'];
    }

    /**
     * Sets productCategory
     *
     * @param string $productCategory productCategory
     *
     * @return $this
     */
    public function setProductCategory($productCategory)
    {
        $allowedValues = $this->getProductCategoryAllowableValues();
        if (!is_null($productCategory) && !in_array($productCategory, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'productCategory', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['productCategory'] = $productCategory;

        return $this;
    }

    /**
     * Gets billingPeriod
     *
     * @return string
     */
    public function getBillingPeriod()
    {
        return $this->container['billingPeriod'];
    }

    /**
     * Sets billingPeriod
     *
     * @param string $billingPeriod billingPeriod
     *
     * @return $this
     */
    public function setBillingPeriod($billingPeriod)
    {
        $allowedValues = $this->getBillingPeriodAllowableValues();
        if (!in_array($billingPeriod, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'billingPeriod', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['billingPeriod'] = $billingPeriod;

        return $this;
    }

    /**
     * Gets phaseType
     *
     * @return string
     */
    public function getPhaseType()
    {
        return $this->container['phaseType'];
    }

    /**
     * Sets phaseType
     *
     * @param string $phaseType phaseType
     *
     * @return $this
     */
    public function setPhaseType($phaseType)
    {
        $allowedValues = $this->getPhaseTypeAllowableValues();
        if (!is_null($phaseType) && !in_array($phaseType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'phaseType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['phaseType'] = $phaseType;

        return $this;
    }

    /**
     * Gets priceList
     *
     * @return string
     */
    public function getPriceList()
    {
        return $this->container['priceList'];
    }

    /**
     * Sets priceList
     *
     * @param string $priceList priceList
     *
     * @return $this
     */
    public function setPriceList($priceList)
    {
        $this->container['priceList'] = $priceList;

        return $this;
    }

    /**
     * Gets planName
     *
     * @return string
     */
    public function getPlanName()
    {
        return $this->container['planName'];
    }

    /**
     * Sets planName
     *
     * @param string $planName planName
     *
     * @return $this
     */
    public function setPlanName($planName)
    {
        $this->container['planName'] = $planName;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state state
     *
     * @return $this
     */
    public function setState($state)
    {
        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($state) && !in_array($state, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'state', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets sourceType
     *
     * @return string
     */
    public function getSourceType()
    {
        return $this->container['sourceType'];
    }

    /**
     * Sets sourceType
     *
     * @param string $sourceType sourceType
     *
     * @return $this
     */
    public function setSourceType($sourceType)
    {
        $allowedValues = $this->getSourceTypeAllowableValues();
        if (!is_null($sourceType) && !in_array($sourceType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'sourceType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['sourceType'] = $sourceType;

        return $this;
    }

    /**
     * Gets cancelledDate
     *
     * @return \DateTime
     */
    public function getCancelledDate()
    {
        return $this->container['cancelledDate'];
    }

    /**
     * Sets cancelledDate
     *
     * @param \DateTime $cancelledDate cancelledDate
     *
     * @return $this
     */
    public function setCancelledDate($cancelledDate)
    {
        $this->container['cancelledDate'] = $cancelledDate;

        return $this;
    }

    /**
     * Gets chargedThroughDate
     *
     * @return \DateTime
     */
    public function getChargedThroughDate()
    {
        return $this->container['chargedThroughDate'];
    }

    /**
     * Sets chargedThroughDate
     *
     * @param \DateTime $chargedThroughDate chargedThroughDate
     *
     * @return $this
     */
    public function setChargedThroughDate($chargedThroughDate)
    {
        $this->container['chargedThroughDate'] = $chargedThroughDate;

        return $this;
    }

    /**
     * Gets billingStartDate
     *
     * @return \DateTime
     */
    public function getBillingStartDate()
    {
        return $this->container['billingStartDate'];
    }

    /**
     * Sets billingStartDate
     *
     * @param \DateTime $billingStartDate billingStartDate
     *
     * @return $this
     */
    public function setBillingStartDate($billingStartDate)
    {
        $this->container['billingStartDate'] = $billingStartDate;

        return $this;
    }

    /**
     * Gets billingEndDate
     *
     * @return \DateTime
     */
    public function getBillingEndDate()
    {
        return $this->container['billingEndDate'];
    }

    /**
     * Sets billingEndDate
     *
     * @param \DateTime $billingEndDate billingEndDate
     *
     * @return $this
     */
    public function setBillingEndDate($billingEndDate)
    {
        $this->container['billingEndDate'] = $billingEndDate;

        return $this;
    }

    /**
     * Gets billCycleDayLocal
     *
     * @return int
     */
    public function getBillCycleDayLocal()
    {
        return $this->container['billCycleDayLocal'];
    }

    /**
     * Sets billCycleDayLocal
     *
     * @param int $billCycleDayLocal billCycleDayLocal
     *
     * @return $this
     */
    public function setBillCycleDayLocal($billCycleDayLocal)
    {
        $this->container['billCycleDayLocal'] = $billCycleDayLocal;

        return $this;
    }

    /**
     * Gets events
     *
     * @return \Killbill\Client\Swagger\Model\EventSubscription[]
     */
    public function getEvents()
    {
        return $this->container['events'];
    }

    /**
     * Sets events
     *
     * @param \Killbill\Client\Swagger\Model\EventSubscription[] $events events
     *
     * @return $this
     */
    public function setEvents($events)
    {
        $this->container['events'] = $events;

        return $this;
    }

    /**
     * Gets priceOverrides
     *
     * @return \Killbill\Client\Swagger\Model\PhasePrice[]
     */
    public function getPriceOverrides()
    {
        return $this->container['priceOverrides'];
    }

    /**
     * Sets priceOverrides
     *
     * @param \Killbill\Client\Swagger\Model\PhasePrice[] $priceOverrides priceOverrides
     *
     * @return $this
     */
    public function setPriceOverrides($priceOverrides)
    {
        $this->container['priceOverrides'] = $priceOverrides;

        return $this;
    }

    /**
     * Gets prices
     *
     * @return \Killbill\Client\Swagger\Model\PhasePrice[]
     */
    public function getPrices()
    {
        return $this->container['prices'];
    }

    /**
     * Sets prices
     *
     * @param \Killbill\Client\Swagger\Model\PhasePrice[] $prices prices
     *
     * @return $this
     */
    public function setPrices($prices)
    {
        $this->container['prices'] = $prices;

        return $this;
    }

    /**
     * Gets auditLogs
     *
     * @return \Killbill\Client\Swagger\Model\AuditLog[]
     */
    public function getAuditLogs()
    {
        return $this->container['auditLogs'];
    }

    /**
     * Sets auditLogs
     *
     * @param \Killbill\Client\Swagger\Model\AuditLog[] $auditLogs auditLogs
     *
     * @return $this
     */
    public function setAuditLogs($auditLogs)
    {
        $this->container['auditLogs'] = $auditLogs;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
