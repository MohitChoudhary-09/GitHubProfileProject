# GitHub Profile Project

This is a simple PHP-based project that fetches and displays your GitHub profile information. It uses the GitHub REST API v4 (GraphQL) along with a GitHub personal access token to retrieve the profile data.

## Project Overview

The project consists of the following files:

- `index.php`: The main PHP file that fetches and displays your GitHub profile information.
- `style.css`: A custom CSS file for styling the profile information.
- `bootstrap.min.css`: The Bootstrap CSS file for enhanced styling (downloaded from the official Bootstrap website).

## Requirements

- XAMPP: The project is designed to run on a local server. You need to have XAMPP installed to set up the local development environment. Download XAMPP from https://www.apachefriends.org/index.html and install it on your machine.

## Setup Instructions

1. Clone the repository or download the ZIP file.

2. Install XAMPP and start the Apache server.

3. Move the project folder ("GitHubProfileProject") to the appropriate location within your XAMPP installation. On Windows, the default root directory is `C:\xampp\htdocs\`, while on macOS, it's `/Applications/XAMPP/xamppfiles/htdocs/`.

4. Obtain a GitHub Personal Access Token by following these steps:
   - Go to your GitHub account settings: https://github.com/settings/profile
   - Click on "Developer settings" in the left sidebar.
   - Click on "Personal access tokens" and then click the "Generate new token" button.
   - Give the token a name (e.g., "GitHub Profile Project") and select the "read:user" scope.
   - Click the "Generate token" button at the bottom.
   - Copy the generated token.

5. Replace `'YOUR_GITHUB_PERSONAL_ACCESS_TOKEN'` in `index.php` with the GitHub Personal Access Token you obtained in the previous step.

6. Access the project in your web browser using the following URL: `http://localhost/GitHubProfileProject/index.php`

## Project Details

The `index.php` file fetches your GitHub profile data using the GitHub REST API v4 (GraphQL) and displays it on the page. The data includes your profile picture, name, username, follower count, following count, public repositories count, location, and bio.

The project uses PHP along with the `curl` extension to make API requests to GitHub.

## Contributions

Contributions to this project are welcome. Feel free to open issues or submit pull requests if you find any bugs, want to add new features, or improve the existing code.

## License

This project is licensed under the MIT License.


_Happy coding!_
