<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_e42e7b521ba07c11a886cc42ae60b0c3a31a3be3f408fa423da136b71101a30c extends Twig_Template
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
        $__internal_884c77d440c4271e8e9133967c380d4f268551b2796fc62822b48e04f844c645 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_884c77d440c4271e8e9133967c380d4f268551b2796fc62822b48e04f844c645->enter($__internal_884c77d440c4271e8e9133967c380d4f268551b2796fc62822b48e04f844c645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_b0f225990e1f4dfdfb07a5328d68db4bffa7cad669ff077d9ac399aa7b506143 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0f225990e1f4dfdfb07a5328d68db4bffa7cad669ff077d9ac399aa7b506143->enter($__internal_b0f225990e1f4dfdfb07a5328d68db4bffa7cad669ff077d9ac399aa7b506143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_884c77d440c4271e8e9133967c380d4f268551b2796fc62822b48e04f844c645->leave($__internal_884c77d440c4271e8e9133967c380d4f268551b2796fc62822b48e04f844c645_prof);

        
        $__internal_b0f225990e1f4dfdfb07a5328d68db4bffa7cad669ff077d9ac399aa7b506143->leave($__internal_b0f225990e1f4dfdfb07a5328d68db4bffa7cad669ff077d9ac399aa7b506143_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
