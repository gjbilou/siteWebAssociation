
const form = document.getElementById('sup')

form.addEventListener('submit', function (event) {
  event.preventDefault()
  
  const email = document.getElementById('username1')
  const password = document.getElementById('password1')
  var errors
  
  if (email.value === null ||
    !/[a-z0-9-_.]+@[a-z0-9-_.]+\.[a-z]{2,}/.test(email.value)) {
      event.preventDefault()
      email.classList.add('error')
      errors = true
  }
  if (password.value === null || password.value.length <= 8)  {
    event.preventDefault()
    password.classList.add('error')
    errors = true
  }
  if (!errors) {
    this.submit()
  }
})

