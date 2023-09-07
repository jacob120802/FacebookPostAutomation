# Facebook Post Automation

The Facebook Post Automation project allows you to automate the process of posting content on a Facebook page using the Facebook Graph API.

## Table of Contents
- [Prerequisites](#prerequisites)
- [Getting Started](#getting-started)
  - [Installation](#installation)
  - [Configuration](#configuration)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)
- [Reference](#reference)

## Prerequisites
Before getting started with the Facebook Post Automation project, ensure you have the following prerequisites:
- Web server environment (e.g., XAMPP, WAMP, LAMP) installed on your local machine or a web hosting provider.
- PHP installed and configured in your web server environment.
- Facebook Developer account with an access token for the desired Facebook page.

## Getting Started
Follow the steps below to get started with the Facebook Post Automation project.

### Installation
1. Clone the repository: git clone https://github.com/jacob120802/FacebookPostAutomation.git
Alternatively, you can download the source code as a ZIP file and extract it to a directory of your choice.

2. Place the project folder at the designated place. (For example, if you are using XAMPP for PHP, place it in the `C:\xampp\htdocs` location.)

### Configuration
To configure the Facebook Post Automation project, follow these steps:

1. Obtain an Access Token:
- Create a Facebook app on the Facebook Developer Portal.
- Follow the authentication process to obtain an access token. Refer to the Facebook documentation for detailed instructions on how to obtain an access token.
  [Facebook Graph API Explorer](https://developers.facebook.com/tools/explorer/)

2. Configure the Script:
- Open the `post.php` file in a text editor.
- Replace the `YOUR_ACCESS_TOKEN` placeholder with the access token you obtained.

## Usage
To use the Facebook Post Automation project, follow these steps:

1. Access the Form:
- Open a web browser.
- Enter the URL where you uploaded the project files. For example: `http://localhost/foldername` if you are running it locally. Replace `foldername` in the URL with the name of the project folder you extracted.

2. Fill in the Form:
- Enter the access token you obtained in the Access Token field.
- Enter the Page ID of the Facebook page where you want to post in the Page ID field. You can find the page ID by navigating to your Facebook page's settings and looking for the Page ID.
- Type your desired post message in the Post Message textarea.

3. Submit the Form:
- Click the "Post on Facebook" button to submit the form.
- The script will validate the access token and perform the Facebook API request to post the message on the specified page.

4. View the Result:
- After submitting the form, the script will display a result message below the form.
- If the post is created successfully, you will see the message "Post created successfully!!!" displayed. Otherwise, you will see an appropriate error message indicating the reason for failure.

## Contributing
Contributions to the Facebook Post Automation project are welcome! If you would like to contribute, please follow these steps:

1. Fork the repository on GitHub.
2. Create a new branch for your feature or bug fix.
3. Develop your changes.
4. Commit your changes and push them to your forked repository.
5. Submit a pull request describing your changes.

## Reference
For getting the Page ID and Access Token, refer to this video tutorial: [Facebook API Tutorial](https://www.youtube.com/watch?v=CEZhr3c5uWY)
For creating an access token, refer to the [Facebook Graph API documentation](https://developers.facebook.com/docs/graph-api/get-started)

