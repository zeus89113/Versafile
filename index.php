<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <header class="text-gray-600 body-font">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
          <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
              <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
            </svg>
            <span class="ml-3 text-xl">VersaFile</span>
          </a>
          <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center">
            <a class="mr-5 hover:text-gray-900">Home</a>
            <a class="mr-5 hover:text-gray-900">Why VersaFile?</a>
            <a class="mr-5 hover:text-gray-900">Help</a>
          </nav>
          <div class="flex justify-right">
            <div class="container">
             
             
              
                  <head>
   
    <title>Register & Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container" id="signup" style="display:none;">
      <h1 class="form-title">Register</h1>
      <form method="post" action="register.php">
        <div class="input-group">
           <i class="fas fa-user"></i>
           <input type="text" name="fName" id="fName" placeholder="First Name" required>
           <label for="fname">First Name</label>
        </div>
        <div class="input-group">
            <i class="fas fa-user"></i>
            <input type="text" name="lName" id="lName" placeholder="Last Name" required>
            <label for="lName">Last Name</label>
        </div>
        <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" id="email" placeholder="Email" required>
            <label for="email">Email</label>
        </div>
        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" id="password" placeholder="Password" required>
            <label for="password">Password</label>
        </div>
       <input type="submit" class="btn" value="Sign Up" name="signUp">
      </form>
      <p class="or">
        ----------or--------
      </p>
     
      <div class="links">
        <p>Already Have Account ?</p>
        <button id="signInButton">Sign In</button>
      </div>
    </div>

    <div class="container" id="signIn">
        <h1 class="form-title">Sign In</h1>
        <form method="post" action="register.php">
          <div class="input-group">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email" id="email" placeholder="Email" required>
              <label for="email">Email</label>
          </div>
          <div class="input-group">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" id="password" placeholder="Password" required>
              <label for="password">Password</label>
          </div>
         
         <input type="submit" class="btn" value="Sign In" name="signIn">
        </form>
        <p class="or">
          ----------or--------
        </p>
        
        <div class="links">
          <p>Don't have account yet?</p>
          <button id="signUpButton">Sign Up</button>
        </div>
      </div>
      <script src="script.js"></script>
              
            </div>
            
          </div>
        </div>
      </header>
      <section class="text-gray-600 body-font">
        <div class="container mx-auto flex px-5 py-24 items-center justify-center flex-col">
          <img class="lg:w-2/6 md:w-3/6 w-5/6 mb-10 object-cover object-center rounded" alt="hero" src="https://assets.onecompiler.app/42qgph2c6/42qgpaz8z/IMG-20240813-WA0007.jpg">
          <div class="text-center lg:w-2/3 w-full">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">PDF in Seconds!</h1>
            <p class="mb-8 leading-relaxed">Convert your files into PDF format documents using VersaFile.</p>
           
          </div>
        </div>
      </section>
      <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto flex flex-wrap">
          <div class="flex relative pt-10 pb-20 sm:items-center md:w-2/3 mx-auto">
            <div class="h-full w-6 absolute inset-0 flex items-center justify-center">
              <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
            </div>
            <div class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-indigo-500 text-white relative z-10 title-font font-medium text-sm">1</div>
            <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
              <div class="flex-shrink-0 w-24 h-24 bg-indigo-100 text-indigo-500 rounded-full inline-flex items-center justify-center">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-12 h-12" viewBox="0 0 24 24">
                  <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                </svg>
              </div>
              <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
                <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">Step 1</h2>
                <p class="leading-relaxed">Login to VersaFile</p>
              </div>
            </div>
          </div>
          <div class="flex relative pb-20 sm:items-center md:w-2/3 mx-auto">
            <div class="h-full w-6 absolute inset-0 flex items-center justify-center">
              <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
            </div>
            <div class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-indigo-500 text-white relative z-10 title-font font-medium text-sm">2</div>
            <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
              <div class="flex-shrink-0 w-24 h-24 bg-indigo-100 text-indigo-500 rounded-full inline-flex items-center justify-center">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-12 h-12" viewBox="0 0 24 24">
                  <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                </svg>
              </div>
              <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
                <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">Step 2</h2>
                <p class="leading-relaxed">Allow access to your files, documents and other media.</p>
              </div>
            </div>
          </div>
          <div class="flex relative pb-20 sm:items-center md:w-2/3 mx-auto">
            <div class="h-full w-6 absolute inset-0 flex items-center justify-center">
              <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
            </div>
            <div class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-indigo-500 text-white relative z-10 title-font font-medium text-sm">3</div>
            <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
              <div class="flex-shrink-0 w-24 h-24 bg-indigo-100 text-indigo-500 rounded-full inline-flex items-center justify-center">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-12 h-12" viewBox="0 0 24 24">
                  <circle cx="12" cy="5" r="3"></circle>
                  <path d="M12 22V8M5 12H2a10 10 0 0020 0h-3"></path>
                </svg>
              </div>
              <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
                <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">Step 3</h2>
                <p class="leading-relaxed">Select (your file format) to the required format. For example- BPM to PDF</p>
              </div>
            </div>
          </div>
          <div class="flex relative pb-10 sm:items-center md:w-2/3 mx-auto">
            <div class="h-full w-6 absolute inset-0 flex items-center justify-center">
              <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
            </div>
            <div class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-indigo-500 text-white relative z-10 title-font font-medium text-sm">4</div>
            <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
              <div class="flex-shrink-0 w-24 h-24 bg-indigo-100 text-indigo-500 rounded-full inline-flex items-center justify-center">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-12 h-12" viewBox="0 0 24 24">
                  <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                  <circle cx="12" cy="7" r="4"></circle>
                </svg>
              </div>
              <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
                <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">Step 4</h2>
                <p class="leading-relaxed">Make the necessary edits and convert and you will have your PDF ready!</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      
</body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Converter</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        input[type="file"] {
            margin: 20px;
        }
        button {
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 16px;
        }
    </style>
</head>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Converter</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.debug.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/papaparse/5.3.0/papaparse.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        #canvas {
            display: none;
        }
    </style>
</head>
<body>

<h1>File Converter</h1>
<select id="fileType">
    <option value="">Select file type to convert</option>
    <option value="bmp">BMP to PDF</option>
    <option value="jpg">JPG to PDF</option>
    <option value="csv">CSV to PDF</option>
</select>

<input type="file" id="upload" accept=".bmp, .jpg, .csv" style="display:none;" />
<button id="convertBtn" style="display:none;">Convert</button>

<canvas id="canvas"></canvas>

<script>
    let selectedFileType;

    document.getElementById('fileType').addEventListener('change', function() {
        selectedFileType = this.value;
        document.getElementById('upload').accept = selectedFileType === 'bmp' ? '.bmp' :
                                                    selectedFileType === 'jpg' ? '.jpg' : 
                                                    selectedFileType === 'csv' ? '.csv' : '*';
        document.getElementById('upload').style.display = 'inline';
        document.getElementById('convertBtn').style.display = 'inline';
    });

    document.getElementById('upload').addEventListener('change', function(event) {
        const file = event.target.files[0];
        if (!file) return;

        if (selectedFileType === 'bmp' || selectedFileType === 'jpg') {
            const reader = new FileReader();
            reader.onload = function(e) {
                const img = new Image();
                img.onload = function() {
                    const canvas = document.getElementById('canvas');
                    canvas.width = img.width;
                    canvas.height = img.height;
                    const ctx = canvas.getContext('2d');
                    ctx.drawImage(img, 0, 0);
                    canvas.style.display = 'block';
                };
                img.src = e.target.result;
            };
            reader.readAsDataURL(file);
        } else if (selectedFileType === 'csv') {
            const reader = new FileReader();
            reader.onload = function(e) {
                const csvData = e.target.result;
                const json = Papa.parse(csvData, { header: true });
                console.log(json); // Log parsed JSON for debugging
            };
            reader.readAsText(file);
        }
    });

    document.getElementById('convertBtn').addEventListener('click', function() {
        if (selectedFileType === 'bmp' || selectedFileType === 'jpg') {
            const canvas = document.getElementById('canvas');
            const imgData = canvas.toDataURL('image/jpeg');
            const pdf = new jsPDF();
            pdf.addImage(imgData, 'JPEG', 10, 10);
            pdf.save('converted.pdf');
        } else if (selectedFileType === 'csv') {
            const csvFile = document.getElementById('upload').files[0];
            const reader = new FileReader();
            reader.onload = function(e) {
                const csvData = e.target.result;
                const pdf = new jsPDF();
                const rows = csvData.split('\n');
                let y = 10;
                rows.forEach((row) => {
                    pdf.text(row, 10, y);
                    y += 10;
                });
                pdf.save('converted.pdf');
            };
            reader.readAsText(csvFile);
        }
    });
</script>

</body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Compressor</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf-lib/1.17.1/pdf-lib.min.js"></script>
</head>
<body>
    <h1>PDF Compressor</h1>
    <input type="file" id="pdfInput" accept="application/pdf" required>
    <button id="compressButton">Compress PDF</button>
    <br>
    <a id="downloadLink" style="display:none;">Download Compressed PDF</a>

    <script>
        document.getElementById('compressButton').onclick = async () => {
            const fileInput = document.getElementById('pdfInput');
            const file = fileInput.files[0];

            if (!file) {
                alert('Please upload a PDF file first.');
                return;
            }

            const arrayBuffer = await file.arrayBuffer();
            const pdfDoc = await PDFLib.PDFDocument.load(arrayBuffer);

            // Optionally manipulate the PDF, e.g., remove unnecessary elements
            // This example does not perform heavy compression but demonstrates basic loading and saving

            const compressedPdfBytes = await pdfDoc.save();
            const compressedBlob = new Blob([compressedPdfBytes], { type: 'application/pdf' });

            const downloadLink = document.getElementById('downloadLink');
            downloadLink.href = URL.createObjectURL(compressedBlob);
            downloadLink.download = 'compressed_output.pdf';
            downloadLink.style.display = 'block';
            downloadLink.innerText = 'Download Compressed PDF';
        };
    </script>
</body>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merge Two PDFs</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf-lib/1.17.1/pdf-lib.min.js"></script>
</head>
<body>
    <h1>Merge Two PDF Files</h1>
    <input type="file" id="pdfInput1" accept="application/pdf" required>
    <input type="file" id="pdfInput2" accept="application/pdf" required>
    <button id="mergeButton">Merge PDFs</button>
    <br>
    <a id="downloadLink" style="display:none;">Download Merged PDF</a>

    <script>
        document.getElementById('mergeButton').onclick = async () => {
            const fileInput1 = document.getElementById('pdfInput1');
            const fileInput2 = document.getElementById('pdfInput2');

            if (!fileInput1.files[0] || !fileInput2.files[0]) {
                alert('Please upload both PDF files.');
                return;
            }

            const mergedPdf = await PDFLib.PDFDocument.create();

            // Load the first PDF
            const arrayBuffer1 = await fileInput1.files[0].arrayBuffer();
            const pdfDoc1 = await PDFLib.PDFDocument.load(arrayBuffer1);
            const copiedPages1 = await mergedPdf.copyPages(pdfDoc1, pdfDoc1.getPageIndices());
            copiedPages1.forEach(page => mergedPdf.addPage(page));

            // Load the second PDF
            const arrayBuffer2 = await fileInput2.files[0].arrayBuffer();
            const pdfDoc2 = await PDFLib.PDFDocument.load(arrayBuffer2);
            const copiedPages2 = await mergedPdf.copyPages(pdfDoc2, pdfDoc2.getPageIndices());
            copiedPages2.forEach(page => mergedPdf.addPage(page));

            // Save the merged PDF
            const mergedPdfBytes = await mergedPdf.save();
            const mergedBlob = new Blob([mergedPdfBytes], { type: 'application/pdf' });

            const downloadLink = document.getElementById('downloadLink');
            downloadLink.href = URL.createObjectURL(mergedBlob);
            downloadLink.download = 'merged_output.pdf';
            downloadLink.style.display = 'block';
            downloadLink.innerText = 'Download Merged PDF';
        };
    </script>
</body>
  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Page Deletion</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf-lib/1.17.1/pdf-lib.min.js"></script>
    <style>
        body { font-family: Arial, sans-serif; }
        .page { border: 1px solid #ddd; margin: 5px; padding: 10px; }
    </style>
</head>
<body>

<h1>Delete PDF Pages</h1>
<input type="file" id="pdf-input" accept="application/pdf">
<div id="pdf-pages"></div>
<button id="delete-pages">Delete Selected Pages</button>

<script>
    let pdfDoc = null;

    document.getElementById('pdf-input').addEventListener('change', async (event) => {
        const file = event.target.files[0];
        if (file) {
            const arrayBuffer = await file.arrayBuffer();
            pdfDoc = await PDFLib.PDFDocument.load(arrayBuffer);
            displayPages();
        }
    });

    function displayPages() {
        const pagesDiv = document.getElementById('pdf-pages');
        pagesDiv.innerHTML = '';
        pdfDoc.getPages().forEach((page, index) => {
            const pageDiv = document.createElement('div');
            pageDiv.className = 'page';
            pageDiv.innerHTML = `
                <input type="checkbox" id="page-${index}" value="${index}">
                <label for="page-${index}">Page ${index + 1}</label>
            `;
            pagesDiv.appendChild(pageDiv);
        });
    }

    document.getElementById('delete-pages').addEventListener('click', async () => {
        if (!pdfDoc) return;

        const selectedIndexes = Array.from(document.querySelectorAll('input[type="checkbox"]:checked'))
            .map(checkbox => parseInt(checkbox.value))
            .sort((a, b) => b - a); // Sort in descending order to remove pages correctly

        selectedIndexes.forEach(index => {
            pdfDoc.removePage(index);
        });

        const pdfBytes = await pdfDoc.save();
        const blob = new Blob([pdfBytes], { type: 'application/pdf' });
        const url = URL.createObjectURL(blob);
        const a = document.createElement('a');
        a.href = url;
        a.download = 'modified.pdf';
        a.click();
        URL.revokeObjectURL(url);
    });
</script>

</body>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Signature</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; margin: 20px; }
        canvas { border: 1px solid #ddd; cursor: crosshair; }
        .button { margin-top: 10px; }
    </style>
</head>
<body>

<h1>E-Signature Pad</h1>
<canvas id="signature-pad" width="400" height="200"></canvas>
<div>
    <button class="button" id="clear">Clear</button>
    <button class="button" id="save">Save Signature</button>
</div>
<img id="signature-image" style="display:none; margin-top: 20px;" />

<script>
    const canvas = document.getElementById('signature-pad');
    const context = canvas.getContext('2d');
    let isDrawing = false;

    // Set up mouse events for drawing
    canvas.addEventListener('mousedown', (e) => {
        isDrawing = true;
        context.beginPath();
        context.moveTo(e.offsetX, e.offsetY);
    });

    canvas.addEventListener('mousemove', (e) => {
        if (isDrawing) {
            context.lineTo(e.offsetX, e.offsetY);
            context.stroke();
        }
    });

    canvas.addEventListener('mouseup', () => {
        isDrawing = false;
        context.closePath();
    });

    // Clear the canvas
    document.getElementById('clear').addEventListener('click', () => {
        context.clearRect(0, 0, canvas.width, canvas.height);
    });

    // Save the signature as an image
    document.getElementById('save').addEventListener('click', () => {
        const dataURL = canvas.toDataURL('image/png');
        const img = document.getElementById('signature-image');
        img.src = dataURL;
        img.style.display = 'block';
    });
</script>

</body>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Watermark Tool</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Add Watermark to PDF</h1>
        <input type="file" id="upload" accept="application/pdf">
        <input type="text" id="watermark" placeholder="Enter watermark text">
        <button id="add-watermark">Add Watermark</button>
        <a id="download" style="display:none;">Download Watermarked PDF</a>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf-lib/1.17.1/pdf-lib.min.js"></script>
    <script src="script.js"></script>

<style>
/* styles.css */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 20px;
}

.container {
    max-width: 600px;
    margin: auto;
    background: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
}

input[type="text"], input[type="file"], button {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
}

button {
    background-color: #28a745;
    color: white;
    border: none;
    cursor: pointer;
}

button:hover {
    background-color: #218838;
}

a {
    display: inline-block;
    margin-top: 20px;
    text-align: center;
}

</style>

<script>
// script.js
document.getElementById('add-watermark').addEventListener('click', async () => {
    const fileInput = document.getElementById('upload');
    const watermarkText = document.getElementById('watermark').value;

    if (!fileInput.files.length) {
        alert('Please upload a PDF file.');
        return;
    }

    if (!watermarkText.trim()) {
        alert('Please enter a watermark text.');
        return;
    }

    const pdfFile = fileInput.files[0];
    const pdfData = await pdfFile.arrayBuffer();
    const pdfDoc = await PDFLib.PDFDocument.load(pdfData);
    
    const pages = pdfDoc.getPages();
    const { width, height } = pages[0].getSize();

    pages.forEach(page => {
        page.drawText(watermarkText, {
            x: width / 2,
            y: height / 2,
            size: 50,
            color: PDFLib.rgb(0.75, 0.75, 0.75),
            opacity: 0.5,
            rotate: PDFLib.degrees(45),
            anchor: 'center',
        });
    });

    const pdfBytes = await pdfDoc.save();
    const blob = new Blob([pdfBytes], { type: 'application/pdf' });
    const url = URL.createObjectURL(blob);

    const downloadLink = document.getElementById('download');
    downloadLink.href = url;
    downloadLink.download = 'watermarked.pdf';
    downloadLink.style.display = 'block';
    downloadLink.innerText = 'Download Watermarked PDF';
});

</script>






</body>


</html>

  


