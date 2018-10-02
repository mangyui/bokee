<?php
namespace app\admin\validate;

use think\Validate;

class Post extends Validate
{
   protected  $rule=[
        'title'=>'require|max:25',
        'cateid'=>'require',
        'content'=>'require',
   ];

    protected $message=[
        'title.require'=>'链接标题必须填写',
        'title.max'=>'链接标题长度不得大于25位',
        'content.require'=>'正文必须填写',
        'cateid.require'=>'博文栏目必须选',
    ];

    protected $scene=[
        'add'=>['title','cateid','content'],
        'edit'=>['title','cateid','content']
    ];

}
