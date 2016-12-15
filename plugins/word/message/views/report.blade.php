<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>惠州卫生监督信息网</title>
    <link rel="shortcut icon" href="../themes/rainlab-relax/assets/images/favicon.ico">
    <link type="text/css" rel="stylesheet" href="../themes/rainlab-relax/assets/css/huizhou_common.css" />
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.6.min.js"></script>
    <script src="../themes/rainlab-relax/assets/javascript/swfobject_modified.js" type="text/javascript"></script>
    <script src="../themes/rainlab-relax/assets/javascript/home.js" type="text/javascript"></script>
    <link rel="stylesheet" href="../themes/rainlab-relax/assets/css/liuyan/bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="../themes/rainlab-relax/assets/css/huizhou_subpage.css" />
    
    <script type="text/javascript">
        function checkForm()
        {
            if(document.message_form.subject.value == ''
                    ||document.message_form.sender.value == ''
                    ||document.message_form.content.value == ''
                    ||document.message_form.phone.value == ''
                    ||document.message_form.email.value == ''
                    ||document.message_form.address.value == ''
                    ||document.message_form.verifycode.value == ''
              )
            {
                alert("请填完所有信息再发表");
                return false;
            }

            return true;
        }
    </script>



</head>
<body>


<div id="main_con">
<div id="banner">
    <a href="/" style="display: block;width:940px;height: 176px;position:absolute;z-index: 999;  filter: alpha(opacity=0); opacity: 0;" title="banner"></a>
</div>
    <div id="main_nav">
    <dl style="left:0;">
        <dt ><a href="http://zwgk.huizhou.gov.cn/0057/zwgkList.shtml">政务公开</a></dt>
    </dl>
     <dl style="left:134px;">
        <dt><a href="http://wsbs.huizhou.gov.cn/portal/home.seam">网上服务</a></dt>
    </dl>
    <dl style="left:268px;">
        <dt><a href="/">政民互动</a></dt>
        <dd><a href="/message">群众留言板</a></dd>
        <dd><a href="mailto:suozhang_huizhou@163.com">所长信箱</a></dd>
        <dd><a href="/notice/msgCollect">调查征集</a></dd>
    </dl>
    <dl style="left:402px;">
        <dt><a href="/organization">组织机构</a></dt>
        <dd><a href="/organization/condition">机构概况</a></dd>
        <dd><a href="/organization/leadclass">领导班子</a></dd>
        <dd><a href="/organization/inter_organ">内设科室</a></dd>
        <dd><a href="/organization/contact">联系方式</a></dd>
    </dl>
    <dl style="left:536px;">
        <dt><a href="/work/dynamic">工作动态</a></dt>
    </dl>
    <dl style="left:670px;">
        <dt><a href="/notice">通告公示</a></dt>
        <dd><a href="/notice/public">公示</a></dd>
        <dd><a href="/notice/lighthouse">曝光台</a></dd>
        <dd><a href="/law">法律法规</a></dd>
    </dl>
    <dl style="left:804px;">
        <dt><a href="/gov_window">党建之窗</a></dt>
        <dd><a href="/gov_window/gov_organ">党组织机构</a></dd>
        <dd><a href="/gov_window/gov_work">党工作动态</a></dd>
    </dl>
</div>


    
    <div id="crumbs">
        <a href="/">首页</a>&nbsp;&nbsp;&gt;&nbsp;&nbsp;
        <a href="/message">群众留言</a>
    </div>


    
        <div id="leftbar">
            <div class="left_nav_con">
                <div class="left_nav_top">&nbsp;</div>


            

    <a href="/message" class="left_nav">
        群众留言
    </a>
    <a href="/report" class="left_nav">
        发表留言
    </a>


                <div class="left_nav_bot">&nbsp;</div>
            </div>

            <div class="leftbar_column">

                
                    <div class="column column1">
                        <div class="column_title">
                            <div class="columntil_l"><span>最新文章</span></div>
                            <div class="columntil_r"></div>
                        </div>
                        <div class="column_body" style="font-size:12px;line-height:2;width:220px;">
                       <ul style="margin-left:8px;margin-top:-20px;">
                        @if(count($posts) > 0)
                            @foreach($posts as $post)
                            <a href="/blog/post/{{ $post->slug}}" style="text-decoration:none; "> <h3>{{ $post->title }}</h3> </a>
                            @endforeach
                        @endif
                        </ul>
                        </div>
                        <div class="column_bottom" style="margin-top:-10px;">
                            <div class="column_bot_l">&nbsp;</div>
                            <div class="column_bot_r"  style="margin-right:-5px;">&nbsp;</div>
                        </div>
                    </div>
            
                    <div class="column column1">
                        <div class="column_title">
                            <div class="columntil_l"><span>热门文章</span></div>
                            <div class="columntil_r"></div>
                        </div>
                        <div class="column_body" style="font-size:12px;line-height:2;width:220px;">
                        <br>
                       <ul style="margin-left:8px;margin-top:-29px;">
                        @if(count($views) > 0)
                            @foreach($views as $view)
                            <a href="/blog/post/{{ $view->post_id}}" style="text-decoration:none; "> <h3>{{ $view->title }}</h3> </a>
                            @endforeach
                        @endif
                        </ul>
                        </div>
                        <div class="column_bottom" style="margin-top:-10px;">
                            <div class="column_bot_l">&nbsp;</div>
                            <div class="column_bot_r">&nbsp;</div>
                        </div>
                    </div>
            </div>
        </div>   
		<div id="rightcon">
            <div class="article_list_con">
                <div class="article_list_title"><span>发表留言</span></div>
                <div class="article_list_con_body">
                    <div class="message">
                        <form name="message_form" method="post" action="/report/send" onSubmit="return checkForm()"><div style='display:none'><input type='hidden' name='csrfmiddlewaretoken' value='3rtKd0GnPFfs45ZItQdAs24gqJeZUmKv' /></div>   
                       <ul>   
                            <li>
                            <h4>发表留言须知</h4>
                            </li>
                            <li>1.投诉举报人进行投诉举报，应当遵守国家法律、法规及其他有关规定。投诉举报对象明确，内容真实、客观、清楚，不得歪曲或捏造事实。
                            </li>
                            <li>
                              2.为了便于受理部门与您联系、沟通，请您如实填写中文姓名、有效联系电话和电子邮件等资料，对于填写信息模糊、且未留下联系方式的来件，我们将不予受理。
                            </li>
                            <li>
                              3.为了给大家提供更及时的服务，卫生咨询、投诉举报可以直接拨打12320。
                            </li>
                             <li>
                             </li>
                            </ul>
                             <table>
                               <tr><td class="caption">留言标题(必填)：</td><td class="content"><input id="id_subject" type="text" name="subject" /></td></tr>
                                <tr><td class="caption">用户姓名(必填，只显示姓)：</td><td class="content"><input id="id_sender" type="text" name="sender"   /></td></tr>
                                <tr><td class="caption">联系电话(必填, 保密)：</td><td class="content"><input id="id_phone" type="text" name="phone"   /></td></tr>
                                <tr><td class="caption">电子邮件(必填, 保密)：</td><td class="content"><input id="id_email" type="text" name="email"  /></td></tr>
                                <tr><td class="caption">联系地址(必填, 保密)：</td><td class="content"><input  id="id_address" type="text" name="address" /></td></tr>
                                <tr class="content-body"><td class="caption">留言内容(必填)：</td><td class="content"><textarea id="id_content" name="content" ></textarea></td></tr>
                                <tr class="phone-verify"><td class="caption">手机验证码(必填)：</td><td class="content"><input id="id_verifyCode" type="text" name="verifyCode" /><input id="verifybutton" class="btn-verify" type="button" value='发送验证码'></td></tr>
                            </table>
                            

                            <div class="message-form-bottom"><input type="submit" name="submit" value="提交" /> <input type="reset" name="reset" value="重置" /></div>
                        </form>


                        <script type="text/javascript">
                            var button = document.getElementById('verifybutton');
                            var verifyCode = document.getElementById('id_verifyCode');
                            var phone = document.getElementById('id_phone');
                            var count = 0;

                            button.onclick = sendCode;

                            function sendCode() {
                                if (!(/^1[3|4|5|7|8][0-9]\d{8}$/.test(phone.value))) {
                                    alert("请填写有效的手机号: " + phone.value) && phone.focus();
                                    return;
                                }

                                $.ajax({
                                    url: "/verification_code/",
                                    async: true,
                                    type: "POST",
                                    headers: {
                                    },
                                    data: {phone: phone.value},
                                    error: function (xhr) {
                                        alert("发送验证码失败");
                                    },
                                    timeout: 60000
                                });

                                count = 60;
                                clock();
                            }

                            function clock() {
                                (count == 60) && (button.disabled = true);
                                if (count > 0) {
                                    button.value = "已发送" + count;
                                    count--;
                                } else {
                                    button.value = "发送验证码";
                                    button.disabled = false;
                                    return;
                                }
                                setTimeout(clock, 1000);
                            }
                        </script>

                    </div>
                </div>

                <div class="article_list_con_bot"></div>
            </div>
		</div>
<div class="clear">&nbsp;</div>
<div id="footer">
    <div id="fline1">地址：广东省惠州市惠城区江北富民路10号惠州卫生大楼 邮编：516003 备案证编号：粤ICP备09030645号-1 主办及维护单位：惠州市卫生监督所 </div>
    <div id="fline2">© 2012 wsjds.huizhou.gov.cn All Rights Reserved 技术支持及意见：<span class=""><a href="mailto:support@everants.com?Subject=Comments%20On%20WSJDS%20Huizhou" style="color:#00DAFF;" >support@everants.com</a>  </span> </div>
       <div style="text-decoration:none;height:20px;line-height:20px; margin-right:10px;margin-top:-31px;position:relative;">
            <a target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=44130202000277" ><img src="../themes/rainlab-relax/assets/images/beian_icon.png" style="width:20px;height:20px;margin-left:400px;" />
              <p style="float:left;height:20px;line-height:20px;margin-left:420px; margin-top:-19px;color:#939393;">粤公网安备 44130202000277号</p></a>
          </div>
    </div>

</div>
</body>
</html>
