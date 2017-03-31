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
        $__internal_b9ebcb4c26772c0f22bdcd82dfbf4bdb525f7341bff3856f940a57c51b78f80e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9ebcb4c26772c0f22bdcd82dfbf4bdb525f7341bff3856f940a57c51b78f80e->enter($__internal_b9ebcb4c26772c0f22bdcd82dfbf4bdb525f7341bff3856f940a57c51b78f80e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_4269141f8301877776d6e2d4ccde0ac3377072b1be49b133d4ae2871e3c863e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4269141f8301877776d6e2d4ccde0ac3377072b1be49b133d4ae2871e3c863e5->enter($__internal_4269141f8301877776d6e2d4ccde0ac3377072b1be49b133d4ae2871e3c863e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_b9ebcb4c26772c0f22bdcd82dfbf4bdb525f7341bff3856f940a57c51b78f80e->leave($__internal_b9ebcb4c26772c0f22bdcd82dfbf4bdb525f7341bff3856f940a57c51b78f80e_prof);

        
        $__internal_4269141f8301877776d6e2d4ccde0ac3377072b1be49b133d4ae2871e3c863e5->leave($__internal_4269141f8301877776d6e2d4ccde0ac3377072b1be49b133d4ae2871e3c863e5_prof);

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
