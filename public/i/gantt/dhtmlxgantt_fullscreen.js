/*
@license

dhtmlxGantt v.4.0.0 Stardard
This software is covered by GPL license. You also can obtain Commercial or Enterprise license to use it in non-GPL project - please contact sales@dhtmlx.com. Usage without proper license is prohibited.

(c) Dinamenta, UAB. */ 
gantt._onFullScreenChange=function(){!gantt.getState().fullscreen||null!==document.fullscreenElement&&null!==document.mozFullScreenElement&&null!==document.webkitFullscreenElement&&null!==document.msFullscreenElement||gantt.collapse()},document.addEventListener&&(document.addEventListener("webkitfullscreenchange",gantt._onFullScreenChange),document.addEventListener("mozfullscreenchange",gantt._onFullScreenChange),document.addEventListener("MSFullscreenChange",gantt._onFullScreenChange),document.addEventListener("fullscreenChange",gantt._onFullScreenChange), 
document.addEventListener("fullscreenchange",gantt._onFullScreenChange)),gantt.expand=function(){if(gantt.callEvent("onBeforeExpand",[])){gantt._toggleFullScreen(!0);var 
t=gantt._obj;do 
t._position=t.style.position||"",t.style.position="static";while((t=t.parentNode)&&t.style);t=gantt._obj,t.style.position="absolute",t._width=t.style.width,t._height=t.style.height,t.style.width=t.style.height="100%",t.style.top=t.style.left="0px";var 
e=document.body;e.scrollTop=0,e=e.parentNode,e&&(e.scrollTop=0), 
document.body._overflow=document.body.style.overflow||"",document.body.style.overflow="hidden",document.documentElement.msRequestFullscreen&&gantt._obj&&window.setTimeout(function(){gantt._obj.style.width=window.outerWidth+"px"},1),gantt._maximize(),gantt.callEvent("onExpand",[])}},gantt.collapse=function(){if(gantt.callEvent("onBeforeCollapse",[])){var 
t=gantt._obj;do 
t.style.position=t._position;while((t=t.parentNode)&&t.style);t=gantt._obj,t.style.width=t._width,t.style.height=t._height,document.body.style.overflow=document.body._overflow, 
gantt._toggleFullScreen(!1),gantt._maximize(),gantt.callEvent("onCollapse",[])}},function(){var 
t=gantt.getState;gantt.getState=function(){var e=t.apply(this,arguments);return 
e.fullscreen=!!this._expanded,e}}(),gantt._maximize=function(){this._expanded=!this._expanded,this.render()},gantt._toggleFullScreen=function(t){!t&&(document.fullscreenElement||document.mozFullScreenElement||document.webkitFullscreenElement||document.msFullscreenElement)?document.exitFullscreen?document.exitFullscreen():document.msExitFullscreen?document.msExitFullscreen():document.mozCancelFullScreen?document.mozCancelFullScreen():document.webkitExitFullscreen&&document.webkitExitFullscreen():document.documentElement.requestFullscreen?document.documentElement.requestFullscreen():document.documentElement.msRequestFullscreen?document.documentElement.msRequestFullscreen():document.documentElement.mozRequestFullScreen?document.documentElement.mozRequestFullScreen():document.documentElement.webkitRequestFullscreen&&document.documentElement.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
};
//# sourceMappingURL=../sources/ext/dhtmlxgantt_fullscreen.js.map
