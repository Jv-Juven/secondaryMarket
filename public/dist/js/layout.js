(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){

/*
#设置根元素的font-size值
 */
var indexOf = [].indexOf || function(item) { for (var i = 0, l = this.length; i < l; i++) { if (i in this && this[i] === item) return i; } return -1; };

(function(doc, win) {
  var docEl, recalc, resizeEvt;
  docEl = doc.documentElement;
  resizeEvt = indexOf.call(window, 'orientationchange') >= 0 ? 'orientationchange' : 'resize';
  recalc = function() {
    var clientWidth;
    clientWidth = docEl.clientWidth;
    if (!clientWidth) {
      return;
    }
    return docEl.style.fontSize = 14 * (clientWidth / 320) + 'px';
  };
  if (!doc.addEventListener) {
    return;
  }
  $(document).ready(recalc);
  return $(window).resize(recalc);
})(document, window);


},{}]},{},[1]);
