let searchBar = document.getElementById('site-search')
let results = document.getElementById('results')
let [users, roles] = [[],[]]

function importData(jsonUsers, jsonRoles) {
  users = JSON.parse(jsonUsers);
  roles = JSON.parse(jsonRoles);

  console.log(users);
  console.log(roles);


}

function search () {
  let currentSearch = searchBar.value
  let matches = []



  users.forEach((user) => {
    if(user.name.indexOf(currentSearch) !== -1)
      matches.push(user)
  })

  roles.forEach((role) => {
    if(role.name.indexOf(currentSearch) !== -1)
      matches.push(role)
  })

  results.innerHTML = ''

  matches.forEach((match) => {
    link = document.createElement('a')
    link.innerHTML = '<nobr>' + match.name + '</nobr> '
    link.className += 'match'
    results.appendChild(link)
  })

}
