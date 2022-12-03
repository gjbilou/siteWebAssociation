
// form 0
const username0 = document.getElementById('username0')
const verifEmail0 = function() {
  if (!/^[a-z0-9.-_]+@[a-z0-9.-_]+\.[a-z]{2,}$/.test(username0.value)) {
    username0.classList.add('error')
  } else {
    username0.classList.remove('error')
  }
}

username0.addEventListener('input', verifEmail0)

  




// form 1
const username1 = document.getElementById('username1')
const verifEmail1 = function() {
  if (!/^[a-z0-9.-_]+@[a-z0-9.-_]+\.[a-z]{2,}$/.test(username1.value)) {
    username1.classList.add('error')
  } else {
    username1.classList.remove('error')
  }
}

username1.addEventListener('input', verifEmail1)

