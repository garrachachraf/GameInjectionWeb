<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_50aa3faeea5b7bbd50232f2531753e49f209d586b203e1c9e0f666967472826d extends Twig_Template
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
        $__internal_e078c1be6b100ab3f28b8d0ef4e91eb23550ad68a86cb7bc5ac513a8555550f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e078c1be6b100ab3f28b8d0ef4e91eb23550ad68a86cb7bc5ac513a8555550f2->enter($__internal_e078c1be6b100ab3f28b8d0ef4e91eb23550ad68a86cb7bc5ac513a8555550f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_c4fcc723a9a2c975d281e4bd7109fc46a3f627c249deffb8d9bc1ddf2b68eec6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4fcc723a9a2c975d281e4bd7109fc46a3f627c249deffb8d9bc1ddf2b68eec6->enter($__internal_c4fcc723a9a2c975d281e4bd7109fc46a3f627c249deffb8d9bc1ddf2b68eec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_e078c1be6b100ab3f28b8d0ef4e91eb23550ad68a86cb7bc5ac513a8555550f2->leave($__internal_e078c1be6b100ab3f28b8d0ef4e91eb23550ad68a86cb7bc5ac513a8555550f2_prof);

        
        $__internal_c4fcc723a9a2c975d281e4bd7109fc46a3f627c249deffb8d9bc1ddf2b68eec6->leave($__internal_c4fcc723a9a2c975d281e4bd7109fc46a3f627c249deffb8d9bc1ddf2b68eec6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
