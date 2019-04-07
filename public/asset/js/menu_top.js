(function(W, D) {
	if ($('#menu_type').val() == '4d' || $('#menu_type').val() == '4p') {
		$('.menu-option-select').removeClass('menu-option-select');
		$('.menu-role-select').removeClass('menu-role-select');
		$('.menu-select-div').find('.content').find('.menu-option').eq(4).addClass(
		'menu-option-select');
		if ($('#menu_type').val() == '4d') {
			$('.menu-select-div').find('.content').find('.menu-option').eq(4).find(
			'.menu-role-option').find('div').eq(0).addClass(
			'menu-role-select');
		} else if ($('#menu_type').val() == '4p') {
			$('.menu-select-div').find('.content').find('.menu-option').eq(4).find(
			'.menu-role-option').find('div').eq(1).addClass(
			'menu-role-select');
		}
	} else {
		var menu_type = parseInt($('#menu_type').val());
		$('.menu-option-select').removeClass('menu-option-select');
		$('.menu-select-div').find('.content').find('.menu-option').eq(menu_type)
		.addClass('menu-option-select');
	}
	var loginData = utils.getLoginData();
	if(loginData.roleId=='1'){
		$('.menu-to-work').show();
	}
	$(document).on('click','.menu-bottom-consultation',function(){
		utils.serviceEstablish();
	})
	
	//客服框销毁
	$(document).on('click','.shadow_service',function(e){
		 $('#J_demo').hide(); 
		 $('.shadow_service').remove();
	});		
	//点击在线咨询调取方法
	$(document).on('click','.consulting',function(){
		utils.serviceEstablish();
	});
	//点击在线咨询调取方法
	$(document).on('click','.line-consultation',function(){
		utils.serviceEstablish();
	});
	
	$('.menu-option-rule').hover(function(){
		$('.index-role-option-div').show();
	},function(){
		$('.index-role-option-div').hide();
	});
	
	$('.menu-search-select').on('click',function(){
		if($('.menu-search-option').is(':hidden')){
			$('.menu-search-option').show();
		}else{
			$('.menu-search-option').hide();
		}
	});
	
	$('.menu-search-option div').on('click',function(){
		var html=$(this).html();
		var key=$(this).attr('key');
		$('.menu-search-select').find('span').attr('key',key);
		$('.menu-search-select').find('span').html(html);
		$('.menu-search-option').hide();
	});
	
	$('.menu-search-img-div').on('click',function(){
		var k=$('.menu-search-input').val();
		if(k==""||k==null){
			window.notice.warning({
				title: '搜索内容不能为空'
			})
			return;
		}
		var t=$('.menu-search-select').find('span').attr('key');
		window.location.href = config.portalUrl+"/search/k"+k+"_t"+t+".html";
	});
	
	$('.menu-top img:eq(1)').on('click', function(){
		$('.menu-top').hide();
		$('.menu-position-div').css('margin-top','130px');
	})
	
	$('.menu-login').on('click', function(){
		window.showLogin('login');
	})
	
	$('.menu-register').on('click', function(){
		window.showLogin('regist');
	})
	
	var loginData = utils.getLoginData();
	if (loginData) {
		$('.menu-login-div').hide();
		$('.menu-inlogin-div').css('display','flex');
		$('.menu-inlogin-div').find('img').attr('src',utils.getUserAvatar(loginData.userAvatar));
		$('.menu-inlogin-div').attr('data-uid',loginData.appUserId);
	}
	
	$('.menu-inlogin-div').find('span').on('click', function(){
		Cookies.remove('loginUserAuthToken', {path:config.cookiePath});
		window.location.reload(true);
	});
	//右边菜单二维码显示事件
	$('.menu-right-option-erweima').hover(function(){
		$('.menu-right-div-erweima-img').show();
	},function(){
		$('.menu-right-div-erweima-img').hide();
	});
	//右边菜单客服点击事件
	$('.menu-right-option-kefu').on('click',function(){
		utils.serviceEstablish();
	});
	//右边菜单点击回到顶部事件
	$('.menu-right-option-toTop').on('click',function(){
		$('body').scrollTop(0);
	});
	
	
})($(window), $(document))