<?php

/* EloboostedFrontofficeBundle:participation:ticket.html.twig */
class __TwigTemplate_9a0abc415f3685e3d7fed3c2d5729213ece1db2d4fb9656592b9967ce0bb48a8 extends Twig_Template
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
        $__internal_fa1241c719a59305b1c12c103c76f15aba6e9ffe2e0731cc299d1a541fb4a274 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa1241c719a59305b1c12c103c76f15aba6e9ffe2e0731cc299d1a541fb4a274->enter($__internal_fa1241c719a59305b1c12c103c76f15aba6e9ffe2e0731cc299d1a541fb4a274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:participation:ticket.html.twig"));

        $__internal_01db2795e39e420e4eca40cea94bc91ac9e8b9419deb32c668109b33a7e3b6af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01db2795e39e420e4eca40cea94bc91ac9e8b9419deb32c668109b33a7e3b6af->enter($__internal_01db2795e39e420e4eca40cea94bc91ac9e8b9419deb32c668109b33a7e3b6af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:participation:ticket.html.twig"));

        // line 1
        echo "<html>

<body>

<img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Endroid\Bundle\QrCodeBundle\Twig\Extension\QrCodeExtension')->qrcodeDataUriFunction($this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "rkey", array()), array("extension" => "png", "background_color" => array("r" => 53, "g" => 26, "b" => 58, "a" => 0.1), "size" => 75, "padding" => 1)), "html", null, true);
        echo "\" />
</body>

</html>";
        
        $__internal_fa1241c719a59305b1c12c103c76f15aba6e9ffe2e0731cc299d1a541fb4a274->leave($__internal_fa1241c719a59305b1c12c103c76f15aba6e9ffe2e0731cc299d1a541fb4a274_prof);

        
        $__internal_01db2795e39e420e4eca40cea94bc91ac9e8b9419deb32c668109b33a7e3b6af->leave($__internal_01db2795e39e420e4eca40cea94bc91ac9e8b9419deb32c668109b33a7e3b6af_prof);

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

<img src=\"{{ qrcode_data_uri(p.rkey, { extension: 'png', background_color: { r: 53, g: 26, b: 58, a: 0.1 } , size: 75 ,padding: 1}) }}\" />
</body>

</html>", "EloboostedFrontofficeBundle:participation:ticket.html.twig", "C:\\wamp64\\www\\testmerge\\src\\Eloboosted\\FrontofficeBundle/Resources/views/participation/ticket.html.twig");
    }
}
