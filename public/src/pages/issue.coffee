issue = {
	pics: []
	good_title: ""  # 商品标题
	type: 0 # 商品类型
	price: 0.00 # 商品价格
	storage: 1 # 商品数量
	describe: "" # 商品描述
	remark: "" # 商品备注
	name: "" # 发布人姓名
	long_num: "" # 发布人手机长号
	QQ: "" # 发布人QQ
	school: "" # 发布人学校
	address: "" # 交易地址
	tips: "" # 警告信息
}

issue_body = new Vue {
	el: "#issue_body"
	data: issue
	methods: {
		submit: ()->
			v_this = this
			$.post "/postGood", issue, (msg)->
				if msg.errCode is 0
					v_this.tips = msg.message
				else 
					v_this.tips = msg.message
				

		clear: ()->
			this.tips = ""
	}
	ready: ()->
}

