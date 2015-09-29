(function () { 	
	var ie = !!(window.attachEvent && !window.opera);
    var wk = /webkit\/(\d+)/i.test(navigator.userAgent) && (RegExp.$1 < 525);   
	 var fn = [];    
	var run = function ()
				{ 
					for (var i = 0; i < fn.length; i++) fn[i](); 
				}; 
	var d = document; 
	d.ready = function (f) 
				{ 
					if (!ie && !wk && d.addEventListener) 
					return d.addEventListener('DOMContentLoaded', f, false); 
					if (fn.push(f) > 1) return; 
					if (ie) (function () 
								{ 
									try { 
											d.documentElement.doScroll('left'); 
											run(); 
										} 
									catch (err) 
										{ 
											setTimeout(arguments.callee, 0); 
										} 
								}
							)(); 
					else if (wk)  
					var t = setInterval(function () 
										{  
											if (/^(loaded|complete)$/.test(d.readyState)) 
											clearInterval(t), run();  
										}, 0); 
				}; 
})(); 
/*
	#时间日期格式化
*/
Date.prototype.format = function (format) {  
    //实例:format="YYYY-MM-dd hh:mm:ss";  
    var  o = {  
        "M+"  : this .getMonth() + 1,  // 月   
        "d+"  : this .getDate(),  // 日   
        "h+"  : this .getHours(),  // 小时   
        "m+"  : this .getMinutes(),  // 分   
        "s+"  : this .getSeconds(),  // 秒   
        "q+"  :Math.floor(( this .getMonth() + 3) / 3),  // 一刻钟
        "S"  : this .getMilliseconds()  
    }  
    if  (/(y+)/.test(format)) {  
        format = format.replace(RegExp.$1, (this .getFullYear() +  "" ).substr(4 - RegExp.$1.length));  
    }  
    for  (var k in o) {  
        if  ( new  RegExp( "("  + k +  ")" ).test(format)) {  
            format = format.replace(RegExp.$1, RegExp.$1.length == 1 ? o[k]: ("00"  + o[k]).substr(( ""  + o[k]).length));  
        }  
    }  
    return  format;  
} 
/*
	#外框架操作类
*/
/*
	#新版前端架构公共类
	#baseUrl
	#object
*/
var common = function(baseUrl) {
	var _this=this;
	_this.baseUrl = baseUrl;
	/*
	#封装document.getElementById or getElementByClassName
	#对象id or className
	#Object
	*/
	_this.$ = function(o) {
		var type = o.substr(0,1),ret;
		ret = document.getElementById(o);
		if(type == "."){
			ret = document.getElementsByClassName(o.substr(1,(o.length-1)));
		}
		return ret || o;
	};
	/*
		#检索字符串
		#被检索串，要查找的串
		#检索成功返回true
	*/
	_this.haveClass = function() {
		var str = arguments[0] , search = arguments[1] , flag=false;
		if(str.indexOf(search) > 0){
			flag = true;
		}
		return flag;
	}
	/*
		#添加className
		#对象，要删除的className
		#返回void
	*/
	_this.addClass = function(){
		var obj = arguments[0],cls = arguments[1];
		return obj.className += " " + cls;
	}
	/*
		#删除className
		#对象，要删除的className
		#返回void
	*/
	_this.removeClass = function(){
		var obj = arguments[0],cls = arguments[1];
		return obj.className = obj.className.replace(new RegExp(" "+cls, 'g'),"");
	}
	/*
		#删除className
		#对象(数组)，要删除的className
		#返回void
	*/
	_this.removeObjClass = function(){
		var lists = arguments[0],cls = arguments[1];
		for(var i = 0;i<lists.length;i++){
			if(_this.haveClass(lists[i].className,cls)){
				_this.removeClass(lists[i],cls);
				break;
			}
		}
		return;
	}
	/**
	* 获取XMLHttpRequest对象
	* @ 无
	* @ 返回XMLHttpRequest
	* @ auther lixiaowei
	*/
	_this.getXMLHttp = function(){
		 var xmlhttp;
		  try {
				 xmlhttp = new XMLHttpRequest(); // Mozilla / Safari / IE7
		   } catch (e) {
			   // IE
			   var XMLHTTP_IDS = new Array('MSXML2.XMLHTTP.5.0',
											'MSXML2.XMLHTTP.4.0',
											'MSXML2.XMLHTTP.3.0',
											'MSXML2.XMLHTTP',
											'Microsoft.XMLHTTP' );
		   var success = false;
		   for (var i=0;i < XMLHTTP_IDS.length && !success; i++) {
			 try {
				 xmlhttp = new ActiveXObject(XMLHTTP_IDS[i]);
				  success = true;
			 } catch (e) {}
		   }
		   if (!success) {
			throw new Error('Unable to create XMLHttpRequest.');
		 }
	   }
	   return xmlhttp;
	}
	//封装ajax
	_this.ajax= function(url,send,callBack){
		var xmlhttp=_this.getXMLHttp();
		if(xmlhttp==null){alert("您的浏览器不支持Ajax!");return;}
		xmlhttp.onreadystatechange=stateChange;
		xmlhttp.open("POST",_this.baseUrl+url,true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send(send);
		function stateChange(){
		  if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
				var jsonString = xmlhttp.responseText; // 获取服务器返回的json字符串
				var jsonObj = null;
				try {
					jsonObj = eval('(' + jsonString + ')'); // 将json字符串转换成对象
				} catch (ex) {
					return null;	
				}
				if(callBack){
					callBack(jsonObj);
				}
			}
		}
	}
	/*
		#iframe高度自适应
		#iframe对象
		#返回void
	*/
	_this.iFrameHeight = function (){
		var ifm= arguments[0]; 
		var subWeb = document.frames ? document.frames[ifm.name].document : ifm.contentDocument; 
		if(ifm != null && subWeb != null) {
			ifm.height = 0;
			ifm.height = Math.max(subWeb.body.scrollHeight, 800);
			return ifm.style.opacity = "1";
		}
	}
	//打开弹窗
	_this.showFancyBox = function(html, width, height, top, left) {
		var dWdith = $(window).width(),
			dHeight = $(window.parent).height(),
			sHeight = $(document).scrollTop() || $(window.parent.document).scrollTop();
		var top  = top == undefined ? (dHeight - height)/2 + sHeight : top;
		var left = left == undefined ? (dWdith - width)/2 : left;
		$("#fancybox-wrap")
		.css("width", width+"px")
		.css("height", height+"px")
		.css("left", left + "px")
		.css("top", top + "px");
		$("#fancybox-content").css("width",width + "px").css("height",height + "px");
		$("#fancybox-content").html(html);
		return $("#fancybox-wrap").show();
	}
	//关闭弹窗
	_this.hideFancyBox = function(){
		$("#fancybox-wrap").hide();
	}
	return _this;
}