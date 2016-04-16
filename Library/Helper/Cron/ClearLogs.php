<?php
/**
 * Created by PhpStorm.
 * User: Sendya
 * Date: 2016/3/27
 * Time: 3:50
 */

namespace Helper\Cron;

use Contactable\ICron;

use Helper\Setting;
use Model\User;

/**
 * 计划任务 - Clear Logs
 * 定时清理系统内的无用数据..
 *
 * @package Helper\Cron
 */
class ClearLogs implements ICron {

    const STEP = 3600; // 1小时执行一次

    public function run() {



    }
    public function getStep() {
        return time()+self::STEP;
    }
}