function CerrarRecomendacion(){
    document.getElementById('h1').style.display='block';
    document.getElementById('h1').style.display='flex';
}
function RehacerRecomendacion(){
    document.getElementById('h1').style.display="none";
}
function RecomendacionHecha(){
    document.getElementById('cerrar_r').style.display="none";
    document.getElementById('btn_hechoc').style.display="none";
    document.getElementById('palomita_c').style.display="block";
}
function CerrarRecomendacion2(){
    document.getElementById('h2').style.display='block';
    document.getElementById('h2').style.display='flex';
}
function RehacerRecomendacion2(){
    document.getElementById('h2').style.display="none";
}
function RecomendacionHecha2(){
    document.getElementById('cerrar_r2').style.display="none";
    document.getElementById('btn_hechoc2').style.display="none";
    document.getElementById('palomita_c2').style.display="block";
}
function CerrarRecomendacion3(){
    document.getElementById('h3').style.display='block';
    document.getElementById('h3').style.display='flex';
}
function RehacerRecomendacion3(){
    document.getElementById('h3').style.display="none";
}
function RecomendacionHecha3(){
    document.getElementById('cerrar_r3').style.display="none";
    document.getElementById('btn_hechoc3').style.display="none";
    document.getElementById('palomita_c3').style.display="block";
}

document.getElementById('num1').addEventListener("mouseover",Resaltar1);
document.getElementById('num1').addEventListener("mouseover",Resaltar2);
document.getElementById('num1').addEventListener("mouseover",Resaltar3);
document.getElementById('num1').addEventListener("mouseover",Resaltar4);

function Resaltar1(){
    ene=document.getElementById('num1');
    ene.style.border=' 3px solid black';
}