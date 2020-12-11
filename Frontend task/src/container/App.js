import React, { useState } from 'react';
import './App.css';
import PhoneBook from '../components/phoneBook';
import GenericTable from '../views/GenericTable';

function App() {
  const usersData = []
  const [users, setUsers] = useState(usersData)

  const addUser = user => {
    user.id = users.length + 1
    setUsers([...users, user])
  }

  const sortedArray = (users, fieldName = 'lastName') => {
    return users.sort(function (a, b) {
      var nameA = a[fieldName].toLowerCase(), nameB = b[fieldName].toLowerCase()
      if (nameA < nameB) //sort string ascending
        return -1
      if (nameA > nameB)
        return 1
      return 0 //default return value (no sorting)
    })
  }

  return (
    <div className="container">
      <h1>React Form Table  using Hooks</h1>
      <div className="flex-row">
        <div className="flex-large">
          <h2>Add Employee Detail</h2>
          <PhoneBook addUser={addUser} />
        </div>
      </div>
      <div className="flex-row">
        <div className="flex-large">
          <GenericTable
            primaryKey={'id'}
            title={'Generic User List 2'}
            columns={['Name', 'EmplyoeeID', 'Department','EmailID','DateOfJoining']}
            rowsKeys={['firstName', 'lastName', 'phoneNumber','emailId','dateOFJoining']}
            data={sortedArray(users)} />
        </div>
      </div>
    </div>

  );
}

export default App;
