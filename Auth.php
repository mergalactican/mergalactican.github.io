<?

session_start();

require "DataBase.php";

class Auth
{
    protected $db;

    public function __construct()
    {
        $this->db = new DataBase();
        if (!empty($_POST['method'])) {
            $m = $_POST['method'];
            $this->$m();
        }
    }

    public function register()
    {
        $first_name = $this->db->check_val($_POST['first_name']);
        $last_name = $this->db->check_val($_POST['last_name']);
        $email = $this->db->check_val($_POST['email']);
        $password = $this->db->check_val($_POST['password']);

        if (empty($first_name) && empty($last_name) && empty($email) && empty($password)) {
            $e['status'] = 'error';
            $e['message'] = 'Вы не заполнили все поля';
            echo json_encode($e);
            $_SESSION['text'] = $e['message'];
            echo '<script>setTimeout(() => location.reload(), 300);</script>';
            exit;
        } else {
            $e['status'] = 'success';
            $e['message'] = 'Успешная регистрация';
            print_r(json_encode($e));
            $_SESSION['text'] = $e['message'];
        }

        if ($first_name === '') {
            $e['status'] = 'error';
            $e['message'] = 'Вы не заполнили имя';
            print_r(json_encode($e));
            $_SESSION['text'] = $e['message'];
            exit;
        }

        if ($last_name === '') {
            $e['status'] = 'error';
            $e['message'] = 'Вы не заполнили фамилию';
            print_r(json_encode($e));
            $_SESSION['text'] = $e['message'];
            exit;
        }

        if ($email === '') {
            $e['status'] = 'error';
            $e['message'] = 'Вы не заполнили почту';
            print_r(json_encode($e));
            $_SESSION['text'] = $e['message'];
            exit;
        }

        if ($password === '') {
            $e['status'] = 'error';
            $e['message'] = 'Вы не заполнили пароль';
            print_r(json_encode($e));
            $_SESSION['text'] = $e['message'];
            exit;
        }

        $e = $this->checkByEmail($email);
        if ($e['status'] == 'success') {
            $e['status'] = 'error';
            $e['message'] = 'Почта уже зарегистрировано';
            print_r(json_encode($e));
            $_SESSION['text'] = $e['message'];
            exit;
        }

        $q = "INSERT INTO `users` (`first_name`, `last_name`,`email`,`password`) VALUES ('$first_name', '$last_name', '$email', '$password')";
        $r = $this->db->insert($q);
        print_r(json_encode($r));
    }

    public function checkByEmail($email)
    {
        $query = "SELECT * FROM `users` WHERE `email` = '$email'";
        return $this->db->get($query);
    }

    public function login()
    {
        $email = $this->db->check_val($_POST['email']);
        $password = $this->db->check_val($_POST['password']);
    }
}
