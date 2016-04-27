# Vue = require "../../lib/vue/vue.js"

form = new Vue {
	el: "#login"
	data: {
		name: "",
		password: "",
		sub_tips: "",# “提交”按钮提示信息
		tips_type: -1
	}
	methods: 
		submit: ()->

			if ( this.name.length < 1 || this.name.length > 20 ) 
				this.sub_tips = "请输入1-20位的用户名"
				this.tips_type = 1
				return
			
			if ( this.password.length < 6 || this.password.length > 20 ) 
				this.sub_tips = "请输入6-20位的密码"
				this.tips_type = 1
				return
			

			v_this = this
			$.post "/postLogin", {
				name: v_this.name
				password: v_this.password
			}, (msg)->
				console.log msg
				v_this.sub_tips = msg.message
				v_this.tips_type = msg.errCode

			nowarn: ()->
				this.sub_tips = ""
				this.tips_type = -1
}







