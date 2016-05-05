issue = {
	pics: ["jfsadjfaf", "fasdfsa"]
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
}

issue_body = new Vue {
	el: "#issue_body"
	data: issue
	methods: {
		submit: ()->
			$.post "/postGood", issue, (msg)->
				# if msg.errCode is 0
					# alert msg.message
				# else 
					# alert msg.message
			# 'json'	
	}
	ready: ()->
}