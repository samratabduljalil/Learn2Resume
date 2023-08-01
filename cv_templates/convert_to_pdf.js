function convertHTMLtoPDF() {
    let pdfjs = document.querySelector('#template_ar');
    const { jsPDF } = window.jspdf;

    let pdf_height = 1500; // in milimeter (mm)
    let pdf_width = 1000;

    let doc = new jsPDF('l', 'mm', [pdf_height, pdf_width]);
    
    doc.html(pdfjs, {
        // content positions (in x-y direnction, milimeter)
        x: 115,
        y: 12,
        
        callback: function (doc) {
            doc.save("CV.pdf");
        }
    });
}
