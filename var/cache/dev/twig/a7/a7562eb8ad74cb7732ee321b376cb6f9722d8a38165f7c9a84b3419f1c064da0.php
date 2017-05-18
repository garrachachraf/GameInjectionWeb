<?php

/* EloboostedFrontofficeBundle:participation:ticket.html.twig */
class __TwigTemplate_946c1eddbec1498c0f95f14c28c07c79a3d37962d2137e6a202a0397a914fe35 extends Twig_Template
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
        $__internal_9bc8a4d8c0ea0b992e1524362ecf41acd04d4e5269dce70f6a56675ebc78a5a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bc8a4d8c0ea0b992e1524362ecf41acd04d4e5269dce70f6a56675ebc78a5a9->enter($__internal_9bc8a4d8c0ea0b992e1524362ecf41acd04d4e5269dce70f6a56675ebc78a5a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:participation:ticket.html.twig"));

        $__internal_3bd108a9f721305faf62cf03a915183796503043fc8263cd9f996cebbf593721 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bd108a9f721305faf62cf03a915183796503043fc8263cd9f996cebbf593721->enter($__internal_3bd108a9f721305faf62cf03a915183796503043fc8263cd9f996cebbf593721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:participation:ticket.html.twig"));

        // line 1
        echo "<html>

<body>

<img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Endroid\Bundle\QrCodeBundle\Twig\Extension\QrCodeExtension')->qrcodeDataUriFunction($this->getAttribute(($context["p"] ?? $this->getContext($context, "p")), "rkey", array()), array("extension" => "png", "background_color" => array("r" => 255, "g" => 255, "b" => 255, "a" => 0.1), "size" => 75, "padding" => 1)), "html", null, true);
        echo "\" />
</body>

</html>";
        
        $__internal_9bc8a4d8c0ea0b992e1524362ecf41acd04d4e5269dce70f6a56675ebc78a5a9->leave($__internal_9bc8a4d8c0ea0b992e1524362ecf41acd04d4e5269dce70f6a56675ebc78a5a9_prof);

        
        $__internal_3bd108a9f721305faf62cf03a915183796503043fc8263cd9f996cebbf593721->leave($__internal_3bd108a9f721305faf62cf03a915183796503043fc8263cd9f996cebbf593721_prof);

    }

    public function getTemplateName()
    {
        return "EloboostedFrontofficeBundle:participation:ticket.html.twig";
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

<img src=\"{{ qrcode_data_uri(p.rkey, { extension: 'png', background_color: { r: 255, g: 255, b: 255, a: 0.1 } , size: 75 ,padding: 1}) }}\" />
</body>

</html>", "EloboostedFrontofficeBundle:participation:ticket.html.twig", "/Applications/MAMP/htdocs/nn/src/Eloboosted/FrontofficeBundle/Resources/views/participation/ticket.html.twig");
    }
}
