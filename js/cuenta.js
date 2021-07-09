//CUENTA REGRESIVA
    var diaEvento = new Date('09/18/2020 9:30 AM');

    var _segundo = 1000;
    var _minuto = _segundo * 60;
    var _hora = _minuto * 60;
    var _dia = _hora * 24;
    var tiempo;
    
    function showRemaining() {
        var diaActual = new Date();
        var distancia = diaEvento - diaActual;
        if (distancia < 0) {
            clearInterval(tiempo);
            document.getElementById('cuentaRegresiva').innerHTML = 'EXPIRED!';
    
            return;
        }
        var dias = Math.floor(distancia / _dia);
        var horas = Math.floor((distancia % _dia) / _hora);
        var minutos = Math.floor((distancia % _hora) / _minuto);
        var segundos = Math.floor((distancia % _minuto) / _segundo);
    
        document.getElementById('cuentaRegresiva').innerHTML = dias + ':';
        document.getElementById('cuentaRegresiva').innerHTML += horas + ':';
        document.getElementById('cuentaRegresiva').innerHTML += minutos + ':';
        document.getElementById('cuentaRegresiva').innerHTML += segundos;
    }
    
    tiempo = setInterval(showRemaining, 1000);


    //OCULTAR Y MOSTRAR FORMULARIOS
    //proyectos
    function mostrarp(){
        document.getElementById('formularios-p').style.display="block";
    }
    function ocultarp(){
        document.getElementById('formularios-p').style.display="none";
    }

    //jurado
    function mostrarj(){
        document.getElementById('formularios-j').style.display="block";
    }
    function ocultarj(){
        document.getElementById('formularios-j').style.display="none";
    }

    //poster
    function mostrarpo(){
        document.getElementById('formularios-po').style.display="block";
    }
    function ocultarpo(){
        document.getElementById('formularios-po').style.display="none";
    }

    //publico
    function mostrarpu(){
        document.getElementById('formularios-pu').style.display="block";
    }
    function ocultarpu(){
        document.getElementById('formularios-pu').style.display="none";
    }
