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
    //laravel 返回 
    public static function pageForAnt($data){
        //current pageSize total
        $page =[];
        $page['current'] = (int) $data['current_page'];
        $page['total'] = (int) $data['total'];
        $page['pageSize'] = (int) $data['per_page'];
        return $page;
    }
}

?>