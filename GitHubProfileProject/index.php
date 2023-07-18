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
        $github_username = 'GitHub username'; // Replace with your GitHub username
        $token = 'Access Token'; // Replace with your GitHub Personal Access Token

        $query = <<<EOL
{
  user(login: "{$github_username}") {
    avatarUrl
    name
    login
    followers {
      totalCount
    }
    following {
      totalCount
    }
    repositories {
      totalCount
    }
    location
    bio
  }
}
EOL;

        $url = 'https://api.github.com/graphql';
        $data = json_encode(['query' => $query]);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: bearer ' . $token));
        $result = curl_exec($ch);
        curl_close($ch);

        $response = json_decode($result, true);

        if (isset($response['data']['user'])) {
            $profile = $response['data']['user'];
            echo '<img src="' . $profile['avatarUrl'] . '" class="avatar">';
            echo '<h1>' . $profile['name'] . '</h1>';
            echo '<p>Username: @' . $profile['login'] . '</p>';
            echo '<p>Followers: ' . $profile['followers']['totalCount'] . '</p>';
            echo '<p>Following: ' . $profile['following']['totalCount'] . '</p>';
            echo '<p>Public Repositories: ' . $profile['repositories']['totalCount'] . '</p>';
            echo '<p>Location: ' . $profile['location'] . '</p>';
            echo '<p>Bio: ' . $profile['bio'] . '</p>';
        } else {
            echo '<h1>GitHub profile not found!</h1>';
        }
        ?>
    </div>
</body>
</html>
