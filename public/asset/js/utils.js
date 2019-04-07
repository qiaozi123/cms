var utils = {
    isArray: function(stuff) {
        if (typeof stuff != "object" || typeof stuff.length != "number") return false
        return true
    },
    getQueryString:function(name) {
        var reg = new RegExp('(^|&)' + name + '=([^&]*)(&|$)', 'i');
        var r = window.location.search.substr(1).match(reg);
        if (r != null) {
            return unescape(r[2]);
        }
        return null;
    },
    numTrans: function(param) {
        var codeSheet = '0123456789abcdefghijklmnopqrstuvwxyz'

        switch (typeof param) {
            case 'number':
                if (param < 0 || param > 35) throw new Error('the number is out of effactive range:[0-' + (codeSheet.length - 1) + ']')
                return codeSheet[parseInt(param)]
                break;
            case 'string':
                if (param.length > 1) throw new Error('the character supposed be single')
                if (codeSheet.indexOf(param) == -1) throw new Error('the character is out of effactive range:[a-z]')
                return codeSheet.indexOf(param)
                break;
            case undefind:
                throw new Error('illegal value')
                break;
            default:
                throw new Error('illegal value')
                break;
        }
    },

    getLoginData: function() {
    	var loginData = utils.getcookie('loginUserAuthToken') || false;
    	if (loginData) {
    		return JSON.parse(decodeURIComponent(loginData));
    	}
        return loginData
    },
    
    getcookie: function (cookiename){ 
		var cookiestring = document.cookie;
		var start = cookiestring.indexOf(cookiename + '=');
		if (start == -1)   //   找不到 
			return   false; 
		start += cookiename.length + 1; 
		var end = cookiestring.indexOf(";", start); 
		if  (end == -1) return decodeURIComponent(cookiestring.substring(start)); 
		return decodeURIComponent(cookiestring.substring(start, end));
	},

    setLoginData: function(data, duration) {
        /*var D = duration ? duration : 1
        Cookies.set('loginUserAuthToken', data, {
            expires: D,
            path: config.cookiePath
        })*/
        return true
    },

    ajaxResCheck: function(res) {
        if (res.body.respCode != "00") {
        	window.iview.LoadingBar.error()
        	window.notice.error({title:res.body.respMsg})
            throw new Error(res.body.respMsg)
        }
        return res.body.body
    },

    ajaxResCheck4jq: function(res) {
        if (res.respCode != "00") {
        	window.iview.LoadingBar.error()
        	window.notice.error({title:res.respMsg})
            throw new Error(res.respMsg)
        }
        return true	
    },
    date2str: function (x,y)
    {
    	var date = new Date();
    	date.setTime(x);
    	var z = {M:date.getMonth()+1,d:date.getDate(),h:date.getHours(),m:date.getMinutes(),s:date.getSeconds()}; 
    	y = y.replace(/(M+|d+|h+|m+|s+)/g,function(v) {return ((v.length>1?"0":"")+eval('z.'+v.slice(-1))).slice(-2)}); 
    	return y.replace(/(y+)/g,function(v) {return date.getFullYear().toString().slice(-v.length)}); 
    },
    
    getRoleUrl: function (roleid, dataid) {
		if (parseInt(roleid) == 0) {
			return config.portalUrl + '/owner/' + dataid + '.html';
		} else if (parseInt(roleid) == 1) {
			return config.portalUrl + '/designer/' + dataid + '.html';
		} else if (parseInt(roleid) == 2) {
			return config.portalUrl + '/pm/' + dataid + '.html';
		} else if (parseInt(roleid) == 5) {
			return config.portalUrl + '/service/' + dataid + '.html';
		} else if (parseInt(roleid) == 7) {
			return config.portalUrl + '/merchant/' + dataid + '.html';
		} else {
			return 'javascript:void(0)';
		}
	},
    
	getAppRoleName : function (roleId) {
		if (roleId == 0) {
			return "业主";
		} else if (roleId == 1) {
			return "设计师";
		} else if (roleId == 2) {
			return "工长";
		} else if (roleId == 5) {
			return "客服";
		} else if (roleId == 6) {
			return "监理";
		} else if (roleId == 7) {
			return "商家";
		} else if (roleId == 8) {
			return "渠道";
		} else {
			return "未知";
		}
	},
	
	getUserAvatar : function (avatar) {
		if (null == avatar || '' == avatar || 'null' == avatar) {
			return config.portalUrl + '/static/img/morentouxiang.png';
		}
		
		return avatar;
	}, 
	
	buildDynaItems : function (data, objTarget, opt, objMore) {
		utils.ajaxResCheck4jq(data);
		window.iview.LoadingBar.finish();
		
		var items = data.body.dynaItems;
		var html = '';
		if (objMore) {
			var pageIndex = objMore.attr('data-pIndex');
			var pageSize = objMore.attr('data-pSize');
			if (items.length == 0) {
				objMore.html('没有更多数据了');
				if (opt == 'inner') {
					objTarget.children('div').remove();
					html += '<div class="list-blank"><p>这里像一片沙漠，到其他地方看看!</p></div>';
					objMore.hide();
				} else if (parseInt(pageIndex) == 1) {
					html += '<div class="list-blank"><p>这里像一片沙漠，到其他地方看看!</p></div>';
					objMore.hide();
				}
			} else if (items.length < parseInt(pageSize)) {
				objMore.html('没有更多数据了');
			} else {
				objMore.html('加载更多>>');
			}
		} else {
			if (items.length == 0) {
				if (opt == 'inner') {
					objTarget.children('div').remove();
				}
				window.notice.info({
					title: '没有更多数据了'
				})
				return false;
			}
		}
		
		for (var i in items) {
			var itm = items[i];
			if (itm.datatype == 0 || itm.datatype == '0') {
				html += '<div class="pro-div" data-id="'+itm.id+'">';
				html += '<div class="pro-top-div">';
				var dataid = parseInt(itm.roleid) == 0 ? itm.projid : (parseInt(itm.roleid) == 7 ? itm.merid : itm.uid);
				html += '<a href="' + utils.getRoleUrl(itm.roleid, dataid) + '">';
				html += '<div style="display: flex;">';
				html += '<img class="pro-avatar" src="' + utils.getUserAvatar(itm.avatar) + '" />';
				html += '<div class="pro-infor">';
				html += '<p class="pro-username">' + itm.username;
				html += '<span class="pro-userRole">/' + utils.getAppRoleName(itm.roleid) + '</span></p>';
				html += '<p class="pro-date">' + utils.date2str(itm.occurTime, 'yyyy-MM-dd hh:mm') + '</p>';
				html += '</div></div></a>';
				html += '<div class="pro-follow" data-uid="'+itm.uid+'" data-type="'+itm.datatype+'" key="'+itm.followStatus+'">';
				if (parseInt(itm.followStatus) == 1) {
					html += '关注';
				} else {
					html += '已关注';
				}
				html += '</div></div>';
				html += '<div>';
				html += '<p class="pro-txt">'+itm.msgtxt+'</p>';
				if (itm.dynaImages.length > 0) {
					html += '<div class="pro-img-list">';
					for (var j in itm.dynaImages) {
						var img = itm.dynaImages[j];
						html += '<a class="fancybox" href="'+img.detailImg+'" data-fancybox-group="'+itm.id+'">';
						html += '<img onload="Zoom(this)" style="width: 100%; height: 100%;" src="'+img.listImg+'" />'
						html += '</a>';
					}
					html += '</div>';
				}
				html += '<div class="pro-record-div">';
				html += '<div style="display: flex;">';
				if (null != itm.projid && parseInt(itm.projid) > 0 && parseInt(itm.roleid) != 0) {
					html += '<a href="'+utils.getRoleUrl(0,itm.projid)+'">';
					html += '<div class="look-pro">看工地</div></a>';
				}
				if (null != itm.cellId) {
					html += '<div class="pro-atelier">';
					html += '由<a href="'+config.portalUrl+'/cell/'+itm.cellId+'.html">';
					html += '<span style="color: #3db8a8;">'+itm.cellName+'</span></a>';
					if (parseInt(itm.s4d) == 0) {
						html += '设计';
					}
					if (parseInt(itm.s4p) == 0) {
						html += '施工';
					}
					html += '</div>';
				}
				html += '</div>';
				html += '<div style="display: flex;" data-id="'+itm.id+'">';
				html += '<div class="pro-collect" key="'+itm.favStatus+'" >';
				html += '<img src="'+config.portalUrl+'/static/img/shoucang.png" />';
				html += '<span>'+itm.favCount+'</span>';
				html += '</div>';
				html += '<div class="pro-comment">';
				html += '<img src="'+config.portalUrl+'/static/img/pinjia1.png" />';
				html += '<span>'+itm.commentCount+'</span>';
				html += '</div>';
				html += '<div class="pro-like">';
				html += '<img src="'+config.portalUrl+'/static/img/dianzan1.png" />';
				html += '<span>'+itm.appraiseCount+'</span>';
				html += '</div>';
				html += '</div></div></div>';
				html += '<div class="pro-data-div">';
				html += '<div class="pro-like-div" data-id="'+itm.id+'"';
				if (itm.appraises.length == 0) {
					html += ' style="display: none;"';
				}
				html += '>';
				html += '<img src="'+config.portalUrl+'/static/img/dianzan1.png" />';
				html += '<p>';
				for (var j in itm.appraises) {
					var a = itm.appraises[j];
					html += a.username;
					if (j != itm.appraises.length - 1) {
						html += '，';
					}
				}
				html += '</p></div>';
				if (itm.gifts.length > 0) {
					html += '<div class="pro-reward-div">';
					html += '<img src="'+config.portalUrl+'/static/img/shang.png" />';
					html += '<p>';
					for (var j in itm.gifts) {
						var a = itm.gifts[j];
						html += a.username;
						if (j != itm.gifts.length - 1) {
							html += '，';
						}
					}
					html += '</p></div>';
				}
				
				html += '<div class="pro-comment-div">';
				html += '<img class="pro-comment-img" src="'+config.portalUrl+'/static/img/pinjia1.png" />';
				html += '<div style="position: relative;">';
				html += '<div class="pro-send" key="0">发送</div>';
				html += '<input class="pro-input" placeholder="说几句" />';
				html += '<div class="pro-comment-content">';
				for (var j in itm.comments) {
					var a = itm.comments[j];
					html += '<p data-targetUid='+a.fromUid+'>';
					html += '<span>'+a.fromUsername+'</span>'
					if (null != a.toRoleid) {
						html += '回复<span> '+a.toUsername+'</span>';
					}
					html += '：'+a.msgtxt;
					html += '</p>'
				}
				html += '</div>';
				html += '</div></div></div></div>';
			} else if (parseInt(itm.datatype) == 1) { //求助
				html += '<div class="reward-div" data-id="' + itm.id + '">';
				html += '<div class="pro-top-div">';
				var dataid = parseInt(itm.roleid) == 0 ? itm.projid : (parseInt(itm.roleid) == 7 ? itm.merid : itm.uid);
				html += '<a href="' + utils.getRoleUrl(itm.roleid, dataid) + '">';
				html += '<div style="display: flex;">';
				html += '<img class="pro-avatar" src="' + utils.getUserAvatar(itm.avatar) + '" />';
				html += '<div class="pro-infor">';
				html += '<p class="pro-username">' + itm.username;
				html += '<span class="pro-userRole">/' + utils.getAppRoleName(itm.roleid) + '</span>';
				html += '</p>';
				html += '<p class="pro-date">' + utils.date2str(itm.occurTime, 'yyyy-MM-dd hh:mm') + '</p>';
				html += '</p>';
				html += '</div></div></a>';
				html += '<div class="pro-follow" data-id="' + itm.dataid + '" data-type="' + itm.datatype + '" key=' + itm.followStatus + '>';
				if (parseInt(itm.followStatus) == 1) {
					html += '关注';
				} else {
					html += '已关注';
				}
				html += '</div>';
				html += '</div>';
				html += '<div>';
				html += '<p style="font-size: 18px; color: #FF8D36;">求助/悬赏绘米' + itm.aidInfo.point + '</p>';
				html += '<p class="pro-txt">' + itm.msgtxt + '</p>';
				if (itm.dynaImages.length > 0) {
					html += '<div class="pro-img-list">';
					for (var j in itm.dynaImages) {
						var img = itm.dynaImages[j];
						html += '<a class="fancybox" href="'+img.detailImg+'" data-fancybox-group="'+itm.id+'">';
						html += '<img onload="Zoom(this)" style="width: 100%; height: 100%;" src="'+img.listImg+'" />'
						html += '</a>';
					}
					html += '</div>';
				}
				html += '<div class="reward-answer-num">';
				html += '<p>' + itm.aidInfo.ansCount + '人回答</p>';
				html += '<p>这条求助帮助' + itm.aidInfo.helpCount + '人</p>';
				html += '</div>';
				html += '<div class="answer-infor">';
				if (parseInt(itm.aidInfo.acceptStatus) == 0) {
					html += '<p>已采纳答案</p>';
				} else if (parseInt(itm.aidInfo.aidStatus) == -1) {
					html += '<p>已过期</p>';
				} else {
					html += '<p>悬赏截止时间：' + utils.date2str(itm.aidInfo.endTime, 'yyyy-MM-dd hh:mm') + '</p>';
				}
				html += '<a href="' + config.portalUrl + '/about">';
				html += '<div class="reward-goDetail">下载APP查看详情</div>';
				html += '</div></div></div>';
			} else if (parseInt(itm.datatype) == 3) {
				if (parseInt(itm.assessInfo.assessType) == 2) {// 阶段评价
					html += '<div data-id="' + itm.id + '">';
					html += '<div class="evaluate-div">';
					html += '<div class="evaluate-infor">';
					html += '<a href="' + utils.getRoleUrl(0, itm.projid) + '">';
					html += '<div class="evaluate-user-infor">';
					html += '<img class="evaluate-avatar" src="' + utils.getUserAvatar(itm.assessInfo.avatar) + '" />';
					html += '<div style="padding: 6px 16px;">';
					html += '<p class="evaluate-user-name">' + itm.assessInfo.username + '</p>';
					html += '<p class="evaluate-user-date">' + utils.date2str(itm.occurTime, 'yyyy-MM-dd hh:mm') + '发起评价</p>';
					html += '</div></div></a>';
					html += '<p class="evaluate-score">专业 ' + itm.assessInfo.scoreProf.toFixed(1) + ' | 服务 ' + itm.assessInfo.scoreManner.toFixed(1) + ' | 活跃 ' + itm.assessInfo.scoreActive.toFixed(1) + '</p>';
					html += '</div>';
					html += '<p class="evaluate-txt">' + itm.assessSay + '<br />' + itm.assessInfo.assessTxt + '</p>';
					html += '<a href="' + utils.getRoleUrl(itm.assessInfo.targetUser.roleId, itm.assessInfo.targetUser.uid) + '">';
					html += '<div class="evaluate-role-div">';
					html += '<img class="evaluate-role-avatar" src="' + utils.getUserAvatar(itm.assessInfo.targetUser.avatar) + '" />';
					html += '<div class="evaluate-role-infor">';
					html += '<p><span class="evaluate-role-name">' + itm.assessInfo.targetUser.username + '</span>';
					html += '<span class="evaluate-role-identity">/' + utils.getAppRoleName(itm.assessInfo.targetUser.roleId) + '</span></p>';
					html += '<p class="evaluate-role-txt">' + itm.assessInfo.targetUser.slogan + '</p>';
					html += '</div></div></a></div></div>';
				} else if (parseInt(itm.assessInfo.assessType) == 1 || parseInt(itm.assessInfo.assessType) == 0) {
					html += '<div class="shopEva-div" data-id="' + itm.id + '">';
					html += '<div class="evaluate-infor">';
					html += '<a href="' + utils.getRoleUrl(0, itm.projid) + '">';
					html += '<div class="evaluate-user-infor">';
					html += '<img class="evaluate-avatar" src="' + utils.getUserAvatar(itm.assessInfo.avatar) + '" />';
					html += '<div style="padding: 6px 16px;">';
					html += '<p class="evaluate-user-name">' + itm.assessInfo.username + '</p>';
					html += '<p class="evaluate-user-date">' + utils.date2str(itm.occurTime, 'yyyy-MM-dd hh:mm') + '发起评价</p>';
					html += '</div></div>';
					html += '</a>';
					if (parseInt(itm.assessInfo.assessType) == 0) {
						html += '<p class="evaluate-score">服务 ' + itm.assessInfo.scoreProf.toFixed(1) + '</p>';
					} else {
						html += '<p class="evaluate-score">质量 ' + itm.assessInfo.scoreProf.toFixed(1) + ' | 服务 ' + itm.assessInfo.scoreManner.toFixed(1) + ' | 描述相同 ' + itm.assessInfo.scoreActive.toFixed(1) + '</p>';
					}
					html += '</div>';
					html += '<p class="evaluate-txt">';
					if (parseInt(itm.assessInfo.assessType) == 0) {
						html += '<span class="shopEva-type">到店评价</span>';
					} else {
						html += '<span class="shopEva-type">购买评价</span>';
					}
					html += itm.assessInfo.assessTxt;
					html += '</p>';
					if (itm.assessInfo.images.length > 0) {
						html += '<div class="pro-img-list">';
						for (var j in itm.assessInfo.images) {
							var img = itm.assessInfo.images[j];
							html += '<a class="fancybox" href="'+img.detailImg+'" data-fancybox-group="'+itm.id+'">';
							html += '<img onload="Zoom(this)" style="width: 100%; height: 100%;" src="'+img.listImg+'" />'
							html += '</a>';
						}
						html += '</div>';
					}
					if (null != itm.assessInfo.addAssess) {
						html += '<div class="additional-evaluate">';
						html += '<p class="additional-title">用户追评</p>';
						html += '<p class="additional-txt">' + itm.assessInfo.addAssess.assessTxt + '</p>';
						if (itm.assessInfo.addAssess.images.length > 0) {
							html += '<div class="pro-img-list">';
							for (var j in itm.assessInfo.addAssess.images) {
								var img = itm.assessInfo.addAssess.images[j];
								html += '<a class="fancybox" href="'+img.detailImg+'" data-fancybox-group="'+itm.id+'a">';
								html += '<img onload="Zoom(this)" style="width: 100%; height: 100%;" src="'+img.listImg+'" />'
								html += '</a>';
							}
							html += '</div>';
						}
						html += '</div>';
					}
					
					if (null != itm.assessInfo.merItem) {
						html += '<div class="shopEva-store-div">';
						html += '<img class="shopEva-store-img" src="' + itm.assessInfo.merItem.merlogo + '" />';
						html += '<div class="shopEva-store-content">';
						html += '<div class="shopEva-store-infor">';
						html += '<div>';
						html += '<p class="shopEva-store-name">' + itm.assessInfo.merItem.mername + '</p>';
						html += '<div class="store-guarantee">';
						html += '<div class="store-jinpai">' + itm.assessInfo.merItem.grade + '</div>';
						html += '<div class="store-bao">' + itm.assessInfo.merItem.assure + '</div>';
						html += '</div></div>';
						html += '<a href="' + utils.getRoleUrl(7, itm.assessInfo.merItem.merid) + '">';
						html += '<div class="store-goDetail">进店看看</div>';
						html += '</a></div>';
						html += '<p class="store-products">主营产品：' + itm.assessInfo.merItem.goods + '</p>';
						html += '</div></div>';
					}
					
					html += '</div>';
				}
			}
		}
		
		if (html.length > 0) {
			if (!opt || opt == 'after') {
				objTarget.after(html);
			} else if (opt == 'append') {
				objTarget.append(html);
			} else if (opt == 'inner') {
				objTarget.children('div').remove();
				objTarget.append(html);
			}
		}
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
	},
	
	//创建客服窗口
	serviceEstablish : function (){
		var flag=$('#service_flag').val();
		if(flag==1||flag=='1'){
			$('#J_demo').show();
			$('body').append('<div class="shadow_service"></div>');
		}else{
		$('#service_flag').val('1');
		$('body').append('<div id="J_demo"></div>');
		$('body').append('<div class="shadow_service"></div>');
		var imUid='';
		var url= config.apiUrl + "/api/user/openIm"
		var loginData = utils.getLoginData();
		if (loginData) {
			imUid = loginData.appUserId;
			url = config.apiUrl + "/api/user/openIm?imUid="+imUid+""
		}
		$.ajax({
			type: "get",
			url: url,
			dataType: "json",
			data:{
			},
			async: true,
			timeout:10000,
			success: function(res) {
				WKIT.init({
				    container: document.getElementById('J_demo'),
				    uid: res.body.uid,
				    appkey: res.body.key,
				    credential: res.body.pwd,
				    touid: res.body.tid,
					groupId: res.body.groupId,
					title:'绘装客服',
					themeBgColor: '#1bc4b1',
				    themeColor: '#fff',
				    msgBgColor: '#1bc4b1',
				    msgColor: '#fff',
				    welcomeMsg:'小绘欢迎您',
	 			    sendMsgToCustomService: true,
				    toAvatar:'http://m.huihome.cn/m_portal_test/img/huihome.png',
				    width:500, 
				    height:500,
				    theme: 'pink',
				});
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
//		hm_ajax.ajax_req(params,function(res){
//			// 页面内展示
//			WKIT.init({
//			    container: document.getElementById('J_demo'),
//			    uid: res.body.uid,
//			    appkey: res.body.key,
//			    credential: res.body.pwd,
//			    touid: res.body.tid,
//				groupId: res.body.groupId,
//				title:'绘装客服',
//				themeBgColor: '#1bc4b1',
//			    themeColor: '#fff',
//			    msgBgColor: '#1bc4b1',
//			    msgColor: '#fff',
//			    welcomeMsg:'小绘欢迎您',
// 			    sendMsgToCustomService: true,
//			    toAvatar:'http://m.huihome.cn/m_portal_test/img/huihome.png',
//			    width:500, 
//			    height:500,
//			    theme: 'pink',
//			});
//			//WKIT.init(initPara);
//		})
		}
	},
	//支付结果查询
	guidePaymentQuery:function(guideid,flag){
		var loginData = utils.getLoginData();
    	if (!loginData) {
    		window.showLogin('login');
    		return false;
    	}
    	var uid = loginData.appUserId;
    	
		$.ajax({
			type:"get",
			url:'http://www.huihome.cn/guide/queryPay',
			dataType:"json",
			data:{
				uid:uid,
				id:guideid
			},
			async: true,
			timeout:10000,
			success: function(res) {
				console.log(res.respCode);
				if(res.respCode=='00'||res.respCode==00){
					if(flag){
						window.notice.success({title:'支付成功，正在进入。。。'})
					}
					window.location.href=config.portalUrl+"/guide/"+guideid+".html";
				}else{
					if(!flag){
						utils.guidePayment(guideid);
					}
				}
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
	},
	//循环对象
	commitOrder:function(){
		var guideid=$('#guideID').val();
		var loginData = utils.getLoginData();
		if (!loginData) {
    		window.showLogin('login');
    		return false;
    	}
		if(guideid==''||guideid==null||guideid=='null'){
			window.iview.LoadingBar.error();
			window.notice.error({
				title: '攻略ID无效'
			})
			return;
		}
		var uid = loginData.appUserId;
		$('.payment-QRcode img').attr('src','https://api.huihome.cn/huihome/api/qrcodeImageMode1?uid='+uid+'&prodid='+guideid);
		$('.payment-div').hide();
		$('.payment-QRcode').show();
		 var Interval=setInterval(function () {
			utils.guidePaymentQuery(guideid,true)
			if($('.menu-payment').is(':hidden')){
				window.clearInterval(Interval);
			}
		}, 1000);//每隔1分钟调一次保存草稿 
	},
	//点击攻略确认框
	guidePayment:function(guideid){
		$('#guideID').val(guideid);
		$('.menu-payment').show();
	},
	emptiness:function(value,err){
		if(value==''||value==null||value=='null'){
			window.iview.LoadingBar.error();
			window.notice.error({
				title : err
			});
			return false;
		}else{
			return true;
		}
	},
	//时间格式化方法
	 format : function(time, format) {
		var t = new Date(time);
		var tf = function(i) {
			return (i < 10 ? '0' : '') + i
		};
		return format.replace(/yyyy|MM|dd|HH|mm|ss/g, function(a) {
			switch (a) {
				case 'yyyy':
					return tf(t.getFullYear());
					break;
				case 'MM':
					return tf(t.getMonth() + 1);
					break;
				case 'mm':
					return tf(t.getMinutes());
					break;
				case 'dd':
					return tf(t.getDate());
					break;
				case 'HH':
					return tf(t.getHours());
					break;
				case 'ss':
					return tf(t.getSeconds());
					break;
			}
		})
	} ,
	imgFile:function(obj,jq$,obj1){//图片上传 传入三个参数  第一个为当前JQ对象  第二个为需要替换的img对象  第三个为当前事件  this
		var file = obj1.files[0];
		if (window.FileReader) {
			var reader = new FileReader();
			reader.readAsDataURL(file);
			// 监听文件读取结束后事件
			reader.onloadend = function(e) {
				var loginData = utils.getLoginData();
				var data = new FormData()
				   	 data.append('uid', loginData.appUserId)
	                 data.append('serialNo', loginData.serialNo)
	                 data.append('authCode', loginData.authCode)
	                 data.append('fileType', '作品')
	                 data.append('description', '设计师上传作品图片')
	                 data.append('file',file)

				$.ajax({
					type : "post",
					url : config.portalUrl + "/file/uploadwork",
					dataType : "json",
					data : data,
					processData : false, // 告诉jQuery不要去处理发送的数据
					contentType : false, // 告诉jQuery不要去设置Content-Type请求头
					async : true,
					timeout : 1000000,
					success : function(data) {
						if (data.respCode == '00') {
							console.log(data);
							window.iview.LoadingBar.error();
							window.notice.success({
								title : '图片提交成功'
							});
							jq$.attr('src',data.body.url4thumb);
							jq$.attr('data-h',data.body.height);
							jq$.attr('data-w',data.body.width);
							jq$.attr('imageId',data.body.fileid);
							jq$.parents('.fancybox').attr('href',data.body.url4raw);
						} else {
							window.iview.LoadingBar.error();
							window.notice.error({
								title : data.respMsg
							});
						}
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
			};
		}
	
	}
	
}
