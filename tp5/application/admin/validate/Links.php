<?php
namespace app\admin\validate;

use think\Validate;

class Links extends Validate
{
    protected  $rule=[
        'title'=>'require|max:25|unique:links',    //unique获取当前表名
        'url'=>'require',
    ];

    protected $message=[
        'title.require'=>'链接标题必须填写',
        'title.max'=>'链接标题长度不得大于25位',
        'title.unique'=>'链接标题不能重复',
        'url.require'=>'链接地址必须填写',
    ];

    protected $scene=[
        'add'=>['title','url'],
        'edit'=>['title','url']
    ];

}
