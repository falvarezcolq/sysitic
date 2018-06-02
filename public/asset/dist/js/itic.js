function getAbsolutePath() {
    var loc = window.location;
    var pathname= loc.pathname;
    return loc.href.substring(0,loc.href.length-pathname.length+1);   
}

var baseURL= getAbsolutePath();
