document.addEventListener('DOMContentLoaded', function () {
    const uploadInput = document.getElementById('uploadInput');
const imageCard = document.getElementById('imageCard');
const uploadedImage = document.getElementById('uploadedImage');

uploadInput.addEventListener('change', function() {
  const file = this.files[0];
  if (file) {
    const reader = new FileReader();
    reader.onload = function(e) {
      uploadedImage.src = e.target.result;
      imageCard.style.display = 'block';
    }
    reader.readAsDataURL(file);
  }
});
});

