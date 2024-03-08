<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

//	CSRF protection
if( !isPostRequest() )
	return;

if(!isLogged())
{ 
	return;
}
if( !Security::isAdmin() )
{
	return;
}
$nonAdminTablesArr = array();
$nonAdminTablesArr[] = "cargo";
$nonAdminTablesArr[] = "concertacion_po";
$nonAdminTablesArr[] = "usuario";
$nonAdminTablesArr[] = "tparam_vigencia";
$nonAdminTablesArr[] = "tparam_periodo";
$nonAdminTablesArr[] = "tparam_estados_eval";
$nonAdminTablesArr[] = "dependencias_001";
$nonAdminTablesArr[] = "dependencia";
$nonAdminTablesArr[] = "nombramiento";
$nonAdminTablesArr[] = "compromisofuncional";
$nonAdminTablesArr[] = "tparam_tipoacuerdo";
$nonAdminTablesArr[] = "tparam_estados_compromisos";
$nonAdminTablesArr[] = "tparam_ponderacion";
$nonAdminTablesArr[] = "evaluacion";
$nonAdminTablesArr[] = "q_edl2_ctrl_valor_af_002";
$nonAdminTablesArr[] = "comportamental_comun";
$nonAdminTablesArr[] = "comportamental_jerarquica";
$nonAdminTablesArr[] = "comportamental";
$nonAdminTablesArr[] = "competencia";
$nonAdminTablesArr[] = "conducta";
$nonAdminTablesArr[] = "tparam_puntaje";
$nonAdminTablesArr[] = "concertacion_po_2";
$nonAdminTablesArr[] = "compromisofuncional_2";
$nonAdminTablesArr[] = "comportamental_comun_2";
$nonAdminTablesArr[] = "comportamental_jerarquica_2";
$nonAdminTablesArr[] = "concertacion_po_3";
$nonAdminTablesArr[] = "compromisofuncional_3";
$nonAdminTablesArr[] = "comportamental_comun_3";
$nonAdminTablesArr[] = "comportamental_jerarquica_3";
$nonAdminTablesArr[] = "concertacion_po_3s";
$nonAdminTablesArr[] = "concertacion_po_3se";
$nonAdminTablesArr[] = "help";
$nonAdminTablesArr[] = "q_graph_estado Chart";
$nonAdminTablesArr[] = "concertacion_th";
$nonAdminTablesArr[] = "comportamental_jerarquica_th";
$nonAdminTablesArr[] = "comportamental_comun_th";
$nonAdminTablesArr[] = "compromisofuncional_th";
$nonAdminTablesArr[] = "evaluacion_po";
$nonAdminTablesArr[] = "tparam_estados_evaluacion_p";
$nonAdminTablesArr[] = "tparam_vigencia_eval";
$nonAdminTablesArr[] = "evaluacion_p_comportamental";
$nonAdminTablesArr[] = "evaluacion_p_funcional";
$nonAdminTablesArr[] = "evaluacion_p";
$nonAdminTablesArr[] = "tparam_estados_calificacion";
$nonAdminTablesArr[] = "evidencias_p";
$nonAdminTablesArr[] = "evaluacion_seguimiento";
$nonAdminTablesArr[] = "q_caldef_p_x005";
$nonAdminTablesArr[] = "q_global_evaluadores";
$nonAdminTablesArr[] = "evaluacion_x005";
$nonAdminTablesArr[] = "tparam_estados";
$nonAdminTablesArr[] = "calificacion_definitiva";
$nonAdminTablesArr[] = "funcionario";
$nonAdminTablesArr[] = "q_caldef_p_x005_adm";
$nonAdminTablesArr[] = "evaluacion_p_th";
$nonAdminTablesArr[] = "evaluacion_p_funcional_th";
$nonAdminTablesArr[] = "evaluacion_p_comportamental_th";
$nonAdminTablesArr[] = "evidencias_p_th";
$nonAdminTablesArr[] = "evaluador_final";
$nonAdminTablesArr[] = "q_caldef_p_x005_evaluador";
$nonAdminTablesArr[] = "q_global_users_edl2";
$nonAdminTablesArr[] = "q_global_evaluadores_edl2";
$nonAdminTablesArr[] = "funcionario_adm";
$nonAdminTablesArr[] = "usuario_adm";
$nonAdminTablesArr[] = "cargo_adm";
$nonAdminTablesArr[] = "dependencia_adm";
$nonAdminTablesArr[] = "dependencias_sup_adm";
$nonAdminTablesArr[] = "tparam_sn";
$nonAdminTablesArr[] = "contrato";
$nonAdminTablesArr[] = "perfil";

$ug_connection = $cman->getForUserGroups();

$cbxNames = array('add' => array('mask' => 'A', 'rightName' => 'add')
	, 'edt' => array('mask' => 'E', 'rightName' => 'edit')
	, 'del' => array('mask' => 'D', 'rightName' => 'delete')
	, 'lst' => array('mask' => 'S', 'rightName' => 'list')
	, 'exp' => array('mask' => 'P', 'rightName' => 'export')
	, 'imp' => array('mask' => 'I', 'rightName' => 'import')
	, 'adm' => array('mask' => 'M'));

$wGroupTableName = $ug_connection->addTableWrappers( "gestionedl_uggroups" );
	
switch(postvalue("a"))
{
	case "add":
		$sql = "insert into ". $wGroupTableName ." (". $ug_connection->addFieldWrappers( "Label" ) .")"
			." values (". $ug_connection->prepareString( postvalue("name") ). ")";		
		$ug_connection->exec( $sql );

		$sql = "select max(". $ug_connection->addFieldWrappers( "GroupID") .") from ". $wGroupTableName;
		$data = $ug_connection->query( $sql )->fetchNumeric();
		
		echo printJSON( array('success' => true, 'id' => $data[0]) );
		break;
		
	case "del":
		$sql = "delete from ". $wGroupTableName ." where ". $ug_connection->addFieldWrappers("GroupID") ."=".(postvalue_number("id"));
		$ug_connection->exec( $sql );
		
		$sql = "delete from ". $ug_connection->addTableWrappers( "gestionedl_ugrights" ) 
			." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=".(postvalue_number("id"));
		$ug_connection->exec( $sql );

		// delete records from ugmembers table	
		$dataSource = Security::getUgMembersDatasource();
		$dc = new DsCommand();
		$dc->filter = DataCondition::FieldEquals( "GroupID", postvalue_number("id") ); 
		$dataSource->deleteSingle( $dc, false );
		
		echo printJSON( array('success' => true) );
		break;
		
	case "rename":
		$sql = "update ". $wGroupTableName  
			." set ". $ug_connection->addFieldWrappers( "Label" ) ."=". $ug_connection->prepareString( postvalue("name") )
			." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=".(postvalue_number("id"));
		$ug_connection->exec( $sql );
		
		echo printJSON( array('success' => true) );
		break;
	
	// @deprecated 
	// see ug_rights
	case 'saveRights':
		$error = '';
		if( postvalue('state') )
		{	
			$allRights = array();
			$sql = "select ". $ug_connection->addFieldWrappers( "GroupID" ) 
				.", ". $ug_connection->addFieldWrappers( "TableName" ) 
				.", ". $ug_connection->addFieldWrappers( "AccessMask" ) ." from ". $wGroupTableName;
			
			$qResult = $ug_connection->query( $sql );
			// don't use fetchAssoc! because of ORACLE and PostgreSQL
			while( $rightsRow = $qResult->fetchNumeric() )
			{
				$allRights[] = $rightsRow;
			}
			
			$wRightsTableName = $ug_connection->addTableWrappers( "gestionedl_ugrights" );
			
			$delGroupId = 0;
			$state = my_json_decode( postvalue('state') );
			// delete all extra permissions from db
			foreach($allRights as $i => $rightValue)
			{
				$groupIDInt = (int) $rightValue[0];
				
				if($groupIDInt == $delGroupId)
					continue;
					
				//delete all extra permissions for group
				if( !array_key_exists($groupIDInt, $state) )
				{
					$sql = "delete from ". $wRightsTableName 
						." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=". $groupIDInt;
					$ug_connection->exec( $sql );
				}
				//delete all extra permissions for table in group
				else if(!array_key_exists(GetTableId($data[1]), $state[$groupIDInt]))
				{
					$sql = "delete from ". $wRightsTableName 
						." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=". $groupIDInt 
						." and ". $ug_connection->addFieldWrappers( "TableName" ) ."=".$ug_connection->prepareString( html_special_decode($data[1]) );				
					$ug_connection->exec( $sql );
				}
			}
			
			$realTables = GetRealValues();
			foreach ($state as $groupId => $groupRights)
			{
				foreach ($groupRights as $table => $mask)
				{
					if( !array_key_exists($table, $realTables) )
						continue;
					
					$ins = true;
					foreach($allRights as $i => $rightValue)
					{	
						if($rightValue[0] == $groupId && $rightValue[1] == $realTables[$table])	
						{
							$ins = false;
							if($data[2]!= $mask)
							{
								$sql ="update". $wRightsTableName 
									." set ". $ug_connection->addFieldWrappers( "AccessMask" ) ."=". $ug_connection->prepareString( $mask )
									." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=". $groupId 
									." and ". $ug_connection->addFieldWrappers( "TableName" ) ."=". $ug_connection->prepareString( html_special_decode($realTables[$table]) );
								$ug_connection->exec( $sql );
							}
						}
					}
					if($ins)
					{
						$sql = "insert into ". $wRightsTableName
							." (". $ug_connection->addFieldWrappers( "TableName" ) 
							.", ". $ug_connection->addFieldWrappers( "GroupID" ) 
							.", ". $ug_connection->addFieldWrappers( "AccessMask" ) .") " 
							."values (". $ug_connection->prepareString(html_special_decode($realTables[$table])) .", ". $groupId .", ". $ug_connection->prepareString($mask)  .")";
						$ug_connection->exec( $sql );
					}
					
					$error = $ug_connection->lastError();
				}
			}
		}
		
		getJSONResult($error);
		break;
}

function GetTableId($name)
{
	$tbls = GetRealValues();
	for($i = 0;$i < count($tbls); $i++)
	{
		if($tbls[$i] == $name)
			return $i;
	}
	return -1;
}

/**
 * GetRealValues
 * Form array with real users or tables names
 * @return {array} array of reaf names
 */
function GetRealValues()
{
	$result = array();
	if(postvalue('realValues'))
		$realValues = my_json_decode(postvalue('realValues'));
		foreach ($realValues as $key =>$value)
			$result[$key] = $value;
	return $result;
}

/**
 * getJSONResult
 * Form result as a JSON object according of errors
 * @param {string} list of errors
 */
function getJSONResult($error)
{
	$result['success'] = $error == '';
	$result['error'] = $error;	
	echo printJSON($result);
}