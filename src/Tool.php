<?php 
namespace Cate;
class Tool{
    public static function rs($message,$data=null){
        $re = ['code'=>'SUCCESS','message'=>$message];
        if($data){
            $re['data'] = $data;
        }
        echo json_encode($re);
    }
    public static function rf($message){
        echo json_encode(['code'=>'ERROR','message'=>$message]);
    }
}
?>