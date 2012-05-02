<?php
namespace models;
 
/**
 * Encryption key adapted from @Joseph Wynn algorithm
 * @Entity
 * @Table(name="users")
 * @author John O. Adams 
 */

class SystemUser
{
	/**
     * Encryption key used as for password hashing
     * @static
     */
    private static $encryption_key = '5p(TWrzR}KN|3nGV+6D#8Evkdx:]K"]azW*!A7:P5<84;{6kB)c6>D{="]RP/CC';
	
	/**
	 * @Id
	 * @Column(name="usersID", type="integer", length=20, nullable=false)
	 * @GeneratedValue(strategy="AUTO")
	 */
	private $id;
	 
	/**
	 * @Column(name="userName",type="string", length=32, unique=true, nullable=false)
	 */
	private $username;
	 
	/**
	 * @Column(name="userPassword",type="string", length=255, nullable=false)
	 */
	private $password;
	
	/**
	 * @Column(name="userRights",type="integer", length=1, nullable=false)
	 */
	private $access_level;
	
	
	 
    public function getId() { return $this->id; }
    public function setId($id) { $this->id = $id; }
    public function setUsername($username) { $this->username = $username; }
    public function getUsername() { return $this->username; }
	
    public function setPassword($password) {
    	$encrypted_password = self::encryptPassword($password);

		$this->password = $encrypted_password;
    	 }
	
	/**
	 * Encrypt a Password
	 *
	 * @static
	 * @access	public
	 * @param	string	$password
	 * @return	void
	 */
	public static function encryptPassword($password)
	{
		return sha1($password . self::$encryption_key);
	}
	
    public function getPassword() {  return $this->password; }
	public function getAccessLevel() { return $this->access_level; }
    public function setAccessLevel($level) { $this->access_level = $level; }

}
