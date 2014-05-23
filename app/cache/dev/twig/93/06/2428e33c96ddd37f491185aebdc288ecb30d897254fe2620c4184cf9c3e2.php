<?php

/* ::base.html.twig */
class __TwigTemplate_93062428e33c96ddd37f491185aebdc288ecb30d897254fe2620c4184cf9c3e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'conteudo' => array($this, 'block_conteudo'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
    </head>
    <body>
        ";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 69
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 81
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Mapa";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/estilos.css"), "html", null, true);
        echo "\" />
        ";
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        // line 15
        echo "        
";
        // line 17
        echo "            <div id=\"header\" 
                 class=\"navbar navbar-fixed-top navbar-mapa\" 
                 role=\"navigation\">
                <div class=\"container\">
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle\" 
                                data-toggle=\"collapse\" 
                                data-target=\".navbar-collapse\">
                            <span class=\"sr-only\">Navega&ccedil;&atilde;o</span>
                            <span class=\"icon-bar\"><span class=\"glyphicon glyphicon-chevron-down\"></span>
                        </button>
                        <a class=\"navbar-brand\" href=\"#\">Religio</a>
                    </div>
                    <div class=\"collapse navbar-collapse\">
                    ";
        // line 31
        if ((1 != 1)) {
            // line 32
            echo "                            <ul class=\"nav navbar-nav\">
                                <li><a href=\"#\" data-toggle=\"popover\" data-placement=\"bottom\" 
                               data-content=\"Bem vindo ao Religio\"><span class=\"glyphicon glyphicon-home\"></span> Home</a></li>
                                <li><a href=\"#\" data-toggle=\"popover\" data-placement=\"bottom\" 
                               data-content=\"Saiba mais sobre o Sistema\"><span class=\"glyphicon glyphicon-question-sign\"></span> Sobre</a></li>
                            </ul>
                            <form class=\"navbar-form navbar-left\">
                                    <input type=\"text\" class=\"form-control\" 
                                           placeholder=\"Digite para buscar...\" size=\"auto\" />
                            </form>

                            <ul class=\"nav navbar-nav navbar-right\">
                                <li><a href=\"#\" 
                                       data-toggle=\"popover\" data-placement=\"bottom\" 
                               data-content=\"Sair do Sistema\">
                                        <span class=\"glyphicon glyphicon-log-out\"></span> Sair</a></li>
                            </ul>
                            

                            <span class=\"navbar-text navbar-right\">
                                <span class=\"glyphicon glyphicon-user\"></span> Usu&aacute;rio Sobrenome</span>
                    ";
        } else {
            // line 54
            echo "                        <form class=\"navbar-form navbar-right\">
                            <input type=\"text\" class=\"form-control input-sm\" name=\"login-email\" placeholder=\"Email\" />
                            <input type=\"text\" class=\"form-control input-sm\" name=\"login-senha\" placeholder=\"Senha\" />
                            <input type=\"submit\" class=\"form-control btn-sm btn-primary\" value=\"Login\" /> 
                        </form>
                    ";
        }
        // line 60
        echo "                    </div>
                </div>
            </div>
                    
            ";
        // line 64
        $this->displayBlock('conteudo', $context, $blocks);
        // line 67
        echo "        
        ";
    }

    // line 64
    public function block_conteudo($context, array $blocks = array())
    {
        // line 65
        echo "            ";
    }

    // line 69
    public function block_javascripts($context, array $blocks = array())
    {
        // line 70
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\">
            \$(document).ready(function(){
                ";
        // line 78
        echo "            });
        </script>
        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 78,  159 => 71,  154 => 70,  151 => 69,  147 => 65,  144 => 64,  139 => 67,  137 => 64,  131 => 60,  123 => 54,  99 => 32,  97 => 31,  81 => 17,  78 => 15,  75 => 14,  69 => 8,  64 => 7,  61 => 6,  55 => 5,  49 => 81,  46 => 69,  44 => 14,  36 => 10,  34 => 6,  30 => 5,  24 => 1,);
    }
}
