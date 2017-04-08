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
        $__internal_a996cdc378f465c22e7f1273028d0c39a5cb1cc0d311e9cd36c6247301bc7665 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a996cdc378f465c22e7f1273028d0c39a5cb1cc0d311e9cd36c6247301bc7665->enter($__internal_a996cdc378f465c22e7f1273028d0c39a5cb1cc0d311e9cd36c6247301bc7665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:participation:ticket.html.twig"));

        $__internal_9cbe7a017b4dc67265eee3dfc61ce986131dbf7d90694b50ac0957d9e0bfaf41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cbe7a017b4dc67265eee3dfc61ce986131dbf7d90694b50ac0957d9e0bfaf41->enter($__internal_9cbe7a017b4dc67265eee3dfc61ce986131dbf7d90694b50ac0957d9e0bfaf41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:participation:ticket.html.twig"));

        // line 1
        echo "<html>

<body>

<img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Endroid\Bundle\QrCodeBundle\Twig\Extension\QrCodeExtension')->qrcodeDataUriFunction($this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "rkey", array()), array("extension" => "png", "background_color" => array("r" => 53, "g" => 26, "b" => 58, "a" => 0.1), "size" => 75, "padding" => 1)), "html", null, true);
        echo "\" />
</body>

</html>";
        
        $__internal_a996cdc378f465c22e7f1273028d0c39a5cb1cc0d311e9cd36c6247301bc7665->leave($__internal_a996cdc378f465c22e7f1273028d0c39a5cb1cc0d311e9cd36c6247301bc7665_prof);

        
        $__internal_9cbe7a017b4dc67265eee3dfc61ce986131dbf7d90694b50ac0957d9e0bfaf41->leave($__internal_9cbe7a017b4dc67265eee3dfc61ce986131dbf7d90694b50ac0957d9e0bfaf41_prof);

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
