<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_6b10b417d09dc2345f9a49e008fbeb8fe73d805c380c33f411002fa0eca8b262 extends Twig_Template
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
        $__internal_5fbea627f89a71e6f810d4ad1c3407f278776885d0c3b5653e7ee31d8c3d8979 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fbea627f89a71e6f810d4ad1c3407f278776885d0c3b5653e7ee31d8c3d8979->enter($__internal_5fbea627f89a71e6f810d4ad1c3407f278776885d0c3b5653e7ee31d8c3d8979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_e92a2e6c2311c703c1c9bf5735e65bd695ab08bdc7b723d16c3bdeb46dbf6855 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e92a2e6c2311c703c1c9bf5735e65bd695ab08bdc7b723d16c3bdeb46dbf6855->enter($__internal_e92a2e6c2311c703c1c9bf5735e65bd695ab08bdc7b723d16c3bdeb46dbf6855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_5fbea627f89a71e6f810d4ad1c3407f278776885d0c3b5653e7ee31d8c3d8979->leave($__internal_5fbea627f89a71e6f810d4ad1c3407f278776885d0c3b5653e7ee31d8c3d8979_prof);

        
        $__internal_e92a2e6c2311c703c1c9bf5735e65bd695ab08bdc7b723d16c3bdeb46dbf6855->leave($__internal_e92a2e6c2311c703c1c9bf5735e65bd695ab08bdc7b723d16c3bdeb46dbf6855_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
