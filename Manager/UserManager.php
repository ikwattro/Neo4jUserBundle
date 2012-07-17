<?php

namespace Kwattro\Neo4j\UserBundle\Manager;

use FOS\UserBundle\Util\CanonicalizerInterface;
use FOS\UserBundle\Model\UserManagerInterface as BaseUserManagerInterface;
use Symfony\Component\Security\Core\Encoder\EncoderFactoryInterface;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\User\UserInterface as SecurityUserInterface;
use Symfony\Component\Security\Core\UserProviderInterface;
use Kwattro\Neo4jBundle\GraphManager\GraphManager;

/**
 * Class that implements the FOSUserManagerInterface
 * 
 * This class is the Neo4j Users Manager
 * 
 * @author Christophe Willemsen <willemsen.christophe@gmail.com>
 */
class UserManager implements BaseUserManagerInterface, UserProviderInterface
{
	protected $encoderFactory;
	protected $usernameCanonicalizer;
	protected $emailCanonicalizer;
	protected $graphManager;

	/**
	 * Constructor
	 *
	 */
	public function __construct(EncoderFactoryInterface $encoderFactory, CanonicalizerInterface $usernameCanonicalizer, CanonicalizerInterface $emailCanonicalizer, GraphManager $graphManager)
	{
		$this->encoderFactory = $encoderFactory;
		$this->usernameCanonicalizer = $usernameCanonicalizer;
		$this->emailCanonicalizer = $emailCanonicalizer;
		$this->graphManager = $graphManager;
	}

	public function createUser()
	{
		$class = $this->getClass();
		$user = new $class;

		return $user;
	}

	public function findUserByUsername($username)
	{

	}

	public function findUserByUsernameOrEmail($usernameOrEmail)
	{

	}

	public function findUserByConfirmationToken($token)
	{

	}

	public function refreshUser(SecurityUserInterface $user)
	{

	}

	public function loadUserByUsername($username)
	{

	}

	public function updateCanonicalFields(UserInterface $user)
	{

	}

	public function updatePassword(UserInterface $user)
	{

	}

	protected function canonicalizeUsername($username)
	{

	}

	protected function getEncoder(UserInterface $user)
	{

	}

	public function supportsClass($class)
	{
		return $class === $this->getClass();
	}
}