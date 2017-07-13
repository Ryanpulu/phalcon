<?php

class Dynamic extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $dynamicId;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $userId;

    /**
     *
     * @var string
     * @Column(type="string", length=1000, nullable=false)
     */
    public $contents;

    /**
     *
     * @var string
     * @Column(type="string", length=500, nullable=false)
     */
    public $pic;

    /**
     *
     * @var string
     * @Column(type="string", length=500, nullable=true)
     */
    public $picInfo;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $numberRead;

    /**
     *
     * @var integer
     * @Column(type="integer", length=13, nullable=false)
     */
    public $addtime;

    /**
     *
     * @var integer
     * @Column(type="integer", length=1, nullable=false)
     */
    public $flag;

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
        return 'dynamic';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Dynamic[]|Dynamic|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Dynamic|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

    /**
     * 
     * @return bool
     */
    public function testDynamic(){
        return TRUE;
    }

}
