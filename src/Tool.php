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
        $page['current'] = isset($data['current_page']) ? (int) $data['current_page'] : 1;
        $page['total'] = isset($data['total']) ? (int) $data['total'] : 0;
        $page['pageSize'] =isset($data['per_page']) ?  (int) $data['per_page'] : 0;
        return $page;
    }
}

?>