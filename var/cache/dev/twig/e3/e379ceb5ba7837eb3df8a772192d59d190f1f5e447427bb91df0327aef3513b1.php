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
        $__internal_cab2a6619ea04868b6a53b8565f166152d93c6d7776709807ecb20e31b195ba4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cab2a6619ea04868b6a53b8565f166152d93c6d7776709807ecb20e31b195ba4->enter($__internal_cab2a6619ea04868b6a53b8565f166152d93c6d7776709807ecb20e31b195ba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/participation/ticket.html.twig"));

        $__internal_881b2d3b6672726e8b4a2d06b90afb65338e01240143d9c8a728cab05e426095 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_881b2d3b6672726e8b4a2d06b90afb65338e01240143d9c8a728cab05e426095->enter($__internal_881b2d3b6672726e8b4a2d06b90afb65338e01240143d9c8a728cab05e426095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/participation/ticket.html.twig"));

        // line 1
        echo "<html>

<body>

<img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Endroid\Bundle\QrCodeBundle\Twig\Extension\QrCodeExtension')->qrcodeDataUriFunction($this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "rkey", array()), array("extension" => "png", "background_color" => array("r" => 53, "g" => 26, "b" => 58, "a" => 0.1), "size" => 75, "padding" => 1)), "html", null, true);
        echo "\" />
</body>

</html>";
        
        $__internal_cab2a6619ea04868b6a53b8565f166152d93c6d7776709807ecb20e31b195ba4->leave($__internal_cab2a6619ea04868b6a53b8565f166152d93c6d7776709807ecb20e31b195ba4_prof);

        
        $__internal_881b2d3b6672726e8b4a2d06b90afb65338e01240143d9c8a728cab05e426095->leave($__internal_881b2d3b6672726e8b4a2d06b90afb65338e01240143d9c8a728cab05e426095_prof);

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
