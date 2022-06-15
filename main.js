var array = new Array();
var nivel = 0;
var puntoI = 0;  //posicion i
var puntoJ = 0;  //posicion j


var tablero1 = [[1, 0, 0, 0, 0, 0, 0, 0, 0, 0],[0, 0, 0, 0, 0, 0, 0, 0, 0, 0],[0, 0, 0, 0, 0, 0, 0, 0, 0, 0],[0, 0, 0, 0, 0, 0, 0, 0, 0, 0],[0, 0, 0, 0, 0, 0, 0, 0, 0, 0],[0, 0, 0, 0, 0, 0, 0, 0, 0, 0],[0, 0, 0, 0, 0, 0, 0, 0, 0, 0],[0, 0, 0, 0, 0, 0, 0, 0, 0, 0],[0, 0, 0, 0, 0, 0, 0, 0, 0, 0],[0, 0, 0, 0, 0, 0, 0, 0, 0, 2],
];

var tablero2 = [ [1, 0, 0, 0, 0, 3, 3, 3, 0, 0],[0, 0, 0, 0, 0, 3, 0, 0, 0, 0],[3, 3, 0, 0, 0, 0, 0, 3, 3, 3],[0, 3, 0, 0, 0, 0, 0, 0, 0, 0],[0, 0, 0, 0, 0, 0, 0, 0, 0, 3],[0, 0, 3, 3, 0, 0, 0, 0, 0, 3],[0, 0, 3, 0, 0, 0, 0, 0, 0, 3],[0, 0, 3, 0, 3, 0, 0, 0, 0, 0],[0, 0, 3, 0, 3, 0, 0, 0, 0, 0],[3, 3, 0, 0, 3, 3, 3, 0, 0, 2],
];

var tablero3 = [ [1, 0, 0, 3, 3, 3, 3, 3, 0, 0],[0, 0, 0, 0, 3, 0, 0, 3, 3, 3],[3, 3, 0, 0, 0, 0, 0, 0, 3, 0],[3, 0, 3, 0, 0, 0, 3, 0, 0, 0],[3, 0, 0, 0, 0, 0, 3, 3, 3, 0],[0, 3, 0, 0, 0, 0, 3, 0, 0, 0],[0, 3, 3, 0, 0, 3, 3, 0, 0, 3],[0, 0, 0, 0, 0, 3, 0, 0, 3, 3],[3, 3, 3, 0, 0, 3, 0, 3, 3, 0],[0, 0, 3, 0, 0, 0, 0, 0, 0, 2],
];

var tablero4 = [ [1, 0, 0, 0, 0, 3, 0, 3, 3, 3],[3, 3, 3, 3, 0, 3, 0, 3, 0, 3],[0, 0, 0, 3, 0, 0, 0, 3, 0, 0],[0, 0, 0, 3, 0, 0, 3, 3, 0, 0],[3, 3, 0, 0, 0, 0, 3, 0, 0, 3],[0, 3, 0, 0, 0, 0, 0, 3, 3, 3],[0, 0, 0, 3, 0, 0, 0, 0, 0, 3],[3, 0, 3, 3, 3, 0, 0, 0, 0, 0],[0, 0, 3, 0, 0, 0, 0, 0, 0, 3],[0, 0, 3, 0, 3, 3, 3, 0, 0, 2],
];

function movimientos() {
    var x = "";

    for (let i = 0; i < array.length; i++) {
        x += " >" + array[i] + "<br>";
    }
    document.getElementById("listaMovimiento").innerHTML = x;
}

function sleep(milisegundos) {
    const date = Date.now();
    let currentDate = null;
    do {
        currentDate = Date.now();
    } while (currentDate - date < milisegundos);
}

function ejecutar() {
    var tableroActual = [10][10];
    if (nivel == 0) {
        tableroActual = tablero1;
    }
    if (nivel == 1) {
        tableroActual = tablero2;
    }
    if (nivel == 2) {
        tableroActual = tablero3;
    }
    if (nivel == 3) {
        tableroActual = tablero4;
    }
    if (nivel == 4) {}

    correrRecursivo(tableroActual, 0);
}

function correrRecursivo(tableroActual, i) {

    if (i == array.length) {
        if (puntoI == 9 && puntoJ == 9) {
            alert("Yujuuu llegaste!! :D");
            siguienteNivel();
            array.splice(0, array.length);
            movimientos();
        } else {
            alert("Ups!! No llegaste, vamos de nuevo");
            setTimeout(reiniciar, 800);
            array.splice(0, array.length);
            movimientos();
        }
    } else {
        if (array[i] == "Derecha") {
            moverDerecha(tableroActual);
            setTimeout(correrRecursivo, 400, tableroActual, i + 1);
        }
        if (array[i] == "Izquierda") {
            moverIzquierda(tableroActual);
            setTimeout(correrRecursivo, 400, tableroActual, i + 1);
        }
        if (array[i] == "Arriba") {
            moverArriba(tableroActual);
            setTimeout(correrRecursivo, 400, tableroActual, i + 1);
        }
        if (array[i] == "Abajo") {
            moverAbajo(tableroActual);
            setTimeout(correrRecursivo, 400, tableroActual, i + 1);
        }
    }

}

function siguienteNivel() {
    nivel += 1;
    console.log(nivel)
    if(nivel == 4 && (puntoI == 9 && puntoJ == 9 )){
        setTimeout(redireccion, 500);
    }
    reiniciar();
}

function correr() {
    var tableroActual = [10][10];
    var centi = true;
    if (nivel == 0) {
        tableroActual = tablero1;
    }
    if (nivel == 1) {
        tableroActual = tablero2;
    }
    if (nivel == 2) {
        tableroActual = tablero3;
    }
    if (nivel == 3) {
        tableroActual = tablero4;
    }
    if (nivel == 4) {}

    for (let i = 0; i < array.length && centi == true; i++) {
        if (array[i] == "Derecha") {
            moverDerecha(tableroActual);
        }
        if (array[i] == "Izquierda") {
            moverIzquierda(tableroActual);
        }
        if (array[i] == "Arriba") {
            moverArriba(tableroActual);
        }
        if (array[i] == "Abajo") {
            moverAbajo(tableroActual);
        }
        sleep(800);
    }
    array.splice(0, array.length);
    movimientos();
}



function derecha() {
    array.push("Derecha");
    movimientos();
}

function izquierda() {
    array.push("Izquierda");
    movimientos();
}

function arriba() {
    array.push("Arriba");
    movimientos();
}

function abajo() {
    array.push("Abajo");
    movimientos();
}

function moverDerecha(tableroActual) {
    if (puntoI + 1 < tableroActual.length && puntoJ < tableroActual[0].length) {

        if (tableroActual[puntoI + 1][puntoJ] != 3) {
            if (puntoI == 9 && puntoJ == 9) {
                fill(255, 255, 234);
                rect((42 * i) + 10, (42 * j) + 10, 40, 40);
            } else {
                fill(150, 210, 110);
                rect((42 * puntoI) + 10, (42 * puntoJ) + 10, 40, 40);
            }
            puntoI += 1;
            console.log(1);

            fill(50, 200, 100);
            circle((42 * puntoI) + 30, (42 * puntoJ) + 30, 25);
           
            

        }
    } else {
        alert("Fuera del tablero");
        reiniciar();
    }
}

function moverIzquierda(tableroActual) {
    if (puntoI - 1 >= 0 && puntoJ < tableroActual[0].length) {
        if (tableroActual[puntoI - 1][puntoJ] != 3) {

            if (puntoI == 9 && puntoJ == 9) {
                fill(255, 255, 234);
                rect((42 * i) + 10, (42 * j) + 10, 40, 40);
            } else {
                fill(150, 210, 110);
                rect((42 * puntoI) + 10, (42 * puntoJ) + 10, 40, 40);
            }
            puntoI -= 1;
            console.log(1);

            fill(50, 200, 100);
            circle((42 * puntoI) + 30, (42 * puntoJ) + 30, 25);
        }
    } else {
        alert("Fuera del tablero");
        reiniciar();
    }
}

function moverArriba(tableroActual) {
    if (puntoI < tableroActual.length && puntoJ - 1 >= 0) {
        if (tableroActual[puntoI][puntoJ - 1] != 3) {

            if (puntoI == 9 && puntoJ == 9) {
                fill(255, 255, 234);
                rect((42 * i) + 10, (42 * j) + 10, 40, 40);
            } else {
                fill(150, 210, 110);
                rect((42 * puntoI) + 10, (42 * puntoJ) + 10, 40, 40);
            }
            puntoJ -= 1;
            console.log(1);

            fill(50, 200, 100);
            circle((42 * puntoI) + 30, (42 * puntoJ) + 30, 25);
        }
    } else {
        alert("Fuera del tablero");
        reiniciar();
    }
}

function moverAbajo(tableroActual) {
    if (puntoI < tableroActual.length && puntoJ + 1 < tableroActual[0].length) {
        if (tableroActual[puntoI][puntoJ + 1] != 3) {

            if (puntoI == 9 && puntoJ == 9) {
                fill(255, 255, 234);
                rect((42 * i) + 10, (42 * j) + 10, 40, 40);
            } else {
                fill(150, 210, 110);
                rect((42 * puntoI) + 10, (42 * puntoJ) + 10, 40, 40);
            }
            puntoJ += 1;
            console.log(1);

            fill(50, 200, 100);
            circle((42 * puntoI) + 30, (42 * puntoJ) + 30, 25);
        }
    } else {
        alert("Fuera del tablero");
        reiniciar();
    }
}


function reiniciar() {
    var tableroActual;
    if (nivel == 0) {
        tableroActual = tablero1;
    }
    if (nivel == 1) {
        tableroActual = tablero2;
    }
    if (nivel == 2) {
        tableroActual = tablero3;
    }
    if (nivel == 3) {
        tableroActual = tablero4;
    }
    if (nivel == 4) {}

    puntoI = 0;
    puntoJ = 0;

    for (let i = 0; i < tableroActual.length; i++) {
        for (let j = 0; j < tableroActual[0].length; j++) {
            if (tableroActual[i][j] == 0) {
                fill(255, 255, 234);
                rect((42 * i) + 10, (42 * j) + 10, 40, 40);
            } else {
                if (tableroActual[i][j] == 1) {
                    fill(255, 255, 234);
                    rect((42 * i) + 10, (42 * j) + 10, 40, 40);
                    fill(50, 200, 100);
                    circle((42 * i) + 30, (42 * j) + 30, 25);
                } else {
                    if (tableroActual[i][j] == 2) {
                        rect((42 * i) + 10, (42 * j) + 10, 40, 40);
                        fill(127, 127, 234);
                        rect((42 * i) + 10, (42 * j) + 10, 40, 40);
                        fill(122, 127, 234);
                        rect((42 * i) + 20, (42 * j) + 20, 20);
                    } else {
                        fill('#C6B28D');
                        rect((42 * i) + 10, (42 * j) + 10, 40, 40);
                    }
                }
            }
        }
    }
}


function setup() {
    createCanvas(500, 450);
    fill(255, 255, 234);
    stroke(100, 100, 120);

    for (let i = 0; i < tablero1.length; i++) {
        for (let j = 0; j < tablero1[0].length; j++) {
            if (tablero1[j][i] == 0) {
                fill(255, 255, 234);
                rect((42 * i) + 10, (42 * j) + 10, 40, 40);
            } else {
                if (tablero1[j][i] == 1) {
                    fill(255, 255, 234);
                    rect((42 * i) + 10, (42 * j) + 10, 40, 40);
                    fill(50, 200, 100);
                    circle((42 * i) + 30, (42 * j) + 30, 25);
                    
                } else {
                    rect((42 * i) + 10, (42 * j) + 10, 40, 40);
                    fill(127, 127, 234);
                    rect((42 * i) + 10, (42 * j) + 10, 40, 40);
                    fill(110, 110, 210);
                    rect((42 * i) + 20, (42 * j) + 20, 20);
                }
                fill(147, 147, 234);
            }
        }
    }
}

function redireccion(){
    location.href = "http://localhost/Algoritmos/co.uniquindio.edu/app/formulario.php";
}

function estadisticas(){
    location.href = "http://localhost/Algoritmos/co.uniquindio.edu/app/estadisticas.php";
}