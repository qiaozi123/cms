(function(W, D) {
	var mySwiper = new Swiper('.swiper-container', {
        // autoplay: 5000,
        pagination: '.swiper-pagination',
        paginationClickable: true,
        prevButton: '.swiper-button-prev',
        nextButton: '.swiper-button-next',
        loop: true
    })
	
	$('.dynact-screen div').on('click', function(){
		var cate = $(this).attr('data-cate');
		var current = $('.dynact-screen div.dynact-screen-slect').attr('data-cate');
		if (cate == current) {
			return false;
		}
		
		var uid=-1;
		var loginData = utils.getLoginData();
		if (loginData) {
			uid = loginData.appUserId;
		}
    	var obj = $(this);
		window.iview.LoadingBar.start();
    	$.ajax({
			type: "get",
			url: config.portalUrl+"/live/diaryList",
			dataType: "json",
			data:{
				'uid': uid,
				'cate': cate,
				'pageIndex': 1,
				'lastId':-1
			},
			async: true,
			timeout:10000,
			success: function(data) {
				$('.dynact-list-div').children('div').remove();
				$('.dynact-screen div').removeClass('dynact-screen-slect');
				obj.addClass('dynact-screen-slect');
				utils.buildDynaItems(data, $('.dynact-list-div'), 'append');
			},
			complete:function(XMLHttpRequest,status)
			{
				if(status=='timeout')
				{
					window.iview.LoadingBar.error();
					window.notice.error({
						title: '请求超时，请检查网络是否畅通'
					})
					return;
				}
			}
	 	})
	})
	
	$('#projidEle').on('click',function(e){
    	var loginData = utils.getLoginData();
    	if (!loginData) {
    		window.showLogin('login');
    		return false;
    	}
    	
    	var roleid = loginData.roleId;
    	if (parseInt(roleid) != 0) {
    		window.notice.warning({
    			title: '非业主角色请下载APP发布直播'
    		})
    		return false;
    	}
    	
    	window.liveShow()
    })
	
	//直播右边div(新人和达人)点击切换
	$('.dynact-right-option').on('click',function(){
		if(!$(this).find('div').is(":hidden")){
			return;
		}
		$('.dynac-news-div').hide();
		$('.dynac-tops-div').hide();
		$('.dynact-right-option').find('div').hide();
		$(this).find('div').show();
		if($(this).hasClass('dynact-right-option-news')){
			$('.dynac-news-div').show();
		}else{
			$('.dynac-tops-div').show();
		}
	});
	
	$('.role-list').on('mouseenter','.designer-div',function(){
		$(this).find('.designer-avatar').css('height','150px');
		$(this).find('.role-mask').css('height','150px');
		$(this).find('.role-infor-div').css('margin-top','-30px');
		$(this).find('.role-go-detail').show();
	});
	$('.role-list').on('mouseleave','.designer-div',function(){
		$(this).find('.designer-avatar').css('height','198px');
		$(this).find('.role-infor-div').css('margin-top','0');
		$(this).find('.role-mask').css('height','198px');
		$(this).find('.role-go-detail').hide();
	});
	
	$('.pm-menu').on('click', function(){
		var cate = $('.designer-other-div').attr('data-cate');
		if (parseInt(cate) == 1) {
			return false;
		}
		
		$('.designer-other-div').attr('data-cate', 1);
		$('.designer-other-div').attr('data-pIndex', 0);
		$('.design-menu').removeClass('role-select');
		$('.pm-menu').addClass('role-select');
		
		findDesignerOrPm (1, 0);
	});
	
	$('.design-menu').on('click', function(){
		var cate = $('.designer-other-div').attr('data-cate');
		if (parseInt(cate) == 0) {
			return false;
		}
		
		$('.designer-other-div').attr('data-cate', 0);
		$('.designer-other-div').attr('data-dIndex', 0);
		$('.pm-menu').removeClass('role-select');
		$('.design-menu').addClass('role-select');
		
		findDesignerOrPm (0, 0);
	});
	
	function findDesignerOrPm (cate, pIndex) {
		window.iview.LoadingBar.start();
		$.ajax({
			type: "get",
			url: config.portalUrl+"/findDesignerOrPm",
			dataType: "json",
			data:{
				cate:cate,
    			pageIndex:parseInt(pIndex) + 1
			},
			async: true,
			timeout:10000,
			success: function(data) {
				utils.ajaxResCheck4jq(data);
				window.iview.LoadingBar.finish();
				
				var html = '';
				var items = data.body.items;
				if (items.length == 0) {
					window.notice.info({
						title: '到底了'
					})
					return;
				}
				
				for (var i in items) {
					var itm = items[i];
					html += '<div class="designer-div">';
					html += '<div class="role-mask"></div>';
					html += '<div class="role-infor">';
					if (0 == cate || '0' == cate) {
						html += '<div class="designer-cost" >' + itm.feeLow + '-' + itm.feeHigh + '元/m²</div>';
					}else{
						html += '<div  style="height: 22px;width: 102px;"></div>';
					}
					html += '<div class="role-infor-div">';
					html += '<img class="role-small-avatar" src="' + utils.getUserAvatar(itm.avatar) + '" />';
					html += '<p class="role-name">' + itm.username + '</p>';
					if (null != itm.cellid) {
						html += '<p class="role-atelier">' + itm.cellname + '</p>';
					}
					html += '</div></div>';
					html += '<img class="designer-avatar" src="' + utils.getUserAvatar(itm.avatar) + '" />';
					if (0 == cate || '0' == cate) {
						html += '<p class="designer-expert" title="' + itm.decoStyle + '">' + itm.decoStyle + '</p>';
					} else {
						html += '<p class="designer-expert">经验值：' + itm.expYears + '年</p>';
					}
					html += '<p class="designer-txt" title="' + itm.slogan + '">' + itm.slogan + '</p>';
					if (0 == cate || '0' == cate) {
						html += '<a href="' + config.portalUrl + '/designer/' + itm.uid + '.html">';
					} else {
						html += '<a href="' + config.portalUrl + '/pm/' + itm.uid + '.html">';
					}
					html += '<div class="role-go-detail">了解更多</div></a></div>';
				}
				
				$('.role-list').html(html);
				if (parseInt(cate) == 0) {
					$('.designer-other-div').attr('data-dIndex', parseInt(pIndex) + 1);
				} else {
					$('.designer-other-div').attr('data-pIndex', parseInt(pIndex) + 1);
				}
			},
			complete:function(XMLHttpRequest,status)
			{
				if(status=='timeout')
				{
					window.iview.LoadingBar.error();
					window.notice.error({
						title: '请求超时，请检查网络是否畅通'
					});
					return;
				}
			}
	 	})
	}
	
	$('.designer-other-div').on('click', function () {
		var cate = $(this).attr('data-cate');
		var pIndex = '';
		if (parseInt(cate) == 0) {
			pIndex = $(this).attr('data-dIndex');
		} else {
			pIndex = $(this).attr('data-pIndex');
		}
    	
		findDesignerOrPm (cate, pIndex);
	})
})($(window), $(document))
