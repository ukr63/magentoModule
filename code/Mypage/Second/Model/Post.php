<?php

namespace Mypage\Second\Model;

class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'mypage_second_post';

    protected $_cacheTag = 'mypage_second_post'; // cache

    protected $_eventPrefix = 'mypage_second_post';

    protected function _construct()
    {
        $this->_init('Mypage\Second\Model\ResourceModel\Post'); // модель ресурсів, select
    }

    public function getIdentities() // return унікальний id методу, для очистки кешу
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function getDefaultValues()
    {
        $values = [];

        return $values;
    }
}
