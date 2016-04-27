$ ()->
	reg = new Vue {
		el: "#reg_board",
		data: 
			name: ""
			email: ""
			password: ""
			re_password: ""
			sub_tips: "" # “提交”按钮提示信息
			tips_type: -1
		methods: 
			submit: ()->
				preg = /^[a-zA-Z0-9]+(_)*[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-zA-Z0-9]+/

				if ( this.name.length < 1 || this.name.length > 20 ) 
					this.sub_tips = "请输入1-20位的用户名"
					this.tips_type = 1
					return
				if ! (preg.test(this.email))
					this.sub_tips = "请输入正确的邮箱地址"
					this.tips_type = 1
					return
				if ( this.password.length < 6 || this.password.length > 20 ) 
					this.sub_tips = "请输入6-20位的密码"
					this.tips_type = 1
					return
				if ( this.re_password.length < 6 || this.re_password.length > 20 ) 
					this.sub_tips = "请再次输入密码"
					this.tips_type = 1
					return

				v_this = this;
				$.post "/postRegister", v_this.$data, (msg)->
					console.log msg
					v_this.sub_tips = msg.message;
					v_this.tips_type = msg.errCode;
				# preg = /^[a-zA-Z0-9]+(_)*[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-zA-Z0-9]+/
				# if ! (preg.test(this.email))
				# 	this.sub_tips = "请输入正确的邮箱地址"
				# 	this.show_tag = true
				# 	return
				# console.log this.email.length
				# $.post "/postRegister", JSON.stringify(this.$data), ()->
				# console.log JSON.stringify this.$data
			nowarn: ()->
				this.sub_tips = ""
				this.tips_type = -1
	}