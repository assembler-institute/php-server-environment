const gradients = document.getElementsByClassName("gradients");
let x;
let y;
let intervalDecrement;
let intervalCrement;
let firstTime = true;
let arrayRgbaSaveBefore = [];
let randomNumbersThatSum100 = []


window.setInterval(changeGradient, 4000);

function changeGradient() {
    x = 1;
    y = 0;
    arrayRgba = getRandomNumbers();
    randomNumbersThatSum100 = getRandomNumbersThatSum100();
    intervalDecrement = setInterval(gradientSwitchOpacityOne, 30);
    gradientSwitchOpacityOne();
}

function gradientSwitchOpacityOne() {
     if (firstTime == false) {
        gradients[0].style.background = "linear-gradient(135deg, rgba(" + arrayRgbaSaveBefore[33] + "," + arrayRgbaSaveBefore[34] + "," + arrayRgbaSaveBefore[35] + "," + x + ")" + Sum100SaveBefore[0] + "%, rgba(" + arrayRgbaSaveBefore[36] + "," + arrayRgbaSaveBefore[37] + "," + arrayRgbaSaveBefore[38] + "," + x + ")" + Sum100SaveBefore[1] + "%, rgba(" + arrayRgbaSaveBefore[39] + "," + arrayRgbaSaveBefore[40] + "," + arrayRgbaSaveBefore[41] + "," + x + ")" + Sum100SaveBefore[2] + "%, rgba(" + arrayRgbaSaveBefore[42] + "," + arrayRgbaSaveBefore[43] + "," + arrayRgbaSaveBefore[44] + "," + x + ")" + Sum100SaveBefore[3] + "%, rgba(" + arrayRgbaSaveBefore[45] + "," + arrayRgbaSaveBefore[46] + "," + arrayRgbaSaveBefore[47] + "," + x + ")" + Sum100SaveBefore[4] + "%, rgba(" + arrayRgbaSaveBefore[48] + "," + arrayRgbaSaveBefore[49] + "," + arrayRgbaSaveBefore[50] + "," + x + ")" + Sum100SaveBefore[5] + "%, rgba(" + arrayRgbaSaveBefore[51] + "," + arrayRgbaSaveBefore[52] + "," + arrayRgbaSaveBefore[53] + "," + x + ")" + Sum100SaveBefore[6] + "%, rgba(" + arrayRgbaSaveBefore[54] + "," + arrayRgbaSaveBefore[55] + "," + arrayRgbaSaveBefore[56] + "," + x + ")" + Sum100SaveBefore[7] + "%, rgba(" + arrayRgbaSaveBefore[57] + "," + arrayRgbaSaveBefore[58] + "," + arrayRgbaSaveBefore[59] + "," + x + ")" + Sum100SaveBefore[8] + "%, rgba(" + arrayRgbaSaveBefore[60] + "," + arrayRgbaSaveBefore[61] + "," + arrayRgbaSaveBefore[62] + "," + x + ")" + Sum100SaveBefore[9] + "%, rgba(" + arrayRgbaSaveBefore[63] + "," + arrayRgbaSaveBefore[64] + "," + arrayRgbaSaveBefore[65] + "," + x + ")" + Sum100SaveBefore[10] + "%)";
        gradients[1].style.background = "linear-gradient(135deg, rgba(" + arrayRgba[33] + "," + arrayRgba[34] + "," + arrayRgba[35] + "," + y + ")" + randomNumbersThatSum100[0] + "%, rgba(" + arrayRgba[36] + "," + arrayRgba[37] + "," + arrayRgba[38] + "," + y + ")" + randomNumbersThatSum100[1] + "%, rgba(" + arrayRgba[39] + "," + arrayRgba[40] + "," + arrayRgba[41] + "," + y + ")" + randomNumbersThatSum100[2] + "%, rgba(" + arrayRgba[42] + "," + arrayRgba[43] + "," + arrayRgba[44] + "," + y + ")" + randomNumbersThatSum100[3] + "%, rgba(" + arrayRgba[45] + "," + arrayRgba[46] + "," + arrayRgba[47] + "," + y + ")" + randomNumbersThatSum100[4] + "%, rgba(" + arrayRgba[48] + "," + arrayRgba[49] + "," + arrayRgba[50] + "," + y + ")" + randomNumbersThatSum100[5] + "%, rgba(" + arrayRgba[51] + "," + arrayRgba[52] + "," + arrayRgba[53] + "," + y + ")" + randomNumbersThatSum100[6] + "%, rgba(" + arrayRgba[54] + "," + arrayRgba[55] + "," + arrayRgba[56] + "," + y + ")" + randomNumbersThatSum100[7] + "%, rgba(" + arrayRgba[57] + "," + arrayRgba[58] + "," + arrayRgba[59] + "," + y + ")" + randomNumbersThatSum100[8] + "%, rgba(" + arrayRgba[60] + "," + arrayRgba[61] + "," + arrayRgba[62] + "," + y + ")" + randomNumbersThatSum100[9] + "%, rgba(" + arrayRgba[63] + "," + arrayRgba[64] + "," + arrayRgba[65] + "," + y + ")" + randomNumbersThatSum100[10] + "%)";
    }
    if (firstTime == true) {
        gradients[0].style.background = "linear-gradient(135deg, rgba(2,0,36," + x + ") 0%, rgba(8,255,0," + x + ") 10%, rgba(255,130,0," + x + ") 20%, rgba(3,0,255," + x + ") 30%, rgba(93,74,6," + x + ") 40%, rgba(255,0,0," + x + ") 50%, rgba(40,0,157," + x + ") 60%, rgba(2,153,215," + x + ") 70%, rgba(116,105,80," + x + ") 80%, rgba(1,196,244," + x + ") 90%, rgba(0,212,255," + x + ") 100%)";
        gradients[1].style.background = "linear-gradient(135deg, rgba(" + arrayRgba[33] + "," + arrayRgba[34] + "," + arrayRgba[35] + "," + y + ")" + randomNumbersThatSum100[0] + "%, rgba(" + arrayRgba[36] + "," + arrayRgba[37] + "," + arrayRgba[38] + "," + y + ")" + randomNumbersThatSum100[1] + "%, rgba(" + arrayRgba[39] + "," + arrayRgba[40] + "," + arrayRgba[41] + "," + y + ")" + randomNumbersThatSum100[2] + "%, rgba(" + arrayRgba[42] + "," + arrayRgba[43] + "," + arrayRgba[44] + "," + y + ")" + randomNumbersThatSum100[3] + "%, rgba(" + arrayRgba[45] + "," + arrayRgba[46] + "," + arrayRgba[47] + "," + y + ")" + randomNumbersThatSum100[4] + "%, rgba(" + arrayRgba[48] + "," + arrayRgba[49] + "," + arrayRgba[50] + "," + y + ")" + randomNumbersThatSum100[5] + "%, rgba(" + arrayRgba[51] + "," + arrayRgba[52] + "," + arrayRgba[53] + "," + y + ")" + randomNumbersThatSum100[6] + "%, rgba(" + arrayRgba[54] + "," + arrayRgba[55] + "," + arrayRgba[56] + "," + y + ")" + randomNumbersThatSum100[7] + "%, rgba(" + arrayRgba[57] + "," + arrayRgba[58] + "," + arrayRgba[59] + "," + y + ")" + randomNumbersThatSum100[8] + "%, rgba(" + arrayRgba[60] + "," + arrayRgba[61] + "," + arrayRgba[62] + "," + y + ")" + randomNumbersThatSum100[9] + "%, rgba(" + arrayRgba[63] + "," + arrayRgba[64] + "," + arrayRgba[65] + "," + y + ")" + randomNumbersThatSum100[10] + "%)";
    }
    x -= 0.01;
    y += 0.01;
    console.log({x});
    if (x <= 0) {
        firstTime = false;
        arrayRgbaSaveBefore = arrayRgba.map((x) => x);
        Sum100SaveBefore = randomNumbersThatSum100.map((x) => x);
        deleteInterval();
    }
}

function deleteInterval() {
    clearInterval(intervalDecrement);
}

function getRandomNumbers() {
    let arrayRgba = [];
    for (let i = 0; i < 66; i++) {
        arrayRgba.push(Math.floor(Math.random() * 255));
    }
   /*  for (let i = 0; i < arrayRgba.length; i++) {
        arrayRgba[i] = Math.floor(Math.random() * 255);
    } */
    return arrayRgba;
}

function getRandomNumbersThatSum100() {
    let sum = 100;
    let i;
    randomNumbersThatSum100 = []
    for (i = 0; i < 11; i++) {
        const randomNumber = Math.floor(Math.random() * (15 - 5 + 1) + 8)
        sum -= randomNumber < 0 ? 0 : randomNumber
        if (i != 0) {
            randomNumbersThatSum100.push(randomNumber < 0 ? 0 : randomNumber + randomNumbersThatSum100[i - 1])
        } else {
            randomNumbersThatSum100.push(randomNumber < 0 ? 0 : randomNumber)
        }
    }
    /* randomNumbersThatSum100.push(sum) */
    /* console.log(randomNumbersThatSum100, randomNumbersThatSum100.reduce((a, b) => a + b, 0)) */
    return randomNumbersThatSum100;
}