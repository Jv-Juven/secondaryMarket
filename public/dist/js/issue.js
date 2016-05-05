(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
var issue, issue_body;

issue = {
  pics: [],
  good_title: "",
  type: 0,
  price: 0.00,
  storage: 1,
  describe: "",
  remark: "",
  name: "",
  long_num: "",
  QQ: "",
  school: "",
  address: "",
  tips: ""
};

issue_body = new Vue({
  el: "#issue_body",
  data: issue,
  methods: {
    submit: function() {
      var v_this;
      v_this = this;
      return $.post("/postGood", issue, function(msg) {
        if (msg.errCode === 0) {
          return v_this.tips = msg.message;
        } else {
          return v_this.tips = msg.message;
        }
      });
    },
    clear: function() {
      return this.tips = "";
    }
  },
  ready: function() {}
});


},{}]},{},[1]);
