<?php

namespace ChromeDevtoolsProtocol\Model\Audits;

/**
 * Details for a request that has been blocked with the BLOCKED_BY_RESPONSE code. Currently only used for COEP/COOP, but may be extended to include some CSP errors in the future.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class BlockedByResponseIssueDetails implements \JsonSerializable
{
	/** @var AffectedRequest */
	public $request;

	/** @var AffectedFrame|null */
	public $frame;

	/** @var string */
	public $reason;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->request)) {
			$instance->request = AffectedRequest::fromJson($data->request);
		}
		if (isset($data->frame)) {
			$instance->frame = AffectedFrame::fromJson($data->frame);
		}
		if (isset($data->reason)) {
			$instance->reason = (string)$data->reason;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->request !== null) {
			$data->request = $this->request->jsonSerialize();
		}
		if ($this->frame !== null) {
			$data->frame = $this->frame->jsonSerialize();
		}
		if ($this->reason !== null) {
			$data->reason = $this->reason;
		}
		return $data;
	}
}
