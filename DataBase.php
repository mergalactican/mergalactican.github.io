<?

class DataBase
{
    public $db;

    public function __construct()
    {
        $this->db = new mysqli('127.127.126.50', 'root', '', 'app');
        if ($this->db->connect_error) {
            print_r($this->db->connect_error);
            exit;
        }
    }

    public function insert($q)
    {
        $m = (!empty($_POST['method'])) ? $_POST['method'] : '';
        if ($this->db->query($q)) {
            return ['status' => 'success', 'method' => $m, 'message' => 'inserted'];
        } else {
            return ['status' => 'failed', 'method' => $m, 'message' => $this->db->error];
        }
    }

    public function get($q)
    {
        $m = (!empty($_POST['method'])) ? $_POST['method'] : '';
        $r = $this->db->query($q);

        if ($r->num_rows > 0) {
            return ['status' => 'success', 'method' => $m, 'message' => $r->fetch_assoc()];
        } else if ($r->num_rows == 0) {
            return ['status' => 'failed', 'method' => $m, 'message' => '0 not found'];
        } else {
            return ['status' => 'failed', 'method' => $m, 'message' => $this->db->error];
        }
    }

    public function get_all($q)
    {
        $m = (!empty($_POST['method'])) ? $_POST['method'] : '';
        $r = $this->db->query($q);

        if ($r->num_rows > 0) {
            return ['status' => 'success', 'method' => $m, 'message' => $r->fetch_all(MYSQLI_ASSOC)];
        } else if ($r->num_rows == 0) {
            return ['status' => 'failed', 'method' => $m, 'message' => 'o not found'];
        } else {
            return ['status' => 'failed', 'method' => $m, 'message' => $this->db->error];
        }
    }

    public function update_delete($q)
    {
        $m = (!empty($_POST['method'])) ? $_POST['method'] : '';
        if ($this->db->query($q)) {
            if ($this->db->affected_rows > 0) {
                return ['status' => 'success', 'method' => $m, 'message' => 'done'];
            } else {
                return ['status' => 'failed', 'method' => $m, 'message' => 'no changes'];
            }
        } else {
            return ['status' => 'failed', 'method' => $m, 'message' => $this->db->error];
        }
    }

    public function get_last_id()

    {
        return $this->db->insert_id;
    }

    function check_val($v) 
    
    {
        $v = trim($v);
        $v = strip_tags($v);
        $v = stripslashes($v);
        $v = htmlspecialchars($v);
        return $v;
    }
}

?>
