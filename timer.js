timeLeft = 15;
setInterval(function() {
    // Decrementa el tiempo de cuenta atrás en un segundo
    timeLeft--;
  
    // Actualiza la pantalla con el tiempo restante
    document.getElementById("countdown").innerHTML = timeLeft;
  
    // Si el tiempo llega a cero, detiene la cuenta atrás
    if (timeLeft == 0) {
        window.location.replace("close_session.php");

      clearInterval(countdownInterval);
    }
  }, 1000);