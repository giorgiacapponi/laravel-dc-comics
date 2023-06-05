

const alertTrigger = document.getElementsByClassName('td')
for (let i = 0; i < alertTrigger.length; i++) {

  alertTrigger[i].addEventListener('click', ()=>{
  alertTrigger[i].innerHTML = `
  <button type="submit" class="btn btn-danger delete" id="delete"><i class="fa-solid fa-trash"></i></button>
      <div>are you sure?</div>
    `;
   
  })

}
