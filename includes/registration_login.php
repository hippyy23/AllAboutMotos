<?php 

    $fname = "";
    $lname = "";
    $email = "";
    $username = "";
    $password = "";
    $errors = array();


    if (isset($_POST['singup_btn'])) {
        
        $fname = normalizeValue($_POST['fname']);
        $lname = normalizeValue($_POST['lname']);
        $email = normalizeValue($_POST['email']);
        $username = normalizeValue($_POST['username']);
        $password = normalizeValue($_POST['password']);
    
        $sql_user_check = "SELECT `email`, `username` FROM `user`
                        WHERE `username` = '$username'
                        OR `email` = '$email'";

        $result = mysqli_query($conn, $sql_user_check);
        

        if ($result->num_rows > 0) {
            $user = mysqli_fetch_assoc($result);
            if ($user['username'] === $username) {
                array_push($errors, "Username already taken!");
                $_SESSION['message'] = "Username already taken!";
            }
            if ($user['email'] === $email) {
                array_push($errors, "Email already in use!");
                $_SESSION['message'] = "Email already in use!";
            }
        } else {
            $password = md5($password);

            $sql_insert = "INSERT INTO `user` (`fname`, `lname`, `email`, `username`, `pword`)
                            VALUES ('$fname', '$lname', '$email', '$username', '$password')";

            mysqli_query($conn, $sql_insert);

            $user_id = mysqli_insert_id($conn);

            $_SESSION['user'] = getUserById($user_id);

            if (in_array($_SESSION['user']['role'], ["Admin", "Author"])) {
                $_SESSION['message'] = "You logged in!";

                header('location: ' . BASE_URL . 'admin/dashboard.php');
                exit(0);
            } else {
                $_SESSION['message'] = "You logged in!";

                header('location: index.php');
                exit(0);
            }
        }
    }

    if (isset($_POST['login_btn'])) {
        $username = normalizeValue($_POST['username']);
        $password = normalizeValue($_POST['password']);

        $password = md5($password);

        $sql = "SELECT * FROM `user`
                WHERE `username` = '$username'
                AND `pword` = '$password'";
        

        $result = mysqli_query($conn, $sql);

        if ($result->num_rows > 0) {
            $user_id = mysqli_fetch_assoc($result)['id'];

            $_SESSION['user'] = getUserById($user_id);

            if (in_array($_SESSION['user']['role'], ["Admin", "Author"])) {
                $_SESSION['message'] = "You logged in!";

                header('location: ' . BASE_URL . 'admin/dashboard.php');
                exit(0);

            } else {
                $_SESSION['message'] = "You logged in!";

                header('location: index.php');
                exit(0);
            }
        } else {
            $_SESSION['message'] = "Wrong credentials";
        }
    }

    function normalizeValue(String $value) {
        global $conn;

        $newval = mysqli_real_escape_string($conn, trim($value));

        return $newval;
    }

    function getUserById($id) {
        global $conn;

        $sql_get_id = "SELECT * FROM `user`
                        WHERE `id` = $id";

        $result = mysqli_query($conn, $sql_get_id);
        $user = mysqli_fetch_assoc($result);

        return $user;
    }
?>