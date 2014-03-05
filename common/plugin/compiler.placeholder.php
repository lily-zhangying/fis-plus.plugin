<?php

function smarty_compiler_placeholder($arrParams,  $smarty){
    $strCode = '<?php ';
    $strMode = $arrParams['mode'];
    $strResourceApiPath = preg_replace('/[\\/\\\\]+/', '/', dirname(__FILE__) . '/FISResource.class.php');
    $strCode .= 'if(!class_exists(\'FISResource\', false)){require_once(\'' .$strResourceApiPath . '\');}';
    $strCode .= 'echo FISResource::placeHolder(' . $strMode .');';
    $strCode .= '?>';
    return $strCode;
}

function smarty_compiler_placeholderclose($params,  $smarty){
    return '';
}

