document.addEventListener("DOMContentLoaded", (evt) => {
  const allAddButtons = document.querySelectorAll('.add_to_cart_button');
  for(let button of allAddButtons) {
      button.addEventListener('click', (evt) => {
          const saveHTML = button.innerHTML;
          button.innerHTML = "Добавлено!";
          setTimeout(() => {button.innerHTML = saveHTML},1000)
      })
  }
})
