<?php

/* moduloclientesclienteBundle:Default:canchaClientes.html.twig */
class __TwigTemplate_f25f4ae6a2e58595fa605b45ce7fbb0beefed3fa6a522493b07507e3bc029cf5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("moduloclientesclienteBundle::main.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "moduloclientesclienteBundle::main.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Vista de ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "nombre", array()), "html", null, true);
        echo " ";
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Detalles de la cancha</h1>   
      <div class=\"container text-center\">
        <h3>Detalles de Cancha</h3>
    </div>
        
         <div class=\"text-center\">
           <h4>Nombre de la cancha</h4>
        </div>

        <div class=\"col-md-6 col-xs-12\">

            <div class=\"text-center\">
                <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/cancha_de_marmolejo.jpg"), "html", null, true);
        echo "\" width=\"180px\" class=\"img-rounded\"/><br>

                <br>";
        // line 18
        if (($this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "disponibilidad", array()) == "Disponible")) {
            // line 19
            echo "                      <div class=\"text-center\">
                        <button class=\"btn btn-primary\">Reservar</button>
                      </div>
                      ";
        } else {
            // line 23
            echo "                      <div class=\"text-center\">
                        <button class=\"btn btn-danger\">Reservada</button>
                      </div>
                ";
        }
        // line 27
        echo "            </div><br>

        </div>

        <div class=\"col-md-6 col-xs-12\">
            <div class=\"text-center\">
                <label class=\"control-label span7 text-left\">Horario: </label>
                <label class=\"control-label span7 text-right\">15:00 - 18:30 </label>
            </div>

            <div class=\"text-center\">
                <label class=\"control-label span7 text-left\">Dimensiones: </label>
                <label class=\"control-label span7 text-right\">100 m2</label>
            </div>

            <div class=\"text-center\">
                <label class=\"control-label span7 text-left\">Mínimo de personas para jugar: </label>
                <label class=\"control-label span7 text-right\">20</label>
            </div>

            <div class=\"text-center\">
                <label class=\"control-label span7 text-left\">Valoracion: </label>
                <label class=\" text-right\">5.0</label>
            </div>

            <div class=\"text-center\">
                <label class=\"control-label span7 text-left\">Dirección: </label>
                <label class=\"control-label span7 text-right\">Calle Desengaño, 21</label>
            </div><br>

    </div>
    
";
    }

    public function getTemplateName()
    {
        return "moduloclientesclienteBundle:Default:canchaClientes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 27,  75 => 23,  69 => 19,  67 => 18,  62 => 16,  48 => 4,  45 => 3,  37 => 2,  11 => 1,);
    }
}
