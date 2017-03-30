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
        $__internal_32ef491c07b29b1addca0181737ab3d16aaffcf4c2bc9376bc9059c6c308c57d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32ef491c07b29b1addca0181737ab3d16aaffcf4c2bc9376bc9059c6c308c57d->enter($__internal_32ef491c07b29b1addca0181737ab3d16aaffcf4c2bc9376bc9059c6c308c57d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_a8d2b15ca8ba93b5d5341322b8741db54b374289982d2397f6477903015a6509 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8d2b15ca8ba93b5d5341322b8741db54b374289982d2397f6477903015a6509->enter($__internal_a8d2b15ca8ba93b5d5341322b8741db54b374289982d2397f6477903015a6509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_32ef491c07b29b1addca0181737ab3d16aaffcf4c2bc9376bc9059c6c308c57d->leave($__internal_32ef491c07b29b1addca0181737ab3d16aaffcf4c2bc9376bc9059c6c308c57d_prof);

        
        $__internal_a8d2b15ca8ba93b5d5341322b8741db54b374289982d2397f6477903015a6509->leave($__internal_a8d2b15ca8ba93b5d5341322b8741db54b374289982d2397f6477903015a6509_prof);

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
