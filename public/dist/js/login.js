(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
var form;

form = new Vue({
  el: "#login",
  data: {
    name: "",
    password: "",
    sub_tips: "",
    tips_type: -1
  },
  methods: {
    submit: function() {
      var v_this;
      if (this.name.length < 1 || this.name.length > 20) {
        this.sub_tips = "请输入1-20位的用户名";
        this.tips_type = 1;
        return;
      }
      if (this.password.length < 6 || this.password.length > 20) {
        this.sub_tips = "请输入6-20位的密码";
        this.tips_type = 1;
        return;
      }
      v_this = this;
      $.post("/postLogin", {
        name: v_this.name,
        password: v_this.password
      }, function(msg) {
        console.log(msg);
        v_this.sub_tips = msg.message;
        return v_this.tips_type = msg.errCode;
      });
      return {
        nowarn: function() {
          this.sub_tips = "";
          return this.tips_type = -1;
        }
      };
    }
  }
});


},{}]},{},[1]);
