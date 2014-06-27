<?php
namespace Nezaniel\Connector\Controller\Module\Administration;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Nezaniel.Connector".    *
 *                                                                        */

use Flowpack\SingleSignOn\Server\Domain\Repository\SsoClientRepository;
use TYPO3\Flow\Annotations as Flow;
use TYPO3\Flow\Mvc\Controller\ActionController;

/**
 * Module controller for managing registered SSO clients
 *
 * @package Nezaniel\Connector
 */
class SsoClientController extends ActionController {

	/**
	 * @Flow\Inject
	 * @var SsoClientRepository
	 */
	protected $ssoClientRepository;


	/**
	 * @return void
	 */
	public function indexAction() {
		$this->view->assignMultiple(array(
			'clients' => $this->ssoClientRepository->findAll()
		));
	}

}