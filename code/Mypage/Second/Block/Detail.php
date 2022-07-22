<?php

namespace Mypage\Second\Block;

use Magento\Framework\View\Element\Template;

class Detail extends Template
{
    protected $_pageFactory, $_resource, $connection;
    public function __construct(Template\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory,
        \Magento\Framework\App\ResourceConnection $resource
    )
    {
        $this->_resource = $resource;
        $this->_pageFactory = $pageFactory;
        parent::__construct($context);
    }

    protected function getConnection()
    {
        if (!$this->connection)
        {
            $this->connection = $this->_resource->getConnection(\Magento\Framework\App\ResourceConnection::DEFAULT_CONNECTION);
        }

        return $this->connection;
    }

    public function getQueryDirect($id)
    {
        $table = $this->_resource->getTableName('mypage_second_post');
        $sku = $this->getConnection()->fetchRow('SELECT * FROM ' .$table. ' WHERE id = ' . $id . '');
        return $sku;
    }
}
