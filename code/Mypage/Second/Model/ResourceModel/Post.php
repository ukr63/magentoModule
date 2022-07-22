<?php
/*
    Model - вся логіка
    ResourceModel - sql query
*/
namespace Mypage\Second\Model\ResourceModel;

use \Magento\Framework\Model\ResourceModel\Db\AbstractDb as ADanton;
use \Magento\Framework\Model\ResourceModel\Db\Context as ContextA;

/*
trait Loh {
    public function __construct()
    {

    }
}
*/

class Post extends ADanton // всі функції для роботи з БД
{

    public function __construct(ContextA $context)
    {
        parent::__construct($context);
    }

    protected function _construct()
    {
        $this->_init(
            'mypage_second_post',
            'id'
        );
    }

}
