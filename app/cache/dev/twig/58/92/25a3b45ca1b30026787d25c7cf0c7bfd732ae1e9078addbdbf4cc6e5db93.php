<?php

/* moduloclientesclienteBundle:Default:canchasClientes.html.twig */
class __TwigTemplate_589225a3b45ca1b30026787d25c7cf0c7bfd732ae1e9078addbdbf4cc6e5db93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("moduloclientesclienteBundle::main.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

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

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo " Vista de Canchas ";
    }

    // line 6
    public function block_contenido($context, array $blocks = array())
    {
        // line 7
        echo "<div id=\"buscador\">
    <form>
        <input type=\"search\" name=\"cancha\" placeholder=\"Buscar cancha\"/>
    </form>
</div>
<h1>Listado de Canchas</h1>
";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["canchas"]) ? $context["canchas"] : $this->getContext($context, "canchas")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["cancha"]) {
            // line 14
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("moduloclientes_cliente_canchaClientes", array("matricula" => $this->getAttribute($context["cancha"], "matricula", array()))), "html", null, true);
            echo "\" class=\"fila ";
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "par", 1 => "impar"), $this->getAttribute($context["loop"], "index", array())), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cancha"], "matricula", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cancha"], "nombre", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cancha"], "disponibilidad", array()), "html", null, true);
            echo " </a>
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cancha'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
";
    }

    public function getTemplateName()
    {
        return "moduloclientesclienteBundle:Default:canchasClientes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 16,  71 => 14,  54 => 13,  46 => 7,  43 => 6,  37 => 4,  11 => 2,);
    }
}
