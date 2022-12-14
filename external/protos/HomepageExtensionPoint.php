<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/apps/script/type/extension_point.proto

namespace Google\Apps\Script\Type;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Common format for declaring an add-on's home-page view.
 *
 * Generated from protobuf message <code>google.apps.script.type.HomepageExtensionPoint</code>
 */
class HomepageExtensionPoint extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The endpoint to execute when this extension point is
     * activated.
     *
     * Generated from protobuf field <code>string run_function = 1;</code>
     */
    protected $run_function = '';
    /**
     * Optional. If set to `false`, disable the home-page view in this context.
     * Defaults to `true` if unset.
     * If an add-ons custom home-page view is disabled, an autogenerated overview
     * card will be provided for users instead.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue enabled = 2;</code>
     */
    protected $enabled = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $run_function
     *           Required. The endpoint to execute when this extension point is
     *           activated.
     *     @type \Google\Protobuf\BoolValue $enabled
     *           Optional. If set to `false`, disable the home-page view in this context.
     *           Defaults to `true` if unset.
     *           If an add-ons custom home-page view is disabled, an autogenerated overview
     *           card will be provided for users instead.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Apps\Script\Type\ExtensionPoint::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The endpoint to execute when this extension point is
     * activated.
     *
     * Generated from protobuf field <code>string run_function = 1;</code>
     * @return string
     */
    public function getRunFunction()
    {
        return $this->run_function;
    }

    /**
     * Required. The endpoint to execute when this extension point is
     * activated.
     *
     * Generated from protobuf field <code>string run_function = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setRunFunction($var)
    {
        GPBUtil::checkString($var, True);
        $this->run_function = $var;

        return $this;
    }

    /**
     * Optional. If set to `false`, disable the home-page view in this context.
     * Defaults to `true` if unset.
     * If an add-ons custom home-page view is disabled, an autogenerated overview
     * card will be provided for users instead.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue enabled = 2;</code>
     * @return \Google\Protobuf\BoolValue|null
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    public function hasEnabled()
    {
        return isset($this->enabled);
    }

    public function clearEnabled()
    {
        unset($this->enabled);
    }

    /**
     * Returns the unboxed value from <code>getEnabled()</code>

     * Optional. If set to `false`, disable the home-page view in this context.
     * Defaults to `true` if unset.
     * If an add-ons custom home-page view is disabled, an autogenerated overview
     * card will be provided for users instead.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue enabled = 2;</code>
     * @return bool|null
     */
    public function getEnabledUnwrapped()
    {
        return $this->readWrapperValue("enabled");
    }

    /**
     * Optional. If set to `false`, disable the home-page view in this context.
     * Defaults to `true` if unset.
     * If an add-ons custom home-page view is disabled, an autogenerated overview
     * card will be provided for users instead.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue enabled = 2;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setEnabled($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->enabled = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * Optional. If set to `false`, disable the home-page view in this context.
     * Defaults to `true` if unset.
     * If an add-ons custom home-page view is disabled, an autogenerated overview
     * card will be provided for users instead.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue enabled = 2;</code>
     * @param bool|null $var
     * @return $this
     */
    public function setEnabledUnwrapped($var)
    {
        $this->writeWrapperValue("enabled", $var);
        return $this;}

}

