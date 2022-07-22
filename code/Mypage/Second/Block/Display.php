<?php

namespace Mypage\Second\Block;

use Magento\Framework\View\Element\Template;

class Display extends Template
{
    public array $arr = [
        1=>[
            'name'=>'Anton',
            'surname'=>'Ch',
            'age'=>18,
        ],
        [
            'name'=>'nAme',
            'surname'=>'Nnn0',
            'age'=>0,
        ],
    ];
    public function __construct(Template\Context $context)
    {
        parent::__construct($context);
    }

    public function getHuman()
    {

        $id = isset($_GET['id']) ? $_GET['id'] : null;

        if ($id && in_array($id, $this->arr))
            var_dump($this->arr[$id]);
    }
}
