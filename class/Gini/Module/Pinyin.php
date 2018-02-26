<?php

namespace Gini\Module {
use \Yurun\Util\Chinese;

    class Pinyin {

        static function setup() {
            date_default_timezone_set(\Gini\Config::get('system.timezone') ?: 'Asia/Shanghai');
        }

        static function code($string = '') {
            $result = Chinese::toPinyin($string, Chinese\Pinyin::CONVERT_MODE_PINYIN);
            return $result['pinyin'][0] ? join(' ', $result['pinyin'][0]) : '';
        }
    }
}
