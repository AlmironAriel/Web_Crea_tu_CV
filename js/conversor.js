
const container = document.querySelector('#resume');
const pdfout = document.getElementById('pdfConvertor');

pdfout.onclick = function () {
    const doc = new jsPDF('p', 'pt', 'letter');
    var margin = 20;
    var scale = (doc.internal.pageSize.width * 2) / document.body.scrollWidth;


    doc.html(container, {
        x: margin,
        y: margin,
        html2canvas: {
            scale: scale,
        },
        callback: function (doc) {
            doc.save('mi_curriculum.pdf');
        }
    });
};
