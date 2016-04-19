$ ()->
	reg = new Vue {
		el: "#reg_board",
		data: 
			email: ""
			password: ""
			re_password: ""
			sub_tips: "" # “提交”按钮提示信息
			show_tag: false
		methods: 
			submit: ()->
				preg = /^[a-zA-Z0-9]+(_)*[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-zA-Z0-9]+/
				if ! (preg.test(this.email))
					this.sub_tips = "请输入正确的邮箱地址"
					this.show_tag = true
					return
				console.log this.email.length
				# $.post "/postRegister", JSON.stringify(this.$data), ()->
				# console.log JSON.stringify this.$data
	}