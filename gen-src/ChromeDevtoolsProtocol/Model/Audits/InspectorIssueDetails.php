<?php

namespace ChromeDevtoolsProtocol\Model\Audits;

/**
 * This struct holds a list of optional fields with additional information specific to the kind of issue. When adding a new issue code, please also add a new optional field to this type.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class InspectorIssueDetails implements \JsonSerializable
{
	/** @var SameSiteCookieIssueDetails|null */
	public $sameSiteCookieIssueDetails;

	/** @var MixedContentIssueDetails|null */
	public $mixedContentIssueDetails;

	/** @var BlockedByResponseIssueDetails|null */
	public $blockedByResponseIssueDetails;

	/** @var HeavyAdIssueDetails|null */
	public $heavyAdIssueDetails;

	/** @var ContentSecurityPolicyIssueDetails|null */
	public $contentSecurityPolicyIssueDetails;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->sameSiteCookieIssueDetails)) {
			$instance->sameSiteCookieIssueDetails = SameSiteCookieIssueDetails::fromJson($data->sameSiteCookieIssueDetails);
		}
		if (isset($data->mixedContentIssueDetails)) {
			$instance->mixedContentIssueDetails = MixedContentIssueDetails::fromJson($data->mixedContentIssueDetails);
		}
		if (isset($data->blockedByResponseIssueDetails)) {
			$instance->blockedByResponseIssueDetails = BlockedByResponseIssueDetails::fromJson($data->blockedByResponseIssueDetails);
		}
		if (isset($data->heavyAdIssueDetails)) {
			$instance->heavyAdIssueDetails = HeavyAdIssueDetails::fromJson($data->heavyAdIssueDetails);
		}
		if (isset($data->contentSecurityPolicyIssueDetails)) {
			$instance->contentSecurityPolicyIssueDetails = ContentSecurityPolicyIssueDetails::fromJson($data->contentSecurityPolicyIssueDetails);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->sameSiteCookieIssueDetails !== null) {
			$data->sameSiteCookieIssueDetails = $this->sameSiteCookieIssueDetails->jsonSerialize();
		}
		if ($this->mixedContentIssueDetails !== null) {
			$data->mixedContentIssueDetails = $this->mixedContentIssueDetails->jsonSerialize();
		}
		if ($this->blockedByResponseIssueDetails !== null) {
			$data->blockedByResponseIssueDetails = $this->blockedByResponseIssueDetails->jsonSerialize();
		}
		if ($this->heavyAdIssueDetails !== null) {
			$data->heavyAdIssueDetails = $this->heavyAdIssueDetails->jsonSerialize();
		}
		if ($this->contentSecurityPolicyIssueDetails !== null) {
			$data->contentSecurityPolicyIssueDetails = $this->contentSecurityPolicyIssueDetails->jsonSerialize();
		}
		return $data;
	}
}
