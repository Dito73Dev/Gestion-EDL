<?php
class ConnectionManager_Base
{
	/**
	 * Cached Connection objects
	 * @type Array
	 */
	protected $cache = array();

	/**
	 * Project connections data
	 * @type Array
	 */
	protected $_connectionsData;

	/**
	 * Project connections data
	 * @type Array
	 */
	protected $_connectionsIdByName = array();


	/**
	 * An array storing the correspondence between project
	 * datasource tables names and connections ids
	 * @type Array
	 */
	protected $_tablesConnectionIds;


	/**
	 * @constructor
	 */
	function __construct()
	{
		$this->_setConnectionsData();
		$this->_setTablesConnectionIds();
	}

	/**
	 * Get connection id by the table name
	 * @param String tName
	 * @return Connection
	 */
	public function getTableConnId( $tName )
	{
		return $this->_tablesConnectionIds[ $tName ];
	}


	/**
	 * Get connection object by the table name
	 * @param String tName
	 * @return Connection
	 */
	public function byTable( $tName )
	{
		$connId = $this->_tablesConnectionIds[ $tName ];
		if( !$connId )
			return $this->getDefault();
		return $this->byId( $connId );
	}

	/**
	 * Get connection object by the connection name
	 * @param String connName
	 * @return Connection
	 */
	public function byName( $connName )
	{
		$connId = $this->getIdByName( $connName );
		if( !$connId )
			return $this->getDefault();
		return $this->byId( $connId );
	}

	/**
	 * Get connection id by the connection name
	 * @param String connName
	 * @return String
	 */
	protected function getIdByName( $connName )
	{
		return $this->_connectionsIdByName[ $connName ];
	}

	/**
	 * Get connection object by the connection id
	 * @param String connId
	 * @return Connection
	 */
	public function byId( $connId )
	{
		if( !isset( $this->cache[ $connId ] ) ) {
			$conn = $this->getConnection( $connId );
			if( !$conn ) {
				global $restApis;
				$conn = $restApis->getConnection( $connId );
			}
			if( !$conn ) {
				$conn = $this->getDefault();
			}
			$this->cache[ $connId ] = $conn;
		}

		return $this->cache[ $connId ];
	}

	/**
	 * Get the default db connection class
	 * @return Connection
	 */
	public function getDefault()
	{
		return $this->byId( "edl_at_127_0_0_1" );
	}

	/**
	 * Get the default db connection id
	 * @return String
	 */
	public function getDefaultConnId()
	{
		return "edl_at_127_0_0_1";
	}



	/**
	 * Get the users table db connection
	 * @return Connection
	 */
	public function getForLogin() {
		return $this->byId( $this->getLoginConnId() );
	}

	public function getLoginConnId() {
		$db = &Security::dbProvider();		
		if( $db ) {
			return $db["table"]["connId"];
		}
		return "";
	}


	/**
	 * Get the log table db connection
	 * @return Connection
	 */
	public function getForAudit()
	{
		return $this->byId( "edl_at_127_0_0_1" );
	}

	/**
	 * Get the locking table db connection
	 * @return Connection
	 */
	public function getForLocking()
	{
		return $this->byId( "edl2_at_127_0_0_1" );
	}

	/**
	 * Get the 'ug_groups' table db connection
	 * @return Connection
	 */
	public function getForUserGroups() {
		return $this->byId( $this->getUserGroupsConnId() );
	}

	public function getUserGroupsConnId() {
		return "edl_at_127_0_0_1";
	}

	/**
	 * Get the saved searches table db connection
	 * @return Connection
	 */
	public function getForSavedSearches()
	{
		return $this->byId( $this->getSavedSearchesConnId() );
	}
	
	/**
	 * Get the saved searches table db connection
	 * @return Connection
	 */
	public function getSavedSearchesConnId()
	{
		return "edl_at_127_0_0_1";
	}	

	/**
	 * Get the webreports tables db connection
	 * @return Connection
	 */
	public function getForWebReports() 
	{
		return $this->byId( $this->getSavedSearchesConnId() );
	}

	/**
	 * Get the webreports tables db connection id
	 * @return String
	 */
	public function getWebReportsConnId() {
		return "edl_at_127_0_0_1";
	}	
	
	/**
	 * @param String connId
	 * @return Connection
	 */
	protected function getConnection( $connId )
	{
		return false;
	}

	public function getConectionsIds()
	{
		$connectionsIds = array();
		foreach ($this->_connectionsData as $connId => $data) {
			$connectionsIds[] = $connId;
		}

		return $connectionsIds;
	}

	/**
	 * Set the data representing the project's
	 * db connection properties
	 */
	protected function _setConnectionsData()
	{
        return null;
	}

	/**
	 * Set the data representing the correspondence between
	 * the project's table names and db connections
	 */
	protected function _setTablesConnectionIds()
	{
		$connectionsIds = array();
		$connectionsIds["cargo"] = "edl_at_127_0_0_1";
		$connectionsIds["concertacion_po"] = "edl2_at_127_0_0_1";
		$connectionsIds["usuario"] = "edl_at_127_0_0_1";
		$connectionsIds["tparam_vigencia"] = "edl2_at_127_0_0_1";
		$connectionsIds["tparam_periodo"] = "edl2_at_127_0_0_1";
		$connectionsIds["tparam_estados_eval"] = "edl2_at_127_0_0_1";
		$connectionsIds["dependencias_001"] = "edl_at_127_0_0_1";
		$connectionsIds["dependencia"] = "edl_at_127_0_0_1";
		$connectionsIds["nombramiento"] = "edl_at_127_0_0_1";
		$connectionsIds["compromisofuncional"] = "edl2_at_127_0_0_1";
		$connectionsIds["tparam_tipoacuerdo"] = "edl2_at_127_0_0_1";
		$connectionsIds["tparam_estados_compromisos"] = "edl2_at_127_0_0_1";
		$connectionsIds["tparam_ponderacion"] = "edl2_at_127_0_0_1";
		$connectionsIds["evaluacion"] = "edl2_at_127_0_0_1";
		$connectionsIds["q_edl2_ctrl_valor_af_002"] = "edl2_at_127_0_0_1";
		$connectionsIds["comportamental_comun"] = "edl2_at_127_0_0_1";
		$connectionsIds["comportamental_jerarquica"] = "edl2_at_127_0_0_1";
		$connectionsIds["comportamental"] = "edl2_at_127_0_0_1";
		$connectionsIds["competencia"] = "edl2_at_127_0_0_1";
		$connectionsIds["conducta"] = "edl2_at_127_0_0_1";
		$connectionsIds["tparam_puntaje"] = "edl2_at_127_0_0_1";
		$connectionsIds["concertacion_po_2"] = "edl2_at_127_0_0_1";
		$connectionsIds["compromisofuncional_2"] = "edl2_at_127_0_0_1";
		$connectionsIds["comportamental_comun_2"] = "edl2_at_127_0_0_1";
		$connectionsIds["comportamental_jerarquica_2"] = "edl2_at_127_0_0_1";
		$connectionsIds["concertacion_po_3"] = "edl2_at_127_0_0_1";
		$connectionsIds["compromisofuncional_3"] = "edl2_at_127_0_0_1";
		$connectionsIds["comportamental_comun_3"] = "edl2_at_127_0_0_1";
		$connectionsIds["comportamental_jerarquica_3"] = "edl2_at_127_0_0_1";
		$connectionsIds["concertacion_po_3s"] = "edl2_at_127_0_0_1";
		$connectionsIds["concertacion_po_3se"] = "edl2_at_127_0_0_1";
		$connectionsIds["help"] = "edl_at_127_0_0_1";
		$connectionsIds["q_graph_estado Chart"] = "edl2_at_127_0_0_1";
		$connectionsIds["concertacion_th"] = "edl2_at_127_0_0_1";
		$connectionsIds["comportamental_jerarquica_th"] = "edl2_at_127_0_0_1";
		$connectionsIds["comportamental_comun_th"] = "edl2_at_127_0_0_1";
		$connectionsIds["compromisofuncional_th"] = "edl2_at_127_0_0_1";
		$connectionsIds["evaluacion_po"] = "edl2_at_127_0_0_1";
		$connectionsIds["tparam_estados_evaluacion_p"] = "edl2_at_127_0_0_1";
		$connectionsIds["tparam_vigencia_eval"] = "edl2_at_127_0_0_1";
		$connectionsIds["evaluacion_p_comportamental"] = "edl2_at_127_0_0_1";
		$connectionsIds["evaluacion_p_funcional"] = "edl2_at_127_0_0_1";
		$connectionsIds["evaluacion_p"] = "edl2_at_127_0_0_1";
		$connectionsIds["tparam_estados_calificacion"] = "edl2_at_127_0_0_1";
		$connectionsIds["evidencias_p"] = "edl2_at_127_0_0_1";
		$connectionsIds["evaluacion_seguimiento"] = "edl2_at_127_0_0_1";
		$connectionsIds["q_caldef_p_x005"] = "edl2_at_127_0_0_1";
		$connectionsIds["q_global_evaluadores"] = "edl_at_127_0_0_1";
		$connectionsIds["evaluacion_x005"] = "edl2_at_127_0_0_1";
		$connectionsIds["tparam_estados"] = "edl_at_127_0_0_1";
		$connectionsIds["calificacion_definitiva"] = "edl2_at_127_0_0_1";
		$connectionsIds["funcionario"] = "edl_at_127_0_0_1";
		$connectionsIds["q_caldef_p_x005_adm"] = "edl2_at_127_0_0_1";
		$connectionsIds["evaluacion_p_th"] = "edl2_at_127_0_0_1";
		$connectionsIds["evaluacion_p_funcional_th"] = "edl2_at_127_0_0_1";
		$connectionsIds["evaluacion_p_comportamental_th"] = "edl2_at_127_0_0_1";
		$connectionsIds["evidencias_p_th"] = "edl2_at_127_0_0_1";
		$connectionsIds["evaluador_final"] = "edl2_at_127_0_0_1";
		$connectionsIds["q_caldef_p_x005_evaluador"] = "edl2_at_127_0_0_1";
		$connectionsIds["q_global_users_edl2"] = "edl_at_127_0_0_1";
		$connectionsIds["q_global_evaluadores_edl2"] = "edl_at_127_0_0_1";
		$connectionsIds["admin_rights"] = "edl_at_127_0_0_1";
		$connectionsIds["admin_members"] = "edl_at_127_0_0_1";
		$connectionsIds["admin_users"] = "edl_at_127_0_0_1";
		$connectionsIds["funcionario_adm"] = "edl_at_127_0_0_1";
		$connectionsIds["usuario_adm"] = "edl_at_127_0_0_1";
		$connectionsIds["cargo_adm"] = "edl_at_127_0_0_1";
		$connectionsIds["dependencia_adm"] = "edl_at_127_0_0_1";
		$connectionsIds["dependencias_sup_adm"] = "edl_at_127_0_0_1";
		$connectionsIds["tparam_sn"] = "edl_at_127_0_0_1";
		$connectionsIds["contrato"] = "edl_at_127_0_0_1";
		$connectionsIds["perfil"] = "edl_at_127_0_0_1";

		$this->_tablesConnectionIds = &$connectionsIds;
	}

	/**
	 * Check if It's possible to add to one table's sql query
	 * an sql subquery to another table.
	 * Access doesn't support subqueries from the same table as main.
	 * @param String dataSourceTName1
	 * @param String dataSourceTName2
	 * @return Boolean
	 */
	public function checkTablesSubqueriesSupport( $dataSourceTName1, $dataSourceTName2 )
	{
		$connId1 = $this->_tablesConnectionIds[ $dataSourceTName1 ];
		$connId2 = $this->_tablesConnectionIds[ $dataSourceTName2 ];

		if( $connId1 != $connId2 )
			return false;

		if( $this->_connectionsData[ $connId1 ]["dbType"] == nDATABASE_Access && $dataSourceTName1 == $dataSourceTName2 )
			return false;

		return true;
	}

	/**
	 * Close db connections
    */
	function CloseConnections()
	{
		foreach( $this->cache as $connection )
		{
			if( $connection )
				$connection->close();
		}
	}
}
?>