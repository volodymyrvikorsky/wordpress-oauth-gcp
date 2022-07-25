<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/service.proto

namespace Google\Cloud\Monitoring\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Service Level Indicators for which atomic units of service are counted
 * directly.
 *
 * Generated from protobuf message <code>google.monitoring.v3.RequestBasedSli</code>
 */
class RequestBasedSli extends \Google\Protobuf\Internal\Message
{
    protected $method;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Monitoring\V3\TimeSeriesRatio $good_total_ratio
     *           `good_total_ratio` is used when the ratio of `good_service` to
     *           `total_service` is computed from two `TimeSeries`.
     *     @type \Google\Cloud\Monitoring\V3\DistributionCut $distribution_cut
     *           `distribution_cut` is used when `good_service` is a count of values
     *           aggregated in a `Distribution` that fall into a good range. The
     *           `total_service` is the total count of all values aggregated in the
     *           `Distribution`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Monitoring\V3\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * `good_total_ratio` is used when the ratio of `good_service` to
     * `total_service` is computed from two `TimeSeries`.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.TimeSeriesRatio good_total_ratio = 1;</code>
     * @return \Google\Cloud\Monitoring\V3\TimeSeriesRatio|null
     */
    public function getGoodTotalRatio()
    {
        return $this->readOneof(1);
    }

    public function hasGoodTotalRatio()
    {
        return $this->hasOneof(1);
    }

    /**
     * `good_total_ratio` is used when the ratio of `good_service` to
     * `total_service` is computed from two `TimeSeries`.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.TimeSeriesRatio good_total_ratio = 1;</code>
     * @param \Google\Cloud\Monitoring\V3\TimeSeriesRatio $var
     * @return $this
     */
    public function setGoodTotalRatio($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Monitoring\V3\TimeSeriesRatio::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * `distribution_cut` is used when `good_service` is a count of values
     * aggregated in a `Distribution` that fall into a good range. The
     * `total_service` is the total count of all values aggregated in the
     * `Distribution`.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.DistributionCut distribution_cut = 3;</code>
     * @return \Google\Cloud\Monitoring\V3\DistributionCut|null
     */
    public function getDistributionCut()
    {
        return $this->readOneof(3);
    }

    public function hasDistributionCut()
    {
        return $this->hasOneof(3);
    }

    /**
     * `distribution_cut` is used when `good_service` is a count of values
     * aggregated in a `Distribution` that fall into a good range. The
     * `total_service` is the total count of all values aggregated in the
     * `Distribution`.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.DistributionCut distribution_cut = 3;</code>
     * @param \Google\Cloud\Monitoring\V3\DistributionCut $var
     * @return $this
     */
    public function setDistributionCut($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Monitoring\V3\DistributionCut::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return $this->whichOneof("method");
    }

}
