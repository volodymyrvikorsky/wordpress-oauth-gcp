<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkmanagement/v1/trace.proto

namespace Google\Cloud\NetworkManagement\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * For display only. Metadata associated with a Google Kubernetes Engine (GKE)
 * cluster master.
 *
 * Generated from protobuf message <code>google.cloud.networkmanagement.v1.GKEMasterInfo</code>
 */
class GKEMasterInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * URI of a GKE cluster.
     *
     * Generated from protobuf field <code>string cluster_uri = 2;</code>
     */
    private $cluster_uri = '';
    /**
     * URI of a GKE cluster network.
     *
     * Generated from protobuf field <code>string cluster_network_uri = 4;</code>
     */
    private $cluster_network_uri = '';
    /**
     * Internal IP address of a GKE cluster master.
     *
     * Generated from protobuf field <code>string internal_ip = 5;</code>
     */
    private $internal_ip = '';
    /**
     * External IP address of a GKE cluster master.
     *
     * Generated from protobuf field <code>string external_ip = 6;</code>
     */
    private $external_ip = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $cluster_uri
     *           URI of a GKE cluster.
     *     @type string $cluster_network_uri
     *           URI of a GKE cluster network.
     *     @type string $internal_ip
     *           Internal IP address of a GKE cluster master.
     *     @type string $external_ip
     *           External IP address of a GKE cluster master.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Networkmanagement\V1\Trace::initOnce();
        parent::__construct($data);
    }

    /**
     * URI of a GKE cluster.
     *
     * Generated from protobuf field <code>string cluster_uri = 2;</code>
     * @return string
     */
    public function getClusterUri()
    {
        return $this->cluster_uri;
    }

    /**
     * URI of a GKE cluster.
     *
     * Generated from protobuf field <code>string cluster_uri = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setClusterUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->cluster_uri = $var;

        return $this;
    }

    /**
     * URI of a GKE cluster network.
     *
     * Generated from protobuf field <code>string cluster_network_uri = 4;</code>
     * @return string
     */
    public function getClusterNetworkUri()
    {
        return $this->cluster_network_uri;
    }

    /**
     * URI of a GKE cluster network.
     *
     * Generated from protobuf field <code>string cluster_network_uri = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setClusterNetworkUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->cluster_network_uri = $var;

        return $this;
    }

    /**
     * Internal IP address of a GKE cluster master.
     *
     * Generated from protobuf field <code>string internal_ip = 5;</code>
     * @return string
     */
    public function getInternalIp()
    {
        return $this->internal_ip;
    }

    /**
     * Internal IP address of a GKE cluster master.
     *
     * Generated from protobuf field <code>string internal_ip = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setInternalIp($var)
    {
        GPBUtil::checkString($var, True);
        $this->internal_ip = $var;

        return $this;
    }

    /**
     * External IP address of a GKE cluster master.
     *
     * Generated from protobuf field <code>string external_ip = 6;</code>
     * @return string
     */
    public function getExternalIp()
    {
        return $this->external_ip;
    }

    /**
     * External IP address of a GKE cluster master.
     *
     * Generated from protobuf field <code>string external_ip = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setExternalIp($var)
    {
        GPBUtil::checkString($var, True);
        $this->external_ip = $var;

        return $this;
    }

}
