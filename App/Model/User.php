<?php
namespace App\Data\Model;
class User extends BaseModel
{
    # 表名
    CONST TABLE = 'user';

    /**
     * @var int 设置缓存时间10s ,0也就是禁止缓存
     */
    protected $_cache_time = 10;

    protected $_connection = 'test';

    // 通过字段来设置key 避免整张表全量刷新
    // 如评论表 可设置 文章id字段当做 缓存key
    // 当评论有变化时 只会刷新当前文章的评论缓存
    protected $_cache_key_column = [];

    //  设置忽略的字段，这些字段更新时不刷新缓存
    protected $_ignore_flush_cache_column = [];

    /**
     * 设置关系 用户的文章
     */
    public function articles()
    {
        return $this->hasMany('id', Article::class, 'user_id');
//        状态为 1 的文章
//        return $this->hasMany('id', Article::class, 'user_id')->where('status', 1);
    }


    public function events()
    {
        return [
            'beforeGet' => function ($model) {
                // 这里可以修改 参数的值
                // 如果返回 false sql将终止执行
            },
            'afterGet' => function (&$result, &$arg = null) {

            },
            'beforeUpdate' => function ($model) {

            },
            'afterUpdate' => function (&$result, &$arg = null) {

            },
            'beforeDelete' => function ($model) {

            },
            'afterDelete' => function (&$result, &$arg = null) {

            },
            'beforeInsert' => function ($model) {

            },
            'afterInsert' => function (&$result, &$arg = null) {

            },
        ];

    }

}