const text = "Begin Your Nkanlu Digital Journey!";
let charIndex = 0;
const typewriterElement = document.getElementById("typewriter");

function type() {
  if (charIndex < text.length) {
    typewriterElement.textContent += text.charAt(charIndex);
    charIndex++;
    setTimeout(type, 100); // Delay between typing each character
  } else {
    // Wait for a brief moment and then clear the text for the next loop
    setTimeout(clearText, 1500);
  } 
}

function clearText() {
  typewriterElement.textContent = "";
  charIndex = 0;
  setTimeout(type, 0); // Delay before starting the next loop
}

type(); // Start the typing animation
