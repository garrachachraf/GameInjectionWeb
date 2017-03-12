<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_badaea7f31119e98727051b89aff003fa57d9ac1331a446306d01003014d9c3b extends Twig_Template
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
        $__internal_b1afe4773df8ac3eb3973057afd638297ebee1f551f98e25cd48811944019b76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1afe4773df8ac3eb3973057afd638297ebee1f551f98e25cd48811944019b76->enter($__internal_b1afe4773df8ac3eb3973057afd638297ebee1f551f98e25cd48811944019b76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_7e6180b7129431857996ce9cb3507459895a5bfa5ae67f2202663817360694df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e6180b7129431857996ce9cb3507459895a5bfa5ae67f2202663817360694df->enter($__internal_7e6180b7129431857996ce9cb3507459895a5bfa5ae67f2202663817360694df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_b1afe4773df8ac3eb3973057afd638297ebee1f551f98e25cd48811944019b76->leave($__internal_b1afe4773df8ac3eb3973057afd638297ebee1f551f98e25cd48811944019b76_prof);

        
        $__internal_7e6180b7129431857996ce9cb3507459895a5bfa5ae67f2202663817360694df->leave($__internal_7e6180b7129431857996ce9cb3507459895a5bfa5ae67f2202663817360694df_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Library/WebServer/Documents/sprintweb3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
