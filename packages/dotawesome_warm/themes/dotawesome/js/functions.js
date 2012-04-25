var cssua=function(i,l){var m=/\s*([\-\w ]+)[\s\/]([\d_]+\b([\-\._\/]\w+)*)/,n=/([\w\-\.]+[\s\/][v]?[\d_]+\b([\-\._\/]\w+)*)/g,o=/rv[:](\d+(\.\w+)*).*?\bgecko[\/]\w+/,p=/\bblackberry\w*[\s\/]+(\d+(\.\w+)*)/,q=/(\bwindows\b|\bmacintosh\b|\blinux\b|\bunix\b)/,r=/(\bandroid\b|\bipad\b|\bipod\b|\bblackberry|\brim tablet os\b|\bwebos\b|\bwindows ce\b|\bwindows phone os\b|\bwindows ce\b|\bpalm|\bsymbian|\bj2me\b|\bdocomo\b|\bpda\b|\bchtml\b|\bmidp\b|\bcldc\b|\w*?mobile\w*?|\w*?phone\w*?)/,s=/(\bxbox\b|\bplaystation\b|\bnintendo\s+\w+)/,
d={parse:function(c){var a={},c=(""+c).toLowerCase();if(!c)return a;for(var b,g,e=c.split(/[()]/),f=0,d=e.length;f<d;f++)if(f%2){var j=e[f].split(";");for(b=0,g=j.length;b<g;b++)if(m.exec(j[b])){var h=RegExp.$1.split(" ").join("_"),i=RegExp.$2;if(!a[h]||parseFloat(a[h])<parseFloat(i))a[h]=i}}else if(j=e[f].match(n))for(b=0,g=j.length;b<g;b++)h=j[b].split(/[\/\s]+/),h.length&&"mozilla"!==h[0]&&(a[h[0].split(" ").join("_")]=h.slice(1).join("-"));if(r.exec(c)){if(a.mobile=RegExp.$1,p.exec(c))a.blackberry=
RegExp.$1}else if(q.exec(c))a.desktop=RegExp.$1;else if(s.exec(c)&&(a.game=RegExp.$1,b=a.game.split(" ").join("_"),a.version&&!a[b]))a[b]=a.version;if(a.intel_mac_os_x)a.mac_os_x=a.intel_mac_os_x.split("_").join("."),delete a.intel_mac_os_x;else if(a.cpu_iphone_os)a.ios=a.cpu_iphone_os.split("_").join("."),delete a.cpu_iphone_os;else if(a.cpu_os)a.ios=a.cpu_os.split("_").join("."),delete a.cpu_os;if(a.opera&&a.version)a.opera=a.version;if(a.applewebkit){if(a.webkit=a.applewebkit,delete a.applewebkit,
a.safari)a.chrome||a.mobile&&!a.ios?delete a.safari:a.safari=a.version&&!a.rim_tablet_os?a.version:{419:"2.0.4",417:"2.0.3",416:"2.0.2",412:"2.0",312:"1.3",125:"1.2",85:"1.0"}[parseInt(a.safari,10)]||a.safari}else if(a.msie){if(!a.opera)a.ie=a.msie;delete a.msie}else if(o.exec(c))a.gecko=RegExp.$1;a.version&&delete a.version;return a},format:function(c){var a="",b;for(b in c)if(b&&c.hasOwnProperty(b)){var g=b,e=c[b],g=g.split(".").join("-"),f=" ua-"+g;if(e){for(var e=e.split(" ").join("_").split(".").join("-"),
d=e.indexOf("-");0<d;)f+=" ua-"+g+"-"+e.substring(0,d),d=e.indexOf("-",d+1);f+=" ua-"+g+"-"+e}a+=f}return a},encode:function(c){var a="",b;for(b in c)b&&c.hasOwnProperty(b)&&(a&&(a+="&"),a+=encodeURIComponent(b)+"="+encodeURIComponent(c[b]));return a}};d.userAgent=d.ua=d.parse(l);var k=d.format(d.ua)+" js";i.className=i.className?i.className.replace(/\bno-js\b/g,"")+k:k.substr(1);return d}(document.documentElement,navigator.userAgent);

Cufon.set('fontFamily', 'Lobster');
Cufon.replace(".dotLogo", { textShadow: "-1px -1px #000" });
Cufon.replace("#pageTitle", { textShadow: "1px 1px #000" });
Cufon.replace(".powerSlide .largeText, #mainShell h1", { textShadow: "1px 1px #fff" });


Cufon.set('fontFamily', 'tungsten-medium');
Cufon.replace("#pageHeader nav>ul>li>a>.pageName, footer h4", { textShadow: "-1px -1px #5a2009" });
Cufon.replace(".dot-awesome-button, .content-sbBlog-wrap .readmore",  { hover: true, textShadow: "1px 1px #5a2009" });
Cufon.replace("#mainShell h2, #mainShell h3", { textShadow: "1px 1px #fff" });
Cufon.replace("#mainShell #content-sbBlog-title h3", { color: "#fff" });


$(document).ready(function() {
						   
			
	Cufon.DOM.ready(function() {
		
		// auto-margin the nav
		var ulWidth = $("#pageHeader nav>ul").width();  
		var numLis = $("#pageHeader nav>ul>li");
		var sumOfLis = 0;
		
		
		$("#pageHeader nav>ul>li").each(function () {
			var object = $(this);
			sumOfLis += object.width();
		});
		
		var remainingWidth = (ulWidth -  sumOfLis);
		var marRight = (remainingWidth / (numLis.length - 1));
		var marRight = Math.floor(marRight);
		
		
		$("#pageHeader nav>ul>li").css({'margin-right' : marRight });
		$("#pageHeader nav>ul>li:last").css({'margin-right' : "0px"});
	
		var footerHeight = $("footer").innerHeight();
		//alert(footerHeight)
		$("#push").css("height", footerHeight+"px");
		$("#wrapper").css("margin", "0px 0px -"+footerHeight+"px");
	
	});
	
	
	//this gives class to a 4 column row in C5
	$(".ccm-layout-row").each(function(){
		
		var numOfCols = $(this).find(".ccm-layout-col").length
		if ( numOfCols == 4 ){
			$(this).addClass("fourColRow");	
		}
		
	});
	
	//remove the nojs class
	$("html").removeClass("nojs");
		
	$("#pageHeader nav>ul>li>ul").prepend("<div class='indicator'>");
	
	//nav animations
	$("#pageHeader nav>ul>li>ul>li>a").hover(
		function(){
			$(this).animate({ left: "8px" }, 200 );
		},
		function(){
			$(this).animate({ left: "0px" }, 200 );
		}
	);
	
	$("html:not(.ua-mobile) #pageHeader nav>ul>li").hover(
		function(){
			$("#pageHeader nav>ul>li>ul").fadeOut()
			$(this).find("ul").fadeIn();
		},
		function(){
			$(this).find("ul").fadeOut();
		}
	);
	
	$("#pageHeader nav>ul>li>a>.description").each(function(){
		if ( $(this).text() == "" ){
			$(this).parent().parent().find("ul").css("top", "48px");	
		}
	});
	
	//remove the silly br in the form
	$(".miniSurveyView").prev().remove();

});