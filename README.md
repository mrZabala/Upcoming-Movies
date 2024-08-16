# Upcoming-Movies
![Screenshot](https://github.com/mrZabala/Upcoming-Movies/blob/main/image.png)

# Upcoming Marvel Movies Web Application

This is a simple web application that fetches data from the Marvel Cinematic Universe (MCU) API and displays information about the upcoming Marvel movies. The application uses PHP to handle API requests and JavaScript to manage responsiveness and dynamic content updates.

## Features

- **API Integration:** The app fetches data from the MCU API, specifically the next upcoming movie and the following production.
- **Responsive Design:** The layout adjusts to different screen sizes, and images change based on the window's width.
- **Dynamic Content:** The displayed movie information updates with each page load, and a refresh button allows for manual content reloading.

## Files Included

- **`index.php`:** The main PHP file that handles API requests and renders the HTML structure.
- **`style.css`:** The CSS file that manages the layout and design of the webpage.
- **`main.js`:** The JavaScript file that handles the dynamic image changes and page refresh functionality.
- **Images:** `rightA.png`, `downA.png`, `hh.png` - These are images used within the application, including the responsive arrow image.

## How It Works

1. **PHP API Request:**
   - The PHP script uses `cURL` to request data from the MCU API.
   - The data is decoded from JSON format and embedded within the HTML.

2. **Responsive Design:**
   - The CSS file includes media queries to adjust the layout based on the screen size.
   - The JavaScript function `changeImageOnResize()` changes the image based on the window's width, ensuring a responsive design.

3. **Dynamic Content:**
   - The `refresh()` function in JavaScript reloads the page to fetch the latest movie data.
   - The `changeImageOnResize()` function ensures that the correct image is displayed depending on the screen width.

## Installation and Usage

1. **Clone the repository:**
   ```bash
   git clone https://github.com/mrZabala/Upcoming-Movies.git
