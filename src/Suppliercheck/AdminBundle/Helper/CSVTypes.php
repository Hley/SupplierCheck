<?php 
// Fungus/ShortyBundle/Helper/CSVTypes.php
namespace Suppliercheck\AdminBundle\Helper;

class CSVTypes {
    const PRODUCT          = 1;
    const DATA            = 2;	

    public static function getTypes() {
        return array(
                self::PRODUCT         => 'Product',
                self::DATA           => 'DATA',

        );
    }

    public static function getTypesAndIds() {
        $all=self::getTypes();
        $return=array();
        foreach($all as $key => $value) {
            //$return[]=array(&quot;id&quot;=&amp;gt;$key,&quot;title&quot;=&amp;gt;$value);
            $return[]=array( "id"=> $key,"title"=> $value);
        }
        return $return;
    }

    public static function getNameOfType($type) {
        $allTypes=self::getTypes();
        if (isset($allTypes[$type])) return $allTypes[$type];
        //return &quot; - Unknown Type -&quot;;
        return " - Unknown Type -";
    }

    public static function getEntityClass($type) {
        switch ($type) {
            case self::PRODUCT:    return "SuppliercheckAdminBundle:Product"; //return &quot;AdminAdminBundle:Raetsel&quot;; 
            case self::DATA:      return "SuppliercheckAdminBundle:Data"; //return &quot;AdminAdminBundle:Spruch&quot;;
            default: return false;
        }
    }

    public static function existsType($type) {
        $allTypes=self::getTypes();
        if (isset($allTypes[$type])) return true;
        return false;
    }

}