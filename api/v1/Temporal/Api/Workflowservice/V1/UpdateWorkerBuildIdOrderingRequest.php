<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/workflowservice/v1/request_response.proto

namespace Temporal\Api\Workflowservice\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * (-- api-linter: core::0134::request-mask-required=disabled
 *     aip.dev/not-precedent: UpdateWorkerBuildIdOrderingRequest doesn't follow Google API format --)
 * (-- api-linter: core::0134::request-resource-required=disabled
 *     aip.dev/not-precedent: UpdateWorkerBuildIdOrderingRequest RPC doesn't follow Google API format. --)
 *
 * Generated from protobuf message <code>temporal.api.workflowservice.v1.UpdateWorkerBuildIdOrderingRequest</code>
 */
class UpdateWorkerBuildIdOrderingRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string namespace = 1;</code>
     */
    protected $namespace = '';
    /**
     * Must be set, the task queue to apply changes to. Because all workers on
     * a given task queue must have the same set of workflow & activity
     * implementations, there is no reason to specify a task queue type here.
     *
     * Generated from protobuf field <code>string task_queue = 2;</code>
     */
    protected $task_queue = '';
    /**
     * The version id we are targeting.
     *
     * Generated from protobuf field <code>.temporal.api.taskqueue.v1.VersionId version_id = 3;</code>
     */
    protected $version_id = null;
    /**
     * When set, indicates that the `version_id` in this message is compatible
     * with the one specified in this field. Because compatability should form
     * a DAG, any build id can only be the "next compatible" version for one
     * other ID of a certain type at a time, and any setting which would create a cycle is invalid.
     *
     * Generated from protobuf field <code>.temporal.api.taskqueue.v1.VersionId previous_compatible = 4;</code>
     */
    protected $previous_compatible = null;
    /**
     * When set, establishes the specified `version_id` as the default of it's type
     * for the queue. Workers matching it will begin processing new workflow executions.
     * The existing default will be marked as a previous incompatible version
     * to this one, assuming it is not also in `is_compatible_with`.
     *
     * Generated from protobuf field <code>bool become_default = 5;</code>
     */
    protected $become_default = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $namespace
     *     @type string $task_queue
     *           Must be set, the task queue to apply changes to. Because all workers on
     *           a given task queue must have the same set of workflow & activity
     *           implementations, there is no reason to specify a task queue type here.
     *     @type \Temporal\Api\Taskqueue\V1\VersionId $version_id
     *           The version id we are targeting.
     *     @type \Temporal\Api\Taskqueue\V1\VersionId $previous_compatible
     *           When set, indicates that the `version_id` in this message is compatible
     *           with the one specified in this field. Because compatability should form
     *           a DAG, any build id can only be the "next compatible" version for one
     *           other ID of a certain type at a time, and any setting which would create a cycle is invalid.
     *     @type bool $become_default
     *           When set, establishes the specified `version_id` as the default of it's type
     *           for the queue. Workers matching it will begin processing new workflow executions.
     *           The existing default will be marked as a previous incompatible version
     *           to this one, assuming it is not also in `is_compatible_with`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Workflowservice\V1\RequestResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string namespace = 1;</code>
     * @return string
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
     * Generated from protobuf field <code>string namespace = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setNamespace($var)
    {
        GPBUtil::checkString($var, True);
        $this->namespace = $var;

        return $this;
    }

    /**
     * Must be set, the task queue to apply changes to. Because all workers on
     * a given task queue must have the same set of workflow & activity
     * implementations, there is no reason to specify a task queue type here.
     *
     * Generated from protobuf field <code>string task_queue = 2;</code>
     * @return string
     */
    public function getTaskQueue()
    {
        return $this->task_queue;
    }

    /**
     * Must be set, the task queue to apply changes to. Because all workers on
     * a given task queue must have the same set of workflow & activity
     * implementations, there is no reason to specify a task queue type here.
     *
     * Generated from protobuf field <code>string task_queue = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTaskQueue($var)
    {
        GPBUtil::checkString($var, True);
        $this->task_queue = $var;

        return $this;
    }

    /**
     * The version id we are targeting.
     *
     * Generated from protobuf field <code>.temporal.api.taskqueue.v1.VersionId version_id = 3;</code>
     * @return \Temporal\Api\Taskqueue\V1\VersionId|null
     */
    public function getVersionId()
    {
        return $this->version_id;
    }

    public function hasVersionId()
    {
        return isset($this->version_id);
    }

    public function clearVersionId()
    {
        unset($this->version_id);
    }

    /**
     * The version id we are targeting.
     *
     * Generated from protobuf field <code>.temporal.api.taskqueue.v1.VersionId version_id = 3;</code>
     * @param \Temporal\Api\Taskqueue\V1\VersionId $var
     * @return $this
     */
    public function setVersionId($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Taskqueue\V1\VersionId::class);
        $this->version_id = $var;

        return $this;
    }

    /**
     * When set, indicates that the `version_id` in this message is compatible
     * with the one specified in this field. Because compatability should form
     * a DAG, any build id can only be the "next compatible" version for one
     * other ID of a certain type at a time, and any setting which would create a cycle is invalid.
     *
     * Generated from protobuf field <code>.temporal.api.taskqueue.v1.VersionId previous_compatible = 4;</code>
     * @return \Temporal\Api\Taskqueue\V1\VersionId|null
     */
    public function getPreviousCompatible()
    {
        return $this->previous_compatible;
    }

    public function hasPreviousCompatible()
    {
        return isset($this->previous_compatible);
    }

    public function clearPreviousCompatible()
    {
        unset($this->previous_compatible);
    }

    /**
     * When set, indicates that the `version_id` in this message is compatible
     * with the one specified in this field. Because compatability should form
     * a DAG, any build id can only be the "next compatible" version for one
     * other ID of a certain type at a time, and any setting which would create a cycle is invalid.
     *
     * Generated from protobuf field <code>.temporal.api.taskqueue.v1.VersionId previous_compatible = 4;</code>
     * @param \Temporal\Api\Taskqueue\V1\VersionId $var
     * @return $this
     */
    public function setPreviousCompatible($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Taskqueue\V1\VersionId::class);
        $this->previous_compatible = $var;

        return $this;
    }

    /**
     * When set, establishes the specified `version_id` as the default of it's type
     * for the queue. Workers matching it will begin processing new workflow executions.
     * The existing default will be marked as a previous incompatible version
     * to this one, assuming it is not also in `is_compatible_with`.
     *
     * Generated from protobuf field <code>bool become_default = 5;</code>
     * @return bool
     */
    public function getBecomeDefault()
    {
        return $this->become_default;
    }

    /**
     * When set, establishes the specified `version_id` as the default of it's type
     * for the queue. Workers matching it will begin processing new workflow executions.
     * The existing default will be marked as a previous incompatible version
     * to this one, assuming it is not also in `is_compatible_with`.
     *
     * Generated from protobuf field <code>bool become_default = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setBecomeDefault($var)
    {
        GPBUtil::checkBool($var);
        $this->become_default = $var;

        return $this;
    }

}

