// -------- UPLOAD IMAGE --------
const selectImage = document.querySelector(".select-image");
const inputFile = document.querySelector("#file");
const imgArea = document.querySelector(".img-area");

selectImage.addEventListener("click", function () {
  inputFile.click();
});
inputFile.addEventListener("change", function () {
  const image = this.files[0];
  if (image.size > 200) {
    const reader = new FileReader();
    reader.onload = () => {
      const allImg = imgArea.querySelectorAll("img");
      allImg.forEach((item) => item.remove());
      const imgUrl = reader.result;
      const img = document.createElement("img");
      img.src = imgUrl;
      imgArea.appendChild(img);
      imgArea.classList.add("active");
      imgArea.dataset.img = image.name;
    };
    reader.readAsDataURL(image);
  } else {
    alert("Image size more than 2MB");
  }
});

// -------- INCREASE DECREASE BUTTOn  -------- //

const increaseButtons = document.querySelectorAll(".increase-button");
const decreaseButtons = document.querySelectorAll(".decrease-button");
const numberInputs = document.querySelectorAll(".number-input");

// Initial value
let numbers = Array(numberInputs.length).fill(0);

// Update display based on current number
for (let i = 0; i < numberInputs.length; i++) {
  numberInputs[i].value = numbers[i];
}

// Function to increment the number
function increaseNumber(event) {
  const index = event.target.dataset.index;
  numbers[index]++;
  numberInputs[index].value = numbers[index];
}

// Function to decrement the number (with optional minimum value handling)
function decreaseNumber(event) {
  const index = event.target.dataset.index;
  numbers[index] = Math.max(numbers[index] - 1, 0);
  numberInputs[index].value = numbers[index];
}

// Add click event listeners to buttons
for (let i = 0; i < increaseButtons.length; i++) {
  increaseButtons[i].addEventListener("click", increaseNumber);
  increaseButtons[i].dataset.index = i;
}

for (let i = 0; i < decreaseButtons.length; i++) {
  decreaseButtons[i].addEventListener("click", decreaseNumber);
  decreaseButtons[i].dataset.index = i;
}
