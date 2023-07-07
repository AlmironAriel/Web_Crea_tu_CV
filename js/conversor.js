const { jsPDF } = window.jspdf;

$('#pdfConversor').click(function () {

  const curriculumElement = document.getElementById('resume');

  // Obtener las dimensiones de la hoja A4 en puntos
  const anchoA4 = 595.28;
  const altoA4 = 841.89;

  // Escalar el elemento para que se ajuste a la hoja A4
  const escala = Math.min(anchoA4 / curriculumElement.offsetWidth, altoA4 / curriculumElement.offsetHeight);

  // Calcular el ancho y alto del elemento escalado
  const anchoElemento = curriculumElement.offsetWidth * escala;
  const altoElemento = curriculumElement.offsetHeight * escala;

  // Crear un lienzo HTML5 del tamaño del elemento escalado
  const lienzo = document.createElement("canvas");
  lienzo.width = anchoElemento;
  lienzo.height = altoElemento;
  const contexto = lienzo.getContext("2d");

  // Escalar el contenido del elemento al lienzo
  contexto.scale(escala, escala);

  const opt = {
    margin: 0,
    filename: 'curriculum.pdf',
    image: { type: 'jpeg', quality: 0.98 },
    html2canvas:(curriculumElement,{
      canvas: lienzo,
      scale: 2,
    }),
    jsPDF: { unit:'pt', format: 'a4', orientation: 'portrait' }
  };

  html2pdf().set(opt).from(curriculumElement).save();
});









