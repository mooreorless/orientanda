let employee = document.getElementById('employee')
let user = []

function importData(jsonUser) {
  user = JSON.parse(jsonUser)

  employee.innerHTML = user.name

}
