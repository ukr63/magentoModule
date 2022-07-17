<?php

namespace Mypage\Second\Block;

use Magento\Framework\View\Element\Template;

class Bro extends Template
{

    public function __construct(Template\Context $context)
    {
        parent::__construct($context);
    }

    public function setText()
    {
        return 'SUKAKAAAAA';
    }
}

