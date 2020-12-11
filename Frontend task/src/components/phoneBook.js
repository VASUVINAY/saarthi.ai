import React, { useState } from 'react'

const AddContactDetailsForm = props => {
    const initialFormState = { 
                                id: null || props.id, 
                                firstName: '' || props.firstName, 
                                lastName: '' || props.lastName, 
                                phoneNumber: '' || props.phoneNumber ,
                                emailId: '' || props.emailId,
                                dateOFJoining: '' || props.dateOFJoining
                            }
                            
    const [user, setUser] = useState(initialFormState)

    const handleInputChange = event => {
        const { name, value } = event.target
        setUser({ ...user, [name]: value })
    }

    return (
        <>
        <form
            onSubmit={event => {
                event.preventDefault()
                if (!user.firstName || !user.lastName || !user.phoneNumber || !user.emailId || !user.dateOFJoining) return
                props.addUser(user)
                setUser(initialFormState)
            }}
        >
            <label htmlFor="firstName">Name</label>
            <input type="text" name="firstName" value={user.firstName} onChange={handleInputChange} />
            <label htmlFor="lastName">Empyloee ID</label>
            <input type="text" name="lastName" value={user.lastName} onChange={handleInputChange} />
            <label htmlFor="Department">Department</label>
            <select name="phoneNumber" id="" onChange={handleInputChange}>
                <option value={user.phoneNumber}>Java</option>
                <option value={user.phoneNumber}>C++</option>
                <option value={user.phoneNumber}>JavaScript</option>
            </select>
            <label htmlFor="">Email ID</label>
            <input type="text" name="emailId" value={user.emailId} onChange={handleInputChange} />
            <label htmlFor=""> Date of Joining</label>
            <input type="date" name="dateOFJoining" value={user.dateOFJoining} onChange={handleInputChange} />
            
            <button type="submit" style={{marginRight:"50px"}}>Add new Employee</button>
            <button type="cancel">Clear</button>
        </form>
        
        {/* <div className="modal fade" id="exampleModal">
            <div className="modal-dialog">
                <div className="modal-content">
                <div className="modal-header">
                    <h5 className="modal-title" id="exampleModalLabel">Add New Employee Data</h5>
                    <button type="button" className="close" style={{color:'#333'}} data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form onSubmit={event => {
                    event.preventDefault()
                    if (!user.firstName || !user.lastName || !user.phoneNumber) 
                    return props.addUser(user)
                    setUser(initialFormState)
                }}>
                    <div className="modal-body">
                    <label>First Name</label>
                    <input type="text" name="firstName" value={user.firstName} onChange={handleInputChange} />
                    <label >lastName</label>
                    <input type="text" name="lastName" value={user.lastName} onChange={handleInputChange} />
                    <label >Phone Number</label>
                    <input type="text" name="phoneNumber" value={user.phoneNumber} onChange={handleInputChange} />
                    </div>
                    <div className="modal-footer">
                        <button type="button" className="btn btn-secondary mr-2" data-dismiss="modal">Close</button>
                        <button type="submit" className="btn" style={{background:"#5cb85c"}}>Submit</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
        <button type="button" className="btn  btn-sm" style={{background:"#0275d8"}} data-toggle="modal" data-target="#exampleModal">
            Add Employee
        </button> */}
     </>   
    )
}

export default AddContactDetailsForm