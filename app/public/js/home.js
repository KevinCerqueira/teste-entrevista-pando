var cores = new Array( [62,35,255], [60,255,60], [255,35,98], [45,175,230], [255,0,255], [255,128,0] ),
    indices = [0,1,2,3],
    i = 0,
    fator_anima = 0.002,
    veloc_anima = 10;

function atualiza(){
  var c0_0 = cores[indices[0]],
      c0_1 = cores[indices[1]],
      c1_0 = cores[indices[2]],
      c1_1 = cores[indices[3]];

  var passo = 1 - i,
    r1 = Math.round(passo * c0_0[0] + i * c0_1[0]),
    g1 = Math.round(passo * c0_0[1] + i * c0_1[1]),
    b1 = Math.round(passo * c0_0[2] + i * c0_1[2]),
    r2 = Math.round(passo * c1_0[0] + i * c1_1[0]),
    g2 = Math.round(passo * c1_0[1] + i * c1_1[1]),
    b2 = Math.round(passo * c1_0[2] + i * c1_1[2]),
    color1 = "rgb("+r1+","+g1+","+b1+")",
    color2 = "rgb("+r2+","+g2+","+b2+")";

$('body').css({
  background: "-webkit-gradient(linear, left top, right top, from("+color1+"), to("+color2+"))"
}).css({
  background: "-moz-linear-gradient(left, "+color1+" 0%, "+color2+" 100%)"
});

// $('.btns-menu').mousemove(function() {
//     $(this).css({
//         background: "-webkit-gradient(linear, left top, right top, from("+color1+"), to("+color2+"))"
//       }).css({
//         background: "-moz-linear-gradient(left, "+color1+" 0%, "+color2+" 100%)"
//       });
//     $('.btns-menu[a]').css({color: '#FFF'});
// });

 i += fator_anima;

 if(i >= 1){
    i %= 1;
    indices[0] = indices[1];
    indices[2] = indices[3];

    indices[1] = (indices[1] + Math.floor( 1 + Math.random() * (cores.length - 1))) % cores.length;
    indices[3] = (indices[3] + Math.floor( 1 + Math.random() * (cores.length - 1))) % cores.length;
  }
}

setInterval(atualiza,veloc_anima);
