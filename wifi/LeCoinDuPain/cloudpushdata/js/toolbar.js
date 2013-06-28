var starHub = new wapi();
var smsDIV, yahoo;
var unSupportFixed = true;

try { unSupportFixed = $.browser.version == "6.0" || $.browser.msie && top.document.compatMode == "BackCompat"; }
catch (e) {}

top.showSms = function () {
    if (!arguments.callee.inital) {
        smsDIV = createWidget($("#smsBtn")[0], "http://websms.starhub.com/websmsn/widget.jsp", 282, 420, {
            left: $(popupMenu).offset().left - 280,
            top: !unSupportFixed ? parseInt($(popupMenu).css("top")) + 90 : 90
        });

        arguments.callee.inital = true;
    }

    if (yahoo && $(yahoo).css("display") !== "none") yahoo.hidden();
    if ($(smsDIV).css("display") === "none") smsDIV.show();
};

top.showYahoo = function () {
    if (!arguments.callee.inital) {
        yahoo = createWidget($("#yahoo_bg_btn")[0], "/cloud-push-api.csp?usb=/e/yahoo.html", 295, 45, {
            left: $(popupMenu).offset().left - 60,
            top: !unSupportFixed ? parseInt($(popupMenu).css("top")) + 230 : 230
        });

        arguments.callee.inital = true;
    }
    if (smsDIV && $(smsDIV).css("display") !== "none") smsDIV.hidden();
    if ($(yahoo).css("display") === "none") yahoo.show();
};

var createWidget = function (target, src, widgetWidth, widgetHeight, style) {
        return starHub.createHover({
            target: target,
            pos: "bottom",
            content: $(top.document.createElement("iframe")).attr({
				src: src,
				width: widgetWidth,
				height: widgetHeight,
				frameBorder: 0,
				marginheight: 0,
				marginwidth: 0,
				allowtransparency: "true",
				scrolling: "no"
			}),
            setCss: style,
            show: function () {
                $(this).slideDown("fast");
            },
            hidden: function () {
                $(this).slideUp("fast");
            }
        });
    }

var popupMenu;
jQuery(function ($) {
    var smsDIV;
    var head = $("head");
    var showBtn = $("#Show_bar_btn");
    var base = top.document.getElementsByTagName("base");
    var baseTarget;
	var timer = 0;

    var menuContainer = $(top.document.createElement("div")).css("width", 132);

    popupMenu = starHub.createHover({
        target: showBtn[0],
        pos: "left",
        content: menuContainer,
        hidden: function () {
            $(this).css("display", "none");
            if (base.length > 0 && baseTarget === "_blank") base.attr("target", baseTarget);
        }
    });

    showBtn.click(function () {
        if ($(popupMenu).css("display") !== "none") return;
		/*"base" tag handler - prevent to open a new window*/
        base = $(base);
        if (base.attr("target") === "_blank") {
            baseTarget = "_blank";
            base.attr("target", "_self");
        }

        var h = $("head").html().split("\n");
        var menuFrame = $(top.document.createElement("iframe")).attr({
            src: top.document.domain,
            width: 132,
            height: 238,
            frameBorder: 0,
            marginheight: 0,
            marginwidth: 0,
            allowtransparency: "true",
            scrolling: "no"
        });
		
		
		
		/*Assembly menu code*/
        var menuDoc = [];
        menuDoc.push("<html>");
        menuDoc.push("<head>");
        for (var i = 0, l = h.length; i < l; i++) {
            var v = h[i].replace(/(^\s*)|(\s*$)/g, "");
            var str = v.substr(1, 6);
            if (/^(?:meta|link|style)/i.test(str)) menuDoc.push(v);
        }
        menuDoc.push("</head>");
        menuDoc.push("<body>");
        menuDoc.push($("#div2").html().replace(/<script(.|\n)*?\/script>/gi, ""));
        menuDoc.push("</body></html>");

        popupMenu.show();				
		menuContainer.html("").append(menuFrame.css("display", "none"));
		
		if(/msie 9/i.test(window.navigator.userAgent)) {
			clearTimeout(timer);
			
			timer = setTimeout(function(){
				var mDoc = menuFrame[0].contentWindow.document;
				mDoc.write(menuDoc.join("\n"));
				mDoc.write('<script src=\"/cloud-push-api.csp?wapi\" type=\"text/javascript\"></scr' + 'ipt>');
				mDoc.write('<script type=\"text/javascript\">var starHub = new wapi();</scr' + 'ipt>');
				menuFrame.css("display", "block")
			}, 200);
		}
		/*Create menu window*/
		else menuFrame.attr("src", "javascript:document.write('" + menuDoc.join("\n") + "');document.write('<script src=\"/cloud-push-api.csp?wapi\" type=\"text/javascript\"></scr' + 'ipt>');document.write('<script type=\"text/javascript\">var starHub = new wapi();</scr' + 'ipt>');").css("display", "block");
    });
});

function closeBar() {
    //broadcast close message to different domains
    starHub.closeBarBroadcast(['facebook.com', 'www.youtube.com', 'www.hardwarezone.com', 'www.goalsarena.com']);
    //close bar
    starHub.closeBar();
}