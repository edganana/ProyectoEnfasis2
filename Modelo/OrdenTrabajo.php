 <?php
class OrdenTrabajo
{
	private $numeroConsecutivo;
	private $fecha;
	private $hora;
	private $tipoDocumento;
	private $numeroDocumento;
	private $nombre;
	private $apellido;
	private $direccion;
	private $telefono;
	private $servicio;
	private $marca;
	private $clase;
	private $procesador;
	private $teclado;
	private $placaBase;
	private $memoria;	
	private $discoDuro;
	private $tarjetaRed;
	private $torre;
	private $audio;
	private $monitor;
	private $tarjetaVideo;
	private $comentarios;
	private $fechaEntrega;
	private $nombreTecnico;
	private $Conexion;
	
	public function setNumeroCosecutivo($numeroCosecutivo)
	{
		$this->numeroCosecutivo=$numeroCosecutivo;
	}
	
	public function getNumeroCosecutivo()
	{
		return ($this->numeroCosecutivo);
	}
	
	public function setFecha($fecha)
	{
		$this->fecha=$fecha;
	}
	
	public function getFecha()
	{
		return ($this->fecha);
	}
	
	public function setHora($hora)
	{
		$this->hora=$hora;
	}
	
	public function getHora()
	{
		return ($this->hora);
	}
	
	public function setTipoDocumento($tipoDocumento)
	{
		$this->tipoDocumento=$tipoDocumento;
	}
	
	public function getTipoDocumento()
	{
		return ($this->tipoDocumento);
	}
	
	public function setNumeroDocumento($numeroDocumento)
	{
		$this->numeroDocumento=$numeroDocumento;
	}
	
	public function getNumeroDocumento()
	{
		return ($this->numeroDocumento);
	}
	public function setNombre($nombre)
	{
		$this->genero=$nombre;
	}
	
	public function getNombre()
	{
		return ($this->nombre);
	}
	public function setApellido($apellido)
	{
		$this->apellido=$apellido;
	}
	
	public function getApellido()
	{
		return ($this->apellido);
	}
	public function setDireccion($direccion)
	{
		$this->direccion=$direccion;
	}
	
	public function getDireccion()
	{
		return ($this->direccion);
	}
	
	
	public function setTelefono($telefono)
	{
		$this->telefono=$telefono;
	}
	
	public function getTelefono()
	{
		return ($this->telefono);
	}
	public function setServicio($servicio)
	{
		$this->servicio=$servicio;
	}
	
	public function getServicio()
	{
		return ($this->servicio);
	}
	public function setMarca($marca)
	{
		$this->marca=$marca;
	}
	
	public function getMarca()
	{
		return ($this->marca);
	
	}
	
	public function setClase($clase)
	{
		$this->clase=$clase;
	}
	
	public function getClase()
	{
		return ($this->clase);
	
	}
	public function setProcesador($procesador)
	{
		$this->procesador=$procesador;
	}
	
	public function getProcesador()
	{
		return ($this->procesador);
	
	}
	
	public function setTeclado($teclado)
	{
		$this->teclado=$teclado;
	}
	
	public function getTeclado()
	{
		return ($this->teclado);
	
	}
	public function setPlacaBase($placaBase)
	{
		$this->placaBase=$placaBase;
	}
	
	public function getPlacaBase()
	{
		return ($this->placaBase);
	
	}
	public function setMemoria($memoria)
	{
		$this->memoria=$memoria;
	}
	
	public function geMemoria()
	{
		return ($this->memoria);
	
	}
	public function setDiscoDuro($discoDuro)
	{
		$this->discoDuro=$discoDuro;
	}
	
	public function getDiscoDuro()
	{
		return ($this->discoDuro);
	
	}
	
	public function setTarjetaRed($tarjetaRed)
	{
		$this->tarjetaRed=$tarjetaRed;
	}
	
	public function getTarjetaRed()
	{
		return ($this->tarjetaRed);
	
	}
	public function setTotrre($torre)
	{
		$this->torre=$torre;
	}
	
	public function getTorre()
	{
		return ($this->torre);
	
	}
	
	public function setaudio($audio)
	{
		$this->audio=$audio;
	}
	
	public function audio()
	{
		return ($this->audio);
	
	}
	public function setMonitor($monitor)
	{
		$this->monitor=$monitor;
	}
	
	public function getMonitor()
	{
		return ($this->monitor);
	
	}
	public function setTarjetaVideo($tarjetaVideo)
	{
		$this->tarjetaVideo=$tarjetaVideo;
	}
	
	public function getTarjetaVideo()
	{
		return ($this->tarjetaVideo);
	
	}
	public function setComentarios($comentarios)
	{
		$this->comentarios=$comentarios;
	}
	
	public function getComentarios()
	{
		return ($this->comentarios);
	
	}
	public function setFechaEntrega($fechaEntrega)
	{
		$this->fechaEntrega=$fechaEntrega;
	}
	
	public function getFechaEntrega()
	{
		return ($this->fechaEntrega);
	
	}
	
	public function setNombreTecnico($nombreTecnico)
	{
		$this->nombreTecnico=$nombreTecnico;
	}
	
	public function getNombreTecnico()
	{
		return ($this->nombreTecnico);
	
	}
	
	private $Conexion;
	
	public function OrdenTrabajo()
	{
		//$objConexion = Conectarse();
	}
	
	public function crearOrdenTrabajo($numeroConsecutivo, $fecha, $hora, $tipoDocumento, $numeroDocumento, $nombre, $apellido, $direccion, $telefono, $servicio, $marca, $clase, $procesador, $teclado, $placaBase, $memoria, $discoDuro, $tarjetaRed, $torre, $audio, $monitor, $tarjetaVideo, $comentarios, $fechaEntrega, $nombreTecnico)
	{
		$this->numeroConsecutivo=$numeroConsecutivo;
		$this->fecha=$fecha;
		$this->hora=$hora;
		$this->tipoDocumento=$tipoDocumento;
		$this->numeroDocumento= $numeroDocumento;
		$this->nombre=$nombre;
		$this->apellido= $apellido;
		$this->direccion= $direccion;
		$this->telefono=$telefono;
		$this->servicio=$servicio;
		$this->marca= $marca;
		$this->clase=$clase;
		$this->procesador= $procesador;
		$this->teclado=$teclado;
		$this->placaBase= $placaBase;
		$this->memoria= $memoria;		
		$this->discoDuro=$discoDuro;
		$this->tarjetaRed=$tarjetaRed;
		$this->torre=$torre;
		$this->audio=$audio;
		$this->monitor=$monitor;
		$this->tarjetaVideo=$tarjetaVideo;
		$this->comentarios= $comentarios;
		$this->fechaEntrega= $fechaEntrega;
		$this->nombreTecnico=$nombreTecnico;
	}
	
	public function agregarOrdenTrabajo()
	{	
		$this->Conexion=Conectarse();
		$sql="insert into ordenestrabajo (numeroConsecutivo, fecha, hora, tipoDocumento, numeroDocumento, nombre, apellido, direccion, telefono, servicio, marca, clase, procesador, teclado, placaBase, memoria, discoDuro, tarjetaRed, torre, audio, monitor, tarjetaVideo, comentarios, fechaEntrega, nombreTecnico)values ('$this->numeroConsecutivo','$this->fecha','$this->hora','$this->tipoDocumento','$this->numeroDocumento','$this->nombre','$this->apellido','$this-> direccion', '$this->telefono','$this->servicio','$this->marca','$this->clase','$this->procesador','$this->teclado','$this->placaBase','$this-> memoria','$this->discoDuro','$this->tarjetaRed','$this->torre','$this->audio','$this->monitor','$this->tarjetaVideo','$this->comentarios','$this-> fechaEntrega','$this-> nombreTecnico')";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
	
	public function consultarOrdenTrabajo()
	{
		$this->Conexion=Conectarse();
		$sql="select * from ordenestrabajo";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
	
	public function consultarOrdenTrabajo($codigo)
	{
		$this->Conexion=Conectarse();
		$sql="select * from ordenestrabajo where codigo='$codigo'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}


public function actualizarOrdenTrabajo()
	{	
		$this->Conexion=Conectarse();
		$sql="insert into ordenestrabajo (numeroConsecutivo, fecha, hora, tipoDocumento, numeroDocumento, nombre, apellido, direccion, telefono, servicio, marca, clase, procesador, teclado, placaBase, memoria, discoDuro, tarjetaRed, torre, audio, monitor, tarjetaVideo, comentarios, fechaEntrega, nombreTecnico)values ('$this->numeroConsecutivo','$this->fecha','$this->hora','$this->tipoDocumento','$this->numeroDocumento','$this->nombre','$this->apellido','$this-> direccion', '$this->telefono','$this->servicio','$this->marca','$this->clase','$this->procesador','$this->teclado','$this->placaBase','$this-> memoria''$this->discoDuro','$this->tarjetaRed','$this->torre','$this->audio','$this->monitor','$this->tarjetaVideo','$this->comentarios','$this-> fechaEntrega','$this-> nombreTecnico')";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
	}

?>