<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        {{--<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">--}}
        <link rel="stylesheet" href="./vendor/layui/css/layui.css">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                margin: 0;
            }

            .full-height {
                height: 40vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 30px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    行者无疆
                </div>
                <div class="links" style="padding:20px;text-align: left;line-height:25px;">
                   <p> 生命有限，路途充满了挑战，艰难，幸福，温暖，希望彼此可以相互携手，相互包容理解，有勇气走下去。</p>
                </div>
            </div>
        </div>
        <div>
            <fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
                <legend>基本信息</legend>
            </fieldset>
            <form class="layui-form" action="/form/love">
                <div class="layui-form-item">
                    <label class="layui-form-label">姓名</label>
                    <div class="layui-input-block">
                        <input type="text" name="username" lay-verify="username"  placeholder="请输入姓名" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">家乡</label>
                    <div class="layui-input-block">
                        <input type="text" name="city" lay-verify="city" placeholder="请输入城市" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">当前城市</label>
                    <div class="layui-input-block">
                        <input type="text" name="nowcity" lay-verify="nowcity"  placeholder="请输入所在城市" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">工作</label>
                    <div class="layui-input-block">
                        <input type="text" name="job"  lay-verify="job"  placeholder="请输入工作" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">联系方式</label>
                    <div class="layui-input-block">
                        <input type="text" name="tel" lay-verify="tel"  placeholder="请输入联系方式" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                <div class="layui-inline">
                    <label class="layui-form-label">出生日期</label>
                    <div class="layui-input-inline">
                        <input type="text" name="date" id="date" lay-verify="date" placeholder="yyyy-MM-dd" autocomplete="off" class="layui-input">
                    </div>
                </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">消费观</label>
                    <div class="layui-input-block">
                        <select name="consume" lay-filter="consume">
                            <option value="随心而定">随心而定</option>
                            <option value="超前消费">超前消费</option>
                            <option value="少量存余" selected="">少量存余</option>
                            <option value="实用至上">实用至上</option>
                            <option value="合理规划">合理规划</option>
                            <option value="投资创业">投资创业</option>
                        </select>
                    </div>
                </div>
                <div class="layui-form-item" pane="">
                    <label class="layui-form-label">爱好</label>
                    <div class="layui-input-block">
                        <input type="checkbox" name="like[meishi]" lay-skin="primary"  title="美食" checked="">
                        <input type="checkbox" name="like[write]" lay-skin="primary" title="写作">
                        <input type="checkbox" name="like[read]"  lay-skin="primary" title="阅读">
                        <input type="checkbox" name="like[game]"  lay-skin="primary" title="游戏">
                        <input type="checkbox" name="like[read]"   lay-skin="primary" title="唱歌" >
                        <input type="checkbox" name="like[game]"   lay-skin="primary" title="游戏">
                        <input type="checkbox" name="like[wenxue]" lay-skin="primary" title="文学">
                        <input type="checkbox" name="like[zongyi]" lay-skin="primary" title="综艺">
                        <input type="checkbox" name="like[hanju]"  lay-skin="primary" title="韩剧">
                        <input type="checkbox" name="like[lvxing]" lay-skin="primary" title="旅行">
                        <input type="checkbox" name="like[wudao]"  lay-skin="primary" title="舞蹈">
                        <input type="checkbox" name="like[bianchen]" lay-skin="primary" title="编程">
                        <input type="checkbox" name="like[yundong]"  lay-skin="primary"  title="运动">
                        <input type="checkbox" name="like[chuangye]" lay-skin="primary" title="创业">
                        <input type="checkbox" name="like[chuangye]" lay-skin="primary" title="电影">
                    </div>
                </div>
                <div class="layui-form-item" pane="">
                    <label class="layui-form-label">成长环境</label>
                    <div class="layui-input-block">
                        <input type="checkbox" name="grow[meishi]" lay-skin="primary"  title="知识分子">
                        <input type="checkbox" name="grow[write]" lay-skin="primary" title="农民">
                        <input type="checkbox" name="grow[read]"  lay-skin="primary" title="独生子女">
                        <input type="checkbox" name="grow[game]"  lay-skin="primary" title="兄弟姐妹">
                        <input type="checkbox" name="grow[read]"   lay-skin="primary" title="体制" >
                        <input type="checkbox" name="grow[game]"   lay-skin="primary" title="商人">
                        <input type="checkbox" name="grow[wenxue]" lay-skin="primary" title="艺术">
                        <input type="checkbox" name="grow[wenxue]" lay-skin="primary" title="普通职工">
                    </div>
                </div>
                <div class="layui-form-item layui-form-text">
                    <label class="layui-form-label">要求</label>
                    <div class="layui-input-block">
                        <textarea placeholder="请输入你对另一半的期望，或者你看中的品质等" name="need" class="layui-textarea"></textarea>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">理想</label>
                    <div class="layui-input-block">
                        <input type="text" name="dream" placeholder="你的愿望" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <div class="layui-input-block">
                        <button class="layui-btn" lay-submit="" lay-filter="msg">立即提交</button>
                        <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                    </div>
                </div>
            </form>
        </div>
        <script src="./vendor/layui/layui.js"></script>
        <script>
            layui.use(['form', 'layedit', 'laydate'], function(){
                var form = layui.form
                    ,layer = layui.layer
                    ,layedit = layui.layedit
                    ,laydate = layui.laydate;

                //日期
                laydate.render({
                    elem: '#date'
                });

                //创建一个编辑器
                var editIndex = layedit.build('LAY_demo_editor');

                //自定义验证规则
                form.verify({
                    username: function(value){
                        if(value.length < 2){
                            return '姓名不能为空';
                        }
                    },
                    city: function(value){
                        if(value.length < 2){
                            return '城市不能为空';
                        }
                    },
                    nowcity: function(value){
                        if(value.length < 2){
                            return '所在城市不能为空';
                        }
                    }
                    ,
                    tel: function(value){
                        if(value.length < 2){
                            return '联系方式不能为空';
                        }
                    }
                    ,
                    dream: function(value){
                        if(value.length < 2){
                            return '愿望不能为空';
                        }
                    }
                });
                //监听提交
                form.on('submit(msg)', function(data){
                    layer.alert(JSON.stringify(data.field), {
                        title: '最终的提交信息'
                    })
                    return true;
                });

            });
        </script>
    </body>
</html>
