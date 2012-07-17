<?php

namespace Kwattro\Neo4j\UserBundle\Node;

use FOS\UserBundle\Model\UserInterface;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use HireVoice\Neo4j\Annotation as OGM;

/**
 * Class to be extended by your final User class
 *
 * @author Christophe Willemsen <willemsen.christophe@gmail.com>
 */

abstract class User
{
	const ROLE_DEFAULT = 'ROLE_USER';
	const ROLE_SUPER_ADMIN = 'ROLE_SUPER_ADMIN';

	/**
	* @OGM\Property
	* @OGM\Index
	*/
	protected $username;

	/**
	* @OGM\Property
	*/
	protected $usernameCanonical;

	/**
	 * @OGM\Property
	 * @OGM\Index
	 */
	protected $email;

	/**
	 * @OGM\Property
	 */
	protected $emailCanonical;

	/**
	 * @OGM\Property
	 */
	protected $enabled;

	/**
	 * @OGM\Property
	 */
	protected $salt;

	/**
	 * @OGM\Property
	 */
	protected $password;

	/**
	 * @var string
	 */
	protected $plainPassword;

	/**
	 * @OGM\Property
	 */
	protected $lastLogin;

	/**
	 * @OGM\Property
	 * @OGM\Index
	 */
	protected $confirmationToken;

	/**
	 * @OGM\Property
	 */
	protected $passwordRequestedAt;

	/**
	 * @OGM\Property
	 */
	protected $groups;

	/**
	 * @OGM\Property
	 */
	protected $locked;

	/**
	 * @OGM\Property
	 */
	protected $expired;

	/**
	 * @OGM\Property
	 */
	protected $expiresAt;

	/**
	 * @OGM\Property
	 */
	protected $roles;

	/**
	 * @OGM\Property
	 */
	protected $credentialsExpireAt;

	public function __construct()
	{

	}

	public function addRole($role)
	{

	}

	public function serialize()
	{

	}

	public function unserialize()
	{

	}

	public function eraseCredentials()
	{

	}

	public function setUsername($username)
	{
		$this->username = $username;
		return $this;
	}

	public function getUsername()
	{
		return $this->username;
	}

	public function setPlainPassword($password)
	{
		$this->password = $password;
		return $this;
	}

	public function getPlainPassword()
	{
		return $this->plainPassword;
	}
}