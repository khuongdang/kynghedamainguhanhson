//function swf(src, w, h) {
//    var html = '';
//    html += '<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="' + w + '" height="' + h + '" id="main" align="middle">';
//    html += '<param name="allowScriptAccess" value="sameDomain">';
//    html += '<param name="movie" value="' + src + '">';
//    html += '<param name="quality" value="high">';
//    html += '<param name="salign" value="l">';
//    html += '<param name="wmode" value="transparent">';
//    html += '<param name="bgcolor" value="#ffffff">';
//    html += '<embed wmode="transparent" src="' + src + '" quality="high" salign="l" bgcolor="#ffffff" width="' + w + '" height="' + h + '" name="main" align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer">';
//    html += '</object>';
//    document.write(html);
//}

function swf(src, w, h) {
    var html = '';
    //html = '<embed height="' + h + '" width="' + w + '" flashvars="" allowscriptaccess="always" wmode="transparent" quality="high" name="Advertisement" id="Advertisement" style="undefined" src="' + src + '" type="application/x-shockwave-flash">';
    html = '<embed height="' + h + '" width="' + w + '" align="middle" quality="high" wmode="transparent" allowscriptaccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" alt="" src="' + src + '">';
    document.write(html);
}

function menuswf(src, w, h) {
    var html = '';
    html += '<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="' + w + '" height="' + h + '" id="product" align="middle">';
    html += '<param name="allowScriptAccess" value="sameDomain">';
    html += '<param name="movie" value="' + src + '">';
    html += '<param name="quality" value="high">';
    html += '<param name="salign" value="l">';
    html += '<param name="wmode" value="transparent">';
    html += '<param name="bgcolor" value="#ffffff">';
    html += '<embed src="' + src + '" quality="high" salign="l" bgcolor="#ffffff" width="' + w + '" height="' + h + '" name="product" align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer">';
    html += '</object>';
    document.write(html);
}