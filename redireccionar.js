function redireccionar(url){
    var a=document.createElement("a");
    a.target="_blank";
    a.href=url;
    a.click();
}
var url="https://www.facebook.com/TKDconcordia/?epa=SEARCH_BOX";
window.onload=function () {
    redireccionar(url);

};