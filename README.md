# CAMPUS-CAPTURES (College Photo Management Website)
Campus Captures is a secure web application for storing and organizing college event photos. It addresses photo management challenges by offering effective organization, easy accessibility, and long-term preservation. Key features include robust security, an intuitive interface, and tools for efficient categorizing and retrieval of photos.

This project is a comprehensive photo management website for a college, created as a part of a first-year PBL (Project-Based Learning) group project. The website serves as a centralized hub for storing, organizing, and accessing campus-related photos, catering to the diverse needs of students, faculty, staff, administrators, and alumni.

## Key Design

1. **Home Page**: 
   - Displays a navigation bar to guide the user through the options of clubs, admin login, and about.
   - Users can select the club they wish to view the gallery of.
   - Admin can select the admin login option to modify the content of the respective club.

2. **Admin Login Page**: 
   - Admin needs to enter the correct email address, username, and password to proceed.
   - Only the admin has access to upload or delete photos from the website.
   - The page contains "view as guest" and "forgot password" options.
   - "View as guest" redirects the user to the home page. "Forgot password" allows the admin to reset the password.

3. **Admin Home Page**: 
   - Displays events sorted in a tabular form.
   - Admin can select "Add Event" to add an event.
   - Admin can view and download images of a particular event by selecting the view option.
   - "Modify Entry" allows updating event details and deleting images.
   - Admin can delete the whole event using the delete option in the table.

4. **Guest Gallery**: 
   - Displays a compilation of images and details of different events organized by the chosen club.

## Technologies Used

The project is divided into three major parts:
1. **Front End**: HTML, CSS, JavaScript
2. **Back End**: PHP
3. **Database Management**: SQL Server

## Installation

1. Clone the repository:
    ```bash
    git clone https://github.com/prajwalpkp2106/CAMPUS-CAPTURES.git
    ```

2. Navigate to the project directory:
    ```bash
    cd projectname
    ```

3. Set up the database:
    - Import the SQL file into your SQL server.
    - Configure the database connection in the `config.php` file.

4. Start a local server to run the PHP application.

## Usage

- Navigate to the home page to explore the gallery and available options.
- Admin can log in to manage the content and events.
- Guests can view the gallery and enjoy the photos of different events.

## Screenshots

<img src="screenshots/Screenshot (627).png" alt="Image Description">
<img src="Screenshot (628).png" alt="Image Description">
<img src="Screenshot (629).png" alt="Image Description">
<img src="Screenshot (630).png" alt="Image Description">
<img src="Screenshot (631).png" alt="Image Description">
<img src="Screenshot (632).png" alt="Image Description">
<img src="Screenshot (633).png" alt="Image Description">
<img src="Screenshot (634).png" alt="Image Description">
