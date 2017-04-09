<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_585a57a251235b2ecda471c17c7ca0009b0469eb2ee56cad319d4949aa0865f3 extends Twig_Template
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
        $__internal_1bc2fc8bf84ad59124c739f81b14055d1877eeb0d99d10fe7a18c765d85dd5cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bc2fc8bf84ad59124c739f81b14055d1877eeb0d99d10fe7a18c765d85dd5cb->enter($__internal_1bc2fc8bf84ad59124c739f81b14055d1877eeb0d99d10fe7a18c765d85dd5cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_f139c00b8e364e2da168b404b6e5a57eff6dce4aa6a46fba90f8ac0fec11c1cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f139c00b8e364e2da168b404b6e5a57eff6dce4aa6a46fba90f8ac0fec11c1cb->enter($__internal_f139c00b8e364e2da168b404b6e5a57eff6dce4aa6a46fba90f8ac0fec11c1cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_1bc2fc8bf84ad59124c739f81b14055d1877eeb0d99d10fe7a18c765d85dd5cb->leave($__internal_1bc2fc8bf84ad59124c739f81b14055d1877eeb0d99d10fe7a18c765d85dd5cb_prof);

        
        $__internal_f139c00b8e364e2da168b404b6e5a57eff6dce4aa6a46fba90f8ac0fec11c1cb->leave($__internal_f139c00b8e364e2da168b404b6e5a57eff6dce4aa6a46fba90f8ac0fec11c1cb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
