<?php
# 分布式给每个服务取个名字 不能重复 不能包含 @ 字符
# 在client里面需要配置这个名字的相应ip信息
return [
    'self_key' => 'server1', //php swoole.php protocol
    //'self_key' => 'server2', //php swoole.php protocol2
];