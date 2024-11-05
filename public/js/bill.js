function printBill(button) {
    let billContent = button.parentElement.innerHTML;
    let printWindow = window.open('', '', 'height=600,width=800');
    printWindow.document.write('<html><head><title>Print Bill</title>');
    printWindow.document.write('<link rel="stylesheet" href="/css/bill.css">');
    printWindow.document.write('</head><body >');
    printWindow.document.write(billContent);
    printWindow.document.write('</body></html>');
    printWindow.document.close();
    printWindow.print();
}
