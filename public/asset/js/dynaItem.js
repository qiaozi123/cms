//查看大图初始化事件
$(document).ready(function() {
	$('.fancybox').fancybox();
	$(".fancybox-effects-a").fancybox({
		helpers : {
			title : {
				type : 'outside'
			},
			overlay : {
				speedOut : 0
			}
		}
	});
});

// 点击关注事件
$(document).on('click', '.pro-follow', function() {
	var loginData = utils.getLoginData();
	if (!loginData) {
		window.showLogin('login');
		return false;
	}

	var obj = $(this);
	var datatype = obj.attr('data-type');
	if (null == datatype || '' == datatype) {
		return false;
	}

	window.iview.LoadingBar.start();
	var key = obj.attr('key');

	if (parseInt(datatype) == 1) {// 求助
		var url = "/unfollowAid";
		var followStatus = 1;
		if (parseInt(key) == 1) {
			url = 'followAid';
			followStatus = 0;
		}
		var aid = obj.attr('data-id');
		$.ajax({
			type : "post",
			url : config.apiUrl + "/api/user/" + url,
			dataType : "json",
			data : {
				'uid' : loginData.appUserId,
				'serialNo' : loginData.serialNo,
				'authCode' : loginData.authCode,
				'aid' : aid,
			},
			async : true,
			timeout : 10000,
			success : function(data) {
				utils.ajaxResCheck4jq(data);
    			window.iview.LoadingBar.finish();
				
    			obj.attr('key', followStatus);
    			obj.html(parseInt(followStatus) == 1 ? "关注" : "已关注");
    			window.notice.success({
    				title : parseInt(followStatus) == 1 ? "取消关注成功" : "关注成功"
    			});
			},
			complete : function(XMLHttpRequest, status) {
				if (status == 'timeout') {
					window.iview.LoadingBar.error();
					window.notice.error({
						title : '请求超时，请检查网络是否畅通'
					});
					return false;
				}
			}
		})
	} else {// 其他
		var url = "/unfollow";
		var followStatus = 1;
		if (parseInt(key) == 1) {
			url = 'follow';
			followStatus = 0;
		}
		var targetUid = obj.attr('data-uid');
		$.ajax({
			type : "post",
			url : config.apiUrl + "/api/user/" + url,
			dataType : "json",
			data : {
				'uid' : loginData.appUserId,
				'serialNo' : loginData.serialNo,
				'authCode' : loginData.authCode,
				'targetUid' : targetUid,
			},
			async : true,
			timeout : 10000,
			success : function(data) {
				utils.ajaxResCheck4jq(data);
    			window.iview.LoadingBar.finish();
				
    			obj.attr('key', followStatus);
    			obj.html(parseInt(followStatus) == 1 ? "关注" : "已关注");
    			window.notice.success({
    				title : parseInt(followStatus) == 1 ? "取消关注成功" : "关注成功"
    			});
			},
			complete : function(XMLHttpRequest, status) {
				if (status == 'timeout') {
					window.iview.LoadingBar.error();
					window.notice.error({
						title : '请求超时，请检查网络是否畅通'
					});
					return false;
				}
			}
		})
	}

})

// 点击收藏按钮
$(document).on(
		'click',
		'.pro-collect',
		function() {
			var loginData = utils.getLoginData();
			if (!loginData) {
				window.showLogin('login');
				return false;
			}
			
			window.iview.LoadingBar.start();
			var dyid = $(this).parent().attr('data-id');
			var obj = $(this);
			var key = $(this).attr('key');
			var url = "/unfavoriteDynamic";
			var favStatus = 0;
			if (parseInt(key) == 0) {
				url = 'favoriteDynamic';
				favStatus = 1;
			}
			
			$.ajax({
				type : "post",
				url : config.apiUrl + "/api/user/" + url,
				dataType : "json",
				data : {
					'uid' : loginData.appUserId,
					'serialNo' : loginData.serialNo,
					'authCode' : loginData.authCode,
					'dyid' : dyid,
				},
				async : true,
				timeout : 10000,
				success : function(data) {
					utils.ajaxResCheck4jq(data);
	    			window.iview.LoadingBar.finish();
					
	    			var favCount = obj.find('span').html();
	    			var msg = '收藏成功';
	    			if (parseInt(favStatus) == 1) {
	    				obj.find('span').html(parseInt(favCount) + 1);
	    			} else {
	    				msg = '取消收藏成功';
	    				obj.find('span').html(parseInt(favCount) - 1);
	    			}
	    			obj.attr('key', favStatus);
	    			window.notice.success({
	    				title : msg
	    			});
				},
				complete : function(XMLHttpRequest, status) {
					if (status == 'timeout') {
						window.iview.LoadingBar.error();
						window.notice.error({
							title : '请求超时，请检查网络是否畅通'
						});
						return false;
					}
				}
			})
		});

// 动态点赞事件
$(document).on('click', '.pro-like', function() {

	var loginData = utils.getLoginData();
	if (!loginData) {
		window.showLogin('login');
		return false;
	}
	
	window.iview.LoadingBar.start();
	var obj = $(this);
	var dyid = obj.parent().attr('data-id');
	$.ajax({
		type : "post",
		url : config.apiUrl + "/api/project/appraiseDynamic",
		dataType : "json",
		data : {
			'uid' : loginData.appUserId,
			'serialNo' : loginData.serialNo,
			'authCode' : loginData.authCode,
			'dyId' : dyid
		},
		async : true,
		timeout : 10000,
		success : function(data) {
			utils.ajaxResCheck4jq(data);
			window.iview.LoadingBar.finish();
			
			obj.find('span').html(parseInt(obj.find('span').html()) + 1);
			var appraiseHtml = $('.pro-like-div[data-id='+dyid+']').find('p').html().trim();
			if (appraiseHtml.length > 0) {
				appraiseHtml += '，' + loginData.username;
			} else {
				appraiseHtml += loginData.username;
			}
			$('.pro-like-div[data-id='+dyid+']').find('p').html(appraiseHtml)
			$('.pro-like-div[data-id='+dyid+']').show();
			window.notice.success({
				title : '点赞成功'
			});
		},
		complete : function(XMLHttpRequest, status) {
			if (status == 'timeout') {
				window.iview.LoadingBar.error();
				window.notice.error({
					title : '请求超时，请检查网络是否畅通'
				});
				return false;
			}
		}
	})

});
// 评论点击触发事件
$(document).on('click', '.pro-comment', function() {
	var loginData = utils.getLoginData();
	if (!loginData) {
		window.showLogin('login');
		return false;
	}
	
	$(this).parents('.pro-div').find('.pro-input').focus();
	$(this).parents('.pro-div').find('.pro-input').attr('placeholder', '说几句');
	$(this).parents('.pro-div').find('.pro-send').attr('key', '0');
});
// 点击评论内容触发回复事件
$(document).on(
		'click',
		'.pro-comment-content p',
		function() {
			var loginData = utils.getLoginData();
			if (!loginData) {
				window.showLogin('login');
				return false;
			}
			
			var username = loginData.username;
			$(this).parents('.pro-comment-div').find('.pro-input').focus();
			var toName = $(this).find('span:eq(0)').html();
			$(this).parents('.pro-comment-div').find('.pro-input').attr(
					'placeholder', username + '回复' + toName + '：');
			$(this).parents('.pro-div').find('.pro-send').attr('key', '1');
			$('.pro-comment-content p').removeClass('send-p');
			$(this).addClass('send-p');
		});

////评论内容鼠标移入展示删除事件
//$(document).on('mouseenter','.pro-comment-content p',function(){
//	$(this).append('<span class="pro-delect">删除</span>');
//});
//$(document).on('mouseleave','.pro-comment-content p',function(){
//	$(this).find('.pro-delect').remove();
//});
//点击删除事件
//$(document).on(
//		'click',
//		'.pro-send',
//		function() {
//			alert(1);
//		});

//论以及回复发送事件
$(document).on(
		'click',
		'.pro-send',
		function() {
			var com = $(this).parents('.pro-comment-div').find('.pro-input')
					.val();
			if (com == '' || com == null || com == 'null') {
				window.notice.warning({
					title : '发送内容不能为空'
				});
				return;
			}
			
			var loginData = utils.getLoginData();
			if (!loginData) {
				window.showLogin('login');
				return false;
			}
			
			window.iview.LoadingBar.start();
			var uid = loginData.appUserId;
			var username = loginData.username;
			
			var dyId = $(this).parents('.pro-div').attr('data-id');
			var key = $(this).attr('key');
			var obj = $(this);
			var targetUid = '';
			var comStr = '';
			var reply_name = $('.send-p').find('span:eq(0)').html();
			if (key == '0') {
				targetUid = '';
				comStr = '<p data-targetUid=' + uid + '> <span>' + username
						+ '</span>：' + com;
			} else {
				targetUid = $('.send-p').attr('data-targetUid');
				comStr = '<p data-targetUid=' + uid + '> <span>' + username
						+ '</span>回复<span>' + reply_name + '</span>：' + com;
			}
			$.ajax({
				type : "post",
				url : config.apiUrl + "/api/project/commentDynamic",
				dataType : "json",
				data : {
					'uid' : uid,
					'serialNo' : loginData.serialNo,
					'authCode' : loginData.authCode,
					'dyId' : dyId,
					'msgtxt' : com,
					'targetUid' : targetUid
				},
				async : true,
				timeout : 10000,
				success : function(data) {
					utils.ajaxResCheck4jq(data);
	    			window.iview.LoadingBar.finish();
					
	    			obj.parents('.pro-comment-div').find(
	    			'.pro-comment-content').append(comStr);
	    			obj.parents('.pro-comment-div').find('.pro-input').val(
	    			'');
	    			var objSpan = obj.parents('.pro-div').find(
	    			'.pro-comment').find('span');
	    			objSpan.html(parseInt(objSpan.html()) + 1);
				},
				complete : function(XMLHttpRequest, status) {
					if (status == 'timeout') {
						window.iview.LoadingBar.error();
						window.notice.error({
							title : '请求超时，请检查网络是否畅通'
						});
						return false;
					}
				}
			})
		});


