// -----------------------------------------------------------------------------------
// http://wowslider.com/
// JavaScript Wow Slider is a free software that helps you easily generate delicious 
// slideshows with gorgeous transition effects, in a few clicks without writing a single line of code.
// Generated by WOW Slider 8.8
//
//***********************************************
// Obfuscated by Javascript Obfuscator
// http://javascript-source.com
//***********************************************
jQuery.extend(jQuery.easing,{easeOutBack2:function(f,g,e,j,i){var h=(g/=i)*g;var a=h*g;return e+j*(5*a*h+-15*h*h+19*a+-14*h+6*g)},easeOutCubic:function(e,f,a,h,g){return h*((f=f/g-1)*f*f+1)+a},easeInCubic:function(e,f,a,h,g){return h*(f/=g)*f*f+a}});function ws_tv(m,i,b){var d=jQuery;var g=d(this);var k=m.noCanvas||!document.createElement("canvas").getContext;var j=m.width,e=m.height;var f=d("<div>").css({position:"absolute",top:0,left:0,width:"100%",height:"100%",overflow:"hidden"}).addClass("ws_effect ws_tv").appendTo(b);if(!k){var c=d("<canvas>").css({position:"absolute",left:0,top:0,width:"100%",height:"100%"}).appendTo(f);var l=c.get(0).getContext("2d")}function a(n,h,o){return n+(h-n)*o}this.go=function(h,o){if(k){b.find(".ws_list").css("transform","translate3d(0,0,0)").stop(true).animate({left:(h?-h+"00%":(/Safari/.test(navigator.userAgent)?"0%":0))},m.duration,"easeInOutExpo",function(){g.trigger("effectEnd")})}else{j=b.width();e=b.height();c.attr({width:j,height:e});var n=d(i.get(h)).clone().css({opacity:0,zIndex:2,maxHeight:"none"}).appendTo(f);wowAnimate(function(p){l.clearRect(0,0,j,e);var r=j;if(p>=0.95){r*=1-(p-0.95)/(1-0.95)}l.fillStyle="#111";l.fillRect(0,0,j,e);var q=l.createLinearGradient(0,p*e/2,0,e-p*e/2);q.addColorStop(0,"#111");q.addColorStop(a(0,0.5,p),"#fff");q.addColorStop(0.5,"#fff");q.addColorStop(a(1,0.5,p),"#fff");q.addColorStop(1,"#111");l.fillStyle=q;l.fillRect((j-r)/2,p*e/2,r,e*(1-p))},0,1,m.duration*0.3,"easeOutCubic",function(){wowAnimate(n,{scale:[0.9,0],opacity:0.5},{scale:[1,1],opacity:1},m.duration*0.3,m.duration*0.4,"easeOutBack2",function(){b.find(".ws_list").css({left:(h?-h+"00%":(/Safari/.test(navigator.userAgent)?"0%":0))});g.trigger("effectEnd");setTimeout(function(){l.fillStyle="#111";l.clearRect(0,0,j,e);n.remove()},1)})})}}};// -----------------------------------------------------------------------------------
// http://wowslider.com/
// JavaScript Wow Slider is a free software that helps you easily generate delicious 
// slideshows with gorgeous transition effects, in a few clicks without writing a single line of code.
// Generated by WOW Slider 8.8
//
//***********************************************
// Obfuscated by Javascript Obfuscator
// http://javascript-source.com
//***********************************************
function ws_cube(p,k,b){var e=jQuery,j=e(this),a=/WOW Slider/g.test(navigator.userAgent),l=!(/iPhone|iPod|iPad|Android|BlackBerry/).test(navigator.userAgent)&&!a,g=e(".ws_list",b),c=p.perspective||2000,d={position:"absolute",backgroundSize:"cover",left:0,top:0,width:"100%",height:"100%",backfaceVisibility:"hidden"};var o={domPrefixes:" Webkit Moz ms O Khtml".split(" "),testDom:function(r){var q=this.domPrefixes.length;while(q--){if(typeof document.body.style[this.domPrefixes[q]+r]!=="undefined"){return true}}return false},cssTransitions:function(){return this.testDom("Transition")},cssTransforms3d:function(){var r=(typeof document.body.style.perspectiveProperty!=="undefined")||this.testDom("Perspective");if(r&&/AppleWebKit/.test(navigator.userAgent)){var t=document.createElement("div"),q=document.createElement("style"),s="Test3d"+Math.round(Math.random()*99999);q.textContent="@media (-webkit-transform-3d){#"+s+"{height:3px}}";document.getElementsByTagName("head")[0].appendChild(q);t.id=s;document.body.appendChild(t);r=t.offsetHeight===3;q.parentNode.removeChild(q);t.parentNode.removeChild(t)}return r},webkit:function(){return/AppleWebKit/.test(navigator.userAgent)&&!/Chrome/.test(navigator.userAgent)}};var f=(o.cssTransitions()&&o.cssTransforms3d()),m=o.webkit();var i=e("<div>").css(d).css({transformStyle:"preserve-3d",perspective:(m&&!a?"none":c),zIndex:8});e("<div>").addClass("ws_effect ws_cube").css(d).append(i).appendTo(b);if(!f&&p.fallback){return new p.fallback(p,k,b)}function n(q,r,t,s){return"inset "+(-s*q*1.2/90)+"px "+(t*r*1.2/90)+"px "+(q+r)/20+"px rgba("+((t<s)?"0,0,0,.6":(t>s)?"255,255,255,0.8":"0,0,0,.0")+")"}var h;this.go=function(B,y){var t=e(k[y]);t={width:t.width(),height:t.height(),marginTop:parseFloat(t.css("marginTop")),marginLeft:parseFloat(t.css("marginLeft"))};function s(S,F,H,I,G,E,Q,R,P,O){S.parent().css("perspective",c);var N=S.width(),K=S.height();F.front.css({transform:"translate3d(0,0,0) rotateY(0deg) rotateX(0deg)"});F.back.css({opacity:1,transform:"translate3d(0,0,0) rotateY("+Q+"deg) rotateX("+E+"deg)"});if(l){var J=e("<div>").css(d).css("boxShadow",n(N,K,0,0)).appendTo(F.front);var M=e("<div>").css(d).css("boxShadow",n(N,K,E,Q)).appendTo(F.back)}if(m&&!/WOW Slider/g.test(navigator.userAgent)){S.css({transform:"translateZ(-"+H+"px)"})}var L=setTimeout(function(){var w="all "+p.duration+"ms cubic-bezier(0.645, 0.045, 0.355, 1.000)";F.front.css({transition:w,boxShadow:l?n(N,K,R,P):"",transform:"rotateX("+R+"deg) rotateY("+P+"deg)",zIndex:0});F.back.css({transition:w,boxShadow:l?n(N,K,0,0):"",transform:"rotateY(0deg) rotateX(0deg)",zIndex:20});if(l){J.css({transition:w,boxShadow:n(N,K,R,P)});M.css({transition:w,boxShadow:n(N,K,0,0)})}L=setTimeout(O,p.duration)},20);return{stop:function(){clearTimeout(L);O()}}}if(f){if(h){h.stop()}var C=b.width(),z=b.height();var x={left:[C/2,C/2,0,0,90,0,-90],right:[C/2,-C/2,0,0,-90,0,90],down:[z/2,0,-z/2,90,0,-90,0],up:[z/2,0,z/2,-90,0,90,0]}[p.direction||["left","right","down","up"][Math.floor(Math.random()*4)]];var D=e("<img>").css(t),v=e("<img>").css(t).attr("src",k.get(B).src);var q=e("<div>").css({overflow:"hidden",transformOrigin:"50% 50% -"+x[0]+"px",zIndex:20}).css(d).append(D).appendTo(i);var r=e("<div>").css({overflow:"hidden",transformOrigin:"50% 50% -"+x[0]+"px",zIndex:0}).css(d).append(v).appendTo(i);D.on("load",function(){g.hide()});D.attr("src",k.get(y).src).load();i.parent().show();h=new s(i,{front:q,back:r},x[0],x[1],x[2],x[3],x[4],x[5],x[6],function(){j.trigger("effectEnd");i.empty().parent().hide();h=0})}else{i.css({position:"absolute",display:"none",zIndex:2,width:"100%",height:"100%"});i.stop(1,1);var u=(!!((B-y+1)%k.length)^p.revers?"left":"right");var q=e("<div>").css({position:"absolute",left:"0%",right:"auto",top:0,width:"100%",height:"100%"}).css(u,0).append(e(k[y]).clone().css({width:100*t.width/b.width()+"%",height:100*t.height/b.height()+"%",marginLeft:100*t.marginLeft/b.width()+"%"})).appendTo(i);var A=e("<div>").css({position:"absolute",left:"100%",right:"auto",top:0,width:"0%",height:"100%"}).append(e(k[B]).clone().css({width:100*t.width/b.width()+"%",height:100*t.height/b.height()+"%",marginLeft:100*t.marginLeft/b.width()+"%"})).appendTo(i);i.css({left:"auto",right:"auto",top:0}).css(u,0).show();i.show();g.hide();A.animate({width:"100%",left:0},p.duration,"easeInOutExpo",function(){e(this).remove()});q.animate({width:0},p.duration,"easeInOutExpo",function(){j.trigger("effectEnd");i.empty().hide()})}}};// -----------------------------------------------------------------------------------
// http://wowslider.com/
// JavaScript Wow Slider is a free software that helps you easily generate delicious 
// slideshows with gorgeous transition effects, in a few clicks without writing a single line of code.
// Generated by WOW Slider 8.8
//
//***********************************************
// Obfuscated by Javascript Obfuscator
// http://javascript-source.com
//***********************************************
function ws_blur(r,p,c){var h=jQuery;var o=h(this);var n=h("<div>").addClass("ws_effect ws_blur").css({position:"absolute",overflow:"hidden",top:0,left:0,width:"100%",height:"100%"}).appendTo(c);var b=!r.noCanvas&&!window.opera&&!!document.createElement("canvas").getContext;if(b){try{document.createElement("canvas").getContext("2d").getImageData(0,0,1,1)}catch(m){b=0}}var d;function k(s,e,t){wowAnimate(s.css({visibility:"visible"}),{opacity:0},{opacity:1},e,t)}function i(s,e,t){wowAnimate(s,{opacity:1},{opacity:0},e,t)}var l;this.go=function(e,s){if(l){return -1}l=1;var w=h(p.get(s)),u=h(p.get(e)),x={width:w.width(),height:w.height(),marginTop:w.css("marginTop"),marginLeft:w.css("marginLeft")};var v;if(b){if(!d){d='<canvas width="'+x.width+'" height="'+x.height+'"/>';d=h(d+d).css({"z-index":8,position:"absolute",left:0,top:0,visibility:"hidden"}).appendTo(n)}d.css(x).attr({width:x.width,height:x.height});v=g(w,x,30,d.get(0))}if(b&&v){var t=g(u,x,30,d.get(1));k(v,r.duration/3,function(){c.find(".ws_list").css({visibility:"hidden"});i(v,r.duration/6);k(t,r.duration/6,function(){v.css({visibility:"hidden"});c.find(".ws_list").css({visibility:"visible"});o.trigger("effectEnd",{delay:r.duration/2});i(t,r.duration/2,function(){l=0})})})}else{b=0;v=g(w,x,8);v.fadeIn(r.duration/3,"linear",function(){o.trigger("effectEnd",{delay:r.duration/3});v.fadeOut(r.duration/3,"linear",function(){v.remove();l=0})})}};function g(z,v,w,s){var C=(parseInt(z.parent().css("z-index"))||0)+1;if(b){var F=s.getContext("2d");F.drawImage(z.get(0),0,0,v.width,v.height);if(!j(F,0,0,s.width,s.height,w)){return 0}return h(s)}var G=h("<div></div>").css({position:"absolute","z-index":C,left:0,top:0,display:"none"}).css(v).appendTo(n);var E=(Math.sqrt(5)+1)/2;var t=1-E/2;for(var u=0;t*u<w;u++){var A=Math.PI*E*u;var e=(t*u+1);var D=e*Math.cos(A);var B=e*Math.sin(A);h(document.createElement("img")).attr("src",z.attr("src")).css({opacity:1/(u/1.8+1),position:"absolute","z-index":C,left:Math.round(D)+"px",top:Math.round(B)+"px",width:"100%",height:"100%"}).appendTo(G)}return G}var q=[512,512,456,512,328,456,335,512,405,328,271,456,388,335,292,512,454,405,364,328,298,271,496,456,420,388,360,335,312,292,273,512,482,454,428,405,383,364,345,328,312,298,284,271,259,496,475,456,437,420,404,388,374,360,347,335,323,312,302,292,282,273,265,512,497,482,468,454,441,428,417,405,394,383,373,364,354,345,337,328,320,312,305,298,291,284,278,271,265,259,507,496,485,475,465,456,446,437,428,420,412,404,396,388,381,374,367,360,354,347,341,335,329,323,318,312,307,302,297,292,287,282,278,273,269,265,261,512,505,497,489,482,475,468,461,454,447,441,435,428,422,417,411,405,399,394,389,383,378,373,368,364,359,354,350,345,341,337,332,328,324,320,316,312,309,305,301,298,294,291,287,284,281,278,274,271,268,265,262,259,257,507,501,496,491,485,480,475,470,465,460,456,451,446,442,437,433,428,424,420,416,412,408,404,400,396,392,388,385,381,377,374,370,367,363,360,357,354,350,347,344,341,338,335,332,329,326,323,320,318,315,312,310,307,304,302,299,297,294,292,289,287,285,282,280,278,275,273,271,269,267,265,263,261,259];var a=[9,11,12,13,13,14,14,15,15,15,15,16,16,16,16,17,17,17,17,17,17,17,18,18,18,18,18,18,18,18,18,19,19,19,19,19,19,19,19,19,19,19,19,19,19,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,21,21,21,21,21,21,21,21,21,21,21,21,21,21,21,21,21,21,21,21,21,21,21,21,21,21,21,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24];function j(aj,R,P,s,t,aa){if(isNaN(aa)||aa<1){return}aa|=0;var ae;try{ae=aj.getImageData(R,P,s,t)}catch(ai){console.log("error:unable to access image data: "+ai);return false}var z=ae.data;var Y,X,ag,ad,G,J,D,v,w,O,E,Q,M,U,Z,H,C,I,K,T;var ah=aa+aa+1;var V=s<<2;var F=s-1;var ac=t-1;var B=aa+1;var ab=B*(B+1)/2;var S=new f();var N=S;for(ag=1;ag<ah;ag++){N=N.next=new f();if(ag==B){var A=N}}N.next=S;var af=null;var W=null;D=J=0;var L=q[aa];var u=a[aa];for(X=0;X<t;X++){U=Z=H=v=w=O=0;E=B*(C=z[J]);Q=B*(I=z[J+1]);M=B*(K=z[J+2]);v+=ab*C;w+=ab*I;O+=ab*K;N=S;for(ag=0;ag<B;ag++){N.r=C;N.g=I;N.b=K;N=N.next}for(ag=1;ag<B;ag++){ad=J+((F<ag?F:ag)<<2);v+=(N.r=(C=z[ad]))*(T=B-ag);w+=(N.g=(I=z[ad+1]))*T;O+=(N.b=(K=z[ad+2]))*T;U+=C;Z+=I;H+=K;N=N.next}af=S;W=A;for(Y=0;Y<s;Y++){z[J]=(v*L)>>u;z[J+1]=(w*L)>>u;z[J+2]=(O*L)>>u;v-=E;w-=Q;O-=M;E-=af.r;Q-=af.g;M-=af.b;ad=(D+((ad=Y+aa+1)<F?ad:F))<<2;U+=(af.r=z[ad]);Z+=(af.g=z[ad+1]);H+=(af.b=z[ad+2]);v+=U;w+=Z;O+=H;af=af.next;E+=(C=W.r);Q+=(I=W.g);M+=(K=W.b);U-=C;Z-=I;H-=K;W=W.next;J+=4}D+=s}for(Y=0;Y<s;Y++){Z=H=U=w=O=v=0;J=Y<<2;E=B*(C=z[J]);Q=B*(I=z[J+1]);M=B*(K=z[J+2]);v+=ab*C;w+=ab*I;O+=ab*K;N=S;for(ag=0;ag<B;ag++){N.r=C;N.g=I;N.b=K;N=N.next}G=s;for(ag=1;ag<=aa;ag++){J=(G+Y)<<2;v+=(N.r=(C=z[J]))*(T=B-ag);w+=(N.g=(I=z[J+1]))*T;O+=(N.b=(K=z[J+2]))*T;U+=C;Z+=I;H+=K;N=N.next;if(ag<ac){G+=s}}J=Y;af=S;W=A;for(X=0;X<t;X++){ad=J<<2;z[ad]=(v*L)>>u;z[ad+1]=(w*L)>>u;z[ad+2]=(O*L)>>u;v-=E;w-=Q;O-=M;E-=af.r;Q-=af.g;M-=af.b;ad=(Y+(((ad=X+B)<ac?ad:ac)*s))<<2;v+=(U+=(af.r=z[ad]));w+=(Z+=(af.g=z[ad+1]));O+=(H+=(af.b=z[ad+2]));af=af.next;E+=(C=W.r);Q+=(I=W.g);M+=(K=W.b);U-=C;Z-=I;H-=K;W=W.next;J+=s}}aj.putImageData(ae,R,P);return true}function f(){this.r=0;this.g=0;this.b=0;this.a=0;this.next=null}};// -----------------------------------------------------------------------------------
// http://wowslider.com/
// JavaScript Wow Slider is a free software that helps you easily generate delicious 
// slideshows with gorgeous transition effects, in a few clicks without writing a single line of code.
// Generated by WOW Slider 8.8
//
//***********************************************
// Obfuscated by Javascript Obfuscator
// http://javascript-source.com
//***********************************************
function ws_fly(c,a,b){var e=jQuery;var f=e(this);var h={position:"absolute",left:0,top:0,width:"100%",height:"100%",transform:"translate3d(0,0,0)"};var d=b.find(".ws_list");var g=e("<div>").addClass("ws_effect ws_fly").css(h).css({overflow:"visible"}).appendTo(b);this.go=function(p,m,l){if(l==undefined){l=!!c.revers}else{l=!l}var k=-(c.distance||g.width()/4),n=Math.min(-k,Math.max(0,e(window).width()-g.offset().left-g.width())),i=(l?n:k),q=(l?k:n);var j=e(a.get(m));j={width:j.width(),height:j.height()};var r=e("<div>").css(h).css({"z-index":1,overflow:"hidden"}).html(e(a.get(m)).clone().css(j)).appendTo(g);var o=e("<div>").css(h).css({"z-index":3,overflow:"hidden"}).html(e(a.get(p)).clone().css(j)).appendTo(g).show();wowAnimate(o,{opacity:0},{opacity:1},c.duration);wowAnimate(o,{left:i},{left:0},2*c.duration/3);d.hide();wowAnimate(r,{left:0,opacity:1},{left:q,opacity:0},2*c.duration/3,c.duration/3,function(){r.remove();f.trigger("effectEnd");o.remove()})}};// -----------------------------------------------------------------------------------
// http://wowslider.com/
// JavaScript Wow Slider is a free software that helps you easily generate delicious 
// slideshows with gorgeous transition effects, in a few clicks without writing a single line of code.
// Generated by WOW Slider 8.8
//
//***********************************************
// Obfuscated by Javascript Obfuscator
// http://javascript-source.com
//***********************************************
jQuery("#wowslider-container1").wowSlider({effect:"tv,cube,blur,fly",prev:"",next:"",duration:20*100,delay:20*100,width:680,height:460,autoPlay:true,autoPlayVideo:false,playPause:true,stopOnHover:false,loop:false,bullets:1,caption:true,captionEffect:"parallax",controls:true,controlsThumb:false,responsive:1,fullScreen:false,gestures:2,onBeforeStep:0,images:0});