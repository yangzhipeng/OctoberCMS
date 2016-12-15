<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>惠州卫生监督信息网</title>
    
    <link type="text/css" rel="stylesheet" href="../themes/rainlab-relax/assets/css/huizhou_common.css" />
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.6.min.js"></script>
    <script src="../themes/rainlab-relax/assets/javascript/swfobject_modified.js" type="text/javascript"></script>
    <script src="../themes/rainlab-relax/assets/javascript/home.js" type="text/javascript"></script>
    <link rel="stylesheet" href="../themes/rainlab-relax/assets/css/liuyan/bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="../themes/rainlab-relax/assets/css/huizhou_subpage.css" />
 
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
        <div id="meslist_con">
          
                    
                          
                          
            <div class="mes_info_con">
                <h1 style="font-size:16px;"><strong>{{ $contents->subject }}</strong>
                    
                        <span style="color:#999; font-weight:normal; font-size:14px;"></span>
                    
                </h1>
            </div>
            <span class="mes_name">{{ mb_substr($contents->sender,0,1,'utf-8') }}先生/小姐:</span>
            <br>
            <div class="mes_detail" style="text-indent:2em;">
              {{ $contents->content }}
            </div>
            <div class="mes_time">发表于：&nbsp;&nbsp;{{ $contents->created_at }}</div>

            <div class="clear"></div>
                    
        </div>

        <div class="reply_top">&nbsp;</div>
        <div class="reply">

            <span style="clear:both; float:left; padding:10px; font-weight:bold; color:#F60">回复：</span>

            
                <div class="mes_detail2" style="text-indent:2em;">
                   {{ $contents->reply_content }}
                </div>
           
                <div class="mes_time"> 发表于：&nbsp;&nbsp;{{ $contents->updated_at }}</div>
               
        </div>
    </div>





<div class="clear">&nbsp;</div>

<div id="footer">
    <div id="fline1">地址：广东省惠州市惠城区江北富民路10号惠州卫生大楼 邮编：516003 备案证编号：粤ICP备09030645号-1 主办及维护单位：惠州市卫生监督所 </div>
    <div id="fline2">© 2012 wsjds.huizhou.gov.cn All Rights Reserved 技术支持及意见：<span class=""><a href="mailto:support@everants.com?Subject=Comments%20On%20WSJDS%20Huizhou" style="color:#00DAFF;">support@everants.com</a>  </span> </div>
    <div style="text-decoration:none;height:20px;line-height:20px; margin-right:10px;margin-top:-31px;position:relative;">
            <a target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=44130202000277" ><img src="http://wsjds.huizhou.gov.cn/themes/rainlab-relax/assets/images/beian_icon.png" style="width:20px;height:20px;margin-left:400px;" />
              <p style="float:left;height:20px;line-height:20px;margin-left:420px; margin-top:-19px;color:#939393;">粤公网安备 44130202000277号</p></a>
          </div>
</div>

</div>
</body>
</html>
