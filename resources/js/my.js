

const alertTrigger = document.getElementsByClassName('td')
for (let i = 0; i < alertTrigger.length; i++) {

  alertTrigger[i].addEventListener('click', () => {

    alertTrigger[i].innerHTML = (`<div class="alert alert-danger alert-dismissible" role="alert">
       <div>Areyousure?</div>
     <button type="submit" id="delete"  ><i class="fa-solid fa-trash"></i></button>
     </div>`)
  })

}
