function redireccionar(url){
    var a=document.createElement("a");
    a.target="_blank";
    a.href=url;
    a.click();
}
var url="https://www.protec-mexico.com/";
window.onload=function () {
    redireccionar(url);

};