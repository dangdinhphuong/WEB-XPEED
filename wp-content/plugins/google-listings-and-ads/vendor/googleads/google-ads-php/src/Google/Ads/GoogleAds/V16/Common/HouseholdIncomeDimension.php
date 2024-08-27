<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v16/common/audiences.proto

namespace Google\Ads\GoogleAds\V16\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Dimension specifying users by their household income.
 *
 * Generated from protobuf message <code>google.ads.googleads.v16.common.HouseholdIncomeDimension</code>
 */
class HouseholdIncomeDimension extends \Google\Protobuf\Internal\Message
{
    /**
     * Included household income demographic segments.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v16.enums.IncomeRangeTypeEnum.IncomeRangeType income_ranges = 1;</code>
     */
    private $income_ranges;
    /**
     * Include users whose household income is not determined.
     *
     * Generated from protobuf field <code>optional bool include_undetermined = 2;</code>
     */
    protected $include_undetermined = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $income_ranges
     *           Included household income demographic segments.
     *     @type bool $include_undetermined
     *           Include users whose household income is not determined.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V16\Common\Audiences::initOnce();
        parent::__construct($data);
    }

    /**
     * Included household income demographic segments.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v16.enums.IncomeRangeTypeEnum.IncomeRangeType income_ranges = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIncomeRanges()
    {
        return $this->income_ranges;
    }

    /**
     * Included household income demographic segments.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v16.enums.IncomeRangeTypeEnum.IncomeRangeType income_ranges = 1;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIncomeRanges($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Ads\GoogleAds\V16\Enums\IncomeRangeTypeEnum\IncomeRangeType::class);
        $this->income_ranges = $arr;

        return $this;
    }

    /**
     * Include users whose household income is not determined.
     *
     * Generated from protobuf field <code>optional bool include_undetermined = 2;</code>
     * @return bool
     */
    public function getIncludeUndetermined()
    {
        return isset($this->include_undetermined) ? $this->include_undetermined : false;
    }

    public function hasIncludeUndetermined()
    {
        return isset($this->include_undetermined);
    }

    public function clearIncludeUndetermined()
    {
        unset($this->include_undetermined);
    }

    /**
     * Include users whose household income is not determined.
     *
     * Generated from protobuf field <code>optional bool include_undetermined = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setIncludeUndetermined($var)
    {
        GPBUtil::checkBool($var);
        $this->include_undetermined = $var;

        return $this;
    }

}

