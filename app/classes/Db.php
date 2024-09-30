<?php 

 
class Db{
    private $link;
    private $engine;
    private $host;
    private $name;
    private $user;
    private $pass;
    private $charset;

    public function __construct()
    {
        $this->engine = IS_LOCAL ? LocalDB_ENGINE : DB_ENGINE;
        $this->host = IS_LOCAL ? LocalDB_HOST : DB_HOST;
        $this->name  = IS_LOCAL ? LocalDB_NAME : DB_NAME;
        $this->user  = IS_LOCAL ? LocalDB_USER : DB_USER;
        $this->pass  = IS_LOCAL ? LocalDB_PASS : DB_PASS;
        $this->charset  = IS_LOCAL ? LocalDB_CHARSET : DB_CHARSET;
        return $this;

    }

    public function connect(){ 
        try {
    $this->link = new PDO($this->engine.':host='.$this->host.';dbname='.$this->name.';charset='.
    $this->charset,$this->user,$this->pass);
    return $this->link;
   } catch (PDOException $e) {
    die(sprintf('No hay conexión con la base de datos, hubo un error: %s', $e->getMessage()));
   
   }

    }
        
    /**
     * Método para hacer una consulta a la DB
     * @param string $sql
     * @param array $param
     * @return void
     */
    public static function query($sql, $params){

        $db = new self();
        $link =$db->connect();//conexión a DB
        $link->beginTransaction(); 
        $query = $link->prepare($sql);

            //Esta condición no manda errores en el query, sintaxis, no hay DB etc.
        if(!$query->execute($params)){
            $link->rollBack();//Puede hacer un rollback si sucede un error
            $error =  $query->errorInfo();//Regresa un array con el error
            //Index 0 Tipo de error
            //Index 1 código de error
            //Index 2 Mensaje de error al usuario
            throw new Exception($error[2]);//Se manda sólo el mensaje de error
        }
        //Manejar el tipo de consulta

        if(strpos($sql, 'SELECT')!== false){
            //Cuenta las filas que hay si hay un SeLECT
            return $query->rowCount() > 0 ? $query->fetchAll() : false;
        }elseif(strpos($sql,'INSERT')!==false){

            $id = $link->lastInsertId();//Busca el último ID insertado
            $link->commit();//Guarda los cambios a la DB
            return $id; //regresa el último id insertado
        }elseif(strpos($sql, 'UPDATE')!== false){
            $link->commit();

        }elseif(strpos($sql, 'DELETE')!== false){
            if($query->rowCount()> 0){
                $link->commit();
                return true;
            }
            $link->rollBack();
            return false;
        }else {
            $link->commit();
            return true;
        }

    }

}