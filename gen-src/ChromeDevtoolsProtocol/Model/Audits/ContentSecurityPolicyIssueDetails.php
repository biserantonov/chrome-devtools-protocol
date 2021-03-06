<?php

namespace ChromeDevtoolsProtocol\Model\Audits;

/**
 * Named type Audits.ContentSecurityPolicyIssueDetails.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class ContentSecurityPolicyIssueDetails implements \JsonSerializable
{
	/**
	 * The url not included in allowed sources.
	 *
	 * @var string|null
	 */
	public $blockedURL;

	/**
	 * Specific directive that is violated, causing the CSP issue.
	 *
	 * @var string
	 */
	public $violatedDirective;

	/** @var string */
	public $contentSecurityPolicyViolationType;

	/** @var AffectedFrame|null */
	public $frameAncestor;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->blockedURL)) {
			$instance->blockedURL = (string)$data->blockedURL;
		}
		if (isset($data->violatedDirective)) {
			$instance->violatedDirective = (string)$data->violatedDirective;
		}
		if (isset($data->contentSecurityPolicyViolationType)) {
			$instance->contentSecurityPolicyViolationType = (string)$data->contentSecurityPolicyViolationType;
		}
		if (isset($data->frameAncestor)) {
			$instance->frameAncestor = AffectedFrame::fromJson($data->frameAncestor);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->blockedURL !== null) {
			$data->blockedURL = $this->blockedURL;
		}
		if ($this->violatedDirective !== null) {
			$data->violatedDirective = $this->violatedDirective;
		}
		if ($this->contentSecurityPolicyViolationType !== null) {
			$data->contentSecurityPolicyViolationType = $this->contentSecurityPolicyViolationType;
		}
		if ($this->frameAncestor !== null) {
			$data->frameAncestor = $this->frameAncestor->jsonSerialize();
		}
		return $data;
	}
}
