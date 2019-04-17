(function(W, D) {
	$('.role-option').on('click', function(){
		var key = $(this).attr('key');
		var current = $('.role-option.role-slection').attr('key');
		if (key == current) {
			return;
		}
		
		$('.role-option').removeClass('role-slection');
		$(this).addClass('role-slection');
		$('.role-bottom-border').css('display', 'none');
		$(this).find('.role-bottom-border').css('display', 'block');
		if (key == 'eva') {
			$('.evaluate-content-div').show();
			$('.site-list-div').hide();
			$('.dyna-list-div').hide();
			$('.resume-div').hide();
			
			
			if ($('.evaluate-data-div').length > 0) {
				return false;
			}
			
			window.iview.LoadingBar.start();
			var pmid = $('.design-infor').attr('data-pmid');
			$.ajax({
				type: "get",
				url: config.portalUrl+"/pm/assess",
				dataType: "json",
				data:{
					'pmid': pmid,
					'pageIndex': 1,
				},
				async: true,
				timeout:10000,
				success: function(data) {
					utils.ajaxResCheck4jq(data);
					window.iview.LoadingBar.finish();
					
					var html = '<div class="evaluate-data-div">';
					html += '<div><p>专业技能</p><p>'+data.body.scoreProf.toFixed(1)+'</p>';
					var scoreProfDeta = data.body.scoreProfDeta;
					if (parseFloat(scoreProfDeta) > 0) {
						html += '<p>高于平均<span style="color:#ff8736;">'+(Math.abs(parseFloat(scoreProfDeta))*100).toFixed(0)+'% ↑</span></p>';
					} else if (parseFloat(scoreProfDeta) < 0) {
						html += '<p>低于平均<span style="color:#3db8a8;">'+(Math.abs(parseFloat(scoreProfDeta))*100).toFixed(0)+'% ↓</span></p>';
					} else {
						html += '<p>与平均持平</p>';
					}
					html += '</div>';
					
					html += '<div><p>服务态度</p><p>'+data.body.scoreManner.toFixed(1)+'</p>';
					var scoreMannerDeta = data.body.scoreMannerDeta;
					if (parseFloat(scoreMannerDeta) > 0) {
						html += '<p>高于平均<span style="color:#ff8736;">'+(Math.abs(parseFloat(scoreMannerDeta))*100).toFixed(0)+'% ↑</span></p>';
					} else if (parseFloat(scoreMannerDeta) < 0) {
						html += '<p>低于平均<span style="color:#3db8a8;">'+(Math.abs(parseFloat(scoreMannerDeta))*100).toFixed(0)+'% ↓</span></p>';
					} else {
						html += '<p>与平均持平</p>';
					}
					html += '</div>';
					
					html += '<div><p>直播互动</p><p>'+data.body.scoreActive.toFixed(1)+'</p>';
					var scoreActiveDeta = data.body.scoreActiveDeta;
					if (parseFloat(scoreActiveDeta) > 0) {
						html += '<p>高于平均<span style="color:#ff8736;">'+(Math.abs(parseFloat(scoreActiveDeta))*100).toFixed(0)+'% ↑</span></p>';
					} else if (parseFloat(scoreActiveDeta) < 0) {
						html += '<p>低于平均<span style="color:#3db8a8;">'+(Math.abs(parseFloat(scoreActiveDeta))*100).toFixed(0)+'% ↓</span></p>';
					} else {
						html += '<p>与平均持平</p>';
					}
					html += '</div></div>';
					html += '<div class="evaluate-content">';
					html += '<div class="evaluate-title">业主评价</div>';
					html += '<div class="evaluate-list">';
					
					var items = data.body.assessItems;
					var pSize = $('.evaluate-more').attr('data-pSize');
					if (items.length == 0) {
						html += '<div class="list-blank"><p>这里像一片沙漠，到其他地方看看!</p></div>';
						$('.evaluate-more').hide();
					} else if (items.length < parseInt(pSize)) {
						$('.evaluate-more').html('没有更多数据了');
					}
					for (var i in items) {
						var itm = items[i];
						html += '<div class="evaluate-div">';
						html += '<div class="evaluate-infor">';
						html += '<a href="' + utils.getRoleUrl(0, itm.projid) + '">';
						html += '<div class="evaluate-user-infor">';
						html += '<img class="evaluate-avatar" src="' + utils.getUserAvatar(itm.avatar) + '"/>';
						html += '<div style="padding: 6px 16px;">';
						html += '<p class="evaluate-user-name">' + itm.username + '</p>';
						html += '<p class="evaluate-user-date">' + itm.assessDate + '发起评价</p>';
						html += '</div></div></a>';
						html += '<p class="evaluate-score">专业 ' + itm.scoreProf.toFixed(1) + ' | 服务 ' + itm.scoreManner.toFixed(1) + ' | 活跃 ' + itm.scoreActive.toFixed(1) + '</p>';
						html += '</div>';
						html += '<p class="evaluate-txt">' + itm.assessTxt + '</p>';
						html += '</div>';
					}
					html += '</div></div>';
					$('.evaluate-more').before(html);
				},
				complete:function(XMLHttpRequest,status)
				{
					if(status=='timeout')
					{
						window.iview.LoadingBar.error();
						window.notice.error({
							title: '请求超时，请检查网络是否畅通'
						})
						return false;
					}
				}
		 	})
		} else if (key == 'site') {
			$('.evaluate-content-div').hide();
			$('.site-list-div').show();
			$('.dyna-list-div').hide();
			$('.resume-div').hide();
		} else if (key == 'pro') {
			$('.evaluate-content-div').hide();
			$('.site-list-div').hide();
			$('.dyna-list-div').show();
			$('.resume-div').hide();
			
			if ($('.dyna-list-div div:eq(0)').children('div').length > 0) {
				return false;
			}
			
			var uid = -1;
			var loginData = utils.getLoginData();
			if (loginData) {
				uid = loginData.appUserId;
			}
			var pmid = $('.design-infor').attr('data-pmid');
			window.iview.LoadingBar.start();
			$.ajax({
				type: "get",
				url: config.portalUrl+"/pm/dynamic",
				dataType: "json",
				data:{
					'uid': uid,
					'pmid': pmid,
					'pageIndex': 1,
				},
				async: true,
				timeout:10000,
				success: function(data) {
					utils.buildDynaItems(data, $('.dyna-list-div div:eq(0)'), 'append', $('.pro-more'));
				},
				complete:function(XMLHttpRequest,status)
				{
					if(status=='timeout')
					{
						window.iview.LoadingBar.error();
						window.notice.error({
							title: '请求超时，请检查网络是否畅通'
						})
						return false;
					}
				}
		 	})
		} else if (key == 'resume') {
			$('.evaluate-content-div').hide();
			$('.site-list-div').hide();
			$('.dyna-list-div').hide();
			$('.resume-div').show();
		}
	})
	
	$('.evaluate-more').on('click', function(){
		var obj = $(this);
		if (obj.html().indexOf('没有更多数据了') >= 0) {
			return false;
		}
		
		var pmid = $('.design-infor').attr('data-pmid');
		var pIndex = obj.attr('data-pIndex');
		var pSize = obj.attr('data-pSize');
		window.iview.LoadingBar.start();
		$.ajax({
			type: "get",
			url: config.portalUrl+"/pm/assess",
			dataType: "json",
			data:{
				'pmid': pmid,
				'pageIndex': parseInt(pIndex) + 1
			},
			async: true,
			timeout:10000,
			success: function(data) {
				utils.ajaxResCheck4jq(data);
				window.iview.LoadingBar.finish();
				
				var items = data.body.assessItems;
				if (items.length == 0) {
					obj.html('没有更多数据了');
					return false;
				} else if (items.length < parseInt(pSize)) {
					obj.html('没有更多数据了');
				}
				
				var html = '';
				for (var i in items) {
					var itm = items[i];
					html += '<div class="evaluate-div">';
					html += '<div class="evaluate-infor">';
					html += '<a href="' + utils.getRoleUrl(0, itm.projid) + '">';
					html += '<div class="evaluate-user-infor">';
					html += '<img class="evaluate-avatar" src="' + utils.getUserAvatar(itm.avatar) + '"/>';
					html += '<div style="padding: 6px 16px;">';
					html += '<p class="evaluate-user-name">' + itm.username + '</p>';
					html += '<p class="evaluate-user-date">' + itm.assessDate + '发起评价</p>';
					html += '</div></div></a>';
					html += '<p class="evaluate-score">专业 ' + itm.scoreProf.toFixed(1) + ' | 服务 ' + itm.scoreManner.toFixed(1) + ' | 活跃 ' + itm.scoreActive.toFixed(1) + '</p>';
					html += '</div>';
					html += '<p class="evaluate-txt">' + itm.assessTxt + '</p>';
					html += '</div>';
				}
				$('.evaluate-div:last').after(html);
				obj.attr('data-pIndex', parseInt(pIndex) + 1);
			},
			complete:function(XMLHttpRequest,status)
			{
				if(status=='timeout')
				{
					window.iview.LoadingBar.error();
					window.notice.error({
						title: '请求超时，请检查网络是否畅通'
					})
					return false;
				}
			}
	 	})
	})
	
	$('.site-more').on('click', function(){
		var obj = $(this);
		if (obj.html().indexOf('没有更多数据了') >= 0) {
			return false;
		}
		
		var pmid = $('.design-infor').attr('data-pmid');
		var pIndex = obj.attr('data-pIndex');
		var pSize = obj.attr('data-pSize');
		window.iview.LoadingBar.start();
		$.ajax({
			type: "get",
			url: config.portalUrl+"/pm/proj",
			dataType: "json",
			data:{
				'pmid': pmid,
				'pageIndex': parseInt(pIndex) + 1
			},
			async: true,
			timeout:10000,
			success: function(data) {
				utils.ajaxResCheck4jq(data);
				window.iview.LoadingBar.finish();
				
				var items = data.body.items;
				if (items.length == 0) {
					obj.html('没有更多数据了');
					return false;
				} else if (items.length < parseInt(pSize)) {
					obj.html('没有更多数据了');
				}
				
				var html = '';
				for (var i in items) {
					var itm = items[i];
					html += '<a href="'+config.portalUrl+'/owner/' + itm.id + '.html">';
					html += '<div class="site-div">';
					html += '<img class="site-div-img" src="' + itm.doneImg + '" />';
					html += '<div class="site-date">';
					html += '<div class="site-role-date">';
					html += '<div>';
					html += '<img src="' + utils.getUserAvatar(itm.ownerAvatar) + '" />';
					html += '<p class="site-role-name">' + itm.ownerName + '</p>';
					html += '<p class="site-role-identity">业主</p>';
					html += '</div>';
					html += '<div>';
					html += '<img src="' + utils.getUserAvatar(itm.designerAvatar) + '" />';
					html += '<p class="site-role-name">' + itm.designerName + '</p>';
					html += '<p class="site-role-identity">设计师</p>';
					html += '</div>';
					html += '<div>';
					html += '<img src="' + utils.getUserAvatar(itm.pmAvatar) + '" />';
					html += '<p class="site-role-name">' + itm.pmName + '</p>';
					html += '<p class="site-role-identity">工长</p>';
					html += '</div></div>';
					html += '<div class="site-infor">';
					html += '<div><p>小区：' + itm.village + '</p><p>预算：' + itm.budget + '万</p></div>';
					html += '<div><p>户型：' + itm.houseType + '</p><p>风格：' + itm.decoStyle + '</p><p>面积：' + itm.houseArea + '㎡</p></div>';
					html += '<div><p>价格：' + itm.mode + itm.price + '万</p></div>';
					html += '</div></div></div></a>';
				}
				obj.attr('data-pIndex', parseInt(pIndex) + 1);
				$('.site-list-div div:eq(0)').append(html);
			},
			complete:function(XMLHttpRequest,status)
			{
				if(status=='timeout')
				{
					window.iview.LoadingBar.error();
					window.notice.error({
						title: '请求超时，请检查网络是否畅通'
					})
					return false;
				}
			}
	 	})
	})
	
	$('.pro-more').on('click', function(){
		var obj = $(this);
		if (obj.html().indexOf('没有更多数据了') >= 0) {
			return false;
		}
		
		var uid = -1;
		var loginData = utils.getLoginData();
		if (loginData) {
			uid = loginData.appUserId;
		}
		var pmid = $('.design-infor').attr('data-pmid');
		var pIndex = obj.attr('data-pIndex');
		window.iview.LoadingBar.start();
		$.ajax({
			type: "get",
			url: config.portalUrl+"/pm/dynamic",
			dataType: "json",
			data:{
				'uid': uid,
				'pmid': pmid,
				'pageIndex': parseInt(pIndex) + 1,
			},
			async: true,
			timeout:10000,
			success: function(data) {
				obj.attr('data-pIndex', parseInt(pIndex) + 1);
				utils.buildDynaItems(data, $('.dyna-list-div div:eq(0)'), 'append', obj);
			},
			complete:function(XMLHttpRequest,status)
			{
				if(status=='timeout')
				{
					window.iview.LoadingBar.error();
					window.notice.error({
						title: '请求超时，请检查网络是否畅通'
					})
					return false;
				}
			}
	 	})
	})
	
	//个人主页在线咨询hover事件
	$('.line-appointment').hover(function(){
		$(this).animate({width:"214px"});
		$(this).find('span').show();
	},function(){
		$(this).animate({width:"110px"});
		$(this).find('span').hide();
	});
})($(window), $(document))
