const textarea = document.getElementById('message');
const charCount = document.getElementById('charCount');
const maxChars = 100;

textarea.addEventListener('input', function () {
  const currentLength = textarea.value.length;
  charCount.textContent = `${currentLength} / ${maxChars} characters`;

  if (currentLength > maxChars) {
    charCount.classList.add('over-limit');
  } else {
    charCount.classList.remove('over-limit');
  }
});


