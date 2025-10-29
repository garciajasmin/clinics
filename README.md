# Clinic TPS (Tracking and Patient System)

## Description / Overview
**Clinic TPS (Tracking and Patient System)** is a web-based application designed to manage and track patient information efficiently.  
It provides a digital solution for clinics to record patient details, monitor appointments, and manage clinical data securely.  
The system aims to reduce manual paperwork, minimize human error, and ensure quick access to essential patient information.

---

## Objectives
- To develop a user-friendly patient tracking system for clinics.  
- To allow easy registration, updating, and searching of patient records.  
- To provide efficient data storage using a connected database.  
- To ensure data accuracy and accessibility for clinic personnel.  
- To enhance clinic productivity through automation.

---

## Features / Functionality
- **Patient Registration:** Add and store new patient records.  
- **Patient List View:** Display all registered patients in a table format.  
- **Update & Delete Records:** Edit or remove patient information as needed.  
- **Search Functionality:** Quickly locate a patient using their ID or name.  
- **Database Connection:** Integrated with MySQL for secure data storage.  

---

## Installation Instructions

### Prerequisites
- Visual Studio or Visual Studio Code  
- XAMPP / MySQL Server  
- ASP.NET Framework (for Web Forms projects)  
- Web Browser (Chrome, Edge, etc.)

### Steps
1. **Clone or Download** the project repository.  
   ```bash
   git clone https://github.com/garciajasmin/clinics.git
2. **Navigate to the project folder.
   ```bash
   cd github
3. ** Open in your editor or browser
    ```bash
    code .
4. ** Run using XXAMP

***Note***: Ensure your local server like XXAMP is running before launching the project. 
   


## Usage
**How to Access**: open your localhost to access the website
! [Clinic TPS](http://127.0.0.1:8000/patients)

### For Patients:
- Click Patients on the sidebar.
- Use the form to add or edit patient details.
- View all registered patients in a table.

### For Appointments:

- Click Appointments on the sidebar.
- Click the + New Appointment button to open the scheduling form.
- Select a patient, input date/time, reason, and set the status.
- View scheduled, canceled, or completed appointments from the list.
- Use View, Edit, or Delete buttons to manage each record.

###Code Snippet##
**Here’s an example PHP code snippet showing how appointments are displayed in the Clinic TPS system:**
```bash
<?php
include 'db_connection.php';
$query = "SELECT * FROM appointments";
$result = mysqli_query($conn, $query);
?>

<table>
  <thead>
    <tr>
      <th>ID</th>
      <th>Patient</th>
      <th>Scheduled</th>
      <th>Reason</th>
      <th>Status</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php while($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
      <td><?= $row['id']; ?></td>
      <td><?= $row['patient_name']; ?></td>
      <td><?= $row['scheduled']; ?></td>
      <td><?= $row['reason']; ?></td>
      <td><?= $row['status']; ?></td>
      <td>
        <button>View</button>
        <button>Edit</button>
        <button>Delete</button>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
```
## Screenshot

Here’s a preview of the **Appointments Page** from the Clinic TPS System:
<img width="1919" height="899" alt="Clinic " src="https://github.com/user-attachments/assets/12c3cbd3-af1f-4433-855c-c41da823c2a6" />

## Contributors Garcia Jasmin M. , Bernal Yhoebe Rae 

## License

This project is developed as part of a **Midterm Examination** in **ITPC 115: SYSTEM INTEGRATION AND ARCHITECTURE 2**for academic purposes under the course requirements.  
It is intended **for educational use only** and not for commercial distribution or deployment.  

© 2025 Garcia Jasmin M. — All Rights Reserved.
