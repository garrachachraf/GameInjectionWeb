<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_f37504d08c7b74ee457cf5ea54d812efaa6783e257332b4edcf650eed1145fee extends Twig_Template
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
        $__internal_81fdfa0eea485b990fae7619ea00dd4bafd7ee0ee947d7c6bee7a0a65172cece = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81fdfa0eea485b990fae7619ea00dd4bafd7ee0ee947d7c6bee7a0a65172cece->enter($__internal_81fdfa0eea485b990fae7619ea00dd4bafd7ee0ee947d7c6bee7a0a65172cece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_aaf2b1c02add5e3a043c415c630598357892b0b8688bfcabda8455fb42116b21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaf2b1c02add5e3a043c415c630598357892b0b8688bfcabda8455fb42116b21->enter($__internal_aaf2b1c02add5e3a043c415c630598357892b0b8688bfcabda8455fb42116b21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_81fdfa0eea485b990fae7619ea00dd4bafd7ee0ee947d7c6bee7a0a65172cece->leave($__internal_81fdfa0eea485b990fae7619ea00dd4bafd7ee0ee947d7c6bee7a0a65172cece_prof);

        
        $__internal_aaf2b1c02add5e3a043c415c630598357892b0b8688bfcabda8455fb42116b21->leave($__internal_aaf2b1c02add5e3a043c415c630598357892b0b8688bfcabda8455fb42116b21_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
