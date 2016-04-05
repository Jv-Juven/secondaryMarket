add_btn	= $ "#add_sel_btn_c"
sel_bg = $ ".sel-bg-c"
sel_pannel = $ ".sel-pannel-c"
confirm_btn = $ "#confirm_btn"



$ ()->
	# 侧滑出
	out = ()->
		sel_bg.fadeOut 400
		sel_pannel.transition {
			"x": "90%"
		}, 300, "ease-out", ()->
			$(this).hide()

	# 点击“筛选”侧滑入
	add_btn.on "click", ()->
		sel_bg.fadeIn 600
		sel_pannel.css {
			"x": "90%"
		} 
		.show()
		.transition {
			"x": 0
		}, 500, "ease-out"

	sel_bg.on "click", out
	confirm_btn.on "click", out


