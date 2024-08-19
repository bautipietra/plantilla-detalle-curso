document.addEventListener('DOMContentLoaded', function () {
  const img = document.querySelector('.banner');
  const colorThief = new ColorThief();

  img.addEventListener('load', function () {
    // Obtén el color predominante
    const dominantColor = colorThief.getColor(img);
    const colorString = `rgb(${dominantColor[0]}, ${dominantColor[1]}, ${dominantColor[2]})`;

    // Define la variable CSS en :root
    document.documentElement.style.setProperty('--dominant-color', colorString);
  });

  // Si la imagen ya está cargada (por ejemplo, si no es la primera vez que se accede a la página)
  if (img.complete) {
    const dominantColor = colorThief.getColor(img);
    const colorString = `rgb(${dominantColor[0]}, ${dominantColor[1]}, ${dominantColor[2]})`;

    document.documentElement.style.setProperty('--dominant-color', colorString);
  }
});