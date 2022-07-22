<?php

namespace Mypage\Second\Block;

use Magento\Framework\View\Element\Template;
use Mypage\Second\Model\PostFactory;

class Index extends Template
{
    protected $_pageFactory, $_postFactory;
    public function __construct(Template\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory,
        PostFactory $postFactory
    )
    {
        $this->_pageFactory = $pageFactory;
        $this->_postFactory = $postFactory;
        parent::__construct($context);
    }

    public function getPosts()
    {
        $post = $this->_postFactory->create();
        $collection = $post->getCollection();
        // $collection->getSelectSql();

        return $collection;
    }
}
