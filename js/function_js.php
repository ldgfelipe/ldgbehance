<script type="text/javascript">
	

var Base64={_keyStr:"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",encode:function(e){var t="";var n,r,i,s,o,u,a;var f=0;e=Base64._utf8_encode(e);while(f<e.length){n=e.charCodeAt(f++);r=e.charCodeAt(f++);i=e.charCodeAt(f++);s=n>>2;o=(n&3)<<4|r>>4;u=(r&15)<<2|i>>6;a=i&63;if(isNaN(r)){u=a=64}else if(isNaN(i)){a=64}t=t+this._keyStr.charAt(s)+this._keyStr.charAt(o)+this._keyStr.charAt(u)+this._keyStr.charAt(a)}return t},decode:function(e){var t="";var n,r,i;var s,o,u,a;var f=0;e=e.replace(/[^A-Za-z0-9+/=]/g,"");while(f<e.length){s=this._keyStr.indexOf(e.charAt(f++));o=this._keyStr.indexOf(e.charAt(f++));u=this._keyStr.indexOf(e.charAt(f++));a=this._keyStr.indexOf(e.charAt(f++));n=s<<2|o>>4;r=(o&15)<<4|u>>2;i=(u&3)<<6|a;t=t+String.fromCharCode(n);if(u!=64){t=t+String.fromCharCode(r)}if(a!=64){t=t+String.fromCharCode(i)}}t=Base64._utf8_decode(t);return t},_utf8_encode:function(e){e=e.replace(/rn/g,"n");var t="";for(var n=0;n<e.length;n++){var r=e.charCodeAt(n);if(r<128){t+=String.fromCharCode(r)}else if(r>127&&r<2048){t+=String.fromCharCode(r>>6|192);t+=String.fromCharCode(r&63|128)}else{t+=String.fromCharCode(r>>12|224);t+=String.fromCharCode(r>>6&63|128);t+=String.fromCharCode(r&63|128)}}return t},_utf8_decode:function(e){var t="";var n=0;var r=c1=c2=0;while(n<e.length){r=e.charCodeAt(n);if(r<128){t+=String.fromCharCode(r);n++}else if(r>191&&r<224){c2=e.charCodeAt(n+1);t+=String.fromCharCode((r&31)<<6|c2&63);n+=2}else{c2=e.charCodeAt(n+1);c3=e.charCodeAt(n+2);t+=String.fromCharCode((r&15)<<12|(c2&63)<<6|c3&63);n+=3}}return t}};

function query(a,q,r){
var datos=Base64.encode(q);
$.ajax({
type:'POST',
url:'servlet.php',
data:{ac:a,post:datos},
beforeSend:function(){
$(r).html('<center><img src="path/loader/loading.gif" width="250" /></center>');
}
}).done(function(e){
$(r).html(e);
});
}


function nav(p,request){

q=p+"|"+request;

query('nav',q,'#loaderNav');

}


function menuMinFn(){


if($('#menuGra').css('display')=='none'){
$('#menuGra').css('display','block');
$('#menuMin').css('display','none');
}else{
$('#menuGra').css('display','none');
$('#menuMin').css('display','block');

}


}

function inises(ma,tp,re,r){



$.ajax({

type:'POST',
url:'servlet.php',
data:{ac:'inises',usdata:ma,tpreg:tp,ref:r},
beforeSend:function(){

	$('#'+re).html('validando inicio');

}
}).done(function(e){

$('#'+re).html(e);

});

	
}




function abrecierra(p){

$(p).toggle('slow');

}


function sendsubmit(p){

$("#"+p).submit();

}






function decim(r){
var dec;
var sep;
var sente;

var cadena=String(r);
sep=cadena.split('.');

dec=sep[0];
sent=sep[1].slice(0,-1);

return dec+"."+sent;

}



function trackList(action,user,id_arch,ul,po,tk,iem){

$.ajax({
	type:'POST',
	url:'servlet.php',
	data:{ac:'trackServer',user_id:user,accion:action,id_archivo:id_arch,url:ul,post:po,tokenv:tk,id_empresa:iem},
	beforeSend:function(){
		
	}
}).done(function(e){

console.log('track'+action+' from: '+user+' R='+e);

});



}




function CargaEstadisitcas(){


$.ajax({
type:'POST',
url:'servlet.php',
data:{ac:'staticRest',id_empresa:$('#empresaEtatic').val(),fecha1:$('#fecha1').val(),fecha2:$('#fecha2').val()},
beforeSend:function(){

$('#resEstatics').html('<center><img src="path/loader/loading.gif" width="250" /></center>');

}

}).done(function(e){


$('#resEstatics').html(e);


});






}


function loadChatServer(emi,rec){


$('#em').val(emi);
$('#rec').val(rec)

$.ajax({type:'post',url:'servlet.php',data:{ac:'loadchat',em:emi,re:rec},beforeSend:function(){

//$('#mensajes').html('<center><img src="path/loader/loading.gif" width="150"  /></center>');
}
}).done(function(e){

$('#mensajes').html(e);

setTimeout('loadChatServer('+emi+','+rec+')',11000);



});
}


function sendmensaje(){

if($('#mensaje').val().length>0){
$.ajax({type:'post',url:'servlet.php',data:{ac:'saveMensaje',em:$('#em').val(),re:$('#rec').val(),mensaje:$('#mensaje').val()},beforeSend:function(){
$('#mensajes').html('<center><img src="path/loader/loading.gif" width="150"  /></center>');
}
}).done(function(e){
$('#mensajes').html(e);
	$('#mensaje').attr('');
	$('#mensaje').val('');
	loadChatServer($('#em').val(),$('#rec').val());




});	
}else{
	$('#mensaje').attr('placeholder','Ingresa un mensaje');
}
}




Notification.requestPermission();

function NotificacionesFuncion(t,s,m,l,i){

var imagen="";

if(i.length>0){
imagen=i;

}else{

imagen='https://www.obsoletos.com.mx/path/logos/logo_obsoletos_400x211.png';
}



var notification = new Notification(t,{

	icon:imagen,
	body:m
});




if(l.length>0){
notification.onclick = function(){
 window.open(l);
}
}
}



function notificenter(){
$.ajax({type:'post',url:'notificaciones.php',data:{id_user:'<?php echo $_SESSION['id_user']; ?>'}}).done(function(e){
var notifer="";

if(e.length>0){


notifer=e.split('└');

for(var g=0;g<notifer.length;g++){
var noti="";	
noti=notifer[g].split("|");
if(noti[0].length>0){

NotificacionesFuncion(noti[0],noti[1],noti[2],noti[3],noti[4]);

}
}
}
setTimeout('notificenter()',50000);








});

}



$(document).ready(function(){

notificenter();

});



function FormatoMoneda(p){

p=p.toString();

var costo1,costo2,separado,cant1,precio;
costo1="";
costo2="";
separado="";
cant1=""; 
precio="";

separador=p.split(".");
cant1=separador[0].length;


switch(cant1){
case 12:
precio+=separador[0].substr(0,3);
precio+=",";
precio+=separador[0].substr(3,3);
precio+=",";
precio+=separador[0].substr(6,3);
precio+=",";
precio+=separador[0].substr(9,3);


if(separador[1]!=null){
	precio+=".";
precio+=separador[1].substr(0,2);
}

break;	


case 11:
precio+=separador[0].substr(0,2);
precio+=",";
precio+=separador[0].substr(2,3);
precio+=",";
precio+=separador[0].substr(5,3);
precio+=",";
precio+=separador[0].substr(8,3);
if(separador[1]!=null){
	precio+=".";
precio+=separador[1].substr(0,2);
}
break;	


case 10:
precio+=separador[0].substr(0,1);
precio+=",";
precio+=separador[0].substr(1,3);
precio+=",";
precio+=separador[0].substr(4,3);
precio+=",";
precio+=separador[0].substr(7,3);
if(separador[1]!=null){
	precio+=".";
precio+=separador[1].substr(0,2);
}
break;	


case 9:
precio+=separador[0].substr(0,3);
precio+=",";
precio+=separador[0].substr(3,3);
precio+=",";
precio+=separador[0].substr(6,3);
if(separador[1]!=null){
	precio+=".";
precio+=separador[1].substr(0,2);
}
break;	


case 8:
precio+=separador[0].substr(0,2);
precio+=",";
precio+=separador[0].substr(2,3);
precio+=",";
precio+=separador[0].substr(5,3);
if(separador[1]!=null){
	precio+=".";
precio+=separador[1].substr(0,2);
}
break;	


case 7:
precio+=separador[0].substr(0,1);
precio+=",";
precio+=separador[0].substr(1,3);
precio+=",";
precio+=separador[0].substr(4,3);
if(separador[1]!=null){
	precio+=".";
precio+=separador[1].substr(0,2);
}
break;	

case 6:
precio+=separador[0].substr(0,3);
precio+=",";
precio+=separador[0].substr(3,3);
if(separador[1]!=null){
	precio+=".";
precio+=separador[1].substr(0,2);
}
break;

case 5:
precio+=separador[0].substr(0,2);
precio+=",";
precio+=separador[0].substr(2,3);
if(separador[1]!=null){
	precio+=".";
precio+=separador[1].substr(0,2);
}
break;


case 4:
precio+=separador[0].substr(0,1);
precio+=",";
precio+=separador[0].substr(1,3);
if(separador[1]!=null){
	precio+=".";
precio+=separador[1].substr(0,2);
}
break;

case 3:

precio+=separador[0].substr(0,3);
if(separador[1]!=null){
	precio+=".";
precio+=separador[1].substr(0,2);
}
break;

case 2:
precio+=separador[0].substr(0,2);
if(separador[1]!=null){
	precio+=".";
precio+=separador[1].substr(0,2);
}
break;

}


return precio;

}

	


function registroVisita(p,id){


$.ajax({

type:'POST',
url:'servlet.php',
data:{ac:'notificacionesEscritorio',idn:p},
beforeSend:function(){
$('#'+id).html('<img src="path/loader/loading.gif" width="10" />');

}

}).done(function(e){
$('#'+id).html('√');

});

}


function AbreMarcas(p){

$('#'+p).css("height","auto");

}




function evalmail(){


$.ajax({
type:'POST',
url:'servlet.php',
data:{ac:'evalMail',correo:$('#correo_news').val()},
beforeSend:function(){
$('#evalmail').html('<img src="path/loader/loading.gif" width="20" />')

}}).done(function(e){
if(e=="1"){

	$('#evalmail').html('<div style="position:relative; text-align:center; border-radius:25px; background-color:green; color:#fff;  width:25px; height:25px;">√</div>')

	
}else{

	$('#evalmail').html('<div style="position:relative;  text-align:center; border-radius:25px; background-color:red; color:#fff;  width:25px; height:25px;">x</div>')
}


});


}

function abrirCompartir(){

var esp=$("#espCompartir");

var pos=esp.css("right");

if(pos=='0px'){

esp.css("right","-180px");

}else{


esp.css("right","0px");

}

}



function sharingRed(p){
var url;



switch(p){
case 'facebook':

url="https://www.facebook.com/sharer/sharer.php?u=https://www.obsoletos.com.mx/<?php echo $fobsredes->urlAmigable; ?>&amp;src=sdkpreparse";
window.open(url,"MsgWindow", "width=550,height=200");

break;
case 'twitter':

url="http://twitter.com/home?status=<?php echo urlencode("Los mejores productos Obsoletos ".$fobsredes->nomlista." https://www.obsoletos.com.mx/".$fobsredes->urlAmigable." https://www.obsoletos.com.mx/".$fobsredes->carpeta."/".$fobsredes->nimg); ?>";


window.open(url,"MsgWindow", "width=550,height=200");

break;
case 'pinterest':

url="https://es.pinterest.com/pin/create/button/?url=https://www.obsoletos.com.mx/<?php echo $fobsredes->urlAmigable; ?>&media=https://www.obsoletos.com.mx/<?php echo $fobsredes->carpeta."/".$fobsredes->nimg; ?>&description=<?php echo $fobsredes->nomlista; ?>";
window.open(url,"MsgWindow", "width=550,height=200");

break;
case 'linkedin':

url="https://www.linkedin.com/cws/share?url=https://www.obsoletos.com.mx/<?php echo $fobsredes->urlAmigable; ?>&token=&isFramed=false&lang=es_ES&xd_origin_host=https%3A%2F%2Fwww.obsoletos.com.mx";
window.open(url,"MsgWindow", "width=550,height=200");

break;
case 'googlemas':

url="https://plus.google.com/share?app=110&url=https%3A%2F%2Fwww.obsoletos.com.mx%2<?php echo $fobsredes->urlAmigable; ?>";
window.open(url,"MsgWindow", "width=550,height=200"	);

break;

}


}




function mininews(){

if($('#miniBtnNews').css('left')=='0px'){

$('#miniBtnNews').animate({'left':'-153px'},500);


}else{

	$('#miniBtnNews').animate({'left':'0px'},500);
}



}


setTimeout("mininews()",8000);

function acNewsletter(){

abrecierra('#newsletter');

}


function enviarMensaje(){


var nom=$('#nombre').val();
var corr=$('#correoCom').val();
var tele=$('#telefono').val();
var mens=$('#mensaje').val();


var correoVen=$('#correoVendedor').val();
var nomlista=$('#nombreLote').val();

if(nom.length>0){
if(corr.length>0){
if(mens.length>0){


$.ajax({
type:'POST',
url:'servlet.php',
data:{ac:'mensaje-instantaneo',nombre:nom,correo:corr,telefono:tele,mensaje:mens,correoVendedor:correoVen,lote:nomlista},
beforeSend:function(){

	$('#respInstat').html('<div class="alert alert-warning">Enviando...</div>');
}
}).done(function(e){
$('#respInstat').html(e);
});

}else{

$('#respInstat').html('<div class="alert alert-danger">Ingresa la pregunta al vendedor</div>');

}



}else{

$('#respInstat').html('<div class="alert alert-danger">Necesitas tu correo electronico</div>');

}


}else{

$('#respInstat').html('<div class="alert alert-danger">Necesitas ingresar tu nombre</div>');

}
}


</script>