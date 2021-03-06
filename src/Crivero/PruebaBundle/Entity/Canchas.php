<?php
 
namespace Crivero\PruebaBundle\Entity;
 
use Doctrine\ORM\Mapping as ORM;
 
/**
 * Canchas
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Crivero\PruebaBundle\Entity\CanchasRepository")
 */
class Canchas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
 
    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=200)
     */
    private $tipo;
 
    /**
     * @var string
     *
     * @ORM\Column(name="horario", type="string", length=200)
     */
    private $horario;
 
    /**
     * @var float
     *
     * @ORM\Column(name="valoracion", type="float")
     */
    private $valoracion;
 
    /**
     * @var string
     *
     * @ORM\Column(name="disponibilidad", type="string", length=200)
     */
    private $disponibilidad;
 
    /**
     * @var string
     *
     * @ORM\Column(name="imagen", type="string", length=255)
     */
    private $imagen;
 
 
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
 
    /**
     * Set tipo
     *
     * @param string $tipo
     * @return Canchas
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
 
        return $this;
    }
 
    /**
     * Get tipo
     *
     * @return string 
     */
    public function getTipo()
    {
        return $this->tipo;
    }
 
    /**
     * Set horario
     *
     * @param string $horario
     * @return Canchas
     */
    public function setHorario($horario)
    {
        $this->horario = $horario;
 
        return $this;
    }
 
    /**
     * Get horario
     *
     * @return string 
     */
    public function getHorario()
    {
        return $this->horario;
    }
 
    /**
     * Set valoracion
     *
     * @param float $valoracion
     * @return Canchas
     */
    public function setValoracion($valoracion)
    {
        $this->valoracion = $valoracion;
 
        return $this;
    }
 
    /**
     * Get valoracion
     *
     * @return float 
     */
    public function getValoracion()
    {
        return $this->valoracion;
    }
 
    /**
     * Set disponibilidad
     *
     * @param string $disponibilidad
     * @return Canchas
     */
    public function setDisponibilidad($disponibilidad)
    {
        $this->disponibilidad = $disponibilidad;
 
        return $this;
    }
 
    /**
     * Get disponibilidad
     *
     * @return string 
     */
    public function getDisponibilidad()
    {
        return $this->disponibilidad;
    }
 
    /**
     * Set imagen
     *
     * @param string $imagen
     * @return Canchas
     */
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;
 
        return $this;
    }
 
    /**
     * Get imagen
     *
     * @return string 
     */
    public function getImagen()
    {
        return $this->imagen;
    }
}