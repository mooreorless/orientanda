let [users, roles] = [[],[]]

function importData(jsonUsers, jsonRoles) {
  users = JSON.parse(jsonUsers);

  let nameList = document.getElementById('nameList')
  let surnameList = document.getElementById('surnameList')

  console.log(users);

  for (let i = 0, l = users.length; i < l; i++) {
    let user = users[i]



    // names = user.name.split(" ")
    //
    // option = document.createElement('option')
    // option.value = name[0]
    // option.innerHTML = name[0]
    // nameList.appendChild(option)
  }

  }
}
