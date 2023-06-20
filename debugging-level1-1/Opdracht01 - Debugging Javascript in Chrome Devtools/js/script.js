let message = "";

for (let i = 0; i < 5; i++) {
    message = "Loop iteratie: " + i;
    toonBerichtInConsole(message);
}

function toonBerichtInConsole(msg){
    console.log(msg);
}