<?php

function smarty_compiler_script_sync($params,  $smarty){
    $strCode = '<?php ';
    if (isset($params['id'])) {
        $strResourceApiPath = preg_replace('/[\\/\\\\]+/', '/', dirname(__FILE__) . '/FISResource.class.php');
        $strCode .= 'if(!class_exists(\'FISResource\', false)){require_once(\'' . $strResourceApiPath . '\');}';
        $strCode .= 'FISResource::$cp = ' . $params['id'].';';
    }
    $strCode .= 'ob_start();?>';
    return $strCode;
}

function smarty_compiler_script_syncclose($params,  $smarty){
    $strResourceApiPath = preg_replace('/[\\/\\\\]+/', '/', dirname(__FILE__) . '/FISResource.class.php');
    $strCode  = '<?php ';
    $strCode .= '$script=ob_get_clean();';
    $strCode .= 'if($script!==false){';
    $strCode .= 'if(!class_exists(\'FISResource\', false)){require_once(\'' . $strResourceApiPath . '\');}';
    $strCode .= 'FISResource::syncFramework($_smarty_tpl->smarty);';
    $strCode .=     'if(FISResource::$cp){';
    $strCode .=         'if (!in_array(FISResource::$cp, FISResource::$arrEmbeded)){';
    $strCode .=             'echo "<script type=\'text/javascript\'>" . $script . "</script>";';
    $strCode .=             'FISResource::$arrEmbeded[] = FISResource::$cp;';
    $strCode .=         '}';
    $strCode .=     '} else {';
    $strCode .=         'echo "<script type=\'text/javascript\'>" . $script . "</script>";';
    $strCode .=     '}';
    $strCode .= '}';
    $strCode .= 'FISResource::$cp = false;?>';
    return $strCode;
}

