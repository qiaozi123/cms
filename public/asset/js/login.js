(function(W, D) {
    // Vue.config.devtools = true
    Vue.http.options.emulateJSON = true
    new Vue({
        el: '#VueLogin',
        data: function() {
            return {
                state: {
                    loginRequesting: false,
                    vCodeRequesting: false,
                    registerRequesting: false
                },
                form: {
                    loginData: {
                        vCodeTimer: 0,
                        autoLogin: false,
                        mobile: '',
                        imgVcode: '',
                        vCode: ''
                    },
                    registerData: {
                        agreeHuiProtocol: false,
                        vCodeTimer: 0,
                        mobile: '',
                        imgVcode: '',
                        vCode: ''
                    }
                },
                activeTab: 'login',
                isloginLayerShow: false,
                isConfirmBoxShow: false
            }
        },
        computed: {
            loginDataCheck: function() {
                if (this.form.loginData.mobile == '' || /[^0-9]/g.test(this.form.loginData.mobile)) {
                    return false
                }
                return true
            },
            loginImgVcodeCheck: function() {
                if (this.form.loginData.imgVcode == '' || !/^[a-zA-Z0-9]{4}$/.test(this.form.loginData.imgVcode)) {
                    return false
                } 
                
                this.$http.post(config.portalUrl + "/user/chkImgVcode", {
                    mobile: this.form.loginData.mobile,
                    imgVcode: this.form.loginData.imgVcode
                }).then(function(res) {
                	if (res.body.respCode != "00") {
                		return false
                	}
                }).catch(function(err) {
            		window.iview.LoadingBar.error()
            		return false
                })
                return true
            },
            loginvCodeCheck: function() {
                if (this.form.loginData.vCode == '' || /[^0-9]/g.test(this.form.loginData.vCode)) {
                    return false
                }
                return true
            },
            registerDataCheck: function() {
                if (this.form.registerData.mobile == '' || /[^0-9]/g.test(this.form.registerData.mobile)) {
                    return false
                }
                return true
            },
            registerImgVcodeCheck: function() {
                if (this.form.registerData.imgVcode == '' || !/^[a-zA-Z0-9]{4}$/.test(this.form.registerData.imgVcode)) {
                    return false
                }
                
                this.$http.post(config.portalUrl + "/user/chkImgVcode", {
                    mobile: this.form.registerData.mobile,
                    imgVcode: this.form.registerData.imgVcode
                }).then(function(res) {
                	if (res.body.respCode != "00") {
                		return false
                	}
                }).catch(function(err) {
            		window.iview.LoadingBar.error()
            		return false
                })
                
                return true
            },
            registervCodeCheck: function() {
                if (this.form.registerData.vCode == '' || /[^0-9]/g.test(this.form.registerData.vCode)) {
                    return false
                }
                return true
            }
        },
        mounted: function() {
            window.notice = this.$Notice
            window.showLogin = this.showLogin
        },
        methods: {
            updateProfileComfirm: function() {
                window.location.href = config.portalUrl + "/user/modify"
            },
            updateProfileRefuse: function() {
                window.location.reload()
            },
            qqLogin: function() {
            	var callbackUrl = window.location.href;
            	window.location.href = config.portalUrl + '/oauth/qq?reurl=' + encodeURIComponent(callbackUrl);
//                window.location.href = 'https://graph.qq.com/oauth/show?which=Login&display=pc&client_id=101330416&redirect_uri=http://www.huihome.cn/oauth/qq/afterauth&response_type=code&state='+callbackUrl+'&scope=get_user_info'
            },
            wxLogin: function() {
            	var callbackUrl = window.location.href;
            	window.location.href = config.apiUrl + '/api/oauth/wx/pc?reurl=' + encodeURIComponent(callbackUrl);
//                window.location.href = 'https://open.weixin.qq.com/connect/qrconnect?appid=wx01c24b756c89d87a&redirect_uri=http://api.huihome.cn/huihome/api/oauth/wx/oauth4Pc&response_type=code&scope=snsapi_login&state='+encodeURIComponent(callbackUrl)+'#wechat_redirect'
            },
            showLogin: function(defaulTab) {
                switch (defaulTab) {
                    case 'login':
                        this.activeTab = 'login'
                        break
                    case 'regist':
                        this.activeTab = 'regist'
                        break
                    default:
                        break
                }
                this.isloginLayerShow = true
            },
            hideLogin: function() {
                this.isloginLayerShow = false
            },
            refreshImgVcode: function() {
            	var src = config.portalUrl + "/vCode?d="+Math.random();
            	$('.imgVcode').attr('src', src);
            },
            login: function() {

                if (this.state.loginRequesting) {
                    this.$Notice.warning({
                        title: "正在请求"
                    })
                    return
                }

                if (!this.loginDataCheck) {
                    this.$Notice.warning({
                        title: '手机号错误',
                        desc: '请输入正确的手机号'
                    })
                    return
                }
                
                if (!this.loginImgVcodeCheck) {
                    this.$Notice.warning({
                        title: '图形验证码错误',
                        desc: '请输入正确的图形验证码'
                    })
                    return
                }

                if (!this.loginvCodeCheck) {
                    this.$Notice.warning({
                        title: '验证码错误',
                        desc: '请输入正确的验证码'
                    })
                    return
                }
                this.state.loginRequesting = true
        		window.iview.LoadingBar.start()
                this.$http.post(config.portalUrl + "/user/login", {
                    mobile: this.form.loginData.mobile,
                    imgVcode: this.form.loginData.imgVcode,
                    verifyCode: this.form.loginData.vCode
                }).then(function(res) {
                    utils.ajaxResCheck(res)
                    window.iview.LoadingBar.finish()
//                    utils.setLoginData(res.body.body, this.form.loginData.autoLogin ? 30 : 1)

                    this.$Notice.success({
                        title: '登录成功',
                        desc: '即将刷新页面'
                    })
                    this.state.loginRequesting = false
                    this.isloginLayerShow = false

                    setTimeout(function() {
                        window.location.reload()
                    }, 500)

                }).catch(function(err) {
            		window.iview.LoadingBar.error()
                    this.state.loginRequesting = false
                })
            },
            vCodeTimerStart: function(scene) {
                var that = this
                switch (scene) {
                    case 'login':
                        that.form.loginData.vCodeTimer = 60
                        var T = setInterval(function() {
                            if (that.form.loginData.vCodeTimer <= 0) {
                                clearInterval(T)
                                return
                            }
                            that.form.loginData.vCodeTimer -= 1
                        }, 1000)
                        break
                    case 'regist':

                        that.form.registerData.vCodeTimer = 60
                        var T = setInterval(function() {
                            if (that.form.registerData.vCodeTimer <= 0) {
                                clearInterval(T)
                                return
                            }
                            that.form.registerData.vCodeTimer -= 1
                        }, 1000)
                        break
                    default:
                        break

                }
            },
            regist: function() {
                if (!this.registerDataCheck) {
                    this.$Notice.warning({
                        title: '手机号错误',
                        desc: '请输入正确的手机号'
                    })
                    return
                }

                if (!this.registerImgVcodeCheck) {
                    this.$Notice.warning({
                        title: '图形验证码错误',
                        desc: '请输入正确的图形验证码'
                    })
                    return
                }
                
                if (!this.registervCodeCheck) {
                    this.$Notice.warning({
                        title: '验证码错误',
                        desc: '请输入正确的验证码'
                    })
                    return
                }
                if (!this.form.registerData.agreeHuiProtocol) {
                    this.$Notice.warning({
                        title: '抱歉',
                        desc: '您需要同意用户协议'
                    })
                    return
                }

        		window.iview.LoadingBar.start()
                this.$http.post(config.portalUrl + "/user/register", {
                    mobile: this.form.registerData.mobile,
                    imgVcode: this.form.registerData.imgVcode,
                    verifyCode: this.form.registerData.vCode,
                    wishRoleId: 0,
                    from: 'PC'
                }).then(function(res) {
                    utils.ajaxResCheck(res)
                    window.iview.LoadingBar.finish()
                    this.$Notice.success({
                        title: '注册成功'
                    })
//                    utils.setLoginData(res.body.body, 30)
                    this.isConfirmBoxShow = true
                }).catch(function(err) {
            		window.iview.LoadingBar.error()
                })
            },
            vCode: function(scene) {
                switch (scene) {
                    case "login":
                        if (!this.loginDataCheck) {
                            this.$Notice.warning({
                                title: '手机号错误',
                                desc: '请输入正确的手机号'
                            })
                            return
                        }
                        if (!this.loginImgVcodeCheck) {
                            this.$Notice.warning({
                                title: '图形验证码错误',
                                desc: '请输入正确的图形验证码'
                            })
                            return
                        }
                        if (this.form.loginData.vCodeTimer > 0) {
                            this.$Notice.warning({
                                title: '短信已发送,不要重复点击'
                            })
                            return
                        }
                		window.iview.LoadingBar.start()
                        this.$http.post(config.portalUrl + "/user/genverifycode", {
                            mobile: this.form.loginData.mobile,
                            imgVcode: this.form.loginData.imgVcode,
                            usefor: "login"
                        }).then(function(res) {
                            utils.ajaxResCheck(res)
                            window.iview.LoadingBar.finish()
                            this.vCodeTimerStart('login')
                            this.$Notice.success({
                                title: '短信已发送'
                            })

                        }).catch(function(err) {
                    		window.iview.LoadingBar.error()
                        })
                        break
                    case "regist":
                        if (!this.registerDataCheck) {
                            this.$Notice.warning({
                                title: '手机号错误',
                                desc: '请输入正确的手机号'
                            })
                            return
                        }
                        if (!this.registerImgVcodeCheck) {
                            this.$Notice.warning({
                                title: '图形验证码错误',
                                desc: '请输入正确的图形验证码'
                            })
                            return
                        }
                        if (this.form.registerData.vCodeTimer > 0) {
                            this.$Notice.warning({
                                title: '短信已发送,不要重复点击'
                            })
                            return
                        }
                		window.iview.LoadingBar.start()
                        this.$http.post(config.portalUrl + "/user/genverifycode", {
                            mobile: this.form.registerData.mobile,
                            imgVcode: this.form.registerData.imgVcode,
                            usefor: "register"
                        }).then(function(res) {
                            utils.ajaxResCheck(res)
                            window.iview.LoadingBar.finish()
                            this.vCodeTimerStart('regist')
                            this.$Notice.success({
                                title: '短信已发送'
                            })
                        }).catch(function(err) {
                    		window.iview.LoadingBar.error()
                        })
                        break
                    default:
                        break
                }
            }
        }
    })
})($(window), $(document))