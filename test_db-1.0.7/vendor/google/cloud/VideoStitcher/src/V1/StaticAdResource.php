<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/stitcher/v1/companions.proto

namespace Google\Cloud\Video\Stitcher\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata for a static ad resource.
 *
 * Generated from protobuf message <code>google.cloud.video.stitcher.v1.StaticAdResource</code>
 */
class StaticAdResource extends \Google\Protobuf\Internal\Message
{
    /**
     * URI to the static file for the ad resource.
     *
     * Generated from protobuf field <code>string uri = 1;</code>
     */
    private $uri = '';
    /**
     * Describes the MIME type of the ad resource.
     *
     * Generated from protobuf field <code>string creative_type = 2;</code>
     */
    private $creative_type = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $uri
     *           URI to the static file for the ad resource.
     *     @type string $creative_type
     *           Describes the MIME type of the ad resource.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Video\Stitcher\V1\Companions::initOnce();
        parent::__construct($data);
    }

    /**
     * URI to the static file for the ad resource.
     *
     * Generated from protobuf field <code>string uri = 1;</code>
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * URI to the static file for the ad resource.
     *
     * Generated from protobuf field <code>string uri = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->uri = $var;

        return $this;
    }

    /**
     * Describes the MIME type of the ad resource.
     *
     * Generated from protobuf field <code>string creative_type = 2;</code>
     * @return string
     */
    public function getCreativeType()
    {
        return $this->creative_type;
    }

    /**
     * Describes the MIME type of the ad resource.
     *
     * Generated from protobuf field <code>string creative_type = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCreativeType($var)
    {
        GPBUtil::checkString($var, True);
        $this->creative_type = $var;

        return $this;
    }

}
