<?php

namespace app\common\model;

use tpadmin\model\Config as TpadminConfig;

class Config extends TpadminConfig
{
    /**
     * 读取站点设置信息
     * @return array|mixed
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public static function siteSetting()
    {
        $config = self::where('name', self::NAME_SITE_SETTING)->find();
        if(empty($config)){
            return [];
        }

        return $config->settings;
    }
}

