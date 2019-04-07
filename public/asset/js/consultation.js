(function(W, D) {
	$('.top-apply').on('click', function () {
		var description = $(this).parent().find('textarea[name=description]').val();
    	var mobile = $(this).parent().find('input[name=mobile]').val();
    	if (null == description || description.length == 0) {
    		window.notice.warning({
				title: "请输入问题描述"
			});
    		return false;
    	}
    	
    	if (description.length > 500) {
    		window.notice.warning({
				title: "问题描述最多输入500个字符~"
			});
    		return false;
    	}
    	
    	if (null == mobile || '' == mobile || mobile.length != 11) {
    		window.notice.warning({
				title: "请输入正确的手机号码"
			});
    		return false;
    	}
    	
    	window.iview.LoadingBar.start();
    	$.ajax({
			type: "post",
			url: config.portalUrl+"/apply",
			dataType: "json",
			data:{
				mobile:mobile,
    			description:description
			},
			async: true,
			timeout:10000,
			success: function(data) {
				utils.ajaxResCheck4jq(data);
    			window.iview.LoadingBar.finish();
				
				$('.top-apply').parent().find('textarea[name=description]').val('');
		    	$('.top-apply').parent().find('input[name=mobile]').val('');
		    	
		    	window.notice.success({
		    		title: "报名成功"
				});
			},
			complete:function(XMLHttpRequest,status)
			{
				if(status=='timeout')
				{
					window.iview.LoadingBar.error();
					window.notice.error({
						title: '请求超时，请检查网络是否畅通'
					});
					return false;
				}
			}
	 	})
	})
})($(window), $(document))
