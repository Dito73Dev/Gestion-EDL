<?php

$dal_info = array();

/**
 * User API function
 * @param String sql
 */
function UsersTableName()
{
	global $cman;
	$connection = $cman->getForLogin();
	return $connection->addTableWrappers(Security::loginTable());
}

/**
 * User API function
 * It uses the default db connection
 * @param String dalSQL
 */
function CustomQuery($dalSQL)
{
	$connection = getDefaultConnection();
	$result = $connection->query( $dalSQL );
	if($result)
		return $result;
}

/**
 * User API function
 * It uses the default db connection 
 * @param String sql
 */
function DBLookup($sql)
{
	$connection = getDefaultConnection();
	$data = $connection->query( $sql )->fetchAssoc();

	if( $data )
		return reset($data);
	  
	return null;
}

/**
  * Data Access Layer.
  */
class tDAL
{
	var $tbledl_at_127_0_0_1__cargo;
	var $tbledl_at_127_0_0_1__comportamental;
	var $tbledl_at_127_0_0_1__contrato;
	var $tbledl_at_127_0_0_1__dependencia;
	var $tbledl_at_127_0_0_1__dependencias_001;
	var $tbledl_at_127_0_0_1__funcionario;
	var $tbledl_at_127_0_0_1__gestionedl_uggroups;
	var $tbledl_at_127_0_0_1__gestionedl_ugmembers;
	var $tbledl_at_127_0_0_1__gestionedl_ugrights;
	var $tbledl_at_127_0_0_1__help;
	var $tbledl_at_127_0_0_1__nombramiento;
	var $tbledl_at_127_0_0_1__perfil;
	var $tbledl_at_127_0_0_1__q_global_evaluadores;
	var $tbledl_at_127_0_0_1__q_global_evaluadores_edl2;
	var $tbledl_at_127_0_0_1__q_global_users_edl2;
	var $tbledl_at_127_0_0_1__tparam_estados;
	var $tbledl_at_127_0_0_1__tparam_sn;
	var $tbledl_at_127_0_0_1__usuario;
	var $tbledl2_at_127_0_0_1__calificacion_definitiva;
	var $tbledl2_at_127_0_0_1__competencia;
	var $tbledl2_at_127_0_0_1__comportamental;
	var $tbledl2_at_127_0_0_1__comportamental_comun;
	var $tbledl2_at_127_0_0_1__comportamental_jerarquica;
	var $tbledl2_at_127_0_0_1__compromisofuncional;
	var $tbledl2_at_127_0_0_1__conducta;
	var $tbledl2_at_127_0_0_1__evaluacion;
	var $tbledl2_at_127_0_0_1__evaluacion_p;
	var $tbledl2_at_127_0_0_1__evaluacion_p_comportamental;
	var $tbledl2_at_127_0_0_1__evaluacion_p_funcional;
	var $tbledl2_at_127_0_0_1__evaluacion_seguimiento;
	var $tbledl2_at_127_0_0_1__evaluador_final;
	var $tbledl2_at_127_0_0_1__evidencias_p;
	var $tbledl2_at_127_0_0_1__q_caldef_p_x005;
	var $tbledl2_at_127_0_0_1__q_edl2_ctrl_valor_af_002;
	var $tbledl2_at_127_0_0_1__q_graph_estado;
	var $tbledl2_at_127_0_0_1__tparam_estados_calificacion;
	var $tbledl2_at_127_0_0_1__tparam_estados_compromisos;
	var $tbledl2_at_127_0_0_1__tparam_estados_eval;
	var $tbledl2_at_127_0_0_1__tparam_estados_evaluacion_p;
	var $tbledl2_at_127_0_0_1__tparam_periodo;
	var $tbledl2_at_127_0_0_1__tparam_ponderacion;
	var $tbledl2_at_127_0_0_1__tparam_puntaje;
	var $tbledl2_at_127_0_0_1__tparam_tipoacuerdo;
	var $tbledl2_at_127_0_0_1__tparam_vigencia;
	var $tbledl2_at_127_0_0_1__tparam_vigencia_eval;
	var $lstTables;
	var $Table = array();

	function FillTablesList()
	{
		if($this->lstTables)
			return;
		$this->lstTables[] = array("name" => "cargo", "varname" => "edl_at_127_0_0_1__cargo", "altvarname" => "cargo", "connId" => "edl_at_127_0_0_1", "schema" => "", "connName" => "edl_user at 127.0.0.1");
		$this->lstTables[] = array("name" => "comportamental", "varname" => "edl_at_127_0_0_1__comportamental", "altvarname" => "comportamental", "connId" => "edl_at_127_0_0_1", "schema" => "", "connName" => "edl_user at 127.0.0.1");
		$this->lstTables[] = array("name" => "contrato", "varname" => "edl_at_127_0_0_1__contrato", "altvarname" => "contrato", "connId" => "edl_at_127_0_0_1", "schema" => "", "connName" => "edl_user at 127.0.0.1");
		$this->lstTables[] = array("name" => "dependencia", "varname" => "edl_at_127_0_0_1__dependencia", "altvarname" => "dependencia", "connId" => "edl_at_127_0_0_1", "schema" => "", "connName" => "edl_user at 127.0.0.1");
		$this->lstTables[] = array("name" => "dependencias_001", "varname" => "edl_at_127_0_0_1__dependencias_001", "altvarname" => "dependencias_001", "connId" => "edl_at_127_0_0_1", "schema" => "", "connName" => "edl_user at 127.0.0.1");
		$this->lstTables[] = array("name" => "funcionario", "varname" => "edl_at_127_0_0_1__funcionario", "altvarname" => "funcionario", "connId" => "edl_at_127_0_0_1", "schema" => "", "connName" => "edl_user at 127.0.0.1");
		$this->lstTables[] = array("name" => "gestionedl_uggroups", "varname" => "edl_at_127_0_0_1__gestionedl_uggroups", "altvarname" => "gestionedl_uggroups", "connId" => "edl_at_127_0_0_1", "schema" => "", "connName" => "edl_user at 127.0.0.1");
		$this->lstTables[] = array("name" => "gestionedl_ugmembers", "varname" => "edl_at_127_0_0_1__gestionedl_ugmembers", "altvarname" => "gestionedl_ugmembers", "connId" => "edl_at_127_0_0_1", "schema" => "", "connName" => "edl_user at 127.0.0.1");
		$this->lstTables[] = array("name" => "gestionedl_ugrights", "varname" => "edl_at_127_0_0_1__gestionedl_ugrights", "altvarname" => "gestionedl_ugrights", "connId" => "edl_at_127_0_0_1", "schema" => "", "connName" => "edl_user at 127.0.0.1");
		$this->lstTables[] = array("name" => "help", "varname" => "edl_at_127_0_0_1__help", "altvarname" => "help", "connId" => "edl_at_127_0_0_1", "schema" => "", "connName" => "edl_user at 127.0.0.1");
		$this->lstTables[] = array("name" => "nombramiento", "varname" => "edl_at_127_0_0_1__nombramiento", "altvarname" => "nombramiento", "connId" => "edl_at_127_0_0_1", "schema" => "", "connName" => "edl_user at 127.0.0.1");
		$this->lstTables[] = array("name" => "perfil", "varname" => "edl_at_127_0_0_1__perfil", "altvarname" => "perfil", "connId" => "edl_at_127_0_0_1", "schema" => "", "connName" => "edl_user at 127.0.0.1");
		$this->lstTables[] = array("name" => "q_global_evaluadores", "varname" => "edl_at_127_0_0_1__q_global_evaluadores", "altvarname" => "q_global_evaluadores", "connId" => "edl_at_127_0_0_1", "schema" => "", "connName" => "edl_user at 127.0.0.1");
		$this->lstTables[] = array("name" => "q_global_evaluadores_edl2", "varname" => "edl_at_127_0_0_1__q_global_evaluadores_edl2", "altvarname" => "q_global_evaluadores_edl2", "connId" => "edl_at_127_0_0_1", "schema" => "", "connName" => "edl_user at 127.0.0.1");
		$this->lstTables[] = array("name" => "q_global_users_edl2", "varname" => "edl_at_127_0_0_1__q_global_users_edl2", "altvarname" => "q_global_users_edl2", "connId" => "edl_at_127_0_0_1", "schema" => "", "connName" => "edl_user at 127.0.0.1");
		$this->lstTables[] = array("name" => "tparam_estados", "varname" => "edl_at_127_0_0_1__tparam_estados", "altvarname" => "tparam_estados", "connId" => "edl_at_127_0_0_1", "schema" => "", "connName" => "edl_user at 127.0.0.1");
		$this->lstTables[] = array("name" => "tparam_sn", "varname" => "edl_at_127_0_0_1__tparam_sn", "altvarname" => "tparam_sn", "connId" => "edl_at_127_0_0_1", "schema" => "", "connName" => "edl_user at 127.0.0.1");
		$this->lstTables[] = array("name" => "usuario", "varname" => "edl_at_127_0_0_1__usuario", "altvarname" => "usuario", "connId" => "edl_at_127_0_0_1", "schema" => "", "connName" => "edl_user at 127.0.0.1");
		$this->lstTables[] = array("name" => "calificacion_definitiva", "varname" => "edl2_at_127_0_0_1__calificacion_definitiva", "altvarname" => "calificacion_definitiva", "connId" => "edl2_at_127_0_0_1", "schema" => "", "connName" => "edl_sp at 127.0.0.1");
		$this->lstTables[] = array("name" => "competencia", "varname" => "edl2_at_127_0_0_1__competencia", "altvarname" => "competencia", "connId" => "edl2_at_127_0_0_1", "schema" => "", "connName" => "edl_sp at 127.0.0.1");
		$this->lstTables[] = array("name" => "comportamental", "varname" => "edl2_at_127_0_0_1__comportamental", "altvarname" => "comportamental", "connId" => "edl2_at_127_0_0_1", "schema" => "", "connName" => "edl_sp at 127.0.0.1");
		$this->lstTables[] = array("name" => "comportamental_comun", "varname" => "edl2_at_127_0_0_1__comportamental_comun", "altvarname" => "comportamental_comun", "connId" => "edl2_at_127_0_0_1", "schema" => "", "connName" => "edl_sp at 127.0.0.1");
		$this->lstTables[] = array("name" => "comportamental_jerarquica", "varname" => "edl2_at_127_0_0_1__comportamental_jerarquica", "altvarname" => "comportamental_jerarquica", "connId" => "edl2_at_127_0_0_1", "schema" => "", "connName" => "edl_sp at 127.0.0.1");
		$this->lstTables[] = array("name" => "compromisofuncional", "varname" => "edl2_at_127_0_0_1__compromisofuncional", "altvarname" => "compromisofuncional", "connId" => "edl2_at_127_0_0_1", "schema" => "", "connName" => "edl_sp at 127.0.0.1");
		$this->lstTables[] = array("name" => "conducta", "varname" => "edl2_at_127_0_0_1__conducta", "altvarname" => "conducta", "connId" => "edl2_at_127_0_0_1", "schema" => "", "connName" => "edl_sp at 127.0.0.1");
		$this->lstTables[] = array("name" => "evaluacion", "varname" => "edl2_at_127_0_0_1__evaluacion", "altvarname" => "evaluacion", "connId" => "edl2_at_127_0_0_1", "schema" => "", "connName" => "edl_sp at 127.0.0.1");
		$this->lstTables[] = array("name" => "evaluacion_p", "varname" => "edl2_at_127_0_0_1__evaluacion_p", "altvarname" => "evaluacion_p", "connId" => "edl2_at_127_0_0_1", "schema" => "", "connName" => "edl_sp at 127.0.0.1");
		$this->lstTables[] = array("name" => "evaluacion_p_comportamental", "varname" => "edl2_at_127_0_0_1__evaluacion_p_comportamental", "altvarname" => "evaluacion_p_comportamental", "connId" => "edl2_at_127_0_0_1", "schema" => "", "connName" => "edl_sp at 127.0.0.1");
		$this->lstTables[] = array("name" => "evaluacion_p_funcional", "varname" => "edl2_at_127_0_0_1__evaluacion_p_funcional", "altvarname" => "evaluacion_p_funcional", "connId" => "edl2_at_127_0_0_1", "schema" => "", "connName" => "edl_sp at 127.0.0.1");
		$this->lstTables[] = array("name" => "evaluacion_seguimiento", "varname" => "edl2_at_127_0_0_1__evaluacion_seguimiento", "altvarname" => "evaluacion_seguimiento", "connId" => "edl2_at_127_0_0_1", "schema" => "", "connName" => "edl_sp at 127.0.0.1");
		$this->lstTables[] = array("name" => "evaluador_final", "varname" => "edl2_at_127_0_0_1__evaluador_final", "altvarname" => "evaluador_final", "connId" => "edl2_at_127_0_0_1", "schema" => "", "connName" => "edl_sp at 127.0.0.1");
		$this->lstTables[] = array("name" => "evidencias_p", "varname" => "edl2_at_127_0_0_1__evidencias_p", "altvarname" => "evidencias_p", "connId" => "edl2_at_127_0_0_1", "schema" => "", "connName" => "edl_sp at 127.0.0.1");
		$this->lstTables[] = array("name" => "q_caldef_p_x005", "varname" => "edl2_at_127_0_0_1__q_caldef_p_x005", "altvarname" => "q_caldef_p_x005", "connId" => "edl2_at_127_0_0_1", "schema" => "", "connName" => "edl_sp at 127.0.0.1");
		$this->lstTables[] = array("name" => "q_edl2_ctrl_valor_af_002", "varname" => "edl2_at_127_0_0_1__q_edl2_ctrl_valor_af_002", "altvarname" => "q_edl2_ctrl_valor_af_002", "connId" => "edl2_at_127_0_0_1", "schema" => "", "connName" => "edl_sp at 127.0.0.1");
		$this->lstTables[] = array("name" => "q_graph_estado", "varname" => "edl2_at_127_0_0_1__q_graph_estado", "altvarname" => "q_graph_estado", "connId" => "edl2_at_127_0_0_1", "schema" => "", "connName" => "edl_sp at 127.0.0.1");
		$this->lstTables[] = array("name" => "tparam_estados_calificacion", "varname" => "edl2_at_127_0_0_1__tparam_estados_calificacion", "altvarname" => "tparam_estados_calificacion", "connId" => "edl2_at_127_0_0_1", "schema" => "", "connName" => "edl_sp at 127.0.0.1");
		$this->lstTables[] = array("name" => "tparam_estados_compromisos", "varname" => "edl2_at_127_0_0_1__tparam_estados_compromisos", "altvarname" => "tparam_estados_compromisos", "connId" => "edl2_at_127_0_0_1", "schema" => "", "connName" => "edl_sp at 127.0.0.1");
		$this->lstTables[] = array("name" => "tparam_estados_eval", "varname" => "edl2_at_127_0_0_1__tparam_estados_eval", "altvarname" => "tparam_estados_eval", "connId" => "edl2_at_127_0_0_1", "schema" => "", "connName" => "edl_sp at 127.0.0.1");
		$this->lstTables[] = array("name" => "tparam_estados_evaluacion_p", "varname" => "edl2_at_127_0_0_1__tparam_estados_evaluacion_p", "altvarname" => "tparam_estados_evaluacion_p", "connId" => "edl2_at_127_0_0_1", "schema" => "", "connName" => "edl_sp at 127.0.0.1");
		$this->lstTables[] = array("name" => "tparam_periodo", "varname" => "edl2_at_127_0_0_1__tparam_periodo", "altvarname" => "tparam_periodo", "connId" => "edl2_at_127_0_0_1", "schema" => "", "connName" => "edl_sp at 127.0.0.1");
		$this->lstTables[] = array("name" => "tparam_ponderacion", "varname" => "edl2_at_127_0_0_1__tparam_ponderacion", "altvarname" => "tparam_ponderacion", "connId" => "edl2_at_127_0_0_1", "schema" => "", "connName" => "edl_sp at 127.0.0.1");
		$this->lstTables[] = array("name" => "tparam_puntaje", "varname" => "edl2_at_127_0_0_1__tparam_puntaje", "altvarname" => "tparam_puntaje", "connId" => "edl2_at_127_0_0_1", "schema" => "", "connName" => "edl_sp at 127.0.0.1");
		$this->lstTables[] = array("name" => "tparam_tipoacuerdo", "varname" => "edl2_at_127_0_0_1__tparam_tipoacuerdo", "altvarname" => "tparam_tipoacuerdo", "connId" => "edl2_at_127_0_0_1", "schema" => "", "connName" => "edl_sp at 127.0.0.1");
		$this->lstTables[] = array("name" => "tparam_vigencia", "varname" => "edl2_at_127_0_0_1__tparam_vigencia", "altvarname" => "tparam_vigencia", "connId" => "edl2_at_127_0_0_1", "schema" => "", "connName" => "edl_sp at 127.0.0.1");
		$this->lstTables[] = array("name" => "tparam_vigencia_eval", "varname" => "edl2_at_127_0_0_1__tparam_vigencia_eval", "altvarname" => "tparam_vigencia_eval", "connId" => "edl2_at_127_0_0_1", "schema" => "", "connName" => "edl_sp at 127.0.0.1");
	}

	/**
      * Returns table object by table name.
      * @intellisense
      */
	function & Table($strTable, $schema = "", $connName = "")
	{
		$this->FillTablesList();
		foreach($this->lstTables as $tbl)
		{
			if(strtoupper($strTable)==strtoupper($tbl["name"]) &&
				( $schema == "" || strtoupper($schema) == strtoupper($tbl["schema"]) ) &&
				($connName == "" || strtoupper($connName) == strtoupper($tbl["connName"]) ) )
			{
				$this->CreateClass($tbl);
				return $this->{"tbl".$tbl["varname"]};
			}
		}
//	check table names without dbo. and other prefixes
		foreach($this->lstTables as $tbl)
		{
			if(strtoupper(cutprefix($strTable))==strtoupper(cutprefix($tbl["name"])))
			{
				$this->CreateClass($tbl);
				return $this->{"tbl".$tbl["varname"]};
			}
		}
		$dummy=null;
		return $dummy;
	}
	
	function CreateClass(&$tbl)
	{
		if($this->{"tbl".$tbl["varname"]})
			return;
//	load table info
		global $dal_info;
		include(getabspath("include/dal/".($tbl["varname"]).".php"));
//	create class and object

		$classname="class_".$tbl["varname"];
		$str = "class ".$classname." extends tDALTable  {";
		foreach($dal_info[$tbl["varname"]] as $fld)
		{
			$str.=' var $'.$fld["varname"].'; ';
		}
		
		$tableName = $tbl["name"];
		if( $tbl["schema"] )
			$tableName = $tbl["schema"] . "." . $tbl["name"];
		$str.=' function __construct()
			{
				$this->m_TableName = \''.escapesq( $tableName ).'\';
				$this->infoKey = \'' . $tbl["varname"] . '\';
				$this->setConnection(\''. $tbl["connId"] .'\');
			}
		};';
		eval($str);
		$this->{"tbl".$tbl["varname"]} = new $classname;
		$this->{$tbl["altvarname"]} = $this->{"tbl".$tbl["varname"]};
		$this->Table[$tbl["name"]]=&$this->{"tbl".$tbl["varname"]};
	}
	
	/**
      * Returns list of table names.
      * @intellisense
      */
	function GetTablesList()
	{
		$this->FillTablesList();
		$res=array();
		foreach($this->lstTables as $tbl)
			$res[]=$tbl["name"];
		return $res;
	}
	
	/**
      * Get list of table fields by table name.
      * @intellisense
      */
	function GetFieldsList($table)
	{
		$tbl = $this->Table($table);
		return $tbl->GetFieldsList();
	}
	
	/**
      * Get field type by table name and field name.
      * @intellisense
      */
	function GetFieldType($table,$field)
	{
		$tbl = $this->Table($table);
		return $tbl->GetFieldType($field);
	}

	/**
      * Get table key fields by table name.
      * @intellisense
      */
	function GetDBTableKeys($table)
	{
		$tbl = $this->Table($table);
		return $tbl->GetDBTableKeys();
	}
}

$dal = new tDAL;

/**
 * Data Access Layer table class.
 */ 
class tDALTable
{
	var $m_TableName;
	var $infoKey;
	var $Param = array();
	var $Value = array();
	/**
	 * @type Connection
	 */
	var $_connection;
	
	/**
	 * Set the connection property
	 * @param String connId
	 */
	function setConnection( $connId )
	{
		global $cman;
		$this->_connection = $cman->byId( $connId );
	}
	
	/**
      * Get table key fields.
      * @intellisense
      */
	function GetDBTableKeys()
	{
		global $dal_info;
		if( !array_key_exists($this->infoKey, $dal_info) || !is_array($dal_info[ $this->infoKey ]) )
			return array();
		
		$ret = array();
		foreach($dal_info[ $this->infoKey ] as $fname=>$f)
		{
			if( @$f["key"] )
				$ret[] = $fname;
		}
		return $ret;
	}
	
	/**
      * Get list of table fields.
      * @intellisense
      */
	function GetFieldsList()
	{
		global $dal_info;
		return array_keys( $dal_info[ $this->infoKey ] );
	}

	/**
      * Get field type.
      * @intellisense
      */
	function GetFieldType($field)
	{
		global $dal_info;
		
		if( !array_key_exists( $field, $dal_info[ $this->infoKey ]) )
			return 200;
			
		return $dal_info[ $this->infoKey ][ $field ]["type"];
	}
	
	/**
	 *
	 */
	function PrepareValue($value, $type)
	{
		if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
		{
			if( IsBinaryType($type) )
			{
				if( $this->_connection->dbType == nDATABASE_Oracle )
					return "EMPTY_BLOB()";
					
				return "?";
			}
			
			if( $this->_connection->dbType == nDATABASE_Informix  && IsTextType($type) )
				return "?";
		}
	
		if( IsDateFieldType($type) )
		{
			if( !$value )
				return "null";
			else
				$this->_connection->addDateQuotes( $value );
		}
		
		if( NeedQuotes($type) )
			return $this->_connection->prepareString( $value );

		return 0 + $value;
	}
	
	/**
      * Get table name.
      * @intellisense
      */
	function TableName()
	{
		return $this->_connection->addTableWrappers( $this->m_TableName );
	} 

	/**
	 * @param Array blobs
	 * @param String dalSQL
	 * @param Array tableinfo
	 */
	protected function Execute_Query($blobs, $dalSQL, $tableinfo)
	{		
		$blobTypes = array();
		if( $this->_connection->dbType == nDATABASE_Informix )
		{		
			foreach( $blobs as $fname => $fvalue )
			{
				$blobTypes[ $fname ] = $tableinfo[ $fname ]["type"];
			}
		}

		$this->_connection->execWithBlobProcessing( $dalSQL, $blobs, $blobTypes );
	}

	/**
      * Add new record to the table.
      * @intellisense
      */
	function Add() 
	{
		global $dal_info;
		
		$insertFields = "";
		$insertValues = "";
		$tableinfo = &$dal_info[ $this->infoKey ];
		$blobs = array();
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			if( isset($this->{$fld['varname']}) )
			{
				$this->Value[ $fieldname ] = $this->{$fld['varname']};
			}
			
			foreach($this->Value as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$insertFields.= $this->_connection->addFieldWrappers( $fieldname ).",";
				$insertValues.= $this->PrepareValue($value,$fld["type"]) . ",";
				
				if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
				{
					if( IsBinaryType( $fld["type"] ) )
						$blobs[ $fieldname ] = $value;
						
					if( $this->_connection->dbType == nDATABASE_Informix && IsTextType( $fld["type"] ) )
						$blobs[ $fieldname ] = $value;
				}
				break;
			}
		}
		//	prepare and exec SQL
		if( $insertFields != "" && $insertValues != "" )		
		{
			$insertFields = substr($insertFields, 0, -1);
			$insertValues = substr($insertValues, 0, -1);
			$dalSQL = "insert into ".$this->_connection->addTableWrappers( $this->m_TableName )." (".$insertFields.") values (".$insertValues.")";
			$this->Execute_Query($blobs, $dalSQL, $tableinfo);
		}
		//	cleanup		
	    $this->Reset();
	}

	/**
      * Query all records from the table.
      * @intellisense
      */
	function QueryAll()
	{
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName );
		return $this->_connection->query( $dalSQL );
	}

	/**
      * Do a custom query on the table.
      * @intellisense
      */
	function Query($swhere = "", $orderby = "")
	{
		if ($swhere)
			$swhere = " where ".$swhere;
			
		if ($orderby)
			$orderby = " order by ".$orderby;
			
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName ).$swhere.$orderby;
		return $this->_connection->query( $dalSQL );
	}

	/**
      * Delete a record from the table.
      * @intellisense
      */
	function Delete()
	{
		global $dal_info;
		
		$deleteFields = "";
		$tableinfo = &$dal_info[ $this->infoKey ];
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			if( isset($this->{$fld['varname']}) )
			{
				$this->Param[ $fieldname ] = $this->{$fld['varname']};
			}
			
			foreach($this->Param as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$deleteFields.= $this->_connection->addFieldWrappers( $fieldname )."=". $this->PrepareValue($value, $fld["type"]) . " and ";
				break;
			}
		}
		//	do delete
		if ($deleteFields)
		{
			$deleteFields = substr($deleteFields, 0, -5);
			$dalSQL = "delete from ".$this->_connection->addTableWrappers( $this->m_TableName )." where ".$deleteFields;
			$this->_connection->exec( $dalSQL );
		}
	
		//	cleanup
	    $this->Reset();
	}

	/**
      * Reset table object.
      * @intellisense
      */
	function Reset()
	{
		global $dal_info;
		
		$this->Value = array();
		$this->Param = array();
		
		$tableinfo = &$dal_info[ $this->infoKey ];
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			unset($this->{$fld["varname"]});
		}
	}	

	/**
      * Update record in the table.
      * @intellisense
      */
	function Update()
	{
		global $dal_info;
		
		$tableinfo = &$dal_info[ $this->infoKey ];
		$updateParam = "";
		$updateValue = "";
		$blobs = array();

		foreach($tableinfo as $fieldname => $fld)
		{
			$command = 'if(isset($this->'.$fld['varname'].')) { ';
			if( $fld["key"] )
				$command.= '$this->Param[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			else
				$command.= '$this->Value[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			$command.= ' }';
			
			eval($command);
			
			if( !$fld["key"] && !array_key_exists( strtoupper($fieldname), array_change_key_case($this->Param, CASE_UPPER) ) )
			{
				foreach($this->Value as $field => $value)
				{
					if( strtoupper($field) != strtoupper($fieldname) )
						continue;
						
					$updateValue.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . ", ";
					
					if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
					{
						if( IsBinaryType( $fld["type"] ) )
							$blobs[ $fieldname ] = $value;
							
						if( $this->_connection->dbType == nDATABASE_Informix && IsTextType( $fld["type"] ) )	
							$blobs[ $fieldname ] = $value;		
					}
					break;
				}
			}
			else
			{
				foreach($this->Param as $field=>$value)
				{
					if( strtoupper($field) != strtoupper($fieldname) )
						continue;
						
					$updateParam.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . " and ";
					break;
				}
			}
		}

		//	construct SQL and do update	
		if ($updateParam)
			$updateParam = substr($updateParam, 0, -5);
		if ($updateValue)
			$updateValue = substr($updateValue, 0, -2);
			
		if ($updateValue && $updateParam)
		{
			$dalSQL = "update ".$this->_connection->addTableWrappers( $this->m_TableName )." set ".$updateValue." where ".$updateParam;
			$this->Execute_Query($blobs, $dalSQL, $tableinfo);
		}

		//	cleanup
		$this->Reset();
	}
	
	/**
	 * Select one or more records matching the condition
	 */
	function FetchByID()
	{
		global $dal_info;
		$tableinfo = &$dal_info[ $this->infoKey ];

		$dal_where = "";
		foreach($tableinfo as $fieldname => $fld)
		{
			$command = 'if(isset($this->'.$fld['varname'].')) { ';
			$command.= '$this->Value[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			$command.= ' }';
			
			eval($command);
			
			foreach($this->Param as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$dal_where.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . " and ";
				break;
			}
		}
		// cleanup
		$this->Reset();
		// construct and run SQL
		if ($dal_where)
			$dal_where = " where ".substr($dal_where, 0, -5);
			
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName ).$dal_where;
		return $this->_connection->query( $dalSQL );
	}
}

function cutprefix($table)
{
	$pos = strpos($table,".");
	if( $pos === false )
		return $table;
		
	return substr($table, $pos + 1);
}

function escapesq($str)
{
	return str_replace(array("\\","'"),array("\\\\","\\'"),$str);
}

?>