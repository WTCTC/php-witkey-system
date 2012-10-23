<?php
$lang = array (

	   'to'=>'对',

       'first_step'=>'第一步',
       'choose_and_login_weibo'=>'选择并登录微博',
       'second_step'=>'第二步',
       'input_info'=>'填写信息',
       'third_step'=>'第三步',
       'pub_and_submit'=>'发布交稿',
       'single_click_pub_weibo'=>'单击【发布】发送微博',
       'weibo_content'=>'微博内容',
       'picture'=>'图片',
       'release'=>'发布',
       'nickname'=>'昵称',
       'task_require'=>'任务要求',
       'to_weibo'=>'到微博',
       'the_following_few_friends'=>'以下几位好友',
       'comment_original_content'=>'评论原文内容',
       'switch_user_login'=>'切换用户登录',
       'not_repeat_the_same_people'=>'不能重复@同一个人',
	   'modify_mark_info'=>'修改稿件评分',
	   'has_viewed'=>'雇主已查看',
	   'not_vies'=>'雇主未查看',
		'good_rate'=>'好评率：',
		//config
		'if_change_model_status'=>'是否为私有模型',
		'model_status_notice'=>'(私有模型不会出现在发布任务的选择列表上)',
		'bind_industry'=>'指定行业',
		'choose_industry'=>'选择行业',
		'choose_industry_nitice'=>'(如果指定行业后,则任务的行业类型将是这里指定行业类型；如果不指定行业，则任务类型将是系统指定的所有行业类型.)',
		'model_synopsis'=>'模型简介',
		'model_synopsis_notice'=>'(限50字节)',
		'model_description'=>'模型描述',
		'edit_time_last_time'=>'上次修改时间',
		'no_delete_the_first_rule'=>'第一条规则不能被删除!',
		'add_cash_rul_day_msg'=>'天数不能为空! 天数的长度1-2',
		' persist '=>'持续',
		'task_min_cash_show'=>'任务最小金额不正确，长度2-5',
		'add_adjourn_rul_msg'=>'百分比不能为空！',
		//control

		'task_conmission_tactic'=>'任务佣金策略',
		'task_auditing_cash_set'=>'任务审核金额设定',
		'txt_task_auditing_cash_msg'=>'填写正确任务审核金额',
		'txt_task_auditing_cash_title'=>'任务审核金额允许小数',
		'task_cash_notice'=>'(大于这个金额的任务不需要审核，否则需要管理员审核)',
		'set_task_min_cash'=>'任务最小金额设定',
		'task_min_cash_msg'=>'任务最小金额填写错误',
		'task_min_cash_title'=>'任务最小金额为可以含小数',
		'task_min_cash_notice'=>'(任务的最小金额为大于零正整数)',
		'task_deduct_rate'=>'任务提成比例',
		'task_deduct_rate_msg'=>'任务提成比例值为正整数，长度：1-2',
		'task_deduct_rate_title'=>'任务提成比例值为正整数,1-100',
		'deduct_rate_from_fail_task'=>'任务失败返金抽成比例',
		'fail_task_deduct_rate_msg'=>'任务失败返金提成比例值为正整数，长度：1-2',
		'fail_task_deduct_rate_title'=>'任务失败返金提成比例值为正整数,1-100',
		'task_automate_choose'=>'任务自动选稿',
		'task_automate_choose_msg'=>'请填写分配人数',
		'task_automate_choose_title'=>'请填写平分人数!',
		'task_automate_choose_notice'=>'(设置前x人中标平分佣金,不填写则默认关闭)',
		'deal_fail_task'=>'任务失败处理',
		'return_cash'=>'返还现金',
		'return_credit'=>'返还代金券',
		'deal_fail_task_notice'=>'(扣除拥金后的钱)',
		'set_task_time_rule'=>'任务时间规则设定',
		'time_rule'=>'时间规则',
		'check_min_cash_rule'=>'请仔细填写规则允许最小金额',
		'yuan_over'=>'元以上',
		'time_rule_day_msg'=>'天数必须为大于1的整数',
		'time_rule_day_title'=>'请仔细填写天数，不得少于1天',
		'delete_rule'=>'删除规则',
		'add_rule'=>'添加规则',
		'task_public_time'=>'任务公示期时间',
		'task_public_time_msg'=>'公示期时间不对,长度:1',
		'task_public_time_title'=>'任务公示期最小时间为1天',
		'task_public_time_notice'=>'天（最小值为1天）',
		'task_min_day'=>'任务最少天数',
		'task_min_day_msg'=>'任务最小时间不对,最少1天',
		'task_min_day_title'=>'任务最小时间为1天',
		'task_vote_time'=>'任务投票期时间',
		'task_vote_time_msg'=>'投票期时间不对,长度:1',
		'task_vote_time_title'=>'任务投票期最小时间为1天',
		'task_vote_time_notice'=>'天（任务没有定稿时，通过投票决定，不得少于1天）',
		'limit_new_register_user_vote_time'=>'新注册用户投票时间限制:',
		'new_register_user_vote_time_msg'=>'新注册用户投票时间限制时间不对',
		'new_register_user_vote_time_title'=>'可以对新注册用户不做投票时间限制',
		'new_register_user_vote_time_notice'=>'小时（0为不作限制）',
		'set_choose_time'=>'选稿时间设置',
		'choose_time_msg'=>'选稿时间输入有误',
		'choose_time_title'=>'任务选稿时间最少为1天，最多20天',
		'choose_time_notice'=>'天(任务选稿时间最少为1天，最多20天)',
		'choose_in_doing'=>'进行中选稿',
		'set_delay_rule'=>'延期规则设定',
		'delay_min_cash'=>'延期最小金额',
		'delay_min_cash_msg'=>'每次延期金额最少金额填写错误',
		'delay_min_cash_title'=>'任务延期最少金额为1元',
		'limit_delay_day'=>'延期天数限制',
		'delay_day_msg'=>'每次最大延期天数不正确',
		'delay_day_title'=>'任务最大延期天数不得小于2天',
		'max_delay'=>'最大延期',
		'set_delay'=>'延期设置',
		'delay_rule_notice'=>'不低于悬赏总金额的',
		'delay_rule_msg'=>'比例填写错误',
		'delay_rule_title'=>'任务延期比例为1-100',
		'add_rule'=>'添加规则',
		'set_deliver'=>'交付设定',
		'sign_default_agreement_time'=>'协议默认签署时间',
		'confirm_default_agreement_time'=>'协议完成时间限制',
		'default_agreement_time_notice'=>'进入交付期后、超过此期限系统将默认双方签署协议。',
		'agree_time_more_than_1'=>'默认签署时限默认不得少于1天',
		'agree_complete_2'=>'默认完成时限默认不得少于2天,不得小于默认签署时间',
		'confrim_agreement_time_notice'=>'超过此期限雇佣双方未完成交付，交付过程将被冻结。一方提请仲裁后由客服介入。',
		'set_task_comment'=>'任务评论设置',
		'if_public'=>'是否公开',
		'if_public_checkbox'=>'(勾选则评论在任务进行中隐藏，任务结束公开)',
		'save_config'=>'保存设置',
		
		/*task_edit.php*/
		
	
		/*task_edit.htm*/
		
		'task_title_msg'=>'标题不得为空,5-50字',
		'if_recommend_task'=>'是否推荐此任务',
		'recommended_task_msg'=>'(推荐的任务可以在前台首页指定的位置显示)',
		'show_time'=>'时间显示',
		'contribution_end_time'=>'投稿结束时间',
		'choose_end_time'=>'选稿结束时间',
		'add_service'=>'增值服务',
		'update_pic'=>'图片上传',
		'task_attachment'=>'任务附件',
		'now_no_attachment'=>'暂无附件',
		'txt_task_cash_msg'=>'修改金额不得小于任务原金额',
		/****新增****/
		'task_description'=>'任务描述',
		//---- agree----***/
		'operate_report'=>'处理仲裁',
		'agree_time'=>'协议签署时间',
		'agree_over_time'=>'确认完成时间',
		
		'freeze_notcie'=>'冻结通知',
		'you_pub_task'=>'您发布的任务',
		'has_freeze'=>'被冻结!',
		'username'=>'用户名',
		'action'=>'动作',
		'reson'=>'原因',
		'admin_frize'=>'管理员冻结',
		'task_title'=>'任务标题',
		'sitename'=>'网站名称',
		'unfreeze_task'=>'解冻任务',
		'task_unfreeze_notice'=>'任务解冻通知',
		'has_unfreeze'=>'被解冻!',
		'audit_task'=>'审核任务',
		'pass'=>'通过',
		'task_audit_notice'=>'任务审核通知',
		'audit_pass'=>'审核通过!',
		'not_pass'=>'未通过',
		'task_unfrize'=>'任务解冻',
		'audit_not_pass'=>'审核未通过!',
		'delete_task'=>'删除任务',
		'pass_audit'=>'通过审核',
		'no_pass_audit'=>'不通过审核',
		'freeze_task'=>'冻结任务',
		'unfreeze_task'=>'解冻任务'
)

?>