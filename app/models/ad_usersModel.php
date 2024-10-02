<?php 

 class ad_usersModel extends Model{

    public $id;
    public $user_name;
    public $user_account;
    public $user_acc_pas;
    public $depto;
 

 public function add(){

        $sql = 'INSERT INTO tbl_ad_pass (user_name, user_account, user_acc_pas, depto)
        VALUES (:user_name, :user_account, :user_acc_pas, :depto)';
        $user =
        [
            'user_name' => $this->user_name,
            'user_account' => $this->user_account,
            'user_acc_pas' => $this->user_acc_pas,
            'depto' => $this->depto

        ];  
        try {
        return $this->id = parent::query($sql, $user) ? $this->id : false;
        } catch (Exception $e) {
            echo 'Hubo un error: '.$e->getMessage();
                }        //throw $th;
    }
    public function update(){

        $sql = 'UPDATE tbl_ad_pass SET user_name=:user_name, user_account=:user_account, user_acc_pas=:user_acc_pas, 
        depto=:depto WHERE id=:id';
        $user =
        [
            'id' => $this->id,
            'user_name' => $this->user_name,
            'user_account' => $this->user_account,
            'user_acc_pas' => $this->user_acc_pas,
            'depto' => $this->depto

        ];  
        try {
        return $this->id = parent::query($sql, $user) ? true: false;
        } catch (Exception $e) {
            throw $e;// 'Hubo un error: '.$e->getMessage();
                }        //throw $th;
    }

    public function all()
{
    $sql = 'SELECT * FROM tbl_ad_pass ORDER BY user_name ASC;';
    try {
        return ($rows = parent::query($sql, null)) ? $rows : false;
    } catch (Exception $e) {
        throw $e;
    }
    
}
}