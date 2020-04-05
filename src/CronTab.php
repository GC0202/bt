<?php
/**
 * (c) Chaim <gc@dtapp.net>
 */


namespace LiGuAngChUn\Bt;

/**
 * 计划任务
 * Class CronTab
 * @package LiGuAngChUn\Bt
 */
class CronTab extends BaseBt
{
    /**
     * 获取网站列表
     * @return mixed
     */
    public function getDataList()
    {
        $url = '/crontab?action=GetDataList';
        $p_data['type'] = 'sites';
        //请求面板接口
        $result = $this->HttpPostCookie($url, $p_data);
        //解析JSON数据
        $data = json_decode($result, true);
        return [
            'data' => $data['data'],
            'orderOpt' => $data['orderOpt']
        ];
    }
}
