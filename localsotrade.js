(function (){
  'use strict';

  var btnSetItem = document.querySelector('.btnSetItem')
  var btnGetItem = document.querySelector('.btnGetItem')

  function setLocalStorage(){
    btnSetItem.addEventListener('click', () => {
      localStorage.setItem('nome','Jack Sparrow')
    })
  }

  function getLocalStorage(){
    btnGetItem.addEventListener('click', () => {
      console.log(localStorage.getItem('nome'))
    })
  }


  setLocalStorage();
  getLocalStorage();

}());