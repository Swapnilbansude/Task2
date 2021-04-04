function fileValidation() {
    var fileInput1 = document.getElementById('exampleFormControlFile1');
    var fileInput2 = document.getElementById('exampleFormControlFile2');

    var filePath1 = fileInput1.value;
    var filePath2 = fileInput1.value;

    // Allowing file type
    var allowedExtensions =
        /(\.csv|\.CSV)$/i;

    if (!allowedExtensions.exec(filePath1) || !allowedExtensions.exec(filePath2)) {
        alert('Invalid file type(Upload CSV Files only)');
        fileInput1.value = '';
        fileInput2.value = '';
        return false;
    }

}

function validate() {
    var fileInput1 = document.getElementById('exampleFormControlFile1');
    var fileInput2 = document.getElementById('exampleFormControlFile2');

    var filePath1 = fileInput1.value;
    var filePath2 = fileInput1.value;

    if (filePath1 == 0) {
        alert("Please select files");
    }

}