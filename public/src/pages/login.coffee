# Vue = require "../../lib/vue/vue.js"

form = new Vue {
	el: "#login"
	methods: 
		submit: ()->
			$.post "/postLogin", {
				name: this.name
				password: this.password
			}, (data)->
				console.log data
}







