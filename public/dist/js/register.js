(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
$(function() {
  var reg;
  return reg = new Vue({
    el: "#reg_board",
    data: {
      email: "",
      password: "",
      re_password: "",
      sub_tips: "",
      show_tag: false
    },
    methods: {
      submit: function() {
        var preg;
        preg = /^[a-zA-Z0-9]+(_)*[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-zA-Z0-9]+/;
        if (!(preg.test(this.email))) {
          this.sub_tips = "请输入正确的邮箱地址";
          this.show_tag = true;
          return;
        }
        return console.log(this.email.length);
      }
    }
  });
});


},{}]},{},[1]);
