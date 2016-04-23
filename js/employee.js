let employee = document.getElementById('employee')
let user = []

function importData(jsonUser) {
  user = JSON.parse(jsonUser)
console.log(user);
  employee.innerHTML += "<strong>Employee Name:</strong> " + user.name + '<br>'
  employee.innerHTML += "<strong>Role:</strong> " + user.award.name + '<br>'
  employee.innerHTML += "<img id='profile' src=" + user.photo + "/>" + '<br>'

  if (user.email) employee.innerHTML += "<strong>Work Email</strong>: " + user.email + '<br>'
  if (user.phone)  employee.innerHTML += "<strong>Work Phone:</strong> " + user.phone

  let back = document.createElement('a')

  back.className = 'match'
  back.href = 'search.php'
  back.innerHTML = 'Back'

  employee.appendChild(back)


}
