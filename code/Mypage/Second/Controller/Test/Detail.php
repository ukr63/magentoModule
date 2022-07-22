<?php

namespace Mypage\Second\Controller\Test;
use Mypage\Second\Model\PostFactory;
// class Bro extends \Mypage\Second\Controller\Index\Display
use Magento\Framework\Controller\ResultFactory;

trait DetailTrait {
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

class Detail extends \Magento\Framework\App\Action\Action
{
    // use DetailTrait;
    protected $_pageFactory, $_postFactory;
    public function __construct(\Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory
    )
    {
        $this->_pageFactory = $pageFactory;
        // $this->_postFactory = $postFactory;
        // $this->_resource = $resource;
        return parent::__construct($context);
    }
    public function execute()
    {
        // $post = $this->_postFactory->create();
        $page = $this->_pageFactory->create();

        // $post->getCollection();

        // $page->getConfig()->getTitle()->set('Ppppp');

        return $page;
    }
}
