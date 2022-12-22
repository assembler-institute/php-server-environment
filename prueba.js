let edad = new FormData();
edad.append('edad', 14);
edad.append('nombre', "Juan");


fetch("./prueba.php", {
    method: 'POST',
    body: edad
})
.then(res => {
    return res.text()
})
.then(data => console.log(data))
.catch(error => console.log(error))