<?php

/* MapaSiteBundle:Admin:index.html.twig */
class __TwigTemplate_cd2aac624eb7b80219ff64ce831de28dfe7872ef4c9c10458bf55a295ec5dfad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MapaSiteBundle:Page:index.html.twig");

        $this->blocks = array(
            'conteudo' => array($this, 'block_conteudo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MapaSiteBundle:Page:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_conteudo($context, array $blocks = array())
    {
        // line 3
        echo "<p><a href=\"#\">Gerencia Arquidioceses</a></p>
<p><a href=\"#\">Gerencia Dioceses</a></p>
<p><a href=\"#\">Gerencia Padroeiro</a></p>
<p><a href=\"#\">Gerencia Hor&aacute;rios Missa</a></p>
<p><a href=\"#\">Gerencia Igrejas</a></p>
";
    }

    public function getTemplateName()
    {
        return "MapaSiteBundle:Admin:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,);
    }
}
