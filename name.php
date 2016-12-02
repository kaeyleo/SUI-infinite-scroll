<?php
// 获取已加载的最后一条数据的index
$lastIndex = $_GET['startIndex'];
// 获取每一次加载需要拉取的数据量
$itemsPerLoad = $_GET['addNum'];

// 用户数据
$userInfo = array( array('uname' =>'steve', 'age'=> 22, 'sex'=>'female'), array('uname' =>'keyu' , 'age'=> 21, 'sex'=>'male' ), array('uname' =>'cool' , 'age'=> 16, 'sex'=>'male' ), array('uname' =>'john' , 'age'=> 26, 'sex'=>'male' ),
array('uname' =>'bill' , 'age'=> 23, 'sex'=>'male' ),array('uname' =>'keyu' , 'age'=> 21, 'sex'=>'male' ),array('uname' =>'keyu' , 'age'=> 21, 'sex'=>'male' ),
array('uname' =>'keyu' , 'age'=> 21, 'sex'=>'male' ),array('uname' =>'Abbyabbie' , 'age'=> 16, 'sex'=>'female' ),array('uname' =>'mary' , 'age'=> 28, 'sex'=>'female' ),
array('uname' =>'grace' , 'age'=> 17, 'sex'=>'female' ),array('uname' =>'哈哈哈' , 'age'=> 21, 'sex'=>'male' ),array('uname' =>'ruby' , 'age'=> 20, 'sex'=>'male' ),
array('uname' =>'jeff' , 'age'=> 20, 'sex'=>'male' ), array('uname' =>'BBC' , 'age'=> 17, 'sex'=>'female' ),array('uname' =>'niki' , 'age'=> 21, 'sex'=>'male' ),array('uname' =>'dave' , 'age'=> 20, 'sex'=>'male' ),
array('uname' =>'jeff' , 'age'=> 20, 'sex'=>'male' ), array('uname' =>'grace' , 'age'=> 17, 'sex'=>'female' ),array('uname' =>'ABC' , 'age'=> 21, 'sex'=>'male' ),array('uname' =>'ruby' , 'age'=> 20, 'sex'=>'male' ),
array('uname' =>'jeff' , 'age'=> 20, 'sex'=>'male' ), array('uname' =>'我是数据' , 'age'=> 17, 'sex'=>'female' ),array('uname' =>'miya' , 'age'=> 21, 'sex'=>'male' ),array('uname' =>'我是大数据' , 'age'=> 20, 'sex'=>'male' ),
array('uname' =>'jeff26' , 'age'=> 20, 'sex'=>'male' ), array('uname' =>'grace27' , 'age'=> 17, 'sex'=>'female' ),array('uname' =>'niki28' , 'age'=> 21, 'sex'=>'male' ),array('uname' =>'ruby29' , 'age'=> 20, 'sex'=>'male' ),
array('uname' =>'jeff30' , 'age'=> 20, 'sex'=>'male' ), array('uname' =>'grace31' , 'age'=> 17, 'sex'=>'female' ),array('uname' =>'niki32' , 'age'=> 21, 'sex'=>'male' ),array('uname' =>'ruby33' , 'age'=> 20, 'sex'=>'male' ),
array('uname' =>'哈哈34' , 'age'=> 20, 'sex'=>'male' ), array('uname' =>'我靠35' , 'age'=> 17, 'sex'=>'female' ),array('uname' =>'niki36' , 'age'=> 21, 'sex'=>'male' ),array('uname' =>'倒计时37' , 'age'=> 20, 'sex'=>'male' ),
array('uname' =>'最后一条38' , 'age'=> 20, 'sex'=>'male' ));

// 输出的用户数据
$resUserData = array();
// 用户总数据量
$userLen = count($userInfo);

// 根据剩下的数据量 设置循环次数
if ($userLen-$lastIndex < $itemsPerLoad) {
    $loopNum = $lastIndex+($userLen-$lastIndex);
}else {
    $loopNum = ($lastIndex+$itemsPerLoad);
}

// 根据无限加载的请求参数 打包用户数据
for($x=$lastIndex; $x<$loopNum; $x++) {
    array_push($resUserData, $userInfo[$x]);
}

$success = true;

// 打包数据
$jsdata = array('users' => $resUserData, 'success' => $success, 'usersLen' => $userLen, 'loop' => $loopNum);

$jsdata = json_encode($jsdata);
echo $jsdata;
 ?>
