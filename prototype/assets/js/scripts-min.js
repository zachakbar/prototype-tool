function initMobileNav(){$("body").addClass("js");var e=$(".menu"),o=$(".menu_link");o.click(function(){return o.toggleClass("active"),e.slideToggle("fast"),!1})}function initUI(){$("#accordion").accordion({active:!1,collapsible:!0,heightStyle:"content",header:"h3"}),$("#tabs").tabs(),$("#datepicker").datepicker(),$("#launch_modal").click(function(){$("#ui_modal").lightbox_me({centered:!0})}),$("#launch_imgmodal").click(function(){$("#imgmodal").lightbox_me({centered:!0})}),$(".layouts_btn").click(function(){$("#layouts_modal").lightbox_me({centered:!0})})}function selectFontColor(){$(".styled_select select").change(function(){""!==$(this).val()?$(this).css("color","rgb(51, 51, 51);"):$(this).css("color","rgb(153, 153, 153);")}),$(".styled_select select").each(function(){$(this).val()?$(this).css("color","rrgb(51, 51, 51);"):$(this).css("color","rgb(153, 153, 153);")})}window.log=function(){if(log.history=log.history||[],log.history.push(arguments),this.console){arguments.callee=arguments.callee.caller;var e=[].slice.call(arguments);"object"==typeof console.log?log.apply.call(console.log,console,e):console.log.apply(console,e)}},function(e){function o(){}for(var t="assert,clear,count,debug,dir,dirxml,error,exception,firebug,group,groupCollapsed,groupEnd,info,log,memoryProfile,memoryProfileEnd,profile,profileEnd,table,time,timeEnd,timeStamp,trace,warn".split(","),n;n=t.pop();)e[n]=e[n]||o}(function(){try{return console.log(),window.console}catch(e){return window.console={}}}()),function($){$.fn.lightbox_me=function(e){return this.each(function(){function o(){var e=s[0].style;l.destroyOnClose?s.add(c).remove():s.add(c).hide(),l.parentLightbox&&l.parentLightbox.fadeIn(200),l.preventScroll&&$("body").css("overflow",""),r.remove(),s.undelegate(l.closeSelector,"click"),s.unbind("close",o),s.unbind("repositon",i),$(window).unbind("resize",n),$(window).unbind("resize",i),$(window).unbind("scroll",i),$(window).unbind("keyup.lightbox_me"),l.onClose()}function t(e){(27===e.keyCode||27===e.DOM_VK_ESCAPE&&0===e.which)&&l.closeEsc&&o()}function n(){$(window).height()<$(document).height()?(c.css({height:$(document).height()+"px"}),r.css({height:$(document).height()+"px"})):c.css({height:"100%"})}function i(){var e=s[0].style;if(s.css({left:"50%",marginLeft:s.outerWidth()/2*-1,zIndex:l.zIndex+3}),s.height()+80>=$(window).height()&&"absolute"!==s.css("position")){var o=$(document).scrollTop()+40;s.css({position:"absolute",top:o+"px",marginTop:0})}else s.height()+80<$(window).height()&&(l.centered?s.css({position:"fixed",top:"50%",marginTop:s.outerHeight()/2*-1}):s.css({position:"fixed"}).css(l.modalCSS),l.preventScroll&&$("body").css("overflow","hidden"))}var l=$.extend({},$.fn.lightbox_me.defaults,e),c=$(),s=$(this),r=$('<iframe id="foo" style="z-index: '+(l.zIndex+1)+';border: none; margin: 0; padding: 0; position: absolute; width: 100%; height: 100%; top: 0; left: 0; filter: mask();"/>');if(l.showOverlay){var a=$(".js_lb_overlay:visible");c=$(a.length>0?'<div class="lb_overlay_clear js_lb_overlay"/>':'<div class="'+l.classPrefix+'_overlay js_lb_overlay"/>')}$("body").append(s.hide()).append(c),l.showOverlay&&(n(),c.css({position:"absolute",width:"100%",top:0,left:0,right:0,bottom:0,zIndex:l.zIndex+2,display:"none"}),c.hasClass("lb_overlay_clear")||c.css(l.overlayCSS)),l.showOverlay?c.fadeIn(l.overlaySpeed,function(){i(),s[l.appearEffect](l.lightboxSpeed,function(){n(),i(),l.onLoad()})}):(i(),s[l.appearEffect](l.lightboxSpeed,function(){l.onLoad()})),l.parentLightbox&&l.parentLightbox.fadeOut(200),$(window).resize(n).resize(i).scroll(i),$(window).bind("keyup.lightbox_me",t),l.closeClick&&c.click(function(e){o(),e.preventDefault}),s.delegate(l.closeSelector,"click",function(e){o(),e.preventDefault()}),s.bind("close",o),s.bind("reposition",i)})},$.fn.lightbox_me.defaults={appearEffect:"fadeIn",appearEase:"",overlaySpeed:250,lightboxSpeed:300,closeSelector:".close",closeClick:!0,closeEsc:!0,destroyOnClose:!1,showOverlay:!0,parentLightbox:!1,preventScroll:!1,onLoad:function(){},onClose:function(){},classPrefix:"lb",zIndex:999,centered:!1,modalCSS:{top:"40px"},overlayCSS:{background:"black",opacity:.3}}}(jQuery),$(document).ready(function(){initMobileNav(),initUI(),selectFontColor()});