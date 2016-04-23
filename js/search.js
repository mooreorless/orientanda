let searchBar = document.getElementById('site-search')
let results = document.getElementById('results')
let [users, roles] = [[],[]]

function importData(jsonUsers, jsonRoles) {
  users = JSON.parse(jsonUsers)
  roles = JSON.parse(jsonRoles)
}

function search () {
  let currentSearch = searchBar.value
  let matches = []

  users.forEach((user) => {
    if(user.name.toLowerCase().indexOf(currentSearch) !== -1)
      matches.push(user)
  })
  roles.forEach((role) => {
    if(role.name.toLowerCase().indexOf(currentSearch) !== -1)
      matches.push(role)
  })

  results.innerHTML = ''
  matches.forEach((match) => {
    link = document.createElement('a')
    link.innerHTML = ' <nobr> ' + match.name + '</nobr> '
    link.className += 'match'
    link.onclick = () => showUser(match)
    results.appendChild(link)
  })

}


function showUser(user) {
  let form = document.createElement('form')

  for (let key in user) {
    let input = document.createElement('input')
    input.name = key
    input.value = user[key]
    form.appendChild(input);
  }

  form.action = 'employee.php'
  form.submit()
}
