

$(function() {
    $('.choose_text').click(function () {
        window.trackHost = $(this).attr('data-val');
    })
    $(".see").click(function() {
        var trackNum = $.trim($(".cont_number").val());

     //   var trackHost = $("#trackHost").val();
        var contReg = /^[a-zA-Z]{4}[0-9]{7}$/i;
        var billReg1 = /^[a-zA-Z]{5}[0-9]{7}$/i;
        var billReg2 = /^[a-zA-Z]{6}[0-9]{6}$/i;
        var contType = "";
        if (trackNum.length == 11) {
            contType = "CN";
        } else if (billReg1.test(trackNum) || billReg2.test(trackNum)) {
            contType = "BL";
        } else {
            alert($("#errContNo").val());
            return;
        }
        if (trackHost == "norasia") {
            trackNorasia(trackNum, contType);
        } else if (trackHost == "msc") {
            trackMsc(trackNum, contType);
        } else if (trackHost == "kline") {
            trackKline(trackNum, contType);
        } else if (trackHost == "cma") {
            trackCma(trackNum, contType);
        } else if (trackHost == "maersk") {
            trackMaersk(trackNum, contType);
        } else if (trackHost == "oocl") {
            trackOocl(trackNum, contType);
        } else if (trackHost == "tslines") {
            trackTslines(trackNum, contType);
        } else if (trackHost == "zim") {
            trackZim(trackNum, contType);
        } else if (trackHost == "hapaglloyd") {
            trackHapaglloyd(trackNum, contType);
        } else if (trackHost == "safmarine") {
            trackSafmarine(trackNum, contType);
        } else if (trackHost == "cosco") {
            trackCosco(trackNum, contType);
        }
    });
});

function openTracking(url) {
    var wnd = window.open(url, "trackWnd", "location=no,status=no,toolbar=no,scrollbars=yes,width=800,height=600");
    wnd.window.focus();
    return wnd;
}

function trackNorasia(num, type) {
    var url = "http://www.csavnorasia.com/rastreo/rastreo.nsf/yourtrace?openagent&" + num;
    openTracking(url);
}

function trackMsc(num, type) {
    var url = "http://tracking.mscgva.ch/msctracking.php?SearchTracking=" + num;
    openTracking(url);
}

function trackKline(num, type) {
    if (type == "BL") {
        num = num.replace("KKLU", "");
    }
    var html = "";
    html += "<form id='frm-kline' target='trackWnd' action='http://app2.kline.com:80/GctApp/search/GetSearchResults' method='post'>";
    html += "<input type='hidden' name='Request' value='GetSearchResults' \/>";
    html += "<input type='hidden' name='SearchNo' value='' \/>";
    html += "<input type='hidden' name='SearchType' value='" + (type == "BL" ? "BL" : "CN") + "' \/>";
    html += "<input type='hidden' name='No1' value='" + num + "' \/>";
    html += "<input type='hidden' name='No2' value='' \/>";
    html += "<input type='hidden' name='No3' value='' \/>";
    html += "<input type='hidden' name='No4' value='' \/>";
    html += "<input type='hidden' name='No5' value='' \/>";
    html += "<input type='hidden' name='No6' value='' \/>";
    html += "<input type='hidden' name='No7' value='' \/>";
    html += "<input type='hidden' name='No8' value='' \/>";
    html += "<input type='hidden' name='Comments' value='' \/>";
    html += "<input type='hidden' name='Action' value='Search' \/>";
    html += "<\/form>";
    $("#trackData").html(html);
    openTracking("about:blank");
    $("#frm-kline").submit();
}

function trackCma(num, type) {
    var url = "http://www.cma-cgm.com/eBusiness/Tracking/Default.aspx?";
    if (type == "BL") {
        url += "BolNumber=" + num;
    } else {
        url += "ContNum=" + num;
    }
    var myDate = new Date();
    url += "&T=" + myDate.getSeconds() + myDate.getFullYear() + myDate.getHours() + myDate.getDate() + myDate.getMinutes() + myDate.getMonth();
    openTracking(url);
}

function trackMaersk(num, type) {
    var html = "";
    html += '<form id="frm-maersk" target="trackWnd" name="quickEntryForm" action="http://www.maerskline.com:80/appmanager/;JSESSIONID_ADMINTOOLS=Zd1CPyhVWHD7C8yqJbK4zdzL2k1QBLQdnJ2j2ZhtRl1HM5RgML0f!-1468797326!-797750853?_nfpb=true&portlet_quickentries_2_actionOverride=%2Fportlets%2Fquickentries%2FtrackCargo&_windowLabel=portlet_quickentries_2&_pageLabel=home" method="post">';
    html += '<input type="hidden" name="portlet_quickentries_2wlw-select_key:{actionForm.trackType}OldValue" value="true" \/>';
    html += '<input type="hidden" name="portlet_quickentries_2wlw-select_key:{actionForm.trackType}" value="' + (type == "BL" ? "BLNUMBER" : "CONTAINERNUMBER") + '" \/>';
    html += '<input type="hidden" name="portlet_quickentries_2{actionForm.trackNo}" value="' + num + '" \/>';
    html += '<\/form>';
    $("#trackData").html(html);
    openTracking("about:blank");
    $("#frm-maersk").submit();
}

function trackOocl(num, type) {
    openTracking("http://www.oocl.com/eng/Pages/default.aspx");
}

function trackTslines(num, type) {
    if (type == "BL") {
       alert("Invalid container number!");
       return;
    }
    var html = "";
    html += '<form id="frm-tslines" target="trackWnd" name="Form1" method="post" action="http://www.tslines.com/TCT1/TCT1Query.aspx" id="Form1">';
    html += '<input type="hidden" name="__VIEWSTATE" value="dDwtNzAzOTEwOTU0O3Q8O2w8aTwxPjs+O2w8dDw7bDxpPDc+O2k8OT47aTwxMT47PjtsPHQ8QDA8cDxwPGw8UGFnZUNvdW50O18hSXRlbUNvdW50O18hRGF0YVNvdXJjZUl0ZW1Db3VudDtEYXRhS2V5czs+O2w8aTwxPjtpPDA+O2k8MD47bDw+Oz4+Oz47Ozs7Ozs7OztAMDxAMDxwPGw8SGVhZGVyVGV4dDtEYXRhRmllbGQ7U29ydEV4cHJlc3Npb247UmVhZE9ubHk7PjtsPENvbnRhaW5lck51bWJlcjtDb250YWluZXJOdW1iZXI7Q29udGFpbmVyTnVtYmVyO288Zj47Pj47Ozs7PjtAMDxwPGw8SGVhZGVyVGV4dDtEYXRhRmllbGQ7U29ydEV4cHJlc3Npb247UmVhZE9ubHk7PjtsPEFjdGl2ZURhdGU7QWN0aXZlRGF0ZTtBY3RpdmVEYXRlO288Zj47Pj47Ozs7PjtAMDxwPGw8SGVhZGVyVGV4dDtEYXRhRmllbGQ7U29ydEV4cHJlc3Npb247UmVhZE9ubHk7PjtsPERlcG90O0RlcG90O0RlcG90O288Zj47Pj47Ozs7PjtAMDxwPGw8SGVhZGVyVGV4dDtEYXRhRmllbGQ7U29ydEV4cHJlc3Npb247UmVhZE9ubHk7PjtsPFBvcnROYW1lO1BvcnROYW1lO1BvcnROYW1lO288Zj47Pj47Ozs7PjtAMDxwPGw8SGVhZGVyVGV4dDtEYXRhRmllbGQ7U29ydEV4cHJlc3Npb247UmVhZE9ubHk7PjtsPFN0YXR1cztTdGF0dXM7U3RhdHVzO288Zj47Pj47Ozs7PjtAMDxwPGw8SGVhZGVyVGV4dDtEYXRhRmllbGQ7U29ydEV4cHJlc3Npb247UmVhZE9ubHk7PjtsPFRyYWZmaWM7VHJhZmZpYztUcmFmZmljO288Zj47Pj47Ozs7PjtAMDxwPGw8SGVhZGVyVGV4dDtEYXRhRmllbGQ7U29ydEV4cHJlc3Npb247UmVhZE9ubHk7PjtsPEJMTk87QkxOTztCTE5PO288Zj47Pj47Ozs7PjtAMDxwPGw8SGVhZGVyVGV4dDtEYXRhRmllbGQ7U29ydEV4cHJlc3Npb247UmVhZE9ubHk7PjtsPFVOQkwgTk9XO1VOQkwgTk9XO1VOQkwgTk9XO288Zj47Pj47Ozs7Pjs+Oz47Oz47dDxwPHA8bDxUZXh0Oz47bDxcZTs+Pjs+Ozs+O3Q8cDxwPGw8VGV4dDs+O2w8YWJjZDEyMzQ1NjcgTm8gcmVjb3JkIGZpbmQhOz4+Oz47Oz47Pj47Pj47PuDQIHAprWNHZQ7CKTgMyGDL0ylW" \/>';
    html += '<input type="hidden" name="TextBox1" value="' + num + '" id="TextBox1" \/>';
    html += '<input type="hidden" name="Button1" value="Query" id="Button1" \/>';
    html += '<\/form>';
    $("#trackData").html(html);
    openTracking("about:blank");
    $("#frm-tslines").submit();
}

function trackZim(num, type) {
    var url = "http://www.zim.com/Tracing.aspx?hidSearchType=2&hidFromHomePage=true&hidSearch=true&id=166&l=4&textContainerNumber=" + (type == "CN" ? num : "") + "&textBLNumber=" + (type == "BL" ? num : "") + "&textBRNumber=";
    openTracking(url);
}

function trackHapaglloyd(num, type) {
    if (type == "BL") {
       alert("Invalid container number!");
       return;
    }
    var url = "https://www.hapag-lloyd.com/en/tracing/by_container.html?container=";
    url += num.substr(0, 4) + "++" + num.substr(4);
    openTracking(url);
}

function trackSafmarine(num, type) {
    var url = "http://mysaf2.safmarine.com/wps/portal/Safmarine/etrackUnregistered?linktype=unreg&queryorigin=Header&queryoriginauto=HeaderNonSecure&searchType=" + (type == "BL" ? "Document" : "Container") + "&searchNumberString=" + num;
    openTracking(url);
}

function trackCosco(num, type) {
    var html = "";
    html += '<form id="frm-cosco" target="trackWnd" name="CargoTrackByContForm" method="post" action="http://www.coscon.com/ebusiness/service/cargo/trackby' + (type == "BL" ? 'bl' : 'cont') + '.do;WEBLOGIC_NASESSIONID=Po1Sw6r2NcypOKhDQ6it0gMnMYNoSTNEleskUFp22lsVW5WAnDET!-969140699">';
    html += '<input type="hidden" name="locale" value="en" \/>';
    if (type == "BL") {
        html += '<input type="text" name="blNum" value="' + num + '" \/>';
        html += '<input type="hidden" name="type" value="bycont" \/>';
    } else {
        html += '<input type="text" name="cont" value="' + num + '" \/>';
        html += '<input type="hidden" name="type" value="bybl" \/>';
    }
    html += '<\/form>';
    $("#trackData").html(html);
    openTracking("about:blank");
    $("#frm-cosco").submit();
}