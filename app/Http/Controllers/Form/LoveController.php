<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2017/8/30
 * Time: 16:37
 */

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Redirect;

class LoveController extends Controller
{
    /**
     * 表单接受页
     * @author tangtanglove
     */
    public function post(Request $request)
    {

        $username = $request->input('username');
        $city     = $request->input('city');
        $nowcity  = $request->input('nowcity');
        $tel      = $request->input('tel');
        $dream    = $request->input('dream');
        $need     = $request->input('need');
        $born     = $request->input('date');
        $grow     = json_encode($request->input('grow'));
        $like     = json_encode($request->input('like'));
        $consume  = $request->input('consume');
        $add_time = date('Y-m-d H:i:s',time());
        $ip =  $request->getClientIp();
        $return =  DB::insert('insert into love_user (username, city,nowcity,tel,dream,need,born,grow,likes,consume,add_date,ip) values (?,?,?,?,?,?,?,?,?,?,?,?)',
                    ["{$username}","{$city}","{$nowcity}","{$tel}","{$dream}","{$need}","{$born}","{$grow}","{$like}","{$consume}","{$add_time}","{$ip}"]);
       if($return)
       {
           return redirect('/success');
       }
       else
       {
           return view('success');
       }

    }


    /**
     * 文章详情页
     * @author tangtanglove
     */
    public function detail(Request $request)
    {
        $id      = $request->input('id');
        $name    = $request->input('name');
        $category      = $request->input('category');

        $user = DB::table('users')->where('id', 1)->first();
        $website = Helper::getKeyValue($user->uuid,'website.config');

        if(empty($category)) {
            $getCategory = DB::table('post_relationships')->where('object_id',$id)->first();
            $category = $getCategory->post_cate_id;
        }

        $postCate = DB::table('post_cates')->where('id', $category)->first();
        $postCateExtend = Helper::getKeyValue($postCate->uuid);
        if (!empty($id)) {
            $article = DB::table('posts')->where('id', $id)->first();
        } elseif(!empty($name)) {
            $article = DB::table('posts')->where('name', $name)->first();
        } else {
            return Helper::jsonError('参数错误！');
        }

        // 浏览量自增
        DB::table('posts')->where('id', $id)->increment('view');

        return view('home/'.$postCateExtend['detail_tpl'],compact('website','article','postCate'));
    }
}