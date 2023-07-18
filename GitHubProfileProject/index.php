<!DOCTYPE html>
<html>
<head>
    <title>My GitHub Profile</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container mt-5">
        <?php
        $github_username = 'Megha-02'; // Replace with your GitHub username
        $url = 'https://api.github.com/users/' . $github_username;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $data = curl_exec($ch);
        curl_close($ch);

        $profile = json_decode($data, true);

        if (isset($profile['login'])) {
            echo '<img src="' . $profile['avatar_url'] . '" class="avatar">';
            echo '<h1>' . $profile['name'] . '</h1>';
            echo '<p>Username: @' . $profile['login'] . '</p>';
            echo '<p>Followers: ' . $profile['followers'] . '</p>';
            echo '<p>Following: ' . $profile['following'] . '</p>';
            echo '<p>Public Repositories: ' . $profile['public_repos'] . '</p>';
            echo '<p>Location: ' . $profile['location'] . '</p>';
            echo '<p>Bio: ' . $profile['bio'] . '</p>';
        } else {
            echo '<h1>GitHub profile not found!</h1>';
        }
        ?>
    </div>
</body>
</html>
