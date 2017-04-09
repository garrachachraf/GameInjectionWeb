<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_2a57a6db80c7a081032cfb13857c575042502c48d6c045cc7b86d34c5b43191a extends Twig_Template
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
        $__internal_df28e07356fbb5172c19c4eb665ee2386ba2978e02c1daeb7a08762856e6262d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df28e07356fbb5172c19c4eb665ee2386ba2978e02c1daeb7a08762856e6262d->enter($__internal_df28e07356fbb5172c19c4eb665ee2386ba2978e02c1daeb7a08762856e6262d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_149eb4927436268b77e108a692a813f73dd96a3b9ffa5c86674e8e8178ea47a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_149eb4927436268b77e108a692a813f73dd96a3b9ffa5c86674e8e8178ea47a6->enter($__internal_149eb4927436268b77e108a692a813f73dd96a3b9ffa5c86674e8e8178ea47a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_df28e07356fbb5172c19c4eb665ee2386ba2978e02c1daeb7a08762856e6262d->leave($__internal_df28e07356fbb5172c19c4eb665ee2386ba2978e02c1daeb7a08762856e6262d_prof);

        
        $__internal_149eb4927436268b77e108a692a813f73dd96a3b9ffa5c86674e8e8178ea47a6->leave($__internal_149eb4927436268b77e108a692a813f73dd96a3b9ffa5c86674e8e8178ea47a6_prof);

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
", "@Framework/Form/button_row.html.php", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
