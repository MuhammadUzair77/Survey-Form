# Customer Feedback Survey

A modern, responsive survey form with client-side validation and PHP backend for storing responses.

## Features

- **5 Survey Questions** covering satisfaction, features, usage frequency, recommendations, and demographics
- **Client-side Validation** with error messages and smooth scrolling to errors
- **Custom Styled Inputs** for radio buttons and checkboxes
- **Responsive Design** works on all device sizes
- **Success Feedback** with animated response message
- **Data Persistence** saves responses to a text file

## Technologies Used

- **Frontend**: HTML5, CSS3, JavaScript
- **Backend**: PHP for data storage
- **Styling**: Custom CSS with modern design principles
- **Fonts**: Google Fonts (Inter)

## File Structure

- `index.html` - Main survey form with all styling and client-side logic
- `save_survey.php` - PHP endpoint that processes and stores survey responses

## How It Works

1. Users complete the survey form with 5 questions
2. JavaScript validates all required fields before submission
3. Validated data is sent to `save_survey.php` via POST request
4. PHP script formats and appends the response to `survey.txt`
5. User receives success confirmation with animated message

## Implementation Notes

- No database required - responses are stored in `survey.txt`
- Simple to deploy on any PHP-enabled web server
- Includes accessibility considerations in form design
- Features smooth animations and transitions for better UX

## Usage

Simply upload to a web server with PHP support. The survey will be immediately functional with no additional setup required.
