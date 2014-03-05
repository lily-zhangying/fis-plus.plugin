<?php

function smarty_compiler_framework_placeholder($params,  $smarty){
    $strCode = '<?php ';
    $strResourceApiPath = preg_replace('/[\\/\\\\]+/', '/', dirname(__FILE__) . '/FISResource.class.php');
    $strCode .= 'if(!class_exists(\'FISResource\', false)){require_once(\'' .$strResourceApiPath . '\');}';
    $strCode .= 'echo FISResource::frameworkHook();';
    $strCode .= '?>';
    return $strCode;
}

function smarty_compiler_framework_placeholderclose($params,  $smarty){
    return '';
}

