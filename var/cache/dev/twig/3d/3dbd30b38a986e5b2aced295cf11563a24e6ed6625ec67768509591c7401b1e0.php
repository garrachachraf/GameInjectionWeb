<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_62bacc5a0f9d3df79902b5e33fbbe19d48a29061758406b9db30598371b3c872 extends Twig_Template
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
        $__internal_8f01de96b5341fd544cfa9664ba924f1dcc8638e84245449748a2faff4a04906 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f01de96b5341fd544cfa9664ba924f1dcc8638e84245449748a2faff4a04906->enter($__internal_8f01de96b5341fd544cfa9664ba924f1dcc8638e84245449748a2faff4a04906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_9fa303d1c3af3d8a5393b64729cae93ad40bddbefabe0b72a5f929e903eea18c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fa303d1c3af3d8a5393b64729cae93ad40bddbefabe0b72a5f929e903eea18c->enter($__internal_9fa303d1c3af3d8a5393b64729cae93ad40bddbefabe0b72a5f929e903eea18c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_8f01de96b5341fd544cfa9664ba924f1dcc8638e84245449748a2faff4a04906->leave($__internal_8f01de96b5341fd544cfa9664ba924f1dcc8638e84245449748a2faff4a04906_prof);

        
        $__internal_9fa303d1c3af3d8a5393b64729cae93ad40bddbefabe0b72a5f929e903eea18c->leave($__internal_9fa303d1c3af3d8a5393b64729cae93ad40bddbefabe0b72a5f929e903eea18c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
