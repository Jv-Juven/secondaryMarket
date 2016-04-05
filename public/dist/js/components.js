(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
var add_btn, confirm_btn, sel_bg, sel_pannel;

add_btn = $("#add_sel_btn_c");

sel_bg = $(".sel-bg-c");

sel_pannel = $(".sel-pannel-c");

confirm_btn = $("#confirm_btn");

$(function() {
  var out;
  out = function() {
    sel_bg.fadeOut(400);
    return sel_pannel.transition({
      "x": "90%"
    }, 300, "ease-out", function() {
      return $(this).hide();
    });
  };
  add_btn.on("click", function() {
    sel_bg.fadeIn(600);
    return sel_pannel.css({
      "x": "90%"
    }).show().transition({
      "x": 0
    }, 500, "ease-out");
  });
  sel_bg.on("click", out);
  return confirm_btn.on("click", out);
});


},{}]},{},[1]);
