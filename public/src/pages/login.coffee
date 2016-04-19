# Vue = require "../../lib/vue/vue.js"

form = new Vue {
	el: "#login"
	
	methods: 
		submit: ()->
			$.post "/postLogin", {
				email: this.email
				password: this.password
			}, (data)->
				console.log data
}







