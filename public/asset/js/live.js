(function(W, D) {
    var projid = $('#projidEle').attr('data-projid')
    var step = -1
    Vue.config.devtools = true
    Vue.http.options.emulateJSON = true
    new Vue({
        el: '#liveContainer',
        data: function() {
            return {
                liveType: "公开",
                liveImgList: [],
                imgCount: 0,
                visible: false,
                file: null,
                loadingStatus: false,
                preViewImgUrl: null,
                liveText: '',
                isLiveShow:false
            }
        },
        mounted: function() {
            window.liveShow = this.liveShow
            window.liveHide = this.liveHide
        },
        methods: {
            liveHide: function() {
              this.isLiveShow = false
            },
            liveShow: function(hashTag) {
              if (hashTag) {
                this.liveText = (hashTag+' ')
              }
              console.log(this)
              this.isLiveShow = true
            },
            btn_release: function() {
                var loginData = utils.getLoginData()
                if (this.liveText.length <= 0) {
                    this.$Notice.warning({
                        title: '没有直播内容'
                    })
                    return
                }
                if (!loginData) {
                	window.showLogin('login')
                    return
                }
                var fileidData = []
                for (var i = 0; i < this.liveImgList.length; i++) {
                    fileidData.push(this.liveImgList[i].fileid)
                }
                
                window.iview.LoadingBar.start();
                this.$http.post(config.apiUrl + "/api/project/issue", {
                    uid: loginData.appUserId,
                    serialNo: loginData.serialNo,
                    authCode: loginData.authCode,
                    projid: projid,
                    step: step,
                    msgtxt: this.liveText,
                    fileids: fileidData.toString(),
                    publicScope: this.liveType == '公开' ? 0 : 1
                }).then(function(res) {
                    utils.ajaxResCheck(res)
                    window.iview.LoadingBar.finish()

                    this.$Notice.success({
                        title: "发布成功"
                    })
                    this.liveHide()
                    setTimeout(function() {
                        window.location.reload()
                    }, 500)
                }).catch(function(err) {
                    console.warn(err)
                    this.$Notice.warning({
                        title: err
                    })
                })
            },
            handleView: function(url) {
                this.preViewImgUrl = url
                this.visible = true
            },
            handleRemove: function(idx) {
                this.liveImgList.splice(idx, 1)
                this.imgCount -= 1
            },
            imgPreLoad: function(imgObj) {
                var img = new Image()
                var that = this
                this.imgCount += 1
                img.onload = function() {
                    img.onload = null
                    that.liveImgList.push(imgObj)
                }
                img.src = imgObj.url4raw
            },
            liveImgUpload: function(file) {
                this.file = file
                this.loadingStatus = true;
                var loginData = utils.getLoginData()
                var that = this
                if (!loginData) {
                	window.showLogin('login')
                    return
                }
                if (this.imgCount >= 9) {
                    this.$Notice.warning({
                        title: '图片只能选择9张'
                    })
                    return
                }
                try {
                    var data = new FormData()
                    data.append('uid', loginData.appUserId)
                    data.append('serialNo', loginData.serialNo)
                    data.append('authCode', loginData.authCode)
                    data.append('file', this.file)
                } catch (e) {
                    console.warn(e)
                    this.$Notice.error({
                        title: '上传失败，当前浏览器不支持ajax文件上传'
                    })
                    return false
                }
                
                window.iview.LoadingBar.start()
                this.$http.post(config.apiUrl + '/api/file/upload', data).then(function(res) {
                    var res = utils.ajaxResCheck(res)
                    if (this.imgCount >= 9) {
                        this.$Notice.warning({
                            title: '图片只能选择9张'
                        })
                        return
                    }
                    window.iview.LoadingBar.finish()
                    this.imgPreLoad(res)
                    this.$Notice.success({
                        title: '图片上传成功'
                    })
                    return false
                }).catch(function(err) {
                    this.$Notice.warning({
                        title: err.message
                    })
                })
            }
        }
    })
})($(window), $(document))
