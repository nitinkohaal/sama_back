// import 'bootstrap/dist/js/bootstrap.bundle.min.js';





const progressCircle = document.querySelector(".progress-ring-circle");
const scrollUpBtn = document.getElementById("scroll-up");
const radius = progressCircle.r.baseVal.value;
const circumference = 2 * Math.PI * radius;

progressCircle.style.strokeDasharray = `${circumference}`;
progressCircle.style.strokeDashoffset = `${circumference}`;

function setProgress(percent) {
  const offset = circumference - (percent / 100) * circumference;
  progressCircle.style.strokeDashoffset = offset;
}

window.addEventListener("scroll", () => {
  const scrollTop = window.scrollY;
  const docHeight = document.documentElement.scrollHeight - window.innerHeight;
  const scrollPercent = (scrollTop / docHeight) * 100;
  setProgress(scrollPercent);

  // Toggle visibility
  if (scrollTop > 100) {
    scrollUpBtn.classList.add("show");
  } else {
    scrollUpBtn.classList.remove("show");
  }
});

scrollUpBtn.addEventListener("click", () => {
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
});

// serch bike

// const brandSelect = document.getElementById('bike-brand');
// const modelSelect = document.getElementById('bike-model');

// brandSelect.addEventListener('change', function () {
//   const selectedBrand = this.value;
//   if (!selectedBrand) return;

//   fetch('https://mocki.io/v1/69c0b6a8-5a0a-4d7e-8c17-118d81ff3171') // Replace with your API link
//     .then(response => response.json())
//     .then(data => {
//       // Clear old options
//       modelSelect.innerHTML = '<option value="">Bike model</option>';

//       // Populate new models
//       if (data[selectedBrand]) {
//         data[selectedBrand].forEach(model => {
//           const option = document.createElement('option');
//           option.value = model;
//           option.textContent = model;
//           modelSelect.appendChild(option);
//         });
//       }
//     })
//     .catch(error => {
//       console.error('Error fetching bike models:', error);
//     });
// });

// carasoul card



// catogories carousel



  const carousel = document.querySelector('.hero-tag-carousel');
  // const items = Array.from(carousel.children);
  const scrollAmount = 220;

  

  // Scroll buttons
  const btnLeft = document.querySelector('.scroll-btn.left');
  const btnRight = document.querySelector('.scroll-btn.right');

  btnLeft.addEventListener('click', () => {
    carousel.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
  });

  btnRight.addEventListener('click', () => {
    carousel.scrollBy({ left: scrollAmount, behavior: 'smooth' });
  });



// const carousel = document.querySelector(".hero-tag-carousel");
// const cards = carousel.querySelectorAll(".hero-tag-item");

// const btnLeft = document.querySelector(".scroll-btn.left");
// const btnRight = document.querySelector(".scroll-btn.right");
// const scrollAmount = 300;

// cards.forEach((card) => {
  

// });

// btnLeft.addEventListener("click", () => {
//   carousel.scrollBy({ left: -scrollAmount, behavior: "smooth" });
// });

// btnRight.addEventListener("click", () => {
//   const maxScrollLeft = carousel.scrollWidth - carousel.clientWidth;

//   // If at or near end, go back to start
//   if (carousel.scrollLeft + scrollAmount >= maxScrollLeft) {
//     carousel.scrollTo({ left: 0, behavior: "smooth" });
//   } else {
//     carousel.scrollBy({ left: scrollAmount, behavior: "smooth" });
//   }
// });




// latest carousel

document.querySelectorAll(".carousel-container").forEach((carousel) => {
  const track = carousel.querySelector(".carousel-track");
  const cards = carousel.querySelectorAll(".card1");
  const dotsContainer = carousel.querySelector(".dots");
  const prevBtn = carousel.querySelector(".btn-prev");
  const nextBtn = carousel.querySelector(".btn-next");

  const cardWidth = cards[0].offsetWidth;

  let position = 0;

  // Create dots
  cards.forEach((_, i) => {
    const dot = document.createElement("div");
    dot.classList.add("dot");
    if (i === 0) dot.classList.add("active");
    dotsContainer.appendChild(dot);
  });

  const dots = dotsContainer.querySelectorAll(".dot");

  function moveSlide(direction) {
    const totalCards = cards.length;
    position += direction;

    console.log(position);

    if (position < 0) position = totalCards - 1;
    else if (position >= totalCards) position = 0;

    // Animate with GSAP
    gsap.to(track, {
      x: -position * cardWidth,
      duration: 0.3,
    });

    // Update dots
    dots.forEach((dot) => dot.classList.remove("active"));
    dots[position].classList.add("active");
  }

  prevBtn.addEventListener("click", () => moveSlide(-1));
  nextBtn.addEventListener("click", () => moveSlide(1));
});

// FAQ accordion

document.querySelectorAll(".faq-question").forEach((question) => {
  question.addEventListener("click", () => {
    const item = question.parentNode;
    item.classList.toggle("active");

    // Close other open items
    document.querySelectorAll(".faq-item").forEach((otherItem) => {
      if (otherItem !== item && otherItem.classList.contains("active")) {
        otherItem.classList.remove("active");
      }
    });
  });
});

// Footer accordion

document.querySelectorAll(".footer-acc").forEach((question) => {
  question.addEventListener("click", () => {
    const item = question.parentNode;
    item.classList.toggle("active");

    // Close other open items
    document.querySelectorAll(".footer-item").forEach((otherItem) => {
      if (otherItem !== item && otherItem.classList.contains("active")) {
        otherItem.classList.remove("active");
      }
    });
  });
});



// modal open for item show deatal 

document.addEventListener('DOMContentLoaded', () => {
  let lastFocusedElement;

  const accessoryModal = document.getElementById('accessoryModal');
  accessoryModal.addEventListener('show.bs.modal', function (event) {
    lastFocusedElement = event.relatedTarget; // Save the button that opened the modal
    const button = event.relatedTarget;
    document.getElementById('modalName').textContent = button.dataset.name;
    document.getElementById('modalSubHeading').textContent = button.dataset.subheading;
    document.getElementById('modalDescription').textContent = button.dataset.description;
    document.getElementById('modalPrice').textContent = button.dataset.price;
    document.getElementById('modalStock').textContent = button.dataset.stock;
    document.getElementById('modalImage').src = button.dataset.image;
  });

  accessoryModal.addEventListener('hidden.bs.modal', function () {
    // Return focus to the button that opened the modal after closing it
    if (lastFocusedElement) {
      lastFocusedElement.focus();
    }
  });
});

