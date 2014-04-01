<?php

namespace EB\DoctrineBundle\Entity\Doctrine;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Trait UserTrait
 *
 * @author "Emmanuel BALLERY" <emmanuel.ballery@gmail.com>
 */
trait UserTrait
{
    use SaltTrait;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, unique=true)
     * @Assert\NotBlank()
     * @Assert\Email()
     * @Assert\Length(max=255)
     */
    private $username;

    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private $password;

    /**
     * @var string
     * @Assert\Length(min="6", max="50")
     */
    private $rawPassword;

    /**
     * {@inheritdoc}
     */
    public function __toString()
    {
        return (string)$this->getUsername();
    }

    /**
     * Set Username
     *
     * @param string $username
     *
     * @return UserTrait
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get Username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set Password
     *
     * @param string $password
     *
     * @return UserTrait
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get Password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set RawPassword
     *
     * @param string $rawPassword
     *
     * @return UserTrait
     */
    public function setRawPassword($rawPassword)
    {
        $this->rawPassword = $rawPassword;

        return $this;
    }

    /**
     * Get RawPassword
     *
     * @return string
     */
    public function getRawPassword()
    {
        return $this->rawPassword;
    }
}