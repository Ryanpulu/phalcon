<?php

namespace Phalcon\Mvc\Models;

use Phalcon\Validation;
use Phalcon\Validation\Validator\Email as EmailValidator;

class User extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=20, nullable=false)
     */
    public $id;

    /**
     *
     * @var integer
     * @Column(type="integer", length=6, nullable=true)
     */
    public $siteid;

    /**
     *
     * @var integer
     * @Column(type="integer", length=4, nullable=false)
     */
    public $type;

    /**
     *
     * @var string
     * @Column(type="string", length=16, nullable=true)
     */
    public $username;

    /**
     *
     * @var string
     * @Column(type="string", length=32, nullable=true)
     */
    public $email;

    /**
     *
     * @var string
     * @Column(type="string", length=15, nullable=true)
     */
    public $mobile;

    /**
     *
     * @var string
     * @Column(type="string", length=64, nullable=true)
     */
    public $qq;

    /**
     *
     * @var string
     * @Column(type="string", length=64, nullable=true)
     */
    public $weixin;

    /**
     *
     * @var string
     * @Column(type="string", length=64, nullable=true)
     */
    public $weibo;

    /**
     *
     * @var string
     * @Column(type="string", length=70, nullable=true)
     */
    public $password;

    /**
     *
     * @var integer
     * @Column(type="integer", length=20, nullable=false)
     */
    public $regTime;

    /**
     *
     * @var string
     * @Column(type="string", length=15, nullable=false)
     */
    public $regIp;

    /**
     *
     * @var integer
     * @Column(type="integer", length=20, nullable=true)
     */
    public $lastLoginTime;

    /**
     *
     * @var string
     * @Column(type="string", length=15, nullable=true)
     */
    public $lastLoginIp;

    /**
     *
     * @var integer
     * @Column(type="integer", length=4, nullable=false)
     */
    public $status;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $updateTime;

    /**
     *
     * @var integer
     * @Column(type="integer", length=4, nullable=true)
     */
    public $power;

    /**
     * Validations and business logic
     *
     * @return boolean
     */
    public function validation()
    {
        $validator = new Validation();

        $validator->add(
            'email',
            new EmailValidator(
                [
                    'model'   => $this,
                    'message' => 'Please enter a correct email address',
                ]
            )
        );

        return $this->validate($validator);
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("orienteering");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'user';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return User[]|User|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return User|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
