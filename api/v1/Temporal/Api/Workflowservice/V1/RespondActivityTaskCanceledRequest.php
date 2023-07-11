<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/workflowservice/v1/request_response.proto

namespace Temporal\Api\Workflowservice\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.workflowservice.v1.RespondActivityTaskCanceledRequest</code>
 */
class RespondActivityTaskCanceledRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The task token as received in `PollActivityTaskQueueResponse`
     *
     * Generated from protobuf field <code>bytes task_token = 1;</code>
     */
    protected $task_token = '';
    /**
     * Serialized additional information to attach to the cancellation
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.Payloads details = 2;</code>
     */
    protected $details = null;
    /**
     * The identity of the worker/client
     *
     * Generated from protobuf field <code>string identity = 3;</code>
     */
    protected $identity = '';
    /**
     * Generated from protobuf field <code>string namespace = 4;</code>
     */
    protected $namespace = '';
    /**
     * Version info of the worker who processed this task. This message's `build_id` field should
     * always be set by SDKs. Workers opting into versioning will also set the `use_versioning`
     * field to true. See message docstrings for more.
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkerVersionStamp worker_version = 5;</code>
     */
    protected $worker_version = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $task_token
     *           The task token as received in `PollActivityTaskQueueResponse`
     *     @type \Temporal\Api\Common\V1\Payloads $details
     *           Serialized additional information to attach to the cancellation
     *     @type string $identity
     *           The identity of the worker/client
     *     @type string $namespace
     *     @type \Temporal\Api\Common\V1\WorkerVersionStamp $worker_version
     *           Version info of the worker who processed this task. This message's `build_id` field should
     *           always be set by SDKs. Workers opting into versioning will also set the `use_versioning`
     *           field to true. See message docstrings for more.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Workflowservice\V1\RequestResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * The task token as received in `PollActivityTaskQueueResponse`
     *
     * Generated from protobuf field <code>bytes task_token = 1;</code>
     * @return string
     */
    public function getTaskToken()
    {
        return $this->task_token;
    }

    /**
     * The task token as received in `PollActivityTaskQueueResponse`
     *
     * Generated from protobuf field <code>bytes task_token = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTaskToken($var)
    {
        GPBUtil::checkString($var, False);
        $this->task_token = $var;

        return $this;
    }

    /**
     * Serialized additional information to attach to the cancellation
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.Payloads details = 2;</code>
     * @return \Temporal\Api\Common\V1\Payloads|null
     */
    public function getDetails()
    {
        return $this->details;
    }

    public function hasDetails()
    {
        return isset($this->details);
    }

    public function clearDetails()
    {
        unset($this->details);
    }

    /**
     * Serialized additional information to attach to the cancellation
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.Payloads details = 2;</code>
     * @param \Temporal\Api\Common\V1\Payloads $var
     * @return $this
     */
    public function setDetails($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Common\V1\Payloads::class);
        $this->details = $var;

        return $this;
    }

    /**
     * The identity of the worker/client
     *
     * Generated from protobuf field <code>string identity = 3;</code>
     * @return string
     */
    public function getIdentity()
    {
        return $this->identity;
    }

    /**
     * The identity of the worker/client
     *
     * Generated from protobuf field <code>string identity = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setIdentity($var)
    {
        GPBUtil::checkString($var, True);
        $this->identity = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string namespace = 4;</code>
     * @return string
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
     * Generated from protobuf field <code>string namespace = 4;</code>
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
     * Version info of the worker who processed this task. This message's `build_id` field should
     * always be set by SDKs. Workers opting into versioning will also set the `use_versioning`
     * field to true. See message docstrings for more.
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkerVersionStamp worker_version = 5;</code>
     * @return \Temporal\Api\Common\V1\WorkerVersionStamp|null
     */
    public function getWorkerVersion()
    {
        return $this->worker_version;
    }

    public function hasWorkerVersion()
    {
        return isset($this->worker_version);
    }

    public function clearWorkerVersion()
    {
        unset($this->worker_version);
    }

    /**
     * Version info of the worker who processed this task. This message's `build_id` field should
     * always be set by SDKs. Workers opting into versioning will also set the `use_versioning`
     * field to true. See message docstrings for more.
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkerVersionStamp worker_version = 5;</code>
     * @param \Temporal\Api\Common\V1\WorkerVersionStamp $var
     * @return $this
     */
    public function setWorkerVersion($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Common\V1\WorkerVersionStamp::class);
        $this->worker_version = $var;

        return $this;
    }

}

