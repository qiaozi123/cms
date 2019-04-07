function Tab(pointer, chunk, sign, initIndex, before, after) {
    if (!utils.isArray(pointer) || !utils.isArray(chunk)) throw new Error("build failed, pointer or chunk is not typeof Array")
    if (pointer.length !== chunk.length) throw new Error("build failed, pointer not match chunk")

    this.currentSelected = initIndex
    var that = this

    pointer.map(function(index, item) {
        $(item).on('click', function(e) {
            before ? before(item) : void(0)
            pointer.removeClass(sign).eq(index).addClass(sign)
            chunk.hide().eq(index).show()
            that.currentSelected = index
            after ? after(item) : void(0)
        })
    })

    $(pointer[this.currentSelected]).trigger('click')
}

Tab.prototype.say = function() {
    console.log("currentSelected is: " + this.currentSelected)
    return this.currentSelected
}


function Filter(condition, rawData, sign, markOfTip) {
    if (!utils.isArray(condition) || !utils.isArray(condition)) throw new Error("build failed, condition or rawData is not typeof Array")
    this.conditionPool = []
    var that = this

    condition.eq(0).on('reCalc', function(e) {
        if (that.conditionPool.length === 0) {
            rawData.show()
            return
        }
        rawData.show()
        rawData.map(function(index, item) {
            for (var i = 0; i < that.conditionPool.length; i++) {
                var reg = new RegExp(that.conditionPool[i] + '', "g")
                var att = $(item).attr(markOfTip)
                if (!reg.test(att)) {
                    $(item).hide()
                }
            }
        })
    })

    condition.map(function(index, item) {
        $(item).on('click', function(e) {
            e.stopImmediatePropagation()
            if ($(item).hasClass(sign)) {
                for (var i = 0; i < that.conditionPool.length; i++) {
                    if (that.conditionPool[i] == index) {
                        that.conditionPool.splice(i, 1)
                    }
                }
                $(item).removeClass(sign)
                condition.eq(0).trigger('reCalc')
                return
            }
            $(item).addClass(sign)
            that.conditionPool.push(utils.numTrans(index))
            condition.eq(0).trigger('reCalc')
        })
    })
}

function Reply(replyer, floors, container) {
    this.replyer = replyer
    this.container = null
    this.replyId = null
    this.floors = floors
    this.getLoginData = utils.getLoginData()
    var that = this

    this.initReply = function(newContainer) {
        if (this.container) {
            this.replyer.remove()
        }
        this.container = newContainer
        var bereplayed = this.container.parent().find('.username').eq(0).text()
        if (this.getLoginData) {
            this.container.after(this.replyer[1])
            var textAreaTmp = this.container.parent().find('textarea')
            textAreaTmp.attr('placeholder', '回复' + bereplayed + '：')
            return
        }
        this.container.after(this.replyer[0])
    }


    this.floors.map(function(index, item) {
        $(item).on('click', function(e) {
			if(!utils.getLoginData()){
				window.showLogin('login')
				return 
			}
            that.initReply($(this))
			var infoObj = $(this).parent()
			
			that.replyer.find('.btn_release').on('click', function(e) {
				var commentObj = $(that.replyer[1]).find('.textArea').eq(0)
				$(document).trigger('replySubmit', {
					comment : commentObj.val(),
					workid : infoObj.attr('data-workid')||null,
					topicid:infoObj.attr('data-topicid')||null,
					targetUid : infoObj.attr('data-targetUid'),
					parentid:infoObj.attr('data-parentid')
				})
				console.log('event: "replySubmit" on document is triggered')
			})
        })
        $(item).parent().find('.floor-top>.reply').on('click',function(e){
        	$(this).parent().parent().find('.floor-bottom').eq(0).trigger('click')
        })
    })
}

function Reply_resident(replyer, floors, container) {
    Reply.call(this, replyer, floors, container)
    this.replyer_resident = replyer.clone()
    this.ele_resident = $('<div class="floor resident"></div>')
    var that = this

    window.$('.comments>.container').prepend(this.ele_resident)

    if (this.getLoginData) {
        this.ele_resident.append(this.replyer_resident[1]).find('textarea').attr('placeholder', '评论：')
        
        this.ele_resident.find('.btn_release').on('click', function(e) {
        	var commentObj = $(that.replyer_resident[1]).find('.textArea').eq(0)
	        $(document).trigger('replyResidentSubmit', {
				comment : commentObj.val(),
				workid : commentObj.attr('data-workid')||null,
				topicid:commentObj.attr('data-topicid')||null
			})
	        console.log('event: "replyResidentSubmit" on document is triggered')
        })
        return
    }
    this.ele_resident.append(this.replyer_resident[0])
    this.replyer_resident.eq(0).on('click',function(e){
    	window.showLogin('login')
    })
}
