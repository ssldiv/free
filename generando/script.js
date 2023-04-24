// Variables globales
var progressBar = document.getElementById("progress-bar");
var progressLabel = document.getElementById("progress-label");
var countdownLabel = document.getElementById("countdown-label");
var totalTime = 30 * 60; // 30 minutos en segundos
var timeLeft = totalTime;

// Función para actualizar la barra de progreso y la etiqueta de progreso
function updateProgressBar() {
  // Calcular el progreso actual
  var progress = (totalTime - timeLeft) / totalTime;

  // Actualizar la barra de progreso
  progressBar.style.width = progress * 100 + "%";

  // Actualizar la etiqueta de progreso
  progressLabel.innerHTML = Math.round(progress * 100) + "%";
}

// Función para actualizar la cuenta regresiva
function updateCountdown() {
  // Calcular los minutos y segundos restantes
  var minutesLeft = Math.floor(timeLeft / 60);
  var secondsLeft = timeLeft % 60;

  // Actualizar la etiqueta de cuenta regresiva
  countdownLabel.innerHTML = minutesLeft + ":" + (secondsLeft < 10 ? "0" : "") + secondsLeft;

  // Actualizar la barra de progreso
  updateProgressBar();

  // Actualizar el tiempo restante
  timeLeft--;

  // Detener el intervalo cuando se alcanza el tiempo límite
  if (timeLeft < 0) {
    clearInterval(interval);
  }
}

// Actualizar la cuenta regresiva y el progreso cada segundo
var interval = setInterval(updateCountdown, 1000);