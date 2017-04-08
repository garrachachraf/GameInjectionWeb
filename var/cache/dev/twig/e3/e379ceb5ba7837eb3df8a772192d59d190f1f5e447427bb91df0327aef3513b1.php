<?php

/* @EloboostedFrontoffice/participation/ticket.html.twig */
class __TwigTemplate_e0f825204b782bb954fdea91bf067954fe31fe0db20379a4306917f7595856f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2231481867f3958be6e1e79d25c91b72133e4971efe83d5ab50b285537ed6353 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2231481867f3958be6e1e79d25c91b72133e4971efe83d5ab50b285537ed6353->enter($__internal_2231481867f3958be6e1e79d25c91b72133e4971efe83d5ab50b285537ed6353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/participation/ticket.html.twig"));

        $__internal_23c4bace353aa0a79ba03b55ac2c0eb32d219d471bb8ab4b2a24d92fedfeab02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23c4bace353aa0a79ba03b55ac2c0eb32d219d471bb8ab4b2a24d92fedfeab02->enter($__internal_23c4bace353aa0a79ba03b55ac2c0eb32d219d471bb8ab4b2a24d92fedfeab02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/participation/ticket.html.twig"));

        // line 1
        echo "<html>

<body>

<img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Endroid\Bundle\QrCodeBundle\Twig\Extension\QrCodeExtension')->qrcodeDataUriFunction($this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "rkey", array()), array("extension" => "png", "background_color" => array("r" => 53, "g" => 26, "b" => 58, "a" => 0.1), "size" => 75, "padding" => 1)), "html", null, true);
        echo "\" />
</body>

</html>";
        
        $__internal_2231481867f3958be6e1e79d25c91b72133e4971efe83d5ab50b285537ed6353->leave($__internal_2231481867f3958be6e1e79d25c91b72133e4971efe83d5ab50b285537ed6353_prof);

        
        $__internal_23c4bace353aa0a79ba03b55ac2c0eb32d219d471bb8ab4b2a24d92fedfeab02->leave($__internal_23c4bace353aa0a79ba03b55ac2c0eb32d219d471bb8ab4b2a24d92fedfeab02_prof);

    }

    public function getTemplateName()
    {
        return "@EloboostedFrontoffice/participation/ticket.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>

<body>

<img src=\"{{ qrcode_data_uri(p.rkey, { extension: 'png', background_color: { r: 53, g: 26, b: 58, a: 0.1 } , size: 75 ,padding: 1}) }}\" />
</body>

</html>", "@EloboostedFrontoffice/participation/ticket.html.twig", "C:\\wamp64\\www\\testmerge\\src\\Eloboosted\\FrontofficeBundle\\Resources\\views\\participation\\ticket.html.twig");
    }
}
