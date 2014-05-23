<?php

/* MapaSiteBundle:Page:index.html.twig */
class __TwigTemplate_bb9177ce529eb4deee16058e0935ef81ad070627e81b912db7b8dc9baa76f13d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'conteudo' => array($this, 'block_conteudo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_conteudo($context, array $blocks = array())
    {
        // line 3
        echo "
";
    }

    public function getTemplateName()
    {
        return "MapaSiteBundle:Page:index.html.twig";
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
