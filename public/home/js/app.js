const toggleDropdown = (btn, element, toggleClass = "show") => {
  const btnSelector = document.querySelector(btn);
  const elementSelector = document.querySelector(element);

  if (btnSelector && elementSelector && toggleClass) {
    btnSelector.addEventListener('click', () => {
      elementSelector.classList.toggle(toggleClass);
    })
  } else {
    console.warn('Button, element or toggle class not found:', btnSelector, elementSelector, toggleClass);
  }
}

// toggle cart
toggleDropdown('.cart-btn', '.cart-wrap');

// cart item increase decrease buttons
const itemCount = document.querySelectorAll('.cart-item-count');
const itemPlus = document.querySelectorAll('.cart-item .item-plus');
const itemMinus = document.querySelectorAll('.cart-item .item-minus');

itemPlus.forEach((button, index) => {
  button.addEventListener('click', () => {
    const input = itemCount[index];
    input.value = parseInt(input.value) + 1;
  });
});

itemMinus.forEach((button, index) => {
  button.addEventListener('click', () => {
    const input = itemCount[index];
    const currentValue = parseInt(input.value);
    if (currentValue > 0) {
      input.value = currentValue - 1;
    }
  });
});


// toggle dropdown
toggleDropdown('.dropdown-btn', '.dropdown-links');

// toggle navlinks
toggleDropdown('.nav-toggler', '.navlinks');

// toggle nav icon
document.querySelector('.nav-toggler').addEventListener('click', () => {
  document.querySelector('.nav-toggler i').classList.toggle('fa-xmark');
})

// toggle filters
toggleDropdown('.filter-btn', '.filters-wrap');

// filter close
toggleDropdown('.filter-close', '.filters-wrap');