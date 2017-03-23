<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_42ee6093573438f476bb43fe9c125525b115487e4e408bc0c9392570c84941e2 extends Twig_Template
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
        $__internal_8d0330182c65ec5a06f8d0aece6437e441238455998b5d2b753c0c5204824479 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d0330182c65ec5a06f8d0aece6437e441238455998b5d2b753c0c5204824479->enter($__internal_8d0330182c65ec5a06f8d0aece6437e441238455998b5d2b753c0c5204824479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_13dace90e7e40865dd64abe8892a6e450a502e6d41c46c7999cf717b5f61bde1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13dace90e7e40865dd64abe8892a6e450a502e6d41c46c7999cf717b5f61bde1->enter($__internal_13dace90e7e40865dd64abe8892a6e450a502e6d41c46c7999cf717b5f61bde1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_8d0330182c65ec5a06f8d0aece6437e441238455998b5d2b753c0c5204824479->leave($__internal_8d0330182c65ec5a06f8d0aece6437e441238455998b5d2b753c0c5204824479_prof);

        
        $__internal_13dace90e7e40865dd64abe8892a6e450a502e6d41c46c7999cf717b5f61bde1->leave($__internal_13dace90e7e40865dd64abe8892a6e450a502e6d41c46c7999cf717b5f61bde1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
