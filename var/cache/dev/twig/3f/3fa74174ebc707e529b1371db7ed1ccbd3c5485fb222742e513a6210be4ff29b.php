<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_2c29634760b17543e9ccd96df4246758ace5a478f063510b15e80269e5d87de4 extends Twig_Template
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
        $__internal_63a2db79e8b38220ef48f107452688260037d6a3205e407e8bdcb19cd2bbe245 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63a2db79e8b38220ef48f107452688260037d6a3205e407e8bdcb19cd2bbe245->enter($__internal_63a2db79e8b38220ef48f107452688260037d6a3205e407e8bdcb19cd2bbe245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_86f887b904295081755f3141319f4034320d6657eac856e94c6cf11862aac7cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86f887b904295081755f3141319f4034320d6657eac856e94c6cf11862aac7cb->enter($__internal_86f887b904295081755f3141319f4034320d6657eac856e94c6cf11862aac7cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_63a2db79e8b38220ef48f107452688260037d6a3205e407e8bdcb19cd2bbe245->leave($__internal_63a2db79e8b38220ef48f107452688260037d6a3205e407e8bdcb19cd2bbe245_prof);

        
        $__internal_86f887b904295081755f3141319f4034320d6657eac856e94c6cf11862aac7cb->leave($__internal_86f887b904295081755f3141319f4034320d6657eac856e94c6cf11862aac7cb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Library/WebServer/Documents/sprintweb3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
