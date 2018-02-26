<?php

namespace Gini\Controller\CLI;
use \Yurun\Util\Chinese;

class Pinyin extends \Gini\Controller\CLI {

    function actionTest() {
        $result = Chinese::toPinyin('啥都离开', Chinese\Pinyin::CONVERT_MODE_PINYIN);
        var_dump($result);
        var_dump(join(' ', $result['pinyin'][0]));
    }
}
