<?php
namespace Mypage\Second\Model\ResourceModel\Post;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'id';
    protected $_eventPrefix = 'mypage_second_post_collection';
    protected $_eventObject = 'post_collection';

    protected function _construct()
    {
        $this->_init('Mypage\Second\Model\Post', 'Mypage\Second\Model\ResourceModel\Post');
    }

}
