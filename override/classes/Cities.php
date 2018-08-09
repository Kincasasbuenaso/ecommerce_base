<?php
class Cities extends ObjectModel
{
    
    public $id_city; 
    public $name;
    public $id_state;
    
    public  function __construct($id_city = null, $id_lang = null, $id_shop = null)
    {
        parent::__construct($id_city, $id_lang, $id_shop);
        
        if ($id_city)
            $this->name = self::getNameById($id_city);
    }
    
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'city',
        'primary' => 'id_city',
        'fields' => array(            
            'name'    => array('type' => self::TYPE_STRING, 'validate' => 'isGenericName', 'required' => true, 'size' => 255),
            'id_state' => array('type' => self::TYPE_STRING, 'validate' => 'isNullOrUnsignedId', 'required' => true, 'size' => 10)
        )
    );
    
    public function delete()
    {
        if (!parent::delete())
            return false;
        return true;        
    }
    
    /**
     * @brief Return available comunas
     *   
     *
     * @return Array Comunas
     */
   public static function getCities($id_state)
    {        
        $cities = array();
        if (!empty($id_state)) {
            $key = 'cities_chilexpress_'.$id_state;
            if (!Cache::isStored($key)) {
                $result = Db::getInstance(_PS_USE_SQL_SLAVE_)->ExecuteS('SELECT * FROM '._DB_PREFIX_.'city WHERE id_state = \''.pSQL($id_state).'\' ORDER BY name asc');
                            
                foreach ($result as $row){
                    $cities[] = $row;
                }

                Cache::store($key, $cities);
                return $cities;
            }
            return Cache::retrieve($key);
        }
        return $cities;
    }
    
    /**
     * Get a comuna name with its ID
     *     
     * @param string $id_comunas Comuna ID
     * @return string Comuna name
     */
    public static function getNameById($id_city)
    {
        $key = 'cities_getNameById_'.$id_city;
        if (!Cache::isStored($key)) {
            $result = Db::getInstance(_PS_USE_SQL_SLAVE_)->getValue("
                            SELECT `name`
                            FROM `"._DB_PREFIX_."city`
                            WHERE `id_city` = '".pSQL($id_city)."'"
                        );
            Cache::store($key, $result);
            return $result;
        }
        return Cache::retrieve($key);
    }
    
    public function update($null_values = false) {
        if (!$this->name)
            $this->name = Tools::getValue('name');
        if (!$this->id_state)
            $this->id_state = Tools::getValue('id_state');
        
        return parent::update($null_values);
    }
}