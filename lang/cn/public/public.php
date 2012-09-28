<?php
/**
 *服务器超级全局汉化包
 *汉化类型:
 *		    操作[后台操作,如:提交,保存,重置,编辑,安装,卸载 等]
 *		    提示[对操作的提示,**失败,**成功]
 *		    收索[列表页上的收索条件]
 *		   标点符号[中文,英文{有? , ! :}]
 *		   用户[用户的信息,如：用户名，手机号码,电话号码等]
 *		   单位[元,分,点,次,人,条等等]
 *		   其他常用字段[一些频率高的词汇]
 */
$lang = array(
/**全局**/
//操作
	'operate'=>'操作',
	'norecord'=>'暂无记录',
	'delete'=>'删除',
	'confirm'=>'确定',
	'submit'=>'提交',
	'add'=>'添加', 
	'cancel'=>'取消',
	'save'=>'保存',
	'reset'=>'重 置',
	'edit'=>'编辑',
	'disable'=>'禁用',
	'use'=>'启用',
	'audit'=>'审核',
	'recommend'=>'推荐',
	'unfreeze'=>'解冻',
	'freeze'=>'冻结',
	'install'=>'安装',
	'uninstall'=>'卸载',
	'upload'=>'上传',
	'pass'=>'通过审核',
	'ci'=>'次',
	'no'=>'暂无',
	'nopass'=>'不通过审核',
	'return'=>'返回上一页',
    'cancel_freeze'=>'取消冻结',
    'cancel_recommend'=>'取消推荐',
	'view'=>'查看',
	'recommend_top'=>'推荐任务到首页',
	//批量
	'mulit_delete'=>'批量删除',
	'mulit_use'=>'批量启用',
 	'mulit_disable'=>'批量禁用',
 	'mulit_edit'=>'批量编辑',
    'mulit_freeze'=>'批量冻结',
    'mulit_unfreeze'=>'批量解冻',
	'mulit_pass'=>'批量审核',
	'mulit_nopass'=>'批量审核不通过',
	'mulit_disable'=>'批量禁用',
	'one_key_pub'=>'一键发布',
	'payment'=>'付款',
	
	'rmb'=>'人民币',
	'hkd'=>'港币',
	'krw'=>'韩元',
	'usd'=>'美元',
	'cn'=>'简体中文',
	'tw'=>'繁体中文',


//提示
	'sys_tips'=>'系统提示',
    'submit_success'=>'提交成功',
    'submit_fail'=>'提交失败',
	'param_error'=>'参数错误',
    'operate_notice'=>'操作提示!',
    'operate_success'=>'操作成功',
	'operate_fail'=>'操作失败',
	'delete_success'=>'删除成功',
	'delete_fail'=>'删除失败',
 	'success'=>'成功',
	'fail'=>'失败',
	'edit_success' => '编辑成功',
	'edit_fail' => '编辑失败',
	'friendly_notice'=>'友情提示',
	'choose_operate_item' => '请选择要操作的项！',
	'no_data'=>'暂无数据',
    'contact_can_no_null'=>'联系方式不能为空',
	//批量
	'mulit_delete_success'=>'批量删除成功',
	'mulit_delete_fail'=>'批量删除失败',
	'mulit_pass_success'=>'批量审核成功',
	'mulit_pass_fail'=>'批量审核失败',
	'mulit_freeze_success'=>'批量冻结成功',
	'mulit_freeze_fail'=>'批量冻结失败',
	'mulit_unfreeze_success'=>'批量解冻成功',
	'mulit_unfreeze_fail'=>'批量解冻失败',
	'mulit_operate_fail'=>'批量操作失败',
	'mulit_operate_success'=>'批量操作成功',

//判断
 	'yes'=>'是',
	'no'=>'否',
 	'open'=>'开启',
	'close'=>'关闭',
    'unfold'=>'展开',
    'fold'=>'收起',
	'hide'=>'隐藏',
	'show'=>'显示',
	'income'=>'收入',
	'outcome'=>'支出',
	'user_center'=>'用户中心',
//收索
	'desc'=>'递减',
	'asc'=>'递增',
	'select_all'=>'全选',
	'id'=>'编号',
	'name'=>'名称',
	'search'=>'搜索',
	'page_size'=>'每页显示',
	'result_order'=>'结果排序',
	'default'=>'默认',
	'order' => '排序', 
	'please_choose'=>'请选择',  
	'list_result' => '显示结果',
	'order_way'=>'排序方式',  
	'order_id_desc'=>'编号倒序', 
	'order_id_asc'=>'编号正序',  
	'default_order' => '默认排序', 
	'pub_time_desc'=>'发布时间倒序',
	'pub_time_asc'=>'发布时间正序',
	'end_time_desc'=>'结束时间倒序',     
	'end_time_asc'=>'结束时间正序',
	'search_by_like' =>'支持模糊查询',

/**任务和商城公共**/
	'report'=>'举报',
	'status' => '状态',
	'complaint'=>'投诉',
	'pub_name'=>'发布者',
    'pub_time'=>'发布时间',
	'work'=>'稿件',
	'attachment'=>'附件',
	'hand_work'=>'任务交稿',
	'leave_word'=>'留言',
	'comment'=>'评论',
	'reply'=>'回复',
	'basic_config'=>'基本配置',
	'control_config'=>'流程配置',
	'private_config'=>'权限配置',
	'model_name'=>'模型名称',
   	'start_time'=>'开始时间',
  	'end_time'=>'结束时间',
	'all_value'=>'所有评价',
	'good_value'=>'好评',
	'middle_value'=>'中评',
	'bad_value'=>'差评',
	'join_work'=>'参与任务',
	'toolbox' => '工具箱',
	'tool' => '工具',
	'employer_info'=>'雇主信息',
	//task_info
	'view_shop_space'=>'查看店铺空间',
	'task_bider'=>'中标者',
	'de_mark'=>'的点评',
	'bid_give_cash'=>'方案中标发放赏金',
	'only_one_can_bid'=>'雇主只选一个稿件中标',
	'employer_confirmed_the_task_is_completed'=>'雇主选择中标者后，交付将在线下完成，雇主确认后，任务完成',

//任务
	'task'=>'任务',
	'employer'=>'雇主',
	'witkey'=>'威客',
	'pub_task'=>'发布任务',
	'task_title'=>'任务标题',
	'task_cash'=>'任务金额',
	'task_status'=>'任务状态',
    'my_canyu'=>'我参加的',
    'task_model_close'=>'任务模块已被关闭、无可用数据',
    'task_id'=>'任务编号',
    'task_index'=>'任务首页',
    'task_map'=>'任务地图',
	'shop_map'=>'商品地图',
	'task_list'=>'任务列表',
	'task_model'=>'任务模式',
	'task_config'=>'任务配置',
	'task_manage'=>'任务管理',
	'work_manage'=>'稿件管理',
	'task_type'=>'任务类型',
	'task_cycle'=>'任务周期',
	'task_tag'=>'任务标签',
	'task_hall'=>'任务大厅',
	'task_delay'=>'任务延期',
	'view_work'=>'查看稿件',
	'delay_makeup'=>'延期加价',
	'confirm_work'=>'确认工作',
	/*任务模型名字*/
   	'more_reward'=>'多人悬赏',   
	'single_reward'=>'单人悬赏',
	'piece_reward'=>'计件悬赏',
    'normal_tender'=>'普通招标',
    'deposit_tender'=>'订金招标',
	'wbzf'=>'微博转发',
	'wbdj'=>'微博点击',
	'taobao'=>'淘宝',
	'match'=>'速配任务',
	'bid_cash'=>'中标金额',
//商城
	'config'=>'配置',
	'buyer'=>'买家',
	'seller'=>'卖家',
	'goods'=>'商品',
    'service'=>'服务',
    'price'=>'价格',
	'pub_goods'=>'发布商品',
	'shop_list'=>'商品列表',
    'seller_witkey'=>'卖家(威客)',
	'buyer_employer'=>'买家(雇主)',   
	
//单位
	'fen'=>'分',
	'yu'=>'于',
	'tiao'=>'条',
	'yuan'=>'元',
	'point' => '点',
	'ma'=>'吗',
	'day'=>'天',
	'ge'=>'个',
	'total'=>'共',
	'count'=>'统计',
	'all'=>'全部',
	'de'=>'的',
	'people'=>'人',
    'di'=>'第',
    'times'=>'次',
    'haved'=>'已',
	'be'=>'被',
	'by'=>'按',
	
//其他常用字段
    'object'=>'对象',
    'apply'=>'申请',
	'time'=>'时间',
	'get'=>'获得',
	'description'=>'描述',
	'input'=>'输入',
 	'error'=>'错误',
    'manage'=>'管理',
	'record'=>'记录',
	'is_open'=>'是否开启',
	'list'=>'列表',
	'industry'=>'行业',
	'industry_info'=>'行&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;业',
	'type'=>'类型',
	'data'=>'数据',
	'index'=>'索引',
	'title' =>'标题',
	'help'=>'帮助',
	'content' =>'内容',
	 'warning'=>'警告',
	'sina'=>'新浪',
	'ten'=>'腾讯',
	'requirement'=>'需求',
    'top'=>'顶级',
    'belong_to'=>'所属',

//用户
	'name' => '名字',
	'user' => '用户',
	'mobile'=>'手机号码',
    'full_name'=>'姓名',
    'username'=>'用户名',
    'tel'=>'电话',
	'email'=>'邮箱',
	'account'=>'帐号',
	'password'=>'密码',
//页面
    'home'=>'首页',
    'share'=>'分享',
    'print'=>'打印',
    'online_kf'=>'在线客服',
    'site_msg'=>'站内短信',  
	'favorit'=>'收藏',  
	'focus_num'=>'关注人数',  
	'view_num'=>'浏览人数',
	'view'=>'浏览',
	'help_center'=>'帮助中心',
	'logout'=>'退出',
	'login'=>'登录',
	'register'=>'注册',
	'admin'=>'管理员',
	'return_home'=>'返回首页',
	'return_art_home'=>'返回资讯首页',
	'return_top'=>'返回顶部',
	'system_msg'=>'系统消息',
	'system'=>'系统',

//标点符号 zh_:中文,en_英文
	'zh_wh'=>'？',
	'en_wh'=>'?',
	'zh_dh'=>'，',
 	'en_dh'=>',',
	'zh_jh'=>'。',
	'en_jh'=>'.',
	'zh_th'=>'！',
	'en_th'=>'!',
	'zh_mh'=>'：',
	'en_mh'=>':',
	//'currency'=>'￥',
//类文件的公共
	//auth
	'apply_submit_fail'=>'申请提交失败！',
	'apply_submit_success'=>'申请提交成功！',
	'apply_success_and_wait_audit'=>'申请提交成功，请耐心等待管理员审核！',
	'have_passed'=>'已通过',
	'alipay_trust'=>'支付宝担保',
	'your'=>'您的',
	'have_passed_and_to'=>'已通过，请到',
	'auth_center'=>'认证中心',
	'look_detail'=>'查看详细',
	'apply_fail_and_info_fail'=>'申请提交失败，关联账户资料获取失败！',
	'apply_submit_fail_for_info_little'=>'申请提交失败，您填写的资料不完整！',
	//goods
	'order_id'=>'订单编号',
	'order_link'=>'订单链接',
	'action'=>'动作',
	'goods_order_close'=>'商品订单关闭',
	'haved_confirm_pay'=>'已确认付款',
	'goods_order_confirm_pay'=>'商品订单确认付款',
	'deal_success'=>'处理成功',
	'deal_fail'=>'处理失败',
	'wain_you_give_cash_error_notice'=>'警告,您给雇佣双方分配的佣金不等于订单的总佣金,请从新确认填写',
	'deal_fail_now_forbit_deal_cash'=>'处理失败,当前无法进行赏金分配',
	//task
	'not_exsist_relation_task_and_not_user_onekey'=>'不存在的关联任务，无法使用一键模式',
	'task_min_cash_limit_notice'=>'任务最小金额不能低于',
	'able_value'=>'能力值',
	'task_link'=>'任务链接',
	'from_hand_work_deadline'=>'距交稿截止',
    'from_hand_bid_deadline'=>'距投标截止',
	'task_working_can_hand_work'=>'任务进行中、欢迎交稿',

    'task_nopay_can_not_look'=>'您还没有支付任务赏金，其他用户无法查看',
    'wait_patient_to_audit'=>'您的任务还没有通过审核，请耐心等待',
    'hand_work_and_reward_trust'=>'任务交稿中，赏金已托管到本站',
    'work_choosing_and_wait_employer_choose'=>'任务选稿中，正在等待雇主选稿',
    'task_gs_and_emplyer_have_choose'=>'任务公示中，雇主已选出中标稿件', 
    'task_frozen_can_not_operate'=>'任务被冻结啦，现在无法操作',
    'task_over_congra_witkey'=>'任务已圆满结束，恭喜中标威客', 
    'pity_task_fail'=>'任务失败啦，真遗憾',
    'fail_audit_please_repub'=>'不好意思，任务审核失败，请重新发布', 
    'wait_for_task_arbitrate'=>'任务在仲裁中，请耐心等待', 
    'no_choosing_wait_for_vote'=>'雇主没有选中标稿件，等待用户投票', 
    'employer_and_witkey_jf'=>'雇主和选中的投稿人正在进行交付',  
    'task_frozen_when_jf'=>'任务在交付阶段被冻结了 ', 
    'bidding_and_eagerly_tender'=>'任务投标中，踊跃投标哦',
    'bidding_and_wait_employer_choose'=>'任务选标中，正在等待雇主选标',
    'bidder_working'=>'中标的家伙正在努力工作中',
    'task_over_for_jf'=>'工作完成了，正在等待雇主确认',
    'bidding_for_reward_trust'=>'已经选中标，雇主还没托管赏金',
    'work_over_for_jf'=>'任务已经完成了，双方正在交付',
    'reward_trust_and_bidding_match'=>'赏金已托管，快来抢标，先抢先得',
    'bid_and_both_consult'=>'已经有人中标，双方协商中',
    'the_other_confirm'=>'对方正在确认中',
    'bid_witkey_work'=>'已经选中威客，努力工作中',
    'work_over_employer_accepting'=>'任务已完成，雇主正在验收',

	'now_employer_can_choose_work'=>'当前阶段雇主可以选稿',
	'from_choose_deadline'=>'距选稿截止',
	'task_choosing_wait_employer_choose'=>'任务选稿中、等待雇主选稿',
	'from_vote_deadline'=>'距投票截止',
	'task_voting_can_vote'=>'任务进入投票阶段、欢迎积极投票',
	'from_gs_deadline'=>'距公示截止',
	'task_haved_choose_bid_and_user_look'=>'任务已选标，用户可以此任务进行监督',
	'task_in_jf_rate'=>'任务已进入交付阶段',
	'task_diffrent_opnion_and_web_in'=>'任务存在异议，网站已介入，此任务被冻结',
	'task_haved_complete'=>'任务已圆满完成',
	'task_timeout_and_no_works_fail'=>'任务逾期没有选稿，到期失败',
	'de_work'=>'的稿件',
	'call'=>'称谓',
	'you'=>'您',
	'task_hand'=>'任务交稿',
	'congratulate_you_hand_work_success'=>'恭喜您，交稿成功',
	'pity_hand_work_fail'=>'很遗憾，交稿失败',
	'set_success'=>'设置成功',
	'work_fail1'=>'您的稿件被淘汰',
	'set_fail'=>'设置失败',
	'vote_success'=>'投票成功!',
	'vote'=>'投票',
	'vote_fail'=>'投票失败!',
	'task_fail_notice'=>'任务失败通知',
	'choose_no_body_hand_work'=>'投稿期无人投稿、任务已失败、由于是担保任务，请等待管理员解冻任务款项。',//s
	'task_pay_success_and_task_pub_success'=>'付款成功，你的任务已成功发布！',
	'task_pay_success_and_wait_admin_audit'=>'付款成功，由于你的任务金额在审核金额内，请耐心等待管理员审核！',
	'task_pay_error_and_please_repay'=>'付款失败,请再次确认支付',	
	'task_bid'=>'中标',
	'task_out'=>'淘汰',
	'hg'=>'合格',
	'website_name'=>'网站名称',
	'task_can_not_choose_bid'=>'不可选标',	
	'task_no_pay'=>'未付款',
	'task_wait_audit'=>'待审核',
	'task_vote_choose'=>'投稿中',
	'task_choose_work'=>'选稿中',
	'choose_work'=>'选稿',
	'task_vote'=>'投票中',
	'task_gs'=>'公示中',
	'task_over'=>'结束',
	'task_audit_fail'=>'审核失败',
	'arbitrate'=>'仲裁',
	'task_arbitrating'=>'任务仲裁中',
	'assure_return_cash'=>'担保退款',
	'agreement_frozen'=>'交付冻结',
	'now_status_can_not_choose'=>'当前任务不处于选稿期,无法选稿！',
	'the_work_is_out_and_not_choose_the_work'=>'当前稿件是淘汰稿件, 无法选择此稿件中标！',
	'task_have_bid_work_and_not_choose_the_work'=>'当前任务已有中标稿件,无法选择此稿件中标！',
	'the_work_is_not_choose_and_not_choose_the_work'=>'当前稿件不可选标, 无法选择此稿件中标！',
	'task_timeout_and_sys_auto_choose_work'=>'任务到期结束.系统自动选稿。',
	'aito_choose_work_notice'=>'自动选稿通知',
	'your_task'=>'您的任务',
	'build_fail'=>'生成失败',
	'timeout_sys_default_in_and_bid'=>'已到期,系统默认入围者中标',
	'timeout_sys_default_vote_status'=>'已到期,系统默认将其转为投票状态',
	'task_diffrent_opnion_and_web_in_zc'=>'任务存在异议，网站已介入，此任务仲裁中',
	'reward_trust'=>'赏金托管',
	'task_pub_time'=>'任务发布时间',
	'single_successful_mode'=>'单人中标模式',
	'match_task'=>'速配任务',
	'stay_left'=>'停靠在左边',
	'_miao_'=>'描',
	'_gao_'=>'稿',
	'_liu_'=>'留',
	'_ping_'=>'评',
	'_gong_'=>'工',
	'stop'=>'停',
	
/**end 全局**/


/*ajax head_top.htm*/
	'request_processing'=>'请求处理中...',
/**这里存放的都是ajax夹子下的文件**/
	/**ajax_ajax.php**/
	'add_fields_cate'=>'添加自定义分类',
	'add_vidio_file'=>'添加视频文件',
	'add_normal_file'=>'添加普通文件',
	'operate_warn'=>'操作警告',
	'code_input_wrong'=>'安全码输入错误！',
	'edit_user_pic'=>'修改用户图象',
/**ajax_indus.php**/
	'please_choose_industry'=>'请选择子行业',
	'no_relation_skill'=>'没有相关技能',
	'belong_model'=>'所属模型',
	'pro_cash'=>'推广总金(元)',
	'goods_title'=>'商品标题',
	'goods_cash'=>'商品售价(元)',
	'all_industry'=>'全部行业',
/*ajax_message.php**/
	'send_msg'=>'发送消息',
/*ajax_score.php**/

	'first_time'=>'第一次',
	'every_time'=>'每次',
	'once_every_day'=>'每天一次',
	'add_exp'=>'增加经验',
	'update_pic'=>'更新图像',
	'improve_user_info'=>'完善用户信息',
	'improve_bank_accout'=>'完善取款帐号',
	'buy_vip'=>'购买VIP',
	'online_pay'=>'在线付款',
	'wit_operate'=>'提现操作',
	'view_task'=>'查看任务',
	'collect_task'=>'收藏任务',
	'task_comment'=>'任务评论',
	'task_apply'=>'任务投票',
	'task_pubwork'=>'任务投稿',
	//'task_bid'=>'招标投标', //2
	'work_accept'=>'任务选稿',
	'view_space'=>'访问他人空间',
	'user_mark'=>'互评',
	'access_shop'=>'访问商城店铺',
	'buy_service'=>'成功购买服务',
	'create_service'=>'发布服务',
	'service_comment'=>'服务互评',
	'create_shop'=>'开通商铺',
	'user_comment'=>'用户建议',
/***ajax_share.htm**/
	'not_exist_task_data'=>'不存在的任务数据',
/***ajax_file.htm**/
	'this_work_no_update'=>'此作品没有可下载文件',
	'this_work_no_out'=>'该作品是站外交付。请联系卖家获取文件',
	'match_result'=>'条匹配结果',
	'bid_work'=>'投稿',
	'bid'=>'中标',
	'sell'=>'出售',
	'good_mark'=>'好评率',
	'auth'=>'认证：',
	'now_auth_info'=>'暂无认证信息',
	'send_msg'=>'发送短信',
	'display_way'=>'呈现方式：',
	'source_link'=>'原始链接',
	'txt_link'=>'文字链接',
	'pro_code'=>'推广代码：',
	'copy_pro_code'=>'复制推广代码',
	'copy_success'=>'复制成功',
	'get_pro_link'=>'获取推广链接',
	'load_result'=>'加载结果：',
/**ajax.menu.htm**/
	'share_sina_weibo'=>'分享到新浪微博',
	'share_ten_weibo'=>'分享到腾讯微博',
	'share_wy_weibo'=>'分享到网易微博',
	'share_sohu_weibo'=>'分享到搜狐微博',
	'share_to_fb'=>'分享到facebook',
/**ajax.task.htm**/
	'new'=>'(新)',
/**ajax.htm*/
	'cate_name'=>'分类名称：',
	'start_update'=>'开始上传', 
	'website_notice_update_size_limit'=>'服务器支持最大文件上传为:$max_size;上传限制为50MB(如果服务器不支持50MB就修改php.ini文件)',
	'report_success'=>'举报成功！',
	'input_gy_username'=>'请输入要雇佣人的用户名或者是UID:',
/**keke_base_class 中 filter_xss方法**/
    'xss_attack_warning_notice'=>'XSS攻击警告!这个请求地址有安全问题，服务器拒绝响应',  
      'year'=>'年',
      'months'=>'个月',
      'day'=>'天',
      'hour'=>'小时',
      'minute'=>'分',
       
      'going_to_expired'=>'即将过期',
      'kppw_install_notice'=>'KPPW 专业威客程序，安装提示！',
      'you_not_install_kppw_notice'=>'您还没有正常安装KPPW 专业威客程序，请安装后再进行操作！',
      'day_before'=>'天前',
      'hour_before'=>'小时前',
      'minute_before'=>'分钟前',
      'seconds_before'=>'秒钟前',
      'now'=>'现在',
      'repeat_form_submit'=>'重复的表单提交',
      'operate_error'=>'操作错误',
      'illegal_or_repeat_submit'=>'非法或者重复的表单提交',
      'can_not_get'=>'无法获取！',
	'page_jumping'=>'，页面跳转中...',
/**article_info.htm**/
	'previous_article'=>'上一篇',
	'next_article'=>'下一篇',
/**show_msg.htm**/
	'jumping'=>'跳转中',
	'jump_notice'=>'跳转提示',
	'page_jumping'=>'页面跳转中...',
	'seconds_auto_jump'=>'秒后将自动跳转',
	'no_jump_please_click'=>'如您的浏览器不能跳转，请点击',
	'here'=>'这里',
	'system_message' => '系统短信',
	'goods_pay_success'=>'威客作品付款成功',
	'goods_pay_fail'=>'威客作品付款失败',
	'service_pay_success'=>'威客作品付款成功',
	'service_pay_fail'=>'威客作品付款失败',
/*add*/
    //protocol.php
    'the_agreement_not_exist'=>'该协议不存在',
   //release.htm
    'view_i_release_the_task'=>'查看我发布的任务',
    'firend_link'=>'友情连接',
    'verification_code_input_error'=>'验证码输入有误',
/*match task**/
	'give_up'=>'放弃',
	'wait_pay'=>'待付款',
	'bidding'=>'抢标中',
	'consult'=>'协商中',
	'confirming'=>'确认中',
	'working'=>'工作中',
	'accepting'=>'验收中',
	'deposit_cash_all_refund'=>'诚意金已全部退还;',
	'deposit_cash_part_defund'=>'诚意金已部分退还;',
	'deposit_cash_all_deduct'=>'诚意金已全部扣除;',
	'host_cash_has_all_been_refund'=>'托管佣金已全部退还;',
	'host_cash_has_part_been_refund'=>'托管佣金已部分退还;',
	'get_part_host_cash'=>'获得了部分任务佣金;',
    'description'=>'描述',
	'success_bid_haved'=>'成功中标了',
	'match_task_trans_result'=>'速配任务客服处理结果如下:',
	'match_website_deal_notice'=>'速配任务客服处理通知',
	'currency'=>'币种',
	'wait_choose'=>'待选稿',
/*后台树型分类**/
  	'add_first_level'=>'增加父节点',
	'del_success'=>'删除成功',
	'modify_success'=>'修改成功',
	'add_success'=>'添加成功',
	'set_top_success'=>'推荐成功',
	'set_no_top_success'=>'取消推荐成功',
/**order_sub.htm**/
    'top'=>'置顶',
	'map'=>'地图',
	'get_promote_links'=>'获取推广链接',
	/***短信模板汉化**/
	'admin_name'=>'管理员名称',
	'auth_code'=>'认证代码',
	'auth_url'=>'认证链接',
	'tx_way'=>'提现方式',
	'account'=>'帐户',
	'txmc'=>'提现名称',
	'tgyhm'=>'推广用户名',
	'tg_sj'=>'推广事件',
	'tg_je'=>'推广金额',
	'model_name'=>'模型名称',
	'task_id'=>'任务编号',
	'task_title'=>'任务标题',
	'cash'=>'金额',
	'num'=>'几',
	'time'=>'时间',
	'tb'=>'投标',
	'reason'=>'理由',
	'gu_name'=>'雇主名称',
	'jx'=>'奖项',
	'work_title'=>'稿件标题',
	'work_bid'=>'稿件中标',
	'howmuch'=>'数量',
	'account_msg'=>'帐户',
	'cash_msg'=>'金额',
	'admin_unfrize'=>'管理员解冻',
	'task_auth_success'=>'任务通过审核',
	'task_auth_fail'=>'任务审核失败',
	'user_unfreeze'=>'用户解冻',
	'user_msg'=>'用户',
	'work_status'=>'稿件状态',
	/**release_step2.htm**/
	'has_problem_contact'=>'如在发布任务时遇到麻烦，请联系',
	'has_service_problem_contact'=>'如在发布服务时遇到麻烦，请联系',
	'has_goods_problem_contact'=>'如在发布作品时遇到麻烦，请联系',
	'kf_phone'=>'客服电话',
);
