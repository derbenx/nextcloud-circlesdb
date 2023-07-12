<?php

namespace OCA\circlesdb\Controller;
use OCP\IRequest;
use OCP\AppFramework\Http\TemplateResponse;
use OCP\AppFramework\Controller;
use OCP\AppFramework\Http\ContentSecurityPolicy;

class pageController extends Controller {
	private $userId;
	public function __construct($AppName, IRequest $request, $UserId){
		parent::__construct($AppName, $request);
		$this->userId = $UserId;
	}

	/**
	 * @NoAdminRequired
	 * @NoCSRFRequired
	 */
	public function index() {
		$response = new TemplateResponse('circlesdb', 'index');  // templates/index.php
		$csp = new ContentSecurityPolicy();
		$csp->allowEvalScript(true);
		$response->setContentSecurityPolicy($csp);
		return $response;
	}

	/**
	 * @NoAdminRequired
	 * @NoCSRFRequired
	 */
	public function save() {
		include "gen.php";
		return $out;

    }
		
}
