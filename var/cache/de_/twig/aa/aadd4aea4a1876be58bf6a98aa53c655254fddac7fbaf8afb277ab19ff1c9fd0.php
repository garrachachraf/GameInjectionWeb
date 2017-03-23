<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_bbca4da8d2a18958e352d3587d84ed75c5d17dfb5e8897e3331ecaa8f83ed884 extends Twig_Template
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
        $__internal_850e7ea3732e33aaf1be08fc5deb546a5e703ca8fc70c079d360c3bd637f03bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_850e7ea3732e33aaf1be08fc5deb546a5e703ca8fc70c079d360c3bd637f03bc->enter($__internal_850e7ea3732e33aaf1be08fc5deb546a5e703ca8fc70c079d360c3bd637f03bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_53ebd11d6aeedfed3ae283262d6015f81bb190f4ef05ef740bc7db82569b4969 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53ebd11d6aeedfed3ae283262d6015f81bb190f4ef05ef740bc7db82569b4969->enter($__internal_53ebd11d6aeedfed3ae283262d6015f81bb190f4ef05ef740bc7db82569b4969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_850e7ea3732e33aaf1be08fc5deb546a5e703ca8fc70c079d360c3bd637f03bc->leave($__internal_850e7ea3732e33aaf1be08fc5deb546a5e703ca8fc70c079d360c3bd637f03bc_prof);

        
        $__internal_53ebd11d6aeedfed3ae283262d6015f81bb190f4ef05ef740bc7db82569b4969->leave($__internal_53ebd11d6aeedfed3ae283262d6015f81bb190f4ef05ef740bc7db82569b4969_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
