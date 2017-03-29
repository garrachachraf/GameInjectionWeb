<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_ead3a78587091091c1e56ad6eae00e3cd6a1499ba301584111001260754bbcb2 extends Twig_Template
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
        $__internal_bfe37476b32b8bce315c466cc6ff1a4a4e77b305f832819c4b011cda91c7695b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfe37476b32b8bce315c466cc6ff1a4a4e77b305f832819c4b011cda91c7695b->enter($__internal_bfe37476b32b8bce315c466cc6ff1a4a4e77b305f832819c4b011cda91c7695b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_6152985dd63a6ef75438ee5031befcd186392fbd2dba815e6863bf50213681f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6152985dd63a6ef75438ee5031befcd186392fbd2dba815e6863bf50213681f5->enter($__internal_6152985dd63a6ef75438ee5031befcd186392fbd2dba815e6863bf50213681f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_bfe37476b32b8bce315c466cc6ff1a4a4e77b305f832819c4b011cda91c7695b->leave($__internal_bfe37476b32b8bce315c466cc6ff1a4a4e77b305f832819c4b011cda91c7695b_prof);

        
        $__internal_6152985dd63a6ef75438ee5031befcd186392fbd2dba815e6863bf50213681f5->leave($__internal_6152985dd63a6ef75438ee5031befcd186392fbd2dba815e6863bf50213681f5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
