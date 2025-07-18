const content = {};

const popWindow = document.createElement('div');
      popWindow.classList.toggle('popUpContainer');



window.addEventListener('load',init);

function init() {

  let temp = [];
      body = document.querySelector('.body');
      content.popContainer = document.querySelectorAll(".blockSericeIcons");

  for(let elementPapa of content.popContainer) {

    for(let element of elementPapa.childNodes) {
      if(element.nodeType != 3) temp.push(element);
    }

  }

  content.allPopElements = temp;

  for(let element of content.allPopElements) {
    element.addEventListener('click', () => {
      console.log("HELLO!s");
      popWindow.innerHTML = "";
      for(let data of element.childNodes) {
        console.log(data)
        popWindow.append(data.cloneNode(true));
        body.append(popWindow);
      }
    })
  }
  popWindow.addEventListener('click', () => {
    popWindow.innerHTML = "";
    popWindow.remove()
  })
}
